<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Callbacks / Callables - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.types.callable.php">
 <link rel="shorturl" href="https://www.php.net/types.callable">
 <link rel="alternate" href="https://www.php.net/types.callable" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.types.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.types.resource.php">
 <link rel="next" href="https://www.php.net/manual/en/language.types.mixed.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.types.callable.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.types.callable.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.types.callable.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.types.callable.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.types.callable.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.types.callable.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.types.callable.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.types.callable.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.types.callable.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.types.callable.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.types.callable.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Callbacks / Callables" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Callbacks / Callables - Manual" />
<meta name="twitter:description" content="Callbacks / Callables" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Callbacks / Callables - Manual" />
<meta itemprop="description" content="Callbacks / Callables" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Callbacks / Callables" />

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
        <a href="language.types.mixed.php">
          Mixed &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.types.resource.php">
          &laquo; Resources        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.types.php'>Types</a></li>      </ul>
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
            <option value='en/language.types.callable.php' selected="selected">English</option>
            <option value='de/language.types.callable.php'>German</option>
            <option value='es/language.types.callable.php'>Spanish</option>
            <option value='fr/language.types.callable.php'>French</option>
            <option value='it/language.types.callable.php'>Italian</option>
            <option value='ja/language.types.callable.php'>Japanese</option>
            <option value='pt_BR/language.types.callable.php'>Brazilian Portuguese</option>
            <option value='ru/language.types.callable.php'>Russian</option>
            <option value='tr/language.types.callable.php'>Turkish</option>
            <option value='uk/language.types.callable.php'>Ukrainian</option>
            <option value='zh/language.types.callable.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.types.callable" class="sect1">
 <h2 class="title">Callbacks / Callables</h2>

 <p class="para">
  Callbacks can be denoted by the <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> type declaration.
 </p>

 <p class="para">
  Some functions like <span class="function"><a href="function.call-user-func.php" class="function">call_user_func()</a></span> or
  <span class="function"><a href="function.usort.php" class="function">usort()</a></span> accept user-defined callback functions as a
  parameter. Callback functions can not only be simple functions, but also
  <span class="type"><a href="language.types.object.php" class="type object">object</a></span> methods, including static class methods.
 </p>

 <div class="sect2" id="language.types.callable.passing">
  <h3 class="title">Passing</h3>

  <p class="para">
   A PHP function is passed by its name as a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>. Any built-in
   or user-defined function can be used, except language constructs such as:
   <span class="function"><a href="function.array.php" class="function">array()</a></span>, <span class="function"><a href="function.echo.php" class="function">echo</a></span>,
   <span class="function"><a href="function.empty.php" class="function">empty()</a></span>, <span class="function"><a href="function.eval.php" class="function">eval()</a></span>,
   <span class="function"><a href="function.exit.php" class="function">exit()</a></span>, <span class="function"><a href="function.isset.php" class="function">isset()</a></span>,
   <span class="function"><a href="function.list.php" class="function">list()</a></span>, <span class="function"><a href="function.print.php" class="function">print</a></span> or
   <span class="function"><a href="function.unset.php" class="function">unset()</a></span>.
  </p>

  <p class="para">
   A method of an instantiated <span class="type"><a href="language.types.object.php" class="type object">object</a></span> is passed as an
   <span class="type"><a href="language.types.array.php" class="type array">array</a></span> containing an <span class="type"><a href="language.types.object.php" class="type object">object</a></span> at index 0 and the
   method name at index 1. Accessing protected and private methods from
   within a class is allowed.
  </p>

  <p class="para">
   Static class methods can also be passed without instantiating an
   <span class="type"><a href="language.types.object.php" class="type object">object</a></span> of that class by either, passing the class name
   instead of an <span class="type"><a href="language.types.object.php" class="type object">object</a></span> at index 0, or passing
   <code class="literal">&#039;ClassName::methodName&#039;</code>.
  </p>

  <p class="para">
   Apart from common user-defined function,
   <a href="functions.anonymous.php" class="link">anonymous functions</a> and
   <a href="functions.arrow.php" class="link">arrow functions</a> can also be
   passed to a callback parameter.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    As of PHP 8.1.0, anonymous functions can also be created using the <a href="functions.first_class_callable_syntax.php" class="link">first class callable syntax</a>.
   </p>
  </p></blockquote>

  <p class="para">
   Generally, any object implementing <a href="language.oop5.magic.php#object.invoke" class="link">__invoke()</a> can also
   be passed to a callback parameter.
  </p>

  <p class="para">
   <div class="example" id="example-107">
    <p><strong>Example #1 
     Callback function examples
    </strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// An example callback function<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">my_callback_function</span><span style="color: #007700">() {<br />    echo </span><span style="color: #DD0000">'hello world!'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// An example callback method<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">{<br />    static function </span><span style="color: #0000BB">myCallbackMethod</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'Hello World!'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// Type 1: Simple callback<br /></span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(</span><span style="color: #DD0000">'my_callback_function'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Type 2: Static class method call<br /></span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'MyClass'</span><span style="color: #007700">, </span><span style="color: #DD0000">'myCallbackMethod'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Type 3: Object method call<br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">MyClass</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">, </span><span style="color: #DD0000">'myCallbackMethod'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Type 4: Static class method call<br /></span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(</span><span style="color: #DD0000">'MyClass::myCallbackMethod'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Type 5: Relative static class method call<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">who</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'A'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />    public static function </span><span style="color: #0000BB">who</span><span style="color: #007700">() {<br />        echo </span><span style="color: #DD0000">'B'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'B'</span><span style="color: #007700">, </span><span style="color: #DD0000">'parent::who'</span><span style="color: #007700">)); </span><span style="color: #FF8000">// A, deprecated as of PHP 8.2.0<br /><br />// Type 6: Objects implementing __invoke can be used as callables<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">C </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__invoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">'Hello '</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= new </span><span style="color: #0000BB">C</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">, </span><span style="color: #DD0000">'PHP!'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-108">
    <p><strong>Example #2 
     Callback example using a Closure
    </strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Our closure<br /></span><span style="color: #0000BB">$double </span><span style="color: #007700">= function(</span><span style="color: #0000BB">$a</span><span style="color: #007700">) {<br />    return </span><span style="color: #0000BB">$a </span><span style="color: #007700">* </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />};<br /><br /></span><span style="color: #FF8000">// This is our range of numbers<br /></span><span style="color: #0000BB">$numbers </span><span style="color: #007700">= </span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Use the closure as a callback here to<br />// double the size of each element in our<br />// range<br /></span><span style="color: #0000BB">$new_numbers </span><span style="color: #007700">= </span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #0000BB">$double</span><span style="color: #007700">, </span><span style="color: #0000BB">$numbers</span><span style="color: #007700">);<br /><br />print </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">' '</span><span style="color: #007700">, </span><span style="color: #0000BB">$new_numbers</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
