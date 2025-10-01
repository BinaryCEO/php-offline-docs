<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: get_defined_functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.get-defined-functions.php">
 <link rel="shorturl" href="https://www.php.net/get-defined-functions">
 <link rel="alternate" href="https://www.php.net/get-defined-functions" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.funchand.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.function-exists.php">
 <link rel="next" href="https://www.php.net/manual/en/function.register-shutdown-function.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.get-defined-functions.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.get-defined-functions.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.get-defined-functions.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.get-defined-functions.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.get-defined-functions.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.get-defined-functions.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.get-defined-functions.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.get-defined-functions.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.get-defined-functions.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.get-defined-functions.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.get-defined-functions.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns an array of all defined functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: get_defined_functions - Manual" />
<meta name="twitter:description" content="Returns an array of all defined functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: get_defined_functions - Manual" />
<meta itemprop="description" content="Returns an array of all defined functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns an array of all defined functions" />

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
        <a href="function.register-shutdown-function.php">
          register_shutdown_function &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.function-exists.php">
          &laquo; function_exists        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.funchand.php'>Function Handling</a></li>      <li><a href='ref.funchand.php'>Function handling Functions</a></li>      </ul>
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
            <option value='en/function.get-defined-functions.php' selected="selected">English</option>
            <option value='de/function.get-defined-functions.php'>German</option>
            <option value='es/function.get-defined-functions.php'>Spanish</option>
            <option value='fr/function.get-defined-functions.php'>French</option>
            <option value='it/function.get-defined-functions.php'>Italian</option>
            <option value='ja/function.get-defined-functions.php'>Japanese</option>
            <option value='pt_BR/function.get-defined-functions.php'>Brazilian Portuguese</option>
            <option value='ru/function.get-defined-functions.php'>Russian</option>
            <option value='tr/function.get-defined-functions.php'>Turkish</option>
            <option value='uk/function.get-defined-functions.php'>Ukrainian</option>
            <option value='zh/function.get-defined-functions.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.get-defined-functions" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">get_defined_functions</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">get_defined_functions</span> &mdash; <span class="dc-title">Returns an array of all defined functions</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.get-defined-functions-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>get_defined_functions</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$exclude_disabled</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Gets an array of all defined functions.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.get-defined-functions-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">exclude_disabled</code></dt>
    <dd>
     <p class="para">
      Whether disabled functions should be excluded from the return value.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.get-defined-functions-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a multidimensional array containing a list of all defined
   functions, both built-in (internal) and user-defined. The internal
   functions will be accessible via <var class="varname">$arr["internal"]</var>, and
   the user defined ones using <var class="varname">$arr["user"]</var> (see example
   below).
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.get-defined-functions-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.0.0</td>
      <td>
       The default value of the <code class="parameter">exclude_disabled</code> parameter
       has been changed from <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
      </td>
     </tr>

     <tr>
      <td>7.0.15, 7.1.1</td>
      <td>
       The <code class="parameter">exclude_disabled</code> parameter has been added.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.get-defined-functions-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5408">
    <p><strong>Example #1 <span class="function"><strong>get_defined_functions()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">myrow</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #DD0000">"&lt;tr&gt;&lt;th&gt;</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">&lt;/th&gt;&lt;td&gt;</span><span style="color: #0000BB">$data</span><span style="color: #DD0000">&lt;/td&gt;&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= </span><span style="color: #0000BB">get_defined_functions</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$arr</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [internal] =&gt; Array
        (
            [0] =&gt; zend_version
            [1] =&gt; func_num_args
            [2] =&gt; func_get_arg
            [3] =&gt; func_get_args
            [4] =&gt; strlen
            [5] =&gt; strcmp
            [6] =&gt; strncmp
            ...
            [750] =&gt; bcscale
            [751] =&gt; bccomp
        )

    [user] =&gt; Array
        (
            [0] =&gt; myrow
        )

)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.get-defined-functions-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.function-exists.php" class="function" rel="rdfs-seeAlso">function_exists()</a> - Return true if the given function has been defined</span></li>
    <li><span class="function"><a href="function.get-defined-vars.php" class="function" rel="rdfs-seeAlso">get_defined_vars()</a> - Returns an array of all defined variables</span></li>
    <li><span class="function"><a href="function.get-defined-constants.php" class="function" rel="rdfs-seeAlso">get_defined_constants()</a> - Returns an associative array with the names of all the constants and their values</span></li>
    <li><span class="function"><a href="function.get-declared-classes.php" class="function" rel="rdfs-seeAlso">get_declared_classes()</a> - Returns an array with the name of the defined classes</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/funchand/functions/get-defined-functions.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.get-defined-functions%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.get-defined-functions&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-defined-functions.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112248">  <div class="votes">
    <div id="Vu112248">
    <a href="/manual/vote-note.php?id=112248&amp;page=function.get-defined-functions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112248">
    <a href="/manual/vote-note.php?id=112248&amp;page=function.get-defined-functions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112248" title="74% like this...">
    15
    </div>
  </div>
  <a href="#112248" class="name">
  <strong class="user"><em>kkuczok at gmail dot com</em></strong></a><a class="genanchor" href="#112248"> &para;</a><div class="date" title="2013-05-22 08:14"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112248">
