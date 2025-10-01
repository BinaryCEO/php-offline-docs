<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: yaz_search - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/function.yaz-search.php">
 <link rel="shorturl" href="https://www.php.net/yaz-search">
 <link rel="alternate" href="https://www.php.net/yaz-search" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.yaz.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.yaz-schema.php">
 <link rel="next" href="https://www.php.net/manual/en/function.yaz-set-option.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.yaz-search.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.yaz-search.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.yaz-search.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.yaz-search.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.yaz-search.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.yaz-search.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.yaz-search.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.yaz-search.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.yaz-search.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.yaz-search.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.yaz-search.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prepares for a search" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: yaz_search - Manual" />
<meta name="twitter:description" content="Prepares for a search" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: yaz_search - Manual" />
<meta itemprop="description" content="Prepares for a search" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prepares for a search" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="function.yaz-set-option.php">
          yaz_set_option &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.yaz-schema.php">
          &laquo; yaz_schema        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.yaz.php'>YAZ</a></li>      <li><a href='ref.yaz.php'>YAZ Functions</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/function.yaz-search.php' selected="selected">English</option>
            <option value='de/function.yaz-search.php'>German</option>
            <option value='es/function.yaz-search.php'>Spanish</option>
            <option value='fr/function.yaz-search.php'>French</option>
            <option value='it/function.yaz-search.php'>Italian</option>
            <option value='ja/function.yaz-search.php'>Japanese</option>
            <option value='pt_BR/function.yaz-search.php'>Brazilian Portuguese</option>
            <option value='ru/function.yaz-search.php'>Russian</option>
            <option value='tr/function.yaz-search.php'>Turkish</option>
            <option value='uk/function.yaz-search.php'>Ukrainian</option>
            <option value='zh/function.yaz-search.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.yaz-search" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">yaz_search</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.1, PECL yaz &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">yaz_search</span> &mdash; <span class="dc-title">Prepares for a search</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.yaz-search-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>yaz_search</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$id</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$type</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>yaz_search()</strong></span> prepares for a search on the given 
   connection.
  </p>
  <p class="para">
   Like <span class="function"><a href="function.yaz-connect.php" class="function">yaz_connect()</a></span> this function is non-blocking and
   only prepares for a search to be executed later when 
   <span class="function"><a href="function.yaz-wait.php" class="function">yaz_wait()</a></span> is called.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.yaz-search-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">id</code></dt>
     <dd>
      <p class="para">
       The connection resource returned by <span class="function"><a href="function.yaz-connect.php" class="function">yaz_connect()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       This parameter represents the query type - only <code class="literal">&quot;rpn&quot;</code>
       is supported now in which case the third argument specifies a Type-1 
       query in prefix query notation. 
      </p>
     </dd>
    
    
     <dt><code class="parameter">query</code></dt>
     <dd>
      <p class="para">
       The RPN query is a textual representation of the Type-1 query as
       defined by the Z39.50 standard. However, in the text representation
       as used by YAZ a prefix notation is used, that is the operator
       precedes the operands. The query string is a sequence of tokens where
       white space is ignored unless surrounded by double quotes. Tokens beginning
       with an at-character (<code class="literal">@</code>) are considered operators,
       otherwise they are treated as search terms.
      </p>
      <table class="doctable table">
       <caption><strong>RPN Operators</strong></caption>
       
        <col width="1*" />
        <col width="2*" />
        <thead>
         <tr>
          <th>Construct</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td><code class="literal">@and</code> query1 query2</td>
          <td>intersection of query1 and query2</td>
         </tr>

         <tr>
          <td><code class="literal">@or</code> query1 query2</td>
          <td>union of query1 and query2</td>
         </tr>

         <tr>
          <td><code class="literal">@not</code> query1 query2</td>
          <td>query1 and not query2</td>
         </tr>

         <tr>
          <td><code class="literal">@set</code> name</td>
          <td>result set reference</td>
         </tr>

         <tr>
          <td><code class="literal">@attrset</code> set query</td>
          <td>
           specifies attribute-set for query. This construction is only allowed
           once - in the beginning of the whole query
          </td>
         </tr>

         <tr>
          <td><code class="literal">@attr</code> [set] type=value query</td>
          <td>
           applies attribute to query. The type and value are integers 
           specifying the attribute-type and attribute-value respectively. 
           The set, if given, specifies the attribute-set.
          </td>
         </tr>

        </tbody>
       
      </table>
     
      <p class="para">
       You can find information about attributes at the 
       <a href="http://www.loc.gov/z3950/agency/defns/bib1.html" class="link external">&raquo;&nbsp;Z39.50 Maintenance Agency</a>
       site.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If you would like to use a more friendly notation,
        use the CCL parser - functions <span class="function"><a href="function.yaz-ccl-conf.php" class="function">yaz_ccl_conf()</a></span> and 
        <span class="function"><a href="function.yaz-ccl-parse.php" class="function">yaz_ccl_parse()</a></span>.
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.yaz-search-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.yaz-search-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-4892">
   <p><strong>Example #1 Query Examples</strong></p>
   <div class="example-contents"><p>
    You can search for simple terms, like this:
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">computer</pre>
</div>
    </div>
    which matches documents where &quot;computer&quot; occur. No attributes are 
    specified.
   </p></div>
   <div class="example-contents"><p>
    The query 
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">&quot;knuth donald&quot;</pre>
</div>
    </div>
    matches documents where &quot;knuth donald&quot; occur (provided that the
    server supports phrase search).
   </p></div>
   <div class="example-contents"><p>
    This query applies two attributes for the same phrase.
    <div class="example-contents screen">@attr 1=1003 @attr 4=1 &quot;knuth donald&quot;</div>
    First attribute is type 1 (Bib-1 use), attribute value is 1003
    (Author).
    Second attribute has is type 4 (structure), value 1 (phrase),
    so this should match documents where Donald Knuth is author.
   </p></div>
   <div class="example-contents"><p>
    The query
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">@and @or a b @not @or c d e</pre>
</div>
    </div>
    would in infix notation look like <code class="literal">(a or b) and ((c or d) not 
    e)</code>.
   </p></div>
   <div class="example-contents"><p>
    Another, more complex, one:
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">@attrset gils @and @attr 1=4 art @attr 1=2000 company</pre>
</div>
    </div>
    The query as a whole uses the GILS attributeset. The query matches
    documents where <code class="literal">art</code> occur in the title (GILS,BIB-1)
    and in which <code class="literal">company</code> occur as Distributor (GILS).
   </p></div>
  </div>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/yaz/functions/yaz-search.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.yaz-search%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.yaz-search&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.yaz-search.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="18701">  <div class="votes">
    <div id="Vu18701">
    <a href="/manual/vote-note.php?id=18701&amp;page=function.yaz-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18701">
    <a href="/manual/vote-note.php?id=18701&amp;page=function.yaz-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18701" title="100% like this...">
    3
    </div>
  </div>
  <a href="#18701" class="name">
  <strong class="user"><em>jwohlers at mail dot wcc dot cc dot il dot us</em></strong></a><a class="genanchor" href="#18701"> &para;</a><div class="date" title="2002-01-31 05:21"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18701">
