<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // _twig_error_test
        if (preg_match('#^/(?P<_locale>en)/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',  '_locale' => 'en',));
        }

        // article_create
        if ($pathinfo === '/article/create') {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::create',  '_route' => 'article_create',);
        }

        // explore_posts
        if ($pathinfo === '/explore') {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::explorePosts',  '_route' => 'explore_posts',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/article')) {
                // article_view
                if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_view')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::viewArticle',));
                }

                // article_edit
                if (0 === strpos($pathinfo, '/article/edit') && preg_match('#^/article/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::editArticle',));
                }

                // article_delete
                if (0 === strpos($pathinfo, '/article/delete') && preg_match('#^/article/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::delete',));
                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                // admin_articles
                if ($pathinfo === '/admin/articles') {
                    return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::adminArticlesAction',  '_route' => 'admin_articles',);
                }

                // admin_categories
                if ($pathinfo === '/admin/categories') {
                    return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\CategoryController::categoryListAction',  '_route' => 'admin_categories',);
                }

            }

        }

        // blog_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_blog_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_index');
            }

            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\HomeController::indexAction',  '_route' => 'blog_index',);
        }
        not_blog_index:

        if (0 === strpos($pathinfo, '/pages')) {
            // page_create
            if ($pathinfo === '/pages/create') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\PagesController::pageCreate',  '_route' => 'page_create',);
            }

            // page_view
            if (preg_match('#^/pages/(?P<id>[^/\\-]++)\\-(?P<src>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_view')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\PagesController::pageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/question')) {
            // question_create
            if ($pathinfo === '/question/create') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\QuestionController::create',  '_route' => 'question_create',);
            }

            // question_view
            if (preg_match('#^/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_view')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\QuestionController::viewArticle',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
            }

            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
            }

        }

        // user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
        }

        // user_profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::profileAction',  '_route' => 'user_profile',);
        }

        // list_articles
        if ($pathinfo === '/list') {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::listArticlesAction',  '_route' => 'list_articles',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // profile_see
            if (preg_match('#^/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_see')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::profileViewAction',));
            }

            // newuser_edit
            if (rtrim($pathinfo, '/') === '/profile') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'newuser_edit');
                }

                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::editArticle',  '_route' => 'newuser_edit',);
            }

            // profile_edit
            if (rtrim($pathinfo, '/') === '/profile/edit') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'profile_edit');
                }

                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::editProfile',  '_route' => 'profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_users
            if ($pathinfo === '/admin/users') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::adminUsersAction',  '_route' => 'admin_users',);
            }

            // admin_user_edit
            if (0 === strpos($pathinfo, '/admin/edit/user') && preg_match('#^/admin/edit/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::adminUserEditAction',));
            }

            // admin_user_delete
            if (0 === strpos($pathinfo, '/admin/delete/user') && preg_match('#^/admin/delete/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::adminUserDeleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