2 4 6 8 10
</pre></div>
    </div>
   </div>
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">Callbacks registered
with functions such as <span class="function"><a href="function.call-user-func.php" class="function">call_user_func()</a></span> and <span class="function"><a href="function.call-user-func-array.php" class="function">call_user_func_array()</a></span> will not be
called if there is an uncaught exception thrown in a previous callback.</p></p></blockquote>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/types/callable.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.types.callable%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.types.callable&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.callable.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109073">  <div class="votes">
    <div id="Vu109073">
    <a href="/manual/vote-note.php?id=109073&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109073">
    <a href="/manual/vote-note.php?id=109073&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109073" title="77% like this...">
    280
    </div>
  </div>
  <a href="#109073" class="name">
  <strong class="user"><em>andrewbessa at gmail dot com</em></strong></a><a class="genanchor" href="#109073"> &para;</a><div class="date" title="2012-06-19 03:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109073">
<div class="phpcode"><code><span class="html">You can also use the $this variable to specify a callback:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">MyClass </span><span class="keyword">{
<br />
<br />    public </span><span class="default">$property </span><span class="keyword">= </span><span class="string">'Hello World!'</span><span class="keyword">;
<br />
<br />    public function </span><span class="default">MyMethod</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">call_user_func</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'myCallbackMethod'</span><span class="keyword">));
<br />    }
<br />
<br />    public function </span><span class="default">MyCallbackMethod</span><span class="keyword">()
<br />    {
<br />        echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">property</span><span class="keyword">;
<br />    }
<br />
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110084">  <div class="votes">
    <div id="Vu110084">
    <a href="/manual/vote-note.php?id=110084&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110084">
    <a href="/manual/vote-note.php?id=110084&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110084" title="77% like this...">
    207
    </div>
  </div>
  <a href="#110084" class="name">
  <strong class="user"><em>steve at mrclay dot org</em></strong></a><a class="genanchor" href="#110084"> &para;</a><div class="date" title="2012-09-17 09:00"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110084">