<div class="phpcode"><code><span class="html">You can list all arguments using ReflectionFunction class. It's not necessary to parse selected files/files as suggested by Nguyet.Duc.<br /><br /><a href="http://php.net/manual/pl/class.reflectionfunction.php" rel="nofollow" target="_blank">http://php.net/manual/pl/class.reflectionfunction.php</a><br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">(&amp;</span><span class="default">$bar</span><span class="keyword">, </span><span class="default">$big</span><span class="keyword">, </span><span class="default">$small </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">) {}<br />function </span><span class="default">bar</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">) {}<br />function </span><span class="default">noparams</span><span class="keyword">() {}<br />function </span><span class="default">byrefandopt</span><span class="keyword">(&amp;</span><span class="default">$the </span><span class="keyword">= </span><span class="string">'one'</span><span class="keyword">) {}<br /><br /></span><span class="default">$functions </span><span class="keyword">= </span><span class="default">get_defined_functions</span><span class="keyword">();<br /></span><span class="default">$functions_list </span><span class="keyword">= array();<br />foreach (</span><span class="default">$functions</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">] as </span><span class="default">$func</span><span class="keyword">) {<br />        </span><span class="default">$f </span><span class="keyword">= new </span><span class="default">ReflectionFunction</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">);<br />        </span><span class="default">$args </span><span class="keyword">= array();<br />        foreach (</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">getParameters</span><span class="keyword">() as </span><span class="default">$param</span><span class="keyword">) {<br />                </span><span class="default">$tmparg </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />                if (</span><span class="default">$param</span><span class="keyword">-&gt;</span><span class="default">isPassedByReference</span><span class="keyword">()) </span><span class="default">$tmparg </span><span class="keyword">= </span><span class="string">'&amp;'</span><span class="keyword">;<br />                if (</span><span class="default">$param</span><span class="keyword">-&gt;</span><span class="default">isOptional</span><span class="keyword">()) {<br />                        </span><span class="default">$tmparg </span><span class="keyword">= </span><span class="string">'[' </span><span class="keyword">. </span><span class="default">$tmparg </span><span class="keyword">. </span><span class="string">'$' </span><span class="keyword">. </span><span class="default">$param</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() . </span><span class="string">' = ' </span><span class="keyword">. </span><span class="default">$param</span><span class="keyword">-&gt;</span><span class="default">getDefaultValue</span><span class="keyword">() . </span><span class="string">']'</span><span class="keyword">;<br />                } else {<br />                        </span><span class="default">$tmparg</span><span class="keyword">.= </span><span class="string">'&amp;' </span><span class="keyword">. </span><span class="default">$param</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">();<br />                }<br />                </span><span class="default">$args</span><span class="keyword">[] = </span><span class="default">$tmparg</span><span class="keyword">;<br />                unset (</span><span class="default">$tmparg</span><span class="keyword">);<br />        }<br />        </span><span class="default">$functions_list</span><span class="keyword">[] = </span><span class="string">'function ' </span><span class="keyword">. </span><span class="default">$func </span><span class="keyword">. </span><span class="string">' ( ' </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">) . </span><span class="string">' )' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$functions_list</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Output:<br />Array<br />(<br />    [0] =&gt; function foo ( &amp;&amp;bar, &amp;big, [$small = 1] )<br /><br />    [1] =&gt; function bar ( &amp;foo )<br /><br />    [2] =&gt; function noparams (  )<br /><br />    [3] =&gt; function byrefandopt ( [&amp;$the = one] )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="27074">  <div class="votes">
    <div id="Vu27074">
    <a href="/manual/vote-note.php?id=27074&amp;page=function.get-defined-functions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27074">
    <a href="/manual/vote-note.php?id=27074&amp;page=function.get-defined-functions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27074" title="81% like this...">
    10
    </div>
  </div>
  <a href="#27074" class="name">
  <strong class="user"><em>mIHATESPAMduskis at bates dot edu</em></strong></a><a class="genanchor" href="#27074"> &para;</a><div class="date" title="2002-11-21 02:47"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27074">