<div class="phpcode"><code><span class="html">Quick Reference For Attribute Fields <br />(eg: "@attr 2=" refers to the Relation attribute) <br />1 = Use Field<br />2 = Relation<br />3 = Position<br />4 = Structure<br />5 = Truncate<br />6 = Completeness</span></code></div>
  </div>
 </div>
  <div class="note" id="91586">  <div class="votes">
    <div id="Vu91586">
    <a href="/manual/vote-note.php?id=91586&amp;page=function.yaz-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91586">
    <a href="/manual/vote-note.php?id=91586&amp;page=function.yaz-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91586" title="66% like this...">
    2
    </div>
  </div>
  <a href="#91586" class="name">
  <strong class="user"><em>k dot andris at gmail dot com</em></strong></a><a class="genanchor" href="#91586"> &para;</a><div class="date" title="2009-06-17 03:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91586">
<div class="phpcode"><code><span class="html">To display holdings data set the syntax and the record format to "opac" (at least for Horizon ILS). It will give you an xml, containg &lt;holding&gt; elements with all info:
<br />
<br /><span class="default">&lt;?php
<br />$z </span><span class="keyword">= </span><span class="default">yaz_connect</span><span class="keyword">(...
<br /></span><span class="default">yaz_syntax</span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">, </span><span class="string">'opac'</span><span class="keyword">);
<br /></span><span class="default">yaz_search</span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">, </span><span class="string">'rpn'</span><span class="keyword">, </span><span class="string">'@attr 1=4 "title%"'</span><span class="keyword">);
<br /></span><span class="default">yaz_wait</span><span class="keyword">();
<br /></span><span class="default">$hits </span><span class="keyword">= </span><span class="default">yaz_hits</span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">);
<br /></span><span class="default">yaz_range</span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$hits</span><span class="keyword">);
<br /></span><span class="default">yaz_present</span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">);
<br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$hits</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)
<br />       </span><span class="default">my_display</span><span class="keyword">(</span><span class="default">yaz_record</span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="string">'opac'</span><span class="keyword">));
<br /></span><span class="default">yaz_close</span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">);
<br />
<br />function </span><span class="default">my_display</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">));
<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88406">  <div class="votes">
    <div id="Vu88406">
    <a href="/manual/vote-note.php?id=88406&amp;page=function.yaz-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88406">
    <a href="/manual/vote-note.php?id=88406&amp;page=function.yaz-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88406" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#88406" class="name">
  <strong class="user"><em>Colibri</em></strong></a><a class="genanchor" href="#88406"> &para;</a><div class="date" title="2009-01-22 08:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88406">