<div class="phpcode"><code><span class="html">Performance note: The callable type hint, like is_callable(), will trigger an autoload of the class if the value looks like a static method callback.</span></code></div>
  </div>
 </div>
  <div class="note" id="113447">  <div class="votes">
    <div id="Vu113447">
    <a href="/manual/vote-note.php?id=113447&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113447">
    <a href="/manual/vote-note.php?id=113447&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113447" title="79% like this...">
    193
    </div>
  </div>
  <a href="#113447" class="name">
  <strong class="user"><em>computrius at gmail dot com</em></strong></a><a class="genanchor" href="#113447"> &para;</a><div class="date" title="2013-10-11 04:38"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113447">
<div class="phpcode"><code><span class="html">When specifying a call back in array notation (ie. array($this, "myfunc") ) the method can be private if called from inside the class, but if you call it from outside you'll get a warning:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">mc </span><span class="keyword">{
<br />   public function </span><span class="default">go</span><span class="keyword">(array </span><span class="default">$arr</span><span class="keyword">) {
<br />       </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"walkIt"</span><span class="keyword">));
<br />   }
<br />
<br />   private function </span><span class="default">walkIt</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) {
<br />       echo </span><span class="default">$val </span><span class="keyword">. </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;
<br />   }
<br />
<br />    public function </span><span class="default">export</span><span class="keyword">() {
<br />        return array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'walkIt'</span><span class="keyword">);
<br />    }
<br />}
<br />
<br /></span><span class="default">$data </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);
<br />
<br /></span><span class="default">$m </span><span class="keyword">= new </span><span class="default">mc</span><span class="keyword">;
<br /></span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">go</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">); </span><span class="comment">// valid
<br />
<br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">export</span><span class="keyword">()); </span><span class="comment">// will generate warning
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Output:
<br />1&lt;br /&gt;2&lt;br /&gt;3&lt;br /&gt;4&lt;br /&gt;
<br />Warning: array_walk() expects parameter 2 to be a valid callback, cannot access private method mc::walkIt() in /in/tfh7f on line 22</span></code></div>
  </div>
 </div>
  <div class="note" id="117260">  <div class="votes">
    <div id="Vu117260">
    <a href="/manual/vote-note.php?id=117260&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117260">
    <a href="/manual/vote-note.php?id=117260&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117260" title="78% like this...">
    184
    </div>
  </div>
  <a href="#117260" class="name">
  <strong class="user"><em>Riikka K</em></strong></a><a class="genanchor" href="#117260"> &para;</a><div class="date" title="2015-05-11 01:36"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117260">
