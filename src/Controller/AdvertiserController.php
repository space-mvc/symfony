<?php

namespace App\Controller;

use App\Entity\Advertiser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class AdvertiserController
 *
 * @package App\Controller
 */
class AdvertiserController extends AbstractController
{
    /**
     * getAdvertisers.
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getAdvertisers()
    {
        $results = $this->getDoctrine()
            ->getRepository(Advertiser::class)
            ->findAll();

        return $this->json([
            'data' => $results
        ]);
    }

    /**
     * getAdvertiser.
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getAdvertiser($id)
    {
        $result = $this->getDoctrine()
            ->getRepository(Advertiser::class)
            ->find($id);

        if (!$result) {
            return $this->json([
                'exception' => '404 - Not Found'
            ]);
        }

        return $this->json([
            'data' => $result
        ]);
    }

    /**
     * createAdvertiser.
     *
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function createAdvertiser(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $data = !empty($request->request->all()) ? $request->request->all() : $request->query->all();

        $result = new Advertiser();
        $result->setFirstName(!empty($data['first_name']) ? $data['first_name'] : null);
        $result->setLastName(!empty($data['last_name']) ? $data['last_name'] : null);
        $result->setCompanyName(!empty($data['company_name']) ? $data['company_name'] : null);
        $result->setCompanyUrl(!empty($data['company_url']) ? $data['company_url'] : null);
        $result->setCompanyEmail(!empty($data['company_email']) ? $data['company_email'] : null);
        $result->setCompanyTelephone(!empty($data['company_telephone']) ? $data['company_telephone'] : null);
        $result->setEnabled(!empty($data['enabled']) ? $data['enabled'] : null);

        $entityManager->persist($result);
        $entityManager->flush();

        return $this->json([
            'data' => true
        ]);
    }

    /**
     * updateAdvertiser.
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function updateAdvertiser($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        /** @var Advertiser $result */
        $result = $entityManager->getRepository(Advertiser::class)->find($id);

        if (!$result) {
            return $this->json([
                'exception' => '404 - Not Found'
            ]);
        }

        $data = !empty($request->request->all()) ? $request->request->all() : $request->query->all();

        if(!empty($data['first_name'])) {
            $result->setFirstName($data['first_name']);
        }

        if(!empty($data['last_name'])) {
            $result->setLastName($data['last_name']);
        }

        if(!empty($data['company_name'])) {
            $result->setCompanyName($data['company_name']);
        }

        if(!empty($data['company_url'])) {
            $result->setCompanyUrl($data['company_url']);
        }

        if(!empty($data['company_email'])) {
            $result->setCompanyEmail($data['company_email']);
        }

        if(!empty($data['company_telephone'])) {
            $result->setCompanyTelephone($data['company_telephone']);
        }

        if(!empty($data['enabled'])) {
            $result->setEnabled($data['enabled']);
        }

        $entityManager->flush();

        return $this->json([
            'data' => $result
        ]);
    }

    /**
     * deleteAdvertiser.
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteAdvertiser($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository(Advertiser::class)->find($id);

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
}