<div class="phpcode"><code><span class="html">At least with PHP 4.2.3 on a GNU/Linux/Apache platform, get_defined_functions() returns user-defined functions as all-lower case strings regardless of how the functions are capitalized when they are defined.<br /><br />Threw me for a loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="21971">  <div class="votes">
    <div id="Vu21971">
    <a href="/manual/vote-note.php?id=21971&amp;page=function.get-defined-functions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21971">
    <a href="/manual/vote-note.php?id=21971&amp;page=function.get-defined-functions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21971" title="80% like this...">
    6
    </div>
  </div>
  <a href="#21971" class="name">
  <strong class="user"><em>peten at spam dot me dot not dot frontiernet dot net</em></strong></a><a class="genanchor" href="#21971"> &para;</a><div class="date" title="2002-06-02 10:28"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21971">
<div class="phpcode"><code><span class="html">Here's a useful trick with the get_defined_functions function - show all available functions with a link to the documentation (you can even change the mirror it goes to):<br /><br /><span class="default">&lt;?php<br />  </span><span class="comment">// the php mirror <br />  </span><span class="default">$php_host </span><span class="keyword">= </span><span class="string">"<a href="http://us2.php.net/" rel="nofollow" target="_blank">http://us2.php.net/</a>"</span><span class="keyword">;<br /><br />  </span><span class="comment">// the number of cols in our table<br />  </span><span class="default">$num_cols </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /><br />  </span><span class="default">$ar </span><span class="keyword">= </span><span class="default">get_defined_functions</span><span class="keyword">();<br />  </span><span class="default">$int_funct </span><span class="keyword">= </span><span class="default">$ar</span><span class="keyword">[</span><span class="default">internal</span><span class="keyword">];<br />  </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$int_funct</span><span class="keyword">);<br />  </span><span class="default">$count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$int_funct</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>&lt;html&gt;<br /> &lt;head&gt;<br />  &lt;title&gt;<br />   Available PHP Functions<br />  &lt;/title&gt;<br /> &lt;/head&gt;<br /> &lt;body&gt;<br />  &lt;p&gt;<br />   <span class="default">&lt;?php </span><span class="keyword">print </span><span class="default">$count</span><span class="keyword">; </span><span class="default">?&gt;</span> functions     <br />    available on <br />    <span class="default">&lt;?php <br />      </span><span class="keyword">print </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="default">SERVER_NAME</span><span class="keyword">]; <br />     </span><span class="default">?&gt;<br /></span>   (&lt;a href="<span class="default">&lt;?php </span><span class="keyword">print </span><span class="default">$php_host</span><span class="keyword">;</span><span class="default">?&gt;</span>" <br />    target="phpwin"&gt;php&lt;/a&gt;<br />    version <br />    <span class="default">&lt;?php </span><span class="keyword">print </span><span class="default">phpversion</span><span class="keyword">(); </span><span class="default">?&gt;</span>)<br />  &lt;/p&gt;<br />  &lt;table align="center" border="2"&gt;<br />   &lt;tr&gt;  <br /><span class="default">&lt;?php<br />  </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$count</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$doc </span><span class="keyword">= </span><span class="default">$php_host <br />     </span><span class="keyword">. </span><span class="string">"manual/en/function."<br />     </span><span class="keyword">. </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$int_funct</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="string">"_"</span><span class="keyword">, </span><span class="string">"-"</span><span class="keyword">) <br />     . </span><span class="string">".php"</span><span class="keyword">;<br />    print </span><span class="string">"    &lt;td&gt;&lt;a href=\"" </span><span class="keyword">. </span><span class="default">$doc <br />     </span><span class="keyword">. </span><span class="string">"\" target=\"phpwin\"&gt;" <br />     </span><span class="keyword">. </span><span class="default">$int_funct</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] <br />     . </span><span class="string">"&lt;/a&gt;&lt;/td&gt;\n"</span><span class="keyword">;<br />    if((</span><span class="default">$i </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">) <br />     &amp;&amp; ((</span><span class="default">$i</span><span class="keyword">+</span><span class="default">$num_cols</span><span class="keyword">)%</span><span class="default">$num_cols</span><span class="keyword">==(</span><span class="default">$num_cols</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">)))   <br />      print </span><span class="string">"   &lt;/tr&gt;\n   &lt;tr&gt;\n"</span><span class="keyword">;<br />    }<br />  for(</span><span class="default">$i</span><span class="keyword">=(</span><span class="default">$num_cols</span><span class="keyword">-(</span><span class="default">$count</span><span class="keyword">%</span><span class="default">$num_cols</span><span class="keyword">));</span><span class="default">$i</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">--)  <br />    print </span><span class="string">"    &lt;td&gt;&amp;nbsp;&lt;/td&gt;\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>  &lt;/table&gt;<br /> &lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="63804">  <div class="votes">
    <div id="Vu63804">
    <a href="/manual/vote-note.php?id=63804&amp;page=function.get-defined-functions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63804">
    <a href="/manual/vote-note.php?id=63804&amp;page=function.get-defined-functions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63804" title="69% like this...">
    5
    </div>
  </div>
  <a href="#63804" class="name">
  <strong class="user"><em>berchentreff at berchentreff dot de</em></strong></a><a class="genanchor" href="#63804"> &para;</a><div class="date" title="2006-03-31 05:46"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63804">
