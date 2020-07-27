<?php

namespace App\Controller;

use App\Entity\Publisher;
use App\Entity\Website;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class WebsiteController
 * @package App\Controller
 */
class WebsiteController extends AbstractController
{
    /**
     * getWebsites.
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getWebsites()
    {
        $results = $this->getDoctrine()
            ->getRepository(Website::class)
            ->findAll();

        $results = $this->formatResults($results);

        return $this->json([
            'data' => $results
        ]);
    }

    /**
     * getWebsite.
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getWebsite($id)
    {
        $result = $this->getDoctrine()
            ->getRepository(Website::class)
            ->find($id);

        if (!$result) {
            return $this->json([
                'exception' => '404 - Not Found'
            ]);
        }

        $result = $this->formatResult($result);

        return $this->json([
            'data' => $result
        ]);
    }

    /**
     * createWebsite.
     *
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function createWebsite(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $data = !empty($request->request->all()) ? $request->request->all() : $request->query->all();

        $publisherId = !empty($data['publisher_id']) ? $data['publisher_id'] : null;
        $publisher = $this->getDoctrine()
            ->getRepository(Publisher::class)
            ->find($publisherId);

        if (!$publisher) {
            return $this->json([
                'exception' => '404 - Publisher Not Found'
            ]);
        }

        $result = new Website();
        $result->setPublisher($publisher);
        $result->setTitle(!empty($data['title']) ? $data['title'] : null);
        $result->setUrl(!empty($data['url']) ? $data['url'] : null);
        $result->setEnabled(!empty($data['enabled']) ? $data['enabled'] : null);

        $entityManager->persist($result);
        $entityManager->flush();

        return $this->json([
            'data' => true
        ]);
    }

    /**
     * updateWebsite.
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function updateWebsite($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        /** @var Website $result */
        $result = $entityManager->getRepository(Website::class)->find($id);

        if (!$result) {
            return $this->json([
                'exception' => '404 - Not Found'
            ]);
        }

        $data = !empty($request->request->all()) ? $request->request->all() : $request->query->all();

        $publisherId = !empty($data['publisher_id']) ? $data['publisher_id'] : null;
        $publisher = $this->getDoctrine()
            ->getRepository(Publisher::class)
            ->find($publisherId);

        if (!$publisher) {
            return $this->json([
                'exception' => '404 - Publisher Not Found'
            ]);
        }

        if(!empty($data['publisher_id'])) {
            $result->setPublisher($publisher);
        }

        if(!empty($data['title'])) {
            $result->setTitle($data['title']);
        }

        if(!empty($data['url'])) {
            $result->setUrl($data['url']);
        }

        if(!empty($data['enabled'])) {
            $result->setEnabled($data['enabled']);
        }

        $entityManager->flush();

        $result = $this->formatResult($result);

        return $this->json([
            'data' => $result
        ]);
    }

    /**
     * deleteWebsite.
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteWebsite($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository(Website::class)->find($id);

        if (!$result) {
            return $this->json([
                'exception' => '404 - Not Found'
            ]);
        }

        $entityManager->remove($result);
        $entityManager->flush();

        return $this->json([
            'data' => true
        ]);
    }

    /**
     * formatResults.
     *
     * @param $results
     */
    public function formatResults($results)
    {
        $data = [];
        if(!empty($results)) {
            foreach($results as $result) {

                $publisherId = !empty($result->getPublisher()) ? $result->getPublisher()->getId() : null;

                $data[] = [
                    'id' => $result->getId(),
                    'publisher_id' => $publisherId,
                    'title' => $result->getTitle(),
                    'url' => $result->getUrl(),
                    'enabled' => $result->getEnabled()
                ];
            }
        }
        return $data;
    }

    /**
     * formatResult.
     *
     * @param $result
     */
    public function formatResult($result)
    {
        $data = [];
        if(!empty($result)) {

            $publisherId = !empty($result->getPublisher()) ? $result->getPublisher()->getId() : null;

            $data[] = [
                'id' => $result->getId(),
                'publisher_id' => $publisherId,
                'title' => $result->getTitle(),
                'url' => $result->getUrl(),
                'enabled' => $result->getEnabled()
            ];
        }
        return $data;
    }

}