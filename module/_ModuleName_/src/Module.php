<?php

/**
 * @copyright   (c) 2017, _ModuleName_
 * @license     http://customlicense CustomLicense
 * @author      Jakob Schumann <schumann@vrok.de>
 */

namespace _ModuleName_;

use Vrok\SlmQueue\JobProviderInterface;
use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\FormElementProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

/**
 * Module initialization.
 */
class Module implements
    BootstrapListenerInterface,
    ConfigProviderInterface,
    ControllerProviderInterface,
    FormElementProviderInterface,
    JobProviderInterface,
    ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        return include __DIR__.'/../config/module.config.php';
    }

    /**
     * Return additional serviceManager config with closures that should not be
     * in the config files to allow caching of the complete configuration.
     *
     * @return array
     * @todo alle controller auf ihre dependencies prüfen und ggf direct injecten
     */
    public function getControllerConfig()
    {
        return [
            'factories' => [
                /*'_ModuleName_\Controller\Api' => function ($sm) {
                    return new Controller\ApiController($sm);
                },*/
            ],
        ];
    }

    /**
     * Return additional serviceManager config with closures that should not be
     * in the config files to allow caching of the complete configuration.
     *
     * @return array
     */
    public function getFormElementConfig()
    {
        return [
            'factories' => [
/*                '_ModuleName_\Form\Article' => function ($sm) {
                    $form = new Form\Article();
                    $form->setEntityManager($sm->get('Doctrine\ORM\EntityManager'));
                    $form->setTranslator($sm->get('MvcTranslator'));
                    return $form;
                },*/
            ],
        ];
    }

    /**
     * Retrieve factories for SlmQueue jobs.
     *
     * @return array
     */
    public function getJobManagerConfig()
    {
        return [
            'factories' => [
                /*'_ModuleName_\Jobs\CheckDeadlines' => function ($sl) {
                    $es = $sl->get(\Vrok\Service\Email::class);
                    $ms = $sl->get(\Vrok\Service\Meta::class);
                    $ph = $sl->get('ViewHelperManager')->get('partial');
                    return new Jobs\CheckDeadlines($es, $ms, $ph);
                },*/
            ],
        ];
    }

    /**
     * Return additional serviceManager config with closures that should not be
     * in the config files to allow caching of the complete configuration.
     *
     * @return array
     */
    public function getServiceConfig()
    {
        return [
            'factories' => [
                /*'_ModuleName_\Service\DataManager' => function ($sm) {
                    return new Service\DataManager($sm);
                },*/
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function onBootstrap(EventInterface $e)
    {
        /* @var $e \Zend\Mvc\MvcEvent */

        // wird von Formularen verwendet um die Defaults für den DatetimePicker zu setzen
        // wird vom DateTimePicker verwendet um das im Widget gewählte Datum ins <input>
        // zu schreiben
        // wird vom Validator verwendet um die Gültigkeit zu prüfen und ggf Start+EndDatum
        // zu vergleichen -> konfigurierbar machen. Ggf anhand der Locale bestimmen.
        define('DATETIME_FORMAT', 'd.m.Y H:i');
        define('DATE_FORMAT', 'd.m.Y');
    }
}
