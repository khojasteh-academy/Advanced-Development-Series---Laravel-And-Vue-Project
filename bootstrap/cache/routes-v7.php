<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/admins/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0UmY7ag2XIyl1sWj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/admins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admins.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/dashboardStats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VCKt95euzUWz5lAz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin-auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wVsO1tpiFYcbeXVV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/signin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U7NPyc5m7AJf9GJB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I9yEGKo1pPKbPoXX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'comments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/authComments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'authComments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/blog_comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog_comments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/multiple/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kn1cVuNfHq1TnxmR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/options' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MuGNfFrUVJvgAIjS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/options/pageSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fTo8xHzXEj2ADOQJ',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/options/authSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NAkdhXC15dgKnXbr',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/options/postSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wVzlXhZ8PY8dHQHt',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jFCbnm8pRVeRp9vP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/core' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LlmPzKPBE70UUmnl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/footers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'footers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/removeFooters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1qtjYdLbrRNdMo6Y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gallery.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/physicalImages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TnGCxOdskemPv31e',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/deepUsageCheck' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ojaOzYBE5bJ6zJK3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/deletePhysicalImage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rL4qs2qqHHGx5r6y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/loadFileManager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FszkZblrnI8nmvri',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/mediaActions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LWRq3RCfDXdQrB0i',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'links.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'links.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/layouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'layouts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'layouts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/components' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'components.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'components.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/blog_pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog_pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/panel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zzdsIfeygyPFq0Of',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/posts/checkPostPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JuP8B6hl3UHpcdcf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/blog_posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog_posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blog_posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rxCbQCS8gJa0nIr4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tags.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/parentCategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wrH8VO4mTlS0We91',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/exceptThisCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fVoHlgpi2YlnR3QK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/blog_categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog_categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/blog_tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog_tags.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/panel/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::07n4m0gWxQsW1OeC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/blog/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nE29jBzmyNNbl5e4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/(?|c(?|lockwork/([^/]++)(*:42)|ache/([^/]++)(?:/([^/]++))?(*:76))|telescope/([^/]++)(*:102))|/api/(?|panel/(?|admins/(?|([^/]++)(*:146)|change(?|Password(*:171)|AdminStatus(*:190))|logout(*:205))|c(?|om(?|ments/([^/]++)(?|(*:240))|ponents/([^/]++)(?|(*:268)))|ategories/([^/]++)(?|(*:299)))|footers/([^/]++)(?|(*:328))|gallery/([^/]++)(?|(*:356))|l(?|inks/([^/]++)(?|(*:385))|ayouts/([^/]++)(?|(*:412)))|p(?|ages/([^/]++)(?|(*:442))|osts/([^/]++)(?|(*:467)))|tags/([^/]++)(?|(*:493))|users/(?|([^/]++)(?|(*:522))|change(?|Password(*:548)|UserStatus(*:566))))|blog/(?|blog_(?|p(?|ages/([^/]++)(*:610)|osts/([^/]++)(?|(*:634)))|categories/([^/]++)(*:663)|tags/([^/]++)(*:684))|search/([^/]++)(*:708)))|/panel/([^/]++)(?|(*:736)|/([^/]++)(*:753)))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.telescope',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admins.destroy',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dNF1YCTXPewxgbnR',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dXNe0gVqhSt1P1l9',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::795bUBBSOxHqrUKQ',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comments.show',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'comments.update',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'comments.destroy',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'components.show',
          ),
          1 => 
          array (
            0 => 'component',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'components.update',
          ),
          1 => 
          array (
            0 => 'component',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'components.destroy',
          ),
          1 => 
          array (
            0 => 'component',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'footers.show',
          ),
          1 => 
          array (
            0 => 'footer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'footers.update',
          ),
          1 => 
          array (
            0 => 'footer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'footers.destroy',
          ),
          1 => 
          array (
            0 => 'footer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery.show',
          ),
          1 => 
          array (
            0 => 'gallery',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gallery.update',
          ),
          1 => 
          array (
            0 => 'gallery',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'gallery.destroy',
          ),
          1 => 
          array (
            0 => 'gallery',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'links.show',
          ),
          1 => 
          array (
            0 => 'link',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'links.update',
          ),
          1 => 
          array (
            0 => 'link',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'links.destroy',
          ),
          1 => 
          array (
            0 => 'link',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'layouts.show',
          ),
          1 => 
          array (
            0 => 'layout',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'layouts.update',
          ),
          1 => 
          array (
            0 => 'layout',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'layouts.destroy',
          ),
          1 => 
          array (
            0 => 'layout',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.show',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pages.update',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'pages.destroy',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.show',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'posts.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'posts.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.show',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tags.update',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'tags.destroy',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      548 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N9hMgRCeIfE8l9Vd',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MT8HzPTWhmaBTnpF',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog_pages.show',
          ),
          1 => 
          array (
            0 => 'blog_page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog_posts.show',
          ),
          1 => 
          array (
            0 => 'blog_post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blog_posts.update',
          ),
          1 => 
          array (
            0 => 'blog_post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'blog_posts.destroy',
          ),
          1 => 
          array (
            0 => 'blog_post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog_categories.show',
          ),
          1 => 
          array (
            0 => 'blog_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog_tags.show',
          ),
          1 => 
          array (
            0 => 'blog_tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BCd2Ad3bxuTtFt3c',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::839h7MNP86vjzOug',
          ),
          1 => 
          array (
            0 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dvBrnbFwZOVl4pdw',
          ),
          1 => 
          array (
            0 => 'any',
            1 => 'any1',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.telescope' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/telescope/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\TelescopeController@show',
        'as' => 'debugbar.telescope',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\TelescopeController@show',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0UmY7ag2XIyl1sWj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/admins/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@me',
        'controller' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@me',
        'namespace' => 'Modules\\Administrators\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::0UmY7ag2XIyl1sWj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'admins.index',
        'uses' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@index',
        'controller' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@index',
        'namespace' => 'Modules\\Administrators\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'admins.store',
        'uses' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@store',
        'controller' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@store',
        'namespace' => 'Modules\\Administrators\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admins.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/admins/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'admins.destroy',
        'uses' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@destroy',
        'controller' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@destroy',
        'namespace' => 'Modules\\Administrators\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dNF1YCTXPewxgbnR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/admins/changePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@changePassword',
        'controller' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@changePassword',
        'namespace' => 'Modules\\Administrators\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::dNF1YCTXPewxgbnR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dXNe0gVqhSt1P1l9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/admins/changeAdminStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@changeAdminStatus',
        'controller' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@changeAdminStatus',
        'namespace' => 'Modules\\Administrators\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::dXNe0gVqhSt1P1l9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::795bUBBSOxHqrUKQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/admins/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@logout',
        'controller' => 'Modules\\Administrators\\Http\\Controllers\\AdministratorsController@logout',
        'namespace' => 'Modules\\Administrators\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::795bUBBSOxHqrUKQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VCKt95euzUWz5lAz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/dashboardStats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Analytics\\Http\\Controllers\\AnalyticsController@dashboardStats',
        'controller' => 'Modules\\Analytics\\Http\\Controllers\\AnalyticsController@dashboardStats',
        'namespace' => 'Modules\\Analytics\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::VCKt95euzUWz5lAz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wVsO1tpiFYcbeXVV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin-auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AdministratorAuthController@login',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AdministratorAuthController@login',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/admin-auth',
        'where' => 
        array (
        ),
        'as' => 'generated::wVsO1tpiFYcbeXVV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::U7NPyc5m7AJf9GJB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blog/signin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\UserAuthController@login',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\UserAuthController@login',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::U7NPyc5m7AJf9GJB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::I9yEGKo1pPKbPoXX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blog/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\UserAuthController@signup',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\UserAuthController@signup',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::I9yEGKo1pPKbPoXX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'comments.index',
        'uses' => 'Modules\\Comments\\Http\\Controllers\\Panel\\CommentsController@index',
        'controller' => 'Modules\\Comments\\Http\\Controllers\\Panel\\CommentsController@index',
        'namespace' => 'Modules\\Comments\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'comments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'comments.store',
        'uses' => 'Modules\\Comments\\Http\\Controllers\\Panel\\CommentsController@store',
        'controller' => 'Modules\\Comments\\Http\\Controllers\\Panel\\CommentsController@store',
        'namespace' => 'Modules\\Comments\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'comments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'comments.show',
        'uses' => 'Modules\\Comments\\Http\\Controllers\\Panel\\CommentsController@show',
        'controller' => 'Modules\\Comments\\Http\\Controllers\\Panel\\CommentsController@show',
        'namespace' => 'Modules\\Comments\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'comments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'comments.update',
        'uses' => 'Modules\\Comments\\Http\\Controllers\\Panel\\CommentsController@update',
        'controller' => 'Modules\\Comments\\Http\\Controllers\\Panel\\CommentsController@update',
        'namespace' => 'Modules\\Comments\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'comments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'comments.destroy',
        'uses' => 'Modules\\Comments\\Http\\Controllers\\Panel\\CommentsController@destroy',
        'controller' => 'Modules\\Comments\\Http\\Controllers\\Panel\\CommentsController@destroy',
        'namespace' => 'Modules\\Comments\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'authComments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blog/authComments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'as' => 'authComments.store',
        'uses' => 'Modules\\Comments\\Http\\Controllers\\Blog\\CommentsController@store',
        'controller' => 'Modules\\Comments\\Http\\Controllers\\Blog\\CommentsController@store',
        'namespace' => 'Modules\\Comments\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_comments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blog/blog_comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_comments.store',
        'uses' => 'Modules\\Comments\\Http\\Controllers\\Blog\\CommentsController@store',
        'controller' => 'Modules\\Comments\\Http\\Controllers\\Blog\\CommentsController@store',
        'namespace' => 'Modules\\Comments\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kn1cVuNfHq1TnxmR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/multiple/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Common\\Http\\Controllers\\CommonController@destroy',
        'controller' => 'Modules\\Common\\Http\\Controllers\\CommonController@destroy',
        'namespace' => 'Modules\\Common\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::kn1cVuNfHq1TnxmR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MuGNfFrUVJvgAIjS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/options',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\Panel\\CoreController@index',
        'controller' => 'Modules\\Core\\Http\\Controllers\\Panel\\CoreController@index',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::MuGNfFrUVJvgAIjS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fTo8xHzXEj2ADOQJ' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/panel/options/pageSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\Panel\\CoreController@updatePageSettings',
        'controller' => 'Modules\\Core\\Http\\Controllers\\Panel\\CoreController@updatePageSettings',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::fTo8xHzXEj2ADOQJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NAkdhXC15dgKnXbr' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/panel/options/authSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\Panel\\CoreController@updateAuthSettings',
        'controller' => 'Modules\\Core\\Http\\Controllers\\Panel\\CoreController@updateAuthSettings',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::NAkdhXC15dgKnXbr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wVzlXhZ8PY8dHQHt' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/panel/options/postSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\Panel\\CoreController@updatePostSettings',
        'controller' => 'Modules\\Core\\Http\\Controllers\\Panel\\CoreController@updatePostSettings',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::wVzlXhZ8PY8dHQHt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jFCbnm8pRVeRp9vP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\Blog\\CoreController@loadHomePage',
        'controller' => 'Modules\\Core\\Http\\Controllers\\Blog\\CoreController@loadHomePage',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => 'api/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::jFCbnm8pRVeRp9vP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LlmPzKPBE70UUmnl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/core',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\Blog\\CoreController@defaultLayout',
        'controller' => 'Modules\\Core\\Http\\Controllers\\Blog\\CoreController@defaultLayout',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => 'api/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::LlmPzKPBE70UUmnl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'footers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/footers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'footers.index',
        'uses' => 'Modules\\Footers\\Http\\Controllers\\FootersController@index',
        'controller' => 'Modules\\Footers\\Http\\Controllers\\FootersController@index',
        'namespace' => 'Modules\\Footers\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'footers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/footers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'footers.store',
        'uses' => 'Modules\\Footers\\Http\\Controllers\\FootersController@store',
        'controller' => 'Modules\\Footers\\Http\\Controllers\\FootersController@store',
        'namespace' => 'Modules\\Footers\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'footers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/footers/{footer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'footers.show',
        'uses' => 'Modules\\Footers\\Http\\Controllers\\FootersController@show',
        'controller' => 'Modules\\Footers\\Http\\Controllers\\FootersController@show',
        'namespace' => 'Modules\\Footers\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'footers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/footers/{footer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'footers.update',
        'uses' => 'Modules\\Footers\\Http\\Controllers\\FootersController@update',
        'controller' => 'Modules\\Footers\\Http\\Controllers\\FootersController@update',
        'namespace' => 'Modules\\Footers\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'footers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/footers/{footer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'footers.destroy',
        'uses' => 'Modules\\Footers\\Http\\Controllers\\FootersController@destroy',
        'controller' => 'Modules\\Footers\\Http\\Controllers\\FootersController@destroy',
        'namespace' => 'Modules\\Footers\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1qtjYdLbrRNdMo6Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/removeFooters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Footers\\Http\\Controllers\\FootersController@removeFooters',
        'controller' => 'Modules\\Footers\\Http\\Controllers\\FootersController@removeFooters',
        'namespace' => 'Modules\\Footers\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::1qtjYdLbrRNdMo6Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gallery.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'gallery.index',
        'uses' => 'Modules\\Images\\Http\\Controllers\\ImagesController@index',
        'controller' => 'Modules\\Images\\Http\\Controllers\\ImagesController@index',
        'namespace' => 'Modules\\Images\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gallery.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'gallery.store',
        'uses' => 'Modules\\Images\\Http\\Controllers\\ImagesController@store',
        'controller' => 'Modules\\Images\\Http\\Controllers\\ImagesController@store',
        'namespace' => 'Modules\\Images\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gallery.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/gallery/{gallery}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'gallery.show',
        'uses' => 'Modules\\Images\\Http\\Controllers\\ImagesController@show',
        'controller' => 'Modules\\Images\\Http\\Controllers\\ImagesController@show',
        'namespace' => 'Modules\\Images\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gallery.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/gallery/{gallery}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'gallery.update',
        'uses' => 'Modules\\Images\\Http\\Controllers\\ImagesController@update',
        'controller' => 'Modules\\Images\\Http\\Controllers\\ImagesController@update',
        'namespace' => 'Modules\\Images\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gallery.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/gallery/{gallery}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'gallery.destroy',
        'uses' => 'Modules\\Images\\Http\\Controllers\\ImagesController@destroy',
        'controller' => 'Modules\\Images\\Http\\Controllers\\ImagesController@destroy',
        'namespace' => 'Modules\\Images\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TnGCxOdskemPv31e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/physicalImages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Images\\Http\\Controllers\\ImagesController@physicalImages',
        'controller' => 'Modules\\Images\\Http\\Controllers\\ImagesController@physicalImages',
        'namespace' => 'Modules\\Images\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::TnGCxOdskemPv31e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ojaOzYBE5bJ6zJK3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/deepUsageCheck',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Images\\Http\\Controllers\\ImagesController@deepUsageCheck',
        'controller' => 'Modules\\Images\\Http\\Controllers\\ImagesController@deepUsageCheck',
        'namespace' => 'Modules\\Images\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::ojaOzYBE5bJ6zJK3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rL4qs2qqHHGx5r6y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/deletePhysicalImage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Images\\Http\\Controllers\\ImagesController@deletePhysicalImages',
        'controller' => 'Modules\\Images\\Http\\Controllers\\ImagesController@deletePhysicalImages',
        'namespace' => 'Modules\\Images\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::rL4qs2qqHHGx5r6y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FszkZblrnI8nmvri' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/loadFileManager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Images\\Http\\Controllers\\ImagesController@loadFileManager',
        'controller' => 'Modules\\Images\\Http\\Controllers\\ImagesController@loadFileManager',
        'namespace' => 'Modules\\Images\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::FszkZblrnI8nmvri',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LWRq3RCfDXdQrB0i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/mediaActions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Images\\Http\\Controllers\\ImagesController@mediaActions',
        'controller' => 'Modules\\Images\\Http\\Controllers\\ImagesController@mediaActions',
        'namespace' => 'Modules\\Images\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::LWRq3RCfDXdQrB0i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'links.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'links.index',
        'uses' => 'Modules\\Links\\Http\\Controllers\\LinksController@index',
        'controller' => 'Modules\\Links\\Http\\Controllers\\LinksController@index',
        'namespace' => 'Modules\\Links\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'links.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'links.store',
        'uses' => 'Modules\\Links\\Http\\Controllers\\LinksController@store',
        'controller' => 'Modules\\Links\\Http\\Controllers\\LinksController@store',
        'namespace' => 'Modules\\Links\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'links.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/links/{link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'links.show',
        'uses' => 'Modules\\Links\\Http\\Controllers\\LinksController@show',
        'controller' => 'Modules\\Links\\Http\\Controllers\\LinksController@show',
        'namespace' => 'Modules\\Links\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'links.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/links/{link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'links.update',
        'uses' => 'Modules\\Links\\Http\\Controllers\\LinksController@update',
        'controller' => 'Modules\\Links\\Http\\Controllers\\LinksController@update',
        'namespace' => 'Modules\\Links\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'links.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/links/{link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'links.destroy',
        'uses' => 'Modules\\Links\\Http\\Controllers\\LinksController@destroy',
        'controller' => 'Modules\\Links\\Http\\Controllers\\LinksController@destroy',
        'namespace' => 'Modules\\Links\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'pages.index',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\PagesController@index',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\PagesController@index',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'pages.store',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\PagesController@store',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\PagesController@store',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'pages.show',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\PagesController@show',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\PagesController@show',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'pages.update',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\PagesController@update',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\PagesController@update',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'pages.destroy',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\PagesController@destroy',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\PagesController@destroy',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'layouts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/layouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'layouts.index',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\LayoutsController@index',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\LayoutsController@index',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'layouts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/layouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'layouts.store',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\LayoutsController@store',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\LayoutsController@store',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'layouts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/layouts/{layout}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'layouts.show',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\LayoutsController@show',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\LayoutsController@show',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'layouts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/layouts/{layout}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'layouts.update',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\LayoutsController@update',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\LayoutsController@update',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'layouts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/layouts/{layout}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'layouts.destroy',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\LayoutsController@destroy',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\LayoutsController@destroy',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'components.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/components',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'components.index',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\ComponentsController@index',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\ComponentsController@index',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'components.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/components',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'components.store',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\ComponentsController@store',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\ComponentsController@store',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'components.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/components/{component}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'components.show',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\ComponentsController@show',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\ComponentsController@show',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'components.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/components/{component}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'components.update',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\ComponentsController@update',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\ComponentsController@update',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'components.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/components/{component}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'components.destroy',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Panel\\ComponentsController@destroy',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Panel\\ComponentsController@destroy',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/blog_pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_pages.index',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Blog\\PagesController@index',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Blog\\PagesController@index',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/blog_pages/{blog_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_pages.show',
        'uses' => 'Modules\\Pages\\Http\\Controllers\\Blog\\PagesController@show',
        'controller' => 'Modules\\Pages\\Http\\Controllers\\Blog\\PagesController@show',
        'namespace' => 'Modules\\Pages\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zzdsIfeygyPFq0Of' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'Modules\\Panel\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::zzdsIfeygyPFq0Of',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'panel::index',
        'data' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::839h7MNP86vjzOug' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/{any}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'Modules\\Panel\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::839h7MNP86vjzOug',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'panel::index',
        'data' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dvBrnbFwZOVl4pdw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'panel/{any}/{any1}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'Modules\\Panel\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::dvBrnbFwZOVl4pdw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'panel::index',
        'data' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'posts.index',
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Panel\\PostsController@index',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Panel\\PostsController@index',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'posts.store',
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Panel\\PostsController@store',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Panel\\PostsController@store',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'posts.show',
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Panel\\PostsController@show',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Panel\\PostsController@show',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'posts.update',
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Panel\\PostsController@update',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Panel\\PostsController@update',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'posts.destroy',
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Panel\\PostsController@destroy',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Panel\\PostsController@destroy',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JuP8B6hl3UHpcdcf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blog/posts/checkPostPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@checkPostPassword',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@checkPostPassword',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::JuP8B6hl3UHpcdcf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/blog_posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_posts.index',
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@index',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@index',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blog/blog_posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_posts.store',
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@store',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@store',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_posts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/blog_posts/{blog_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_posts.show',
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@show',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@show',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/blog/blog_posts/{blog_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_posts.update',
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@update',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@update',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/blog/blog_posts/{blog_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_posts.destroy',
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@destroy',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@destroy',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rxCbQCS8gJa0nIr4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blog/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@favorites',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@favorites',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::rxCbQCS8gJa0nIr4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BCd2Ad3bxuTtFt3c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/search/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@search',
        'controller' => 'Modules\\Posts\\Http\\Controllers\\Blog\\PostsController@search',
        'namespace' => 'Modules\\Posts\\Http\\Controllers',
        'prefix' => 'api/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::BCd2Ad3bxuTtFt3c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'categories.index',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@index',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@index',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'categories.store',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@store',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@store',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'categories.show',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@show',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@show',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'categories.update',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@update',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@update',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'categories.destroy',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@destroy',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@destroy',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tags.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'tags.index',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\TagsController@index',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\TagsController@index',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tags.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'tags.store',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\TagsController@store',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\TagsController@store',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tags.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'tags.show',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\TagsController@show',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\TagsController@show',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tags.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'tags.update',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\TagsController@update',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\TagsController@update',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tags.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'tags.destroy',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\TagsController@destroy',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\TagsController@destroy',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wrH8VO4mTlS0We91' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/parentCategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@parentCategories',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@parentCategories',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::wrH8VO4mTlS0We91',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fVoHlgpi2YlnR3QK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/exceptThisCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@exceptThisCategory',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Panel\\CategoriesController@exceptThisCategory',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::fVoHlgpi2YlnR3QK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/blog_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_categories.index',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Blog\\CategoriesController@index',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Blog\\CategoriesController@index',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/blog_categories/{blog_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_categories.show',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Blog\\CategoriesController@show',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Blog\\CategoriesController@show',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_tags.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/blog_tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_tags.index',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Blog\\TagsController@index',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Blog\\TagsController@index',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'blog_tags.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/blog_tags/{blog_tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'as' => 'blog_tags.show',
        'uses' => 'Modules\\Terms\\Http\\Controllers\\Blog\\TagsController@show',
        'controller' => 'Modules\\Terms\\Http\\Controllers\\Blog\\TagsController@show',
        'namespace' => 'Modules\\Terms\\Http\\Controllers',
        'prefix' => 'api/blog/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'users.index',
        'uses' => 'Modules\\Users\\Http\\Controllers\\UsersController@index',
        'controller' => 'Modules\\Users\\Http\\Controllers\\UsersController@index',
        'namespace' => 'Modules\\Users\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'users.store',
        'uses' => 'Modules\\Users\\Http\\Controllers\\UsersController@store',
        'controller' => 'Modules\\Users\\Http\\Controllers\\UsersController@store',
        'namespace' => 'Modules\\Users\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/panel/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'users.show',
        'uses' => 'Modules\\Users\\Http\\Controllers\\UsersController@show',
        'controller' => 'Modules\\Users\\Http\\Controllers\\UsersController@show',
        'namespace' => 'Modules\\Users\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/panel/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'users.update',
        'uses' => 'Modules\\Users\\Http\\Controllers\\UsersController@update',
        'controller' => 'Modules\\Users\\Http\\Controllers\\UsersController@update',
        'namespace' => 'Modules\\Users\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/panel/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'as' => 'users.destroy',
        'uses' => 'Modules\\Users\\Http\\Controllers\\UsersController@destroy',
        'controller' => 'Modules\\Users\\Http\\Controllers\\UsersController@destroy',
        'namespace' => 'Modules\\Users\\Http\\Controllers',
        'prefix' => 'api/panel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::N9hMgRCeIfE8l9Vd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/users/changePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Users\\Http\\Controllers\\UsersController@changePassword',
        'controller' => 'Modules\\Users\\Http\\Controllers\\UsersController@changePassword',
        'namespace' => 'Modules\\Users\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::N9hMgRCeIfE8l9Vd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MT8HzPTWhmaBTnpF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/panel/users/changeUserStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'adminAuth',
        ),
        'uses' => 'Modules\\Users\\Http\\Controllers\\UsersController@changeUserStatus',
        'controller' => 'Modules\\Users\\Http\\Controllers\\UsersController@changeUserStatus',
        'namespace' => 'Modules\\Users\\Http\\Controllers',
        'prefix' => 'api/panel',
        'where' => 
        array (
        ),
        'as' => 'generated::MT8HzPTWhmaBTnpF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::07n4m0gWxQsW1OeC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/blog/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\Users\\Http\\Controllers\\BlogUsersController@me',
        'controller' => 'Modules\\Users\\Http\\Controllers\\BlogUsersController@me',
        'namespace' => 'Modules\\Users\\Http\\Controllers',
        'prefix' => 'api/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::07n4m0gWxQsW1OeC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nE29jBzmyNNbl5e4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/blog/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'Modules\\Users\\Http\\Controllers\\BlogUsersController@logout',
        'controller' => 'Modules\\Users\\Http\\Controllers\\BlogUsersController@logout',
        'namespace' => 'Modules\\Users\\Http\\Controllers',
        'prefix' => 'api/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::nE29jBzmyNNbl5e4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
