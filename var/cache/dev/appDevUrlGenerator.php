<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => '_locale',    1 => 'code',    2 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',    '_locale' => 'en',  ),  2 =>   array (    'code' => '\\d+',    '_locale' => 'en',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'en',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'explore_posts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::explorePosts',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/explore',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::viewArticle',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::editArticle',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/article/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/article/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_articles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::adminArticlesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_categories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\CategoryController::categoryListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\PagesController::pageCreate',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pages/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_view' => array (  0 =>   array (    0 => 'id',    1 => 'src',  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\PagesController::pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '-',      2 => '[^/]++',      3 => 'src',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\-]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/pages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\QuestionController::create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/question/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\QuestionController::viewArticle',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/question',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_articles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::listArticlesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile_see' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::profileViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newuser_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::editArticle',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::editProfile',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::adminUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::adminUserEditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/edit/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::adminUserDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/delete/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
