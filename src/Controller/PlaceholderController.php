<?php

namespace App\Controller;

use App\Entity\Placeholder;
use App\Entity\Website;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class PlaceholderController
 * @package App\Controller
 */
class PlaceholderController extends AbstractController
{
    /**
     * getPlaceholders.
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getPlaceholders()
    {
        $results = $this->getDoctrine()
            ->getRepository(Placeholder::class)
            ->findAll();

        $results = $this->formatResults($results);

        return $this->json([
            'data' => $results
        ]);
    }

    /**
     * getPlaceholder.
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getPlaceholder($id)
    {
        $result = $this->getDoctrine()
            ->getRepository(Placeholder::class)
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
     * createPlaceholder.
     *
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function createPlaceholder(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $data = !empty($request->request->all()) ? $request->request->all() : $request->query->all();

        $websiteId = !empty($data['website_id']) ? $data['website_id'] : null;
        $website = $this->getDoctrine()
            ->getRepository(Website::class)
            ->find($websiteId);

        if (!$website) {
            return $this->json([
                'exception' => '404 - Website Not Found'
            ]);
        }

        $result = new Placeholder();
        $result->setWebsite($website);
        $result->setTitle(!empty($data['title']) ? $data['title'] : null);
        $result->setWidth(!empty($data['width']) ? $data['width'] : null);
        $result->setHeight(!empty($data['height']) ? $data['height'] : null);
        $result->setEnabled(!empty($data['enabled']) ? $data['enabled'] : null);

        $entityManager->persist($result);
        $entityManager->flush();

        return $this->json([
            'data' => true
        ]);
    }

    /**
     * updatePlaceholder.
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function updatePlaceholder($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        /** @var Placeholder $result */
        $result = $entityManager->getRepository(Placeholder::class)->find($id);

        if (!$result) {
            return $this->json([
                'exception' => '404 - Not Found'
            ]);
        }

        $data = !empty($request->request->all()) ? $request->request->all() : $request->query->all();

        $websiteId = !empty($data['website_id']) ? $data['website_id'] : null;
        $website = $this->getDoctrine()
            ->getRepository(Website::class)
            ->find($websiteId);

        if (!$website) {
            return $this->json([
                'exception' => '404 - Website Not Found'
            ]);
        }

        if(!empty($data['website_id'])) {
            $result->setWebsite($website);
        }

        if(!empty($data['title'])) {
            $result->setTitle($data['title']);
        }

        if(!empty($data['width'])) {
            $result->setWidth($data['width']);
        }

        if(!empty($data['height'])) {
            $result->setHeight($data['height']);
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
     * deletePlaceholder.
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deletePlaceholder($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository(Placeholder::class)->find($id);

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

                $websiteId = !empty($result->getWebsite()) ? $result->getWebsite()->getId() : null;

                $data[] = [
                    'id' => $result->getId(),
                    'website_id' => $websiteId,
                    'title' => $result->getTitle(),
                    'width' => $result->getWidth(),
                    'height' => $result->getHeight(),
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

            $websiteId = !empty($result->getWebsite()) ? $result->getWebsite()->getId() : null;

            $data[] = [
                'id' => $result->getId(),
                'website_id' => $websiteId,
                'title' => $result->getTitle(),
                'width' => $result->getWidth(),
                'height' => $result->getHeight(),
                'enabled' => $result->getEnabled()
            ];
        }
        return $data;
    }

}