<?php


namespace App\Controller;


class FilesController
{
    /**
     * @Route("/")
     */
    public function requireIndexHtml()
    {
        require_once 'Templates/index.html';
    }

    /**
     * @Route("/blog")
     */
    public function requireBlog()
    {
        require_once 'Templates/blog-full.html';
    }

    /**
     * @Route("/services")
     */
    public function requireServices()
    {
        require_once 'Templates/services.html';
    }

    /**
     * @Route("/team")
     */
    public function requireTeam()
    {
        require_once 'Templates/team.html';
    }

    /**
     * @Route("/contact-us")
     */
    public function requireContacts()
    {
        require_once 'Templates/contact.html';
    }

}