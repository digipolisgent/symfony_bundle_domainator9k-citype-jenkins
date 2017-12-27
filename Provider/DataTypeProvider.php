<?php


namespace DigipolisGent\Domainator9k\CiTypes\JenkinsBundle\Provider;


use DigipolisGent\SettingBundle\Provider\DataTypeProviderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Class DataTypeProvider
 * @package DigipolisGent\Domainator9k\CoreBundle\Provider
 */
class DataTypeProvider implements DataTypeProviderInterface
{

    /**
     * @return array
     */
    public function getDataTypes()
    {
        return [
            [
                'key' => 'jenkins_job_uri',
                'label' => 'Jenkins job uri',
                'required' => true,
                'field_type' => 'string',
                'entity_types' => ['application_environment'],
            ],
            [
                'key' => 'jenkins_server',
                'label' => 'Jenkins server',
                'required' => true,
                'field_type' => 'jenkins_server_choice',
                'entity_types' => ['application_environment'],
            ],
            [
                'key' => 'jenkins_job',
                'label' => 'Jenkins job',
                'required' => true,
                'field_type' => 'jenkins_job',
                'entity_types' => ['application_type_environment','application_environment'],
            ],
        ];
    }
}