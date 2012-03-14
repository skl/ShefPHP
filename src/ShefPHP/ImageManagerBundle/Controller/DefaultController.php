<?php
/**
 * Default Contoller File
 *
 * @package    ShefPHP
 * @subpackage ImageManagerBundle
 * @author     Ben Selby <benmatselby@gmail.com>
 */

namespace ShefPHP\ImageManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Default Controller
 *
 * Default controller for the ShefPHP Bundle
 *
 * @package    ShefPHP
 * @subpackage ImageManagerBundle
 * @author     Ben Selby <benmatselby@gmail.com>
 */
class DefaultController extends Controller
{
    /**
     * Index Action
     *
     * @param string $name The name to be displaued
     *
     * @Route("/hello/{name}")
     * @Template()
     *
     * @return void
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * Hello action
     *
     * @param Request $request The request object for the action
     *
     * @Route("/")
     * @Template
     *
     * @return void
     */
    public function helloAction(Request $request)
    {
        $name = $request->get('name');
        return array('name' => $name);
    }
}