<div class="phpcode"><code><span class="html">A note on differences when calling callbacks as "variable functions" without the use of call_user_func() (e.g. "<span class="default">&lt;?php $callback </span><span class="keyword">= </span><span class="string">'printf'</span><span class="keyword">; </span><span class="default">$callback</span><span class="keyword">(</span><span class="string">'Hello World!'</span><span class="keyword">) </span><span class="default">?&gt;</span>"):<br /><br />- Using the name of a function as string has worked since at least 4.3.0<br />- Calling anonymous functions and invokable objects has worked since 5.3.0<br />- Using the array structure [$object, 'method'] has worked since 5.4.0<br /><br />Note, however, that the following are not supported when calling callbacks as variable functions, even though they are supported by call_user_func():<br /><br />- Calling static class methods via strings such as 'foo::doStuff'<br />- Calling parent method using the [$object, 'parent::method'] array structure<br /><br />All of these cases are correctly recognized as callbacks by the 'callable' type hint, however. Thus, the following code will produce an error "Fatal error: Call to undefined function foo::doStuff() in /tmp/code.php on line 4":<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{<br />    static function </span><span class="default">callIt</span><span class="keyword">(callable </span><span class="default">$callback</span><span class="keyword">) {<br />        </span><span class="default">$callback</span><span class="keyword">();<br />    }<br />    <br />    static function </span><span class="default">doStuff</span><span class="keyword">() {<br />        echo </span><span class="string">"Hello World!"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">foo</span><span class="keyword">::</span><span class="default">callIt</span><span class="keyword">(</span><span class="string">'foo::doStuff'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The code would work fine, if we replaced the '$callback()' with 'call_user_func($callback)' or if we used the array ['foo', 'doStuff'] as the callback instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="116640">  <div class="votes">
    <div id="Vu116640">
    <a href="/manual/vote-note.php?id=116640&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116640">
    <a href="/manual/vote-note.php?id=116640&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116640" title="76% like this...">
    185
    </div>
  </div>
  <a href="#116640" class="name">
  <strong class="user"><em>edanschwartz at gmail dot com</em></strong></a><a class="genanchor" href="#116640"> &para;</a><div class="date" title="2015-02-02 06:13"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116640">
<div class="phpcode"><code><span class="html">You can use 'self::methodName' as a callable, but this is dangerous. Consider this example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    public static function </span><span class="default">doAwesomeThings</span><span class="keyword">() {<br />        </span><span class="default">FunctionCaller</span><span class="keyword">::</span><span class="default">callIt</span><span class="keyword">(</span><span class="string">'self::someAwesomeMethod'</span><span class="keyword">);<br />    }<br /><br />    public static function </span><span class="default">someAwesomeMethod</span><span class="keyword">() {<br />        </span><span class="comment">// fantastic code goes here.<br />    </span><span class="keyword">}<br />}<br /><br />class </span><span class="default">FunctionCaller </span><span class="keyword">{<br />    public static function </span><span class="default">callIt</span><span class="keyword">(callable </span><span class="default">$func</span><span class="keyword">) {<br />        </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">Foo</span><span class="keyword">::</span><span class="default">doAwesomeThings</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />This results in an error:<br />Warning: class 'FunctionCaller' does not have a method 'someAwesomeMethod'.<br /><br />For this reason you should always use the full class name:<br /><span class="default">&lt;?php<br />FunctionCaller</span><span class="keyword">::</span><span class="default">callIt</span><span class="keyword">(</span><span class="string">'Foo::someAwesomeMethod'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I believe this is because there is no way for FunctionCaller to know that the string 'self' at one point referred to to `Foo`.</span></code></div>
  </div>
 </div>
  <div class="note" id="112341">  <div class="votes">
    <div id="Vu112341">
    <a href="/manual/vote-note.php?id=112341&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112341">
    <a href="/manual/vote-note.php?id=112341&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112341" title="78% like this...">
    175
    </div>
  </div>
  <a href="#112341" class="name">
  <strong class="user"><em>metamarkers at gmail dot com</em></strong></a><a class="genanchor" href="#112341"> &para;</a><div class="date" title="2013-06-03 07:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112341">
<div class="phpcode"><code><span class="html">you can pass an object as a callable if its class defines the __invoke() magic method..</span></code></div>
  </div>
 </div>
  <div class="note" id="118032">  <div class="votes">
    <div id="Vu118032">
    <a href="/manual/vote-note.php?id=118032&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118032">
    <a href="/manual/vote-note.php?id=118032&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118032" title="84% like this...">
    118
    </div>
  </div>
  <a href="#118032" class="name">
  <strong class="user"><em>mariano dot REMOVE dot perez dot rodriguez at gmail dot com</em></strong></a><a class="genanchor" href="#118032"> &para;</a><div class="date" title="2015-09-21 07:45"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118032">
<div class="phpcode"><code><span class="html">I needed a function that would determine the type of callable being passed, and, eventually,<br />normalized it to some extent. Here's what I came up with:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * The callable types and normalizations are given in the table below:<br /> *<br /> *  Callable                        | Normalization                   | Type<br /> * ---------------------------------+---------------------------------+--------------<br /> *  function (...) use (...) {...}  | function (...) use (...) {...}  | 'closure'<br /> *  $object                         | $object                         | 'invocable'<br /> *  "function"                      | "function"                      | 'function'<br /> *  "class::method"                 | ["class", "method"]             | 'static'<br /> *  ["class", "parent::method"]     | ["parent of class", "method"]   | 'static'<br /> *  ["class", "self::method"]       | ["class", "method"]             | 'static'<br /> *  ["class", "method"]             | ["class", "method"]             | 'static'<br /> *  [$object, "parent::method"]     | [$object, "parent::method"]     | 'object'<br /> *  [$object, "self::method"]       | [$object, "method"]             | 'object'<br /> *  [$object, "method"]             | [$object, "method"]             | 'object'<br /> * ---------------------------------+---------------------------------+--------------<br /> *  other callable                  | idem                            | 'unknown'<br /> * ---------------------------------+---------------------------------+--------------<br /> *  not a callable                  | null                            | false<br /> *<br /> * If the "strict" parameter is set to true, additional checks are<br /> * performed, in particular:<br /> *  - when a callable string of the form "class::method" or a callable array<br /> *    of the form ["class", "method"] is given, the method must be a static one,<br /> *  - when a callable array of the form [$object, "method"] is given, the<br /> *    method must be a non-static one.<br /> *<br /> */<br /></span><span class="keyword">function </span><span class="default">callableType</span><span class="keyword">(</span><span class="default">$callable</span><span class="keyword">, </span><span class="default">$strict </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">, callable&amp; </span><span class="default">$norm </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />  if (!</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$callable</span><span class="keyword">)) {<br />    switch (</span><span class="default">true</span><span class="keyword">) {<br />      case </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$callable</span><span class="keyword">):<br />        </span><span class="default">$norm </span><span class="keyword">= </span><span class="default">$callable</span><span class="keyword">;<br />        return </span><span class="string">'Closure' </span><span class="keyword">=== </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$callable</span><span class="keyword">) ? </span><span class="string">'closure' </span><span class="keyword">: </span><span class="string">'invocable'</span><span class="keyword">;<br />      case </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$callable</span><span class="keyword">):<br />        </span><span class="default">$m    </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'~^(?&lt;class&gt;[a-z_][a-z0-9_]*)::(?&lt;method&gt;[a-z_][a-z0-9_]*)$~i'</span><span class="keyword">, </span><span class="default">$callable</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">)) {<br />          list(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">) = [</span><span class="default">$m</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="string">'method'</span><span class="keyword">]];<br />          if (!</span><span class="default">$strict </span><span class="keyword">|| (new </span><span class="default">\ReflectionMethod</span><span class="keyword">(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">))-&gt;</span><span class="default">isStatic</span><span class="keyword">()) {<br />            </span><span class="default">$norm </span><span class="keyword">= [</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">];<br />            return </span><span class="string">'static'</span><span class="keyword">;<br />          }<br />        } else {<br />          </span><span class="default">$norm </span><span class="keyword">= </span><span class="default">$callable</span><span class="keyword">;<br />          return </span><span class="string">'function'</span><span class="keyword">;<br />        }<br />        break;<br />      case </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$callable</span><span class="keyword">):<br />        </span><span class="default">$m </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'~^(:?(?&lt;reference&gt;self|parent)::)?(?&lt;method&gt;[a-z_][a-z0-9_]*)$~i'</span><span class="keyword">, </span><span class="default">$callable</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">)) {<br />          if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$callable</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) {<br />            if (</span><span class="string">'parent' </span><span class="keyword">=== </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="string">'reference'</span><span class="keyword">])) {<br />              list(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">) = [</span><span class="default">get_parent_class</span><span class="keyword">(</span><span class="default">$callable</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]), </span><span class="default">$m</span><span class="keyword">[</span><span class="string">'method'</span><span class="keyword">]];<br />            } else {<br />              list(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">) = [</span><span class="default">$callable</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="string">'method'</span><span class="keyword">]];<br />            }<br />            if (!</span><span class="default">$strict </span><span class="keyword">|| (new </span><span class="default">\ReflectionMethod</span><span class="keyword">(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">))-&gt;</span><span class="default">isStatic</span><span class="keyword">()) {<br />              </span><span class="default">$norm </span><span class="keyword">= [</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">];<br />              return </span><span class="string">'static'</span><span class="keyword">;<br />            }<br />          } else {<br />            if (</span><span class="string">'self' </span><span class="keyword">=== </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="string">'reference'</span><span class="keyword">])) {<br />              list(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">) = [</span><span class="default">$callable</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$m</span><span class="keyword">[</span><span class="string">'method'</span><span class="keyword">]];<br />            } else {<br />              list(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">) = </span><span class="default">$callable</span><span class="keyword">;<br />            }<br />            if (!</span><span class="default">$strict </span><span class="keyword">|| !(new </span><span class="default">\ReflectionMethod</span><span class="keyword">(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">))-&gt;</span><span class="default">isStatic</span><span class="keyword">()) {<br />              </span><span class="default">$norm </span><span class="keyword">= [</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">];<br />              return </span><span class="string">'object'</span><span class="keyword">;<br />            }<br />          }<br />        }<br />        break;<br />    }<br />    </span><span class="default">$norm </span><span class="keyword">= </span><span class="default">$callable</span><span class="keyword">;<br />    return </span><span class="string">'unknown'</span><span class="keyword">;<br />  }<br />  </span><span class="default">$norm </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Hope someone else finds it useful.</span></code></div>
  </div>
 </div>
  <div class="note" id="119166">  <div class="votes">
    <div id="Vu119166">
    <a href="/manual/vote-note.php?id=119166&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119166">
    <a href="/manual/vote-note.php?id=119166&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119166" title="70% like this...">
    24
    </div>
  </div>
  <a href="#119166" class="name">
  <strong class="user"><em>bradyn at NOSPAM dot bradynpoulsen dot com</em></strong></a><a class="genanchor" href="#119166"> &para;</a><div class="date" title="2016-04-14 01:22"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119166">
<div class="phpcode"><code><span class="html">When trying to make a callable from a function name located in a namespace, you MUST give the fully qualified function name (regardless of the current namespace or use statements).<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace </span><span class="default">MyNamespace</span><span class="keyword">;<br /><br />function </span><span class="default">doSomethingFancy</span><span class="keyword">(</span><span class="default">$arg1</span><span class="keyword">)<br />{<br />    </span><span class="comment">// do something...<br /></span><span class="keyword">}<br /><br /></span><span class="default">$values </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">];<br /><br /></span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'doSomethingFancy'</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">);<br /></span><span class="comment">// array_map() expects parameter 1 to be a valid callback, function 'doSomethingFancy' not found or invalid function name<br /><br /></span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'MyNamespace\doSomethingFancy'</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">);<br /></span><span class="comment">// =&gt; [..., ..., ...]</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125947">  <div class="votes">
    <div id="Vu125947">
    <a href="/manual/vote-note.php?id=125947&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125947">
    <a href="/manual/vote-note.php?id=125947&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125947" title="68% like this...">
    11
    </div>
  </div>
  <a href="#125947" class="name">
  <strong class="user"><em>InvisibleSmiley</em></strong></a><a class="genanchor" href="#125947"> &para;</a><div class="date" title="2021-03-22 10:20"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125947">
<div class="phpcode"><code><span class="html">If you pass a callable method to a function with a callable type declaration, the error message is misleading:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">X </span><span class="keyword">{<br />    protected function </span><span class="default">foo</span><span class="keyword">(): </span><span class="default">void </span><span class="keyword">{}<br />}<br /><br />function </span><span class="default">bar</span><span class="keyword">(callable </span><span class="default">$c</span><span class="keyword">) {}<br /><br /></span><span class="default">$x </span><span class="keyword">= new </span><span class="default">X</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= [</span><span class="default">$x</span><span class="keyword">, </span><span class="string">'foo'</span><span class="keyword">];<br /></span><span class="default">bar</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Error message will be something like "Argument #1 ($c) must be of type callable, array given" while the actual problem here is only the visibility of method "foo". All you need to do is changing it to public (or use a different approach, e.g. with a Closure).</span></code></div>
  </div>
 </div>
  <div class="note" id="124054">  <div class="votes">
    <div id="Vu124054">
    <a href="/manual/vote-note.php?id=124054&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124054">
    <a href="/manual/vote-note.php?id=124054&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124054" title="61% like this...">
    6
    </div>
  </div>
  <a href="#124054" class="name">
  <strong class="user"><em>gulaschsuppe2 at gmail dot com</em></strong></a><a class="genanchor" href="#124054"> &para;</a><div class="date" title="2019-07-21 01:53"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124054">
<div class="phpcode"><code><span class="html">I tried many possible ways of calling functions by function name directly and assigned to a variable on 3v4l. Not mentioned yet, it is possible to use an array as a caller, at least since PHP 7.1.25. The following script contains all the information I gained:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Call function via function name:<br />    // Basics:<br />        // A function can also be called by using its string name:<br />        </span><span class="keyword">function </span><span class="default">callbackFunc</span><span class="keyword">() {<br />            echo </span><span class="string">'Hello World'</span><span class="keyword">;<br />        }<br /><br />        </span><span class="string">'callbackFunc'</span><span class="keyword">(); </span><span class="comment">// Hello World<br />                            <br />        // A function can also be called if its name is assigned to a variable:<br />            </span><span class="keyword">function </span><span class="default">callbackFunc</span><span class="keyword">() {<br />                echo </span><span class="string">'Hello World'</span><span class="keyword">;<br />            }<br /><br />            </span><span class="default">$funcName </span><span class="keyword">= </span><span class="string">'callbackFunc'</span><span class="keyword">;<br />            </span><span class="default">$funcName</span><span class="keyword">(); </span><span class="comment">// Hello World<br /><br />    // Static class method:<br />        // It is also possible to call a public static class method via 'ClassName::functioName' notation:<br />            </span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />                public static function </span><span class="default">callbackMethod</span><span class="keyword">() {<br />                    echo </span><span class="string">"Hello World\n"</span><span class="keyword">;<br />                }<br />            }<br />            </span><span class="string">'A::callbackMethod'</span><span class="keyword">(); </span><span class="comment">// Hello World<br /><br />            </span><span class="default">$funcName </span><span class="keyword">= </span><span class="string">'A::callbackMethod'</span><span class="keyword">;<br />            </span><span class="default">$funcName</span><span class="keyword">(); </span><span class="comment">// Hello World<br /><br />    // Non static class method:<br />        // It is also possible to call non static class methods by creating an array which first element is the object the method should be called on and the second element is the non static method to be called. The array can directly be used as a caller:<br />            </span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />                private </span><span class="default">$prop </span><span class="keyword">= </span><span class="string">"Hello World\n"</span><span class="keyword">;<br /><br />                public function </span><span class="default">callbackMethod</span><span class="keyword">() {<br />                    echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prop</span><span class="keyword">;<br />                }<br />            }<br /><br />            </span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">;<br />            [</span><span class="default">$a</span><span class="keyword">, </span><span class="string">'callbackMethod'</span><span class="keyword">]();<br />            </span><span class="default">$funcCallArr </span><span class="keyword">= [</span><span class="default">$a</span><span class="keyword">, </span><span class="string">'callbackMethod'</span><span class="keyword">];<br />            </span><span class="default">$funcCallArr</span><span class="keyword">();<br /><br />        </span><span class="comment">// Of course this also works inside the class with '$this':<br />            </span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br />                private function </span><span class="default">privCallback</span><span class="keyword">() {<br />                    echo </span><span class="string">'Private'</span><span class="keyword">;<br />                }<br /><br />                public function </span><span class="default">privCallbackCaller</span><span class="keyword">(</span><span class="default">$funcName</span><span class="keyword">) {<br />                    [</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$funcName</span><span class="keyword">]();<br />                }<br />            }<br /><br />            (new </span><span class="default">A</span><span class="keyword">)-&gt;</span><span class="default">privCallbackCaller</span><span class="keyword">(</span><span class="string">'privCallback'</span><span class="keyword">); </span><span class="comment">// Private<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119159">  <div class="votes">
    <div id="Vu119159">
    <a href="/manual/vote-note.php?id=119159&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119159">
    <a href="/manual/vote-note.php?id=119159&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119159" title="52% like this...">
    2
    </div>
  </div>
  <a href="#119159" class="name">
  <strong class="user"><em>pawel dot tadeusz dot niedzielski at gmail dot com</em></strong></a><a class="genanchor" href="#119159"> &para;</a><div class="date" title="2016-04-12 02:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119159">
<div class="phpcode"><code><span class="html">@edanschwartz at gmail dot com<br /><br />You can use ::class property to always indicate the class you're in when using static methods:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    public static function </span><span class="default">doAwesomeThings</span><span class="keyword">() {<br />        </span><span class="default">FunctionCaller</span><span class="keyword">::</span><span class="default">callIt</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::class . </span><span class="string">'::someAwesomeMethod'</span><span class="keyword">);<br />    }<br /><br />    public static function </span><span class="default">someAwesomeMethod</span><span class="keyword">() {<br />        </span><span class="comment">// fantastic code goes here.<br />    </span><span class="keyword">}<br />}<br /><br />class </span><span class="default">FunctionCaller </span><span class="keyword">{<br />    public static function </span><span class="default">callIt</span><span class="keyword">(callable </span><span class="default">$func</span><span class="keyword">) {<br />        </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">Foo</span><span class="keyword">::</span><span class="default">doAwesomeThings</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123449">  <div class="votes">
    <div id="Vu123449">
    <a href="/manual/vote-note.php?id=123449&amp;page=language.types.callable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123449">
    <a href="/manual/vote-note.php?id=123449&amp;page=language.types.callable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123449" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123449" class="name">
  <strong class="user"><em>chris dot rutledge at gmail dot com</em></strong></a><a class="genanchor" href="#123449"> &para;</a><div class="date" title="2018-12-18 10:12"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123449">
<div class="phpcode"><code><span class="html">Having read this line in the manual above, <br /><br />"A method of an instantiated object is passed as an array containing an object at index 0 and the method name at index 1. Accessing protected and private methods from within a class is allowed."<br /><br />I decided to do some testing to see if I could access private methods using the call_user_func methods. Thankfully not, but for completeness here is my test which also covers using static and object contexts<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{<br />    <br />    public static </span><span class="default">$isInstance </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$isInstance </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">bar</span><span class="keyword">() {<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$isInstance</span><span class="keyword">);<br />        echo </span><span class="default">__METHOD__</span><span class="keyword">;<br />    }<br />    <br />    private function </span><span class="default">baz</span><span class="keyword">() {<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$isInstance</span><span class="keyword">);<br />        echo </span><span class="default">__METHOD__</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">qux</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">baz</span><span class="keyword">();<br />    }<br />    <br />    public function </span><span class="default">quux</span><span class="keyword">() {<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">baz</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="default">call_user_func</span><span class="keyword">([</span><span class="string">'foo'</span><span class="keyword">,</span><span class="string">'bar'</span><span class="keyword">]);    </span><span class="comment">//fase, foo:bar<br /><br /></span><span class="default">call_user_func</span><span class="keyword">([</span><span class="string">'foo'</span><span class="keyword">,</span><span class="string">'baz'</span><span class="keyword">]);  </span><span class="comment">//warning, cannot access private method<br /><br /></span><span class="default">call_user_func</span><span class="keyword">([</span><span class="string">'foo'</span><span class="keyword">,</span><span class="string">'quux'</span><span class="keyword">]); </span><span class="comment">//false, foo::baz<br /><br /></span><span class="default">call_user_func</span><span class="keyword">([</span><span class="string">'foo'</span><span class="keyword">,</span><span class="string">'qux'</span><span class="keyword">]);  </span><span class="comment">//fatal, Using $this when not in object context <br /><br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">;<br /><br /></span><span class="default">call_user_func</span><span class="keyword">([</span><span class="default">$foo</span><span class="keyword">,</span><span class="string">'bar'</span><span class="keyword">]);    </span><span class="comment">//true, foo::bar<br /></span><span class="default">call_user_func</span><span class="keyword">([</span><span class="default">$foo</span><span class="keyword">,</span><span class="string">'baz'</span><span class="keyword">]);    </span><span class="comment">//warning, cannot access private method<br /></span><span class="default">call_user_func</span><span class="keyword">([</span><span class="default">$foo</span><span class="keyword">,</span><span class="string">'qux'</span><span class="keyword">]);    </span><span class="comment">//true, foo::baz<br /><br /></span><span class="default">call_user_func</span><span class="keyword">([</span><span class="string">'foo'</span><span class="keyword">,</span><span class="string">'bar'</span><span class="keyword">]);  </span><span class="comment">//true, foo::bar (static call, yet $isInstance is true)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.types.callable&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.callable.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.types.php">Types</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.types.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-system.php" title="Type System">Type System</a>
                        </li>
                                                <li class="">
                            <a href="language.types.null.php" title="NULL">NULL</a>
                        </li>
                                                <li class="">
                            <a href="language.types.boolean.php" title="Booleans">Booleans</a>
                        </li>
                                                <li class="">
                            <a href="language.types.integer.php" title="Integers">Integers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.float.php" title="Floating point numbers">Floating point numbers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.string.php" title="Strings">Strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.numeric-strings.php" title="Numeric strings">Numeric strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.array.php" title="Arrays">Arrays</a>
                        </li>
                                                <li class="">
                            <a href="language.types.object.php" title="Objects">Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.types.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.resource.php" title="Resources">Resources</a>
                        </li>
                                                <li class="current">
                            <a href="language.types.callable.php" title="Callbacks / Callables">Callbacks / Callables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.mixed.php" title="Mixed">Mixed</a>
                        </li>
                                                <li class="">
                            <a href="language.types.void.php" title="Void">Void</a>
                        </li>
                                                <li class="">
                            <a href="language.types.never.php" title="Never">Never</a>
                        </li>
                                                <li class="">
                            <a href="language.types.relative-class-types.php" title="Relative class types">Relative class types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.singleton.php" title="Singleton types">Singleton types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.iterable.php" title="Iterables">Iterables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.declarations.php" title="Type declarations">Type declarations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-juggling.php" title="Type Juggling">Type Juggling</a>
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