<div class="phpcode"><code><span class="html">look at here, list all the defined function on your php-Version and give as well formatted output width links onto the php-manual:<br /><br />&lt;html&gt;&lt;head&gt;<br />&lt;style type="text/css"&gt;&lt;!--<br />li{font-family:Verdana,Arail,sans-serif;width:500px;margin-top:7px;}<br />a{padding:4px;}<br />a.a1{font-size:12px;background-color:#CCCCCC;color:#663300;}<br />a.a1:hover{background-color:#663300;color:#CCCCCC;}<br />a.a1:visited{background-color:#fff;color:#999;}<br />a.a1:visited:hover{background-color:#fff;color:#999;}<br />a.a0{font-size:12px;background-color:#CCCCFF;color:#663399;}<br />a.a0:hover{background-color:#663399;color:#CCCCFF;}<br />a.a0:visited{background-color:#ffC;color:#999;}<br />a.a0:visited:hover{background-color:#ffC;color:#999;}<br />--&gt;&lt;/style&gt;<br />&lt;/head&gt;&lt;body style="background-color:#999;"&gt;<br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= </span><span class="default">get_defined_functions</span><span class="keyword">();<br /><br />foreach(</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$zeile</span><span class="keyword">){<br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$zeile</span><span class="keyword">);</span><span class="default">$s</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />foreach(</span><span class="default">$zeile </span><span class="keyword">as </span><span class="default">$bzeile</span><span class="keyword">){<br /></span><span class="default">$s</span><span class="keyword">=(</span><span class="default">$s</span><span class="keyword">)?</span><span class="default">0</span><span class="keyword">:</span><span class="default">1</span><span class="keyword">;<br />echo </span><span class="string">"&lt;li&gt;&lt;a class='a"</span><span class="keyword">.</span><span class="default">$s</span><span class="keyword">.</span><span class="string">"'  href='<a href="http://de.php.net/" rel="nofollow" target="_blank">http://de.php.net/</a>"</span><span class="keyword">.</span><span class="default">$bzeile</span><span class="keyword">.</span><span class="string">"'&gt;"</span><span class="keyword">.</span><span class="default">$bzeile</span><span class="keyword">.</span><span class="string">"&lt;/a&gt;&lt;/li&gt;"</span><span class="keyword">;}<br />}<br /></span><span class="default">?&gt;<br /></span>&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="118213">  <div class="votes">
    <div id="Vu118213">
    <a href="/manual/vote-note.php?id=118213&amp;page=function.get-defined-functions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118213">
    <a href="/manual/vote-note.php?id=118213&amp;page=function.get-defined-functions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118213" title="75% like this...">
    2
    </div>
  </div>
  <a href="#118213" class="name">
  <strong class="user"><em>Muneeb Aslam</em></strong></a><a class="genanchor" href="#118213"> &para;</a><div class="date" title="2015-10-27 12:30"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118213">
<div class="phpcode"><code><span class="html">This is rather a simple non-confusing script to get the function names linked to its manual page on php.net. Hope it helps someone. Commented script is self explainatory<br /><br /><span class="default">&lt;?php<br />    <br />    </span><span class="comment">/*declare a variable to php manual of functions.<br />    change the $lng to the region you want it for,<br />    i-e en/es/de etc etc */<br />    </span><span class="default">$lng </span><span class="keyword">= </span><span class="string">"es"</span><span class="keyword">;<br />    </span><span class="default">$url </span><span class="keyword">= </span><span class="string">"<a href="http://www.php.net/manual/" rel="nofollow" target="_blank">http://www.php.net/manual/</a>"</span><span class="keyword">.</span><span class="default">$lng</span><span class="keyword">.</span><span class="string">"/function."</span><span class="keyword">;<br />    <br />    </span><span class="comment">// get defined functions in a variable (it will be a 2D array)<br />    </span><span class="default">$functions </span><span class="keyword">= </span><span class="default">get_defined_functions</span><span class="keyword">();<br />    <br />    </span><span class="comment">// Run nested foreach to get the function names<br />    </span><span class="keyword">foreach(</span><span class="default">$functions </span><span class="keyword">as </span><span class="default">$function</span><span class="keyword">){<br />        foreach (</span><span class="default">$function </span><span class="keyword">as </span><span class="default">$functionName</span><span class="keyword">){<br />            <br />            </span><span class="comment">/* Since php manual is using hyphens instead of underscores<br />            for functions, we will convert underscores to hyphen whereever<br />            there is one. */<br />            </span><span class="keyword">if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$functionName</span><span class="keyword">,</span><span class="string">"_"</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">){<br />                </span><span class="default">$functionForURL </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"_"</span><span class="keyword">,</span><span class="string">"-"</span><span class="keyword">,</span><span class="default">$functionName</span><span class="keyword">);<br />            } else {<br />                </span><span class="default">$functionForURL </span><span class="keyword">= </span><span class="default">$functionName</span><span class="keyword">;<br />            }<br />            <br />            </span><span class="comment">/* echo the link */<br />            </span><span class="keyword">echo </span><span class="string">"&lt;a href='"</span><span class="keyword">.</span><span class="default">$url</span><span class="keyword">.</span><span class="default">$functionForURL</span><span class="keyword">.</span><span class="string">".php'&gt;"</span><span class="keyword">.</span><span class="default">$functionName</span><span class="keyword">.</span><span class="string">"&lt;/a&gt;&lt;br /&gt;"</span><span class="keyword">;<br />        }<br />    }<br />    <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.get-defined-functions&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-defined-functions.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.funchand.php">Function handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.call-user-func.php" title="call_&#8203;user_&#8203;func">call_&#8203;user_&#8203;func</a>
                        </li>
                                                <li class="">
                            <a href="function.call-user-func-array.php" title="call_&#8203;user_&#8203;func_&#8203;array">call_&#8203;user_&#8203;func_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.forward-static-call.php" title="forward_&#8203;static_&#8203;call">forward_&#8203;static_&#8203;call</a>
                        </li>
                                                <li class="">
                            <a href="function.forward-static-call-array.php" title="forward_&#8203;static_&#8203;call_&#8203;array">forward_&#8203;static_&#8203;call_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.func-get-arg.php" title="func_&#8203;get_&#8203;arg">func_&#8203;get_&#8203;arg</a>
                        </li>
                                                <li class="">
                            <a href="function.func-get-args.php" title="func_&#8203;get_&#8203;args">func_&#8203;get_&#8203;args</a>
                        </li>
                                                <li class="">
                            <a href="function.func-num-args.php" title="func_&#8203;num_&#8203;args">func_&#8203;num_&#8203;args</a>
                        </li>
                                                <li class="">
                            <a href="function.function-exists.php" title="function_&#8203;exists">function_&#8203;exists</a>
                        </li>
                                                <li class="current">
                            <a href="function.get-defined-functions.php" title="get_&#8203;defined_&#8203;functions">get_&#8203;defined_&#8203;functions</a>
                        </li>
                                                <li class="">
                            <a href="function.register-shutdown-function.php" title="register_&#8203;shutdown_&#8203;function">register_&#8203;shutdown_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.register-tick-function.php" title="register_&#8203;tick_&#8203;function">register_&#8203;tick_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.unregister-tick-function.php" title="unregister_&#8203;tick_&#8203;function">unregister_&#8203;tick_&#8203;function</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.create-function.php" title="create_&#8203;function">create_&#8203;function</a>
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