<div class="phpcode"><code><span class="html">When querying a SRU/SRW server, the "type" parameter must(?) be specified as "cql", e.g.<br />yaz_search($handle, "cql", "bath.isbn=1234");</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.yaz-search&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.yaz-search.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.yaz.php">YAZ Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.yaz-addinfo.php" title="yaz_&#8203;addinfo">yaz_&#8203;addinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-ccl-conf.php" title="yaz_&#8203;ccl_&#8203;conf">yaz_&#8203;ccl_&#8203;conf</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-ccl-parse.php" title="yaz_&#8203;ccl_&#8203;parse">yaz_&#8203;ccl_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-close.php" title="yaz_&#8203;close">yaz_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-connect.php" title="yaz_&#8203;connect">yaz_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-database.php" title="yaz_&#8203;database">yaz_&#8203;database</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-element.php" title="yaz_&#8203;element">yaz_&#8203;element</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-errno.php" title="yaz_&#8203;errno">yaz_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-error.php" title="yaz_&#8203;error">yaz_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-es.php" title="yaz_&#8203;es">yaz_&#8203;es</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-es-result.php" title="yaz_&#8203;es_&#8203;result">yaz_&#8203;es_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-get-option.php" title="yaz_&#8203;get_&#8203;option">yaz_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-hits.php" title="yaz_&#8203;hits">yaz_&#8203;hits</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-itemorder.php" title="yaz_&#8203;itemorder">yaz_&#8203;itemorder</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-present.php" title="yaz_&#8203;present">yaz_&#8203;present</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-range.php" title="yaz_&#8203;range">yaz_&#8203;range</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-record.php" title="yaz_&#8203;record">yaz_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-scan.php" title="yaz_&#8203;scan">yaz_&#8203;scan</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-scan-result.php" title="yaz_&#8203;scan_&#8203;result">yaz_&#8203;scan_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-schema.php" title="yaz_&#8203;schema">yaz_&#8203;schema</a>
                        </li>
                                                <li class="current">
                            <a href="function.yaz-search.php" title="yaz_&#8203;search">yaz_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-set-option.php" title="yaz_&#8203;set_&#8203;option">yaz_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-sort.php" title="yaz_&#8203;sort">yaz_&#8203;sort</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-syntax.php" title="yaz_&#8203;syntax">yaz_&#8203;syntax</a>
                        </li>
                                                <li class="">
                            <a href="function.yaz-wait.php" title="yaz_&#8203;wait">yaz_&#8203;wait</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
