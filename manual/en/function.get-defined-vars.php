<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: get_defined_vars - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.get-defined-vars.php">
 <link rel="shorturl" href="https://www.php.net/get-defined-vars">
 <link rel="alternate" href="https://www.php.net/get-defined-vars" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.get-debug-type.php">
 <link rel="next" href="https://www.php.net/manual/en/function.get-resource-id.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.get-defined-vars.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.get-defined-vars.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.get-defined-vars.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.get-defined-vars.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.get-defined-vars.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.get-defined-vars.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.get-defined-vars.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.get-defined-vars.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.get-defined-vars.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.get-defined-vars.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.get-defined-vars.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns an array of all defined variables" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: get_defined_vars - Manual" />
<meta name="twitter:description" content="Returns an array of all defined variables" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: get_defined_vars - Manual" />
<meta itemprop="description" content="Returns an array of all defined variables" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns an array of all defined variables" />

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
        <a href="function.get-resource-id.php">
          get_resource_id &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.get-debug-type.php">
          &laquo; get_debug_type        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.var.php'>Variable handling</a></li>      <li><a href='ref.var.php'>Variable handling Functions</a></li>      </ul>
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
            <option value='en/function.get-defined-vars.php' selected="selected">English</option>
            <option value='de/function.get-defined-vars.php'>German</option>
            <option value='es/function.get-defined-vars.php'>Spanish</option>
            <option value='fr/function.get-defined-vars.php'>French</option>
            <option value='it/function.get-defined-vars.php'>Italian</option>
            <option value='ja/function.get-defined-vars.php'>Japanese</option>
            <option value='pt_BR/function.get-defined-vars.php'>Brazilian Portuguese</option>
            <option value='ru/function.get-defined-vars.php'>Russian</option>
            <option value='tr/function.get-defined-vars.php'>Turkish</option>
            <option value='uk/function.get-defined-vars.php'>Ukrainian</option>
            <option value='zh/function.get-defined-vars.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.get-defined-vars" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">get_defined_vars</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">get_defined_vars</span> &mdash; <span class="dc-title">
   Returns an array of all defined variables
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.get-defined-vars-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>get_defined_vars</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   This function returns a multidimensional array containing a list of
   all defined variables, be them environment, server or user-defined
   variables, within the scope that <span class="function"><strong>get_defined_vars()</strong></span> is
   called. 
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.get-defined-vars-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.get-defined-vars-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A multidimensional array with all the variables.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.get-defined-vars-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5641">
    <p><strong>Example #1 <span class="function"><strong>get_defined_vars()</strong></span> Example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$b </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">8</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= </span><span style="color: #0000BB">get_defined_vars</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// print $b<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">"b"</span><span style="color: #007700">]);<br /><br /></span><span style="color: #FF8000">/* print path to the PHP interpreter (if used as a CGI)<br /> * e.g. /usr/local/bin/php */<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">"_"</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">// print the command-line parameters if any<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">"argv"</span><span style="color: #007700">]);<br /><br /></span><span style="color: #FF8000">// print all the server vars<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">"_SERVER"</span><span style="color: #007700">]);<br /><br /></span><span style="color: #FF8000">// print all the available keys for the arrays of variables<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">get_defined_vars</span><span style="color: #007700">()));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.get-defined-vars-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.isset.php" class="function" rel="rdfs-seeAlso">isset()</a> - Determine if a variable is declared and is different than null</span></li>
    <li><span class="function"><a href="function.get-defined-functions.php" class="function" rel="rdfs-seeAlso">get_defined_functions()</a> - Returns an array of all defined functions</span></li>
    <li><span class="function"><a href="function.get-defined-constants.php" class="function" rel="rdfs-seeAlso">get_defined_constants()</a> - Returns an associative array with the names of all the constants and their values</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/get-defined-vars.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.get-defined-vars%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.get-defined-vars&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-defined-vars.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="69337">  <div class="votes">
    <div id="Vu69337">
    <a href="/manual/vote-note.php?id=69337&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69337">
    <a href="/manual/vote-note.php?id=69337&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69337" title="64% like this...">
    19
    </div>
  </div>
  <a href="#69337" class="name">
  <strong class="user"><em>zabmilenko at hotmail dot com</em></strong></a><a class="genanchor" href="#69337"> &para;</a><div class="date" title="2006-08-31 07:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69337">
<div class="phpcode"><code><span class="html">A little gotcha to watch out for:<br /><br />If you turn off RegisterGlobals and related, then use get_defined_vars(), you may see something like the following:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">Array<br />(<br />    [</span><span class="default">GLOBALS</span><span class="keyword">] =&gt; Array<br />        (<br />            [</span><span class="default">GLOBALS</span><span class="keyword">] =&gt; Array<br /> *</span><span class="default">RECURSION</span><span class="keyword">*<br />            [</span><span class="default">_POST</span><span class="keyword">] =&gt; Array()<br />            [</span><span class="default">_GET</span><span class="keyword">] =&gt; Array()<br />            [</span><span class="default">_COOKIE</span><span class="keyword">] =&gt; Array()<br />            [</span><span class="default">_FILES</span><span class="keyword">] =&gt; Array()<br />        )<br /><br />    [</span><span class="default">_POST</span><span class="keyword">] =&gt; Array()<br />    [</span><span class="default">_GET</span><span class="keyword">] =&gt; Array()<br />    [</span><span class="default">_COOKIE</span><span class="keyword">] =&gt; Array()<br />    [</span><span class="default">_FILES</span><span class="keyword">] =&gt; Array()<br /><br />)<br /></span><span class="default">?&gt;<br /></span><br />Notice that $_SERVER isn't there.  It seems that php only loads the superglobal $_SERVER if it is used somewhere.  You could do this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">print </span><span class="string">'&lt;pre&gt;' </span><span class="keyword">. </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">get_defined_vars</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">)) . </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />print </span><span class="string">'&lt;pre&gt;' </span><span class="keyword">. </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">)) . </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />And then $_SERVER will appear in both lists.  I guess it's not really a gotcha, because nothing bad will happen either way, but it's an interesting curiosity nonetheless.</span></code></div>
  </div>
 </div>
  <div class="note" id="111830">  <div class="votes">
    <div id="Vu111830">
    <a href="/manual/vote-note.php?id=111830&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111830">
    <a href="/manual/vote-note.php?id=111830&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111830" title="67% like this...">
    17
    </div>
  </div>
  <a href="#111830" class="name">
  <strong class="user"><em>ryanlwh at yahoo dot com</em></strong></a><a class="genanchor" href="#111830"> &para;</a><div class="date" title="2013-04-02 05:28"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111830">
<div class="phpcode"><code><span class="html">Since get_defined_vars() only gets the variables at the point you call the function, there is a simple way to get the variables defined within the current scope.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// The very top of your php script<br /></span><span class="default">$vars </span><span class="keyword">= </span><span class="default">get_defined_vars</span><span class="keyword">();<br /><br /></span><span class="comment">// Now do your stuff<br /></span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">;<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="string">'bar'</span><span class="keyword">;<br /><br /></span><span class="comment">// Get all the variables defined in current scope<br /></span><span class="default">$vars </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">get_defined_vars</span><span class="keyword">(),</span><span class="default">$vars</span><span class="keyword">);<br /><br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$vars</span><span class="keyword">);<br />echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126754">  <div class="votes">
    <div id="Vu126754">
    <a href="/manual/vote-note.php?id=126754&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126754">
    <a href="/manual/vote-note.php?id=126754&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126754" title="83% like this...">
    8
    </div>
  </div>
  <a href="#126754" class="name">
  <strong class="user"><em>cmswares dot com at gmail dot com</em></strong></a><a class="genanchor" href="#126754"> &para;</a><div class="date" title="2022-01-10 11:27"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126754">
<div class="phpcode"><code><span class="html">Be aware of what get_defined_vars() function returns in different contexts:<br /><br />- In global scope, a list of all defined variables, whether superglobals, command line arguments or user-defined variables<br />- In function scope, only a list of user-defined variables (both arguments and in-body definitions)<br />- In class/object method scope, does not return class/object properties;<br /><br />Also, as of PHP 5.4, does not return $_ENV even where available.<br /><br />For further details and scope tests/results, see <a href="https://github.com/php/doc-en/issues/1317" rel="nofollow" target="_blank">https://github.com/php/doc-en/issues/1317</a></span></code></div>
  </div>
 </div>
  <div class="note" id="125778">  <div class="votes">
    <div id="Vu125778">
    <a href="/manual/vote-note.php?id=125778&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125778">
    <a href="/manual/vote-note.php?id=125778&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125778" title="83% like this...">
    4
    </div>
  </div>
  <a href="#125778" class="name">
  <strong class="user"><em>antonfedonyuk at gmail dot com</em></strong></a><a class="genanchor" href="#125778"> &para;</a><div class="date" title="2021-02-05 09:29"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125778">
<div class="phpcode"><code><span class="html">NOTE: when you call code by eval() PHP append self vars to result, they have "__" prefix ("__source_code" and "__bootstrap_file" in PHP 7.3).<br /><br />Fix:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">filter_eval_vars</span><span class="keyword">(array </span><span class="default">$vars</span><span class="keyword">): array<br />{<br />    foreach (</span><span class="default">$vars </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />         if (</span><span class="default">$key</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] === </span><span class="string">'_' </span><span class="keyword">&amp;&amp; </span><span class="default">$key</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] === </span><span class="string">'_'</span><span class="keyword">) {<br />              unset(</span><span class="default">$vars</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />         }<br />    }<br />    return </span><span class="default">$vars</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122823">  <div class="votes">
    <div id="Vu122823">
    <a href="/manual/vote-note.php?id=122823&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122823">
    <a href="/manual/vote-note.php?id=122823&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122823" title="80% like this...">
    3
    </div>
  </div>
  <a href="#122823" class="name">
  <strong class="user"><em>Joey</em></strong></a><a class="genanchor" href="#122823"> &para;</a><div class="date" title="2018-06-11 07:22"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122823">
<div class="phpcode"><code><span class="html">I posted here before about "this" being in get_defined_vars.<br /><br />It turns out it's not always there but in certain cases it will inexplicably appear.<br /><br />    php -r '<br />    class Test {<br />        public function a() {var_dump(array_keys(get_defined_vars()));$a = 123;}<br />        public function b() {var_dump(array_keys(get_defined_vars()));$this;}<br />    }<br />    $t = new Test();<br />    $t-&gt;a();<br />    $t-&gt;b();<br />    '<br /><br />    array()<br />    array('this')<br /><br />This does not happen in PHP 7.2 but will happen in PHP 5.6.</span></code></div>
  </div>
 </div>
  <div class="note" id="118312">  <div class="votes">
    <div id="Vu118312">
    <a href="/manual/vote-note.php?id=118312&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118312">
    <a href="/manual/vote-note.php?id=118312&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118312" title="68% like this...">
    9
    </div>
  </div>
  <a href="#118312" class="name">
  <strong class="user"><em>sergeyzuzic at mail dot ru</em></strong></a><a class="genanchor" href="#118312"> &para;</a><div class="date" title="2015-11-14 10:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118312">
<div class="phpcode"><code><span class="html">dirty code sample:<br /><br />print_r(compact(array_keys(get_defined_vars())));</span></code></div>
  </div>
 </div>
  <div class="note" id="126390">  <div class="votes">
    <div id="Vu126390">
    <a href="/manual/vote-note.php?id=126390&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126390">
    <a href="/manual/vote-note.php?id=126390&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126390" title="75% like this...">
    4
    </div>
  </div>
  <a href="#126390" class="name">
  <strong class="user"><em>Qiibow</em></strong></a><a class="genanchor" href="#126390"> &para;</a><div class="date" title="2021-09-05 02:55"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126390">
<div class="phpcode"><code><span class="html">get_defined_vars() is very useful for importing many values at once <br />into another scope (Such as User-defined functions).<br /><br />Below is an example for showing some of many values and their variable-names in a table.<br />(useful in debugging)<br /><br />You can put this user-defined function at many places in your script <br />to show some values (values to be changed in loops) <br />to check if they are what they shall be there or not.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Set "get_defined_vars()" to 2nd argument.<br /></span><span class="keyword">function </span><span class="default">get_value_table</span><span class="keyword">(</span><span class="default">$name_array</span><span class="keyword">, </span><span class="default">$gdv</span><span class="keyword">) {<br />    </span><span class="default">$name_value_table </span><span class="keyword">= [];<br />    foreach (</span><span class="default">$name_array </span><span class="keyword">as </span><span class="default">$name</span><span class="keyword">) :<br />        if (!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$gdv</span><span class="keyword">)) :<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="string">'undefined'</span><span class="keyword">;<br />        elseif (</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$gdv</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">])) :<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$gdv</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">]? </span><span class="string">'true' </span><span class="keyword">: </span><span class="string">'false'</span><span class="keyword">;<br />        elseif (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$gdv</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">]) || </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$gdv</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">])) :<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$gdv</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">];<br />        elseif (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$gdv</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">])) :<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$gdv</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">],</span><span class="default">true</span><span class="keyword">).</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />        else :<br />            </span><span class="default">$value </span><span class="keyword">= (</span><span class="default">PHP_VERSION_ID </span><span class="keyword">&gt;= </span><span class="default">80000</span><span class="keyword">)? </span><span class="default">get_debug_type</span><span class="keyword">(</span><span class="default">$gdv</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">]) : </span><span class="default">get_type</span><span class="keyword">(</span><span class="default">$gdv</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">]);<br />        endif;<br />        </span><span class="default">$name_value_table</span><span class="keyword">[] = </span><span class="string">'&lt;tr&gt;&lt;td&gt;$'</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">.</span><span class="string">'&lt;td&gt;'</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">;<br />    endforeach;<br />    return </span><span class="string">'&lt;table border=1&gt;'</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$name_value_table</span><span class="keyword">).</span><span class="string">'&lt;/table&gt;'</span><span class="keyword">;<br />} </span><span class="comment">// (f) get_value_table()<br /><br /></span><span class="default">$_1 </span><span class="keyword">= </span><span class="string">'a'</span><span class="keyword">;<br /></span><span class="default">$_2 </span><span class="keyword">= </span><span class="string">'b'</span><span class="keyword">;<br /></span><span class="default">$_3 </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">];<br /></span><span class="default">$_4 </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$_5 </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br /></span><span class="default">$name_array </span><span class="keyword">= [</span><span class="string">'_1'</span><span class="keyword">,</span><span class="string">'_2'</span><span class="keyword">,</span><span class="string">'_3'</span><span class="keyword">,</span><span class="string">'_4'</span><span class="keyword">,</span><span class="string">'_5'</span><span class="keyword">,</span><span class="string">'_6'</span><span class="keyword">];<br /></span><span class="default">$show_id </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br />if (</span><span class="default">$show_id </span><span class="keyword">=== </span><span class="default">1</span><span class="keyword">) :<br />    echo </span><span class="default">get_value_table</span><span class="keyword">(</span><span class="default">$name_array</span><span class="keyword">, </span><span class="default">get_defined_vars</span><span class="keyword">());<br />endif;<br /></span><span class="comment">/* <br />if $show_id === 1, only shows below.<br /><br />$_1      a<br />$_2      b<br />$_3      Array<br />      (<br />          [0] =&gt; 1<br />          [1] =&gt; 2<br />      )<br />$_4      false<br />$_5      null<br />$_6      undefined<br />*/<br /><br /></span><span class="default">$_2 </span><span class="keyword">= </span><span class="string">'c'</span><span class="keyword">;<br />if (</span><span class="default">$show_id </span><span class="keyword">=== </span><span class="default">2</span><span class="keyword">) :<br />    echo </span><span class="default">get_value_table</span><span class="keyword">(</span><span class="default">$name_array</span><span class="keyword">, </span><span class="default">get_defined_vars</span><span class="keyword">()); </span><span class="comment">// $_2   c<br /></span><span class="keyword">endif;<br /></span><span class="comment"># if $show_id === 2, $_2 turns "c".<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126184">  <div class="votes">
    <div id="Vu126184">
    <a href="/manual/vote-note.php?id=126184&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126184">
    <a href="/manual/vote-note.php?id=126184&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126184" title="75% like this...">
    2
    </div>
  </div>
  <a href="#126184" class="name">
  <strong class="user"><em>nix dot code at 4assistance dot com dot nix</em></strong></a><a class="genanchor" href="#126184"> &para;</a><div class="date" title="2021-06-22 01:27"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126184">
<div class="phpcode"><code><span class="html">Insert this at point of interest; add keys of unwanted 1st dim variables to 2nd param of array_diff_key<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;defined_except '</span><span class="keyword">; </span><span class="default">var_dump </span><span class="keyword">(</span><span class="default">array_diff_key </span><span class="keyword">(</span><span class="default">get_defined_vars</span><span class="keyword">(), [</span><span class="string">'GLOBALS'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">,</span><span class="string">'_SERVER'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">])); echo </span><span class="string">' '</span><span class="keyword">.</span><span class="default">basename</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">':'</span><span class="keyword">.</span><span class="default">__LINE__</span><span class="keyword">.</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">; </span><span class="comment">#die;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115133">  <div class="votes">
    <div id="Vu115133">
    <a href="/manual/vote-note.php?id=115133&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115133">
    <a href="/manual/vote-note.php?id=115133&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115133" title="66% like this...">
    6
    </div>
  </div>
  <a href="#115133" class="name">
  <strong class="user"><em>mail at mkharitonov dot net</em></strong></a><a class="genanchor" href="#115133"> &para;</a><div class="date" title="2014-06-01 07:14"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115133">
<div class="phpcode"><code><span class="html">Reference variables are returned by reference (tested on PHP 5.5.11):<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= &amp;</span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">get_defined_vars</span><span class="keyword">()[</span><span class="string">'b'</span><span class="keyword">] = </span><span class="default">4</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">); </span><span class="comment">// int(4)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42969">  <div class="votes">
    <div id="Vu42969">
    <a href="/manual/vote-note.php?id=42969&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42969">
    <a href="/manual/vote-note.php?id=42969&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42969" title="63% like this...">
    5
    </div>
  </div>
  <a href="#42969" class="name">
  <strong class="user"><em>lbowerh at adelphia dot net</em></strong></a><a class="genanchor" href="#42969"> &para;</a><div class="date" title="2004-06-04 08:19"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42969">
<div class="phpcode"><code><span class="html">Here is a function which generates a debug report for display or email<br />using get_defined_vars. Great for getting a detailed snapshot without<br />relying on user input.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">generateDebugReport</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">,</span><span class="default">$defined_vars</span><span class="keyword">,</span><span class="default">$email</span><span class="keyword">=</span><span class="string">"undefined"</span><span class="keyword">){<br />    </span><span class="comment">// Function to create a debug report to display or email.<br />    // Usage: generateDebugReport(method,get_defined_vars(),email[optional]);<br />    // Where method is "browser" or "email".<br /><br />    // Create an ignore list for keys returned by 'get_defined_vars'.<br />    // For example, HTTP_POST_VARS, HTTP_GET_VARS and others are <br />    // redundant (same as _POST, _GET)<br />    // Also include vars you want ignored for security reasons - i.e. PHPSESSID.<br />    </span><span class="default">$ignorelist</span><span class="keyword">=array(</span><span class="string">"HTTP_POST_VARS"</span><span class="keyword">,</span><span class="string">"HTTP_GET_VARS"</span><span class="keyword">,<br />    </span><span class="string">"HTTP_COOKIE_VARS"</span><span class="keyword">,</span><span class="string">"HTTP_SERVER_VARS"</span><span class="keyword">,<br />    </span><span class="string">"HTTP_ENV_VARS"</span><span class="keyword">,</span><span class="string">"HTTP_SESSION_VARS"</span><span class="keyword">,<br />    </span><span class="string">"_ENV"</span><span class="keyword">,</span><span class="string">"PHPSESSID"</span><span class="keyword">,</span><span class="string">"SESS_DBUSER"</span><span class="keyword">,<br />    </span><span class="string">"SESS_DBPASS"</span><span class="keyword">,</span><span class="string">"HTTP_COOKIE"</span><span class="keyword">);<br /><br />    </span><span class="default">$timestamp</span><span class="keyword">=</span><span class="default">date</span><span class="keyword">(</span><span class="string">"m/d/y h:m:s"</span><span class="keyword">);<br />    </span><span class="default">$message</span><span class="keyword">=</span><span class="string">"Debug report created </span><span class="default">$timestamp</span><span class="string">\n"</span><span class="keyword">;<br /><br />    </span><span class="comment">// Get the last SQL error for good measure, where $link is the resource identifier<br />    // for mysql_connect. Comment out or modify for your database or abstraction setup.<br />    </span><span class="keyword">global </span><span class="default">$link</span><span class="keyword">;<br />    </span><span class="default">$sql_error</span><span class="keyword">=</span><span class="default">mysql_error</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">);<br />    if(</span><span class="default">$sql_error</span><span class="keyword">){<br />      </span><span class="default">$message</span><span class="keyword">.=</span><span class="string">"\nMysql Messages:\n"</span><span class="keyword">.</span><span class="default">mysql_error</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">);<br />    }<br />    </span><span class="comment">// End MySQL<br /><br />    // Could use a recursive function here. You get the idea ;-)<br />    </span><span class="keyword">foreach(</span><span class="default">$defined_vars </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">){<br />      if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) &amp;&amp; !</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$ignorelist</span><span class="keyword">) &amp;&amp; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">){<br />        </span><span class="default">$message</span><span class="keyword">.=</span><span class="string">"\n</span><span class="default">$key</span><span class="string"> array (key=value):\n"</span><span class="keyword">;<br />        foreach(</span><span class="default">$val </span><span class="keyword">as </span><span class="default">$subkey</span><span class="keyword">=&gt;</span><span class="default">$subval</span><span class="keyword">){<br />          if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$subkey</span><span class="keyword">,</span><span class="default">$ignorelist</span><span class="keyword">) &amp;&amp; !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$subval</span><span class="keyword">)){<br />            </span><span class="default">$message</span><span class="keyword">.=</span><span class="default">$subkey</span><span class="keyword">.</span><span class="string">" = "</span><span class="keyword">.</span><span class="default">$subval</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />          }<br />          elseif(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$subkey</span><span class="keyword">,</span><span class="default">$ignorelist</span><span class="keyword">) &amp;&amp; </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$subval</span><span class="keyword">)){<br />            foreach(</span><span class="default">$subval </span><span class="keyword">as </span><span class="default">$subsubkey</span><span class="keyword">=&gt;</span><span class="default">$subsubval</span><span class="keyword">){<br />              if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$subsubkey</span><span class="keyword">,</span><span class="default">$ignorelist</span><span class="keyword">)){<br />                </span><span class="default">$message</span><span class="keyword">.=</span><span class="default">$subsubkey</span><span class="keyword">.</span><span class="string">" = "</span><span class="keyword">.</span><span class="default">$subsubval</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />              }<br />            }<br />          }<br />        }<br />      }<br />      elseif(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) &amp;&amp; !</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$ignorelist</span><span class="keyword">) &amp;&amp; </span><span class="default">$val</span><span class="keyword">){<br />        </span><span class="default">$message</span><span class="keyword">.=</span><span class="string">"\nVariable "</span><span class="keyword">.</span><span class="default">$key</span><span class="keyword">.</span><span class="string">" = "</span><span class="keyword">.</span><span class="default">$val</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />      }<br />    }<br /><br />    if(</span><span class="default">$method</span><span class="keyword">==</span><span class="string">"browser"</span><span class="keyword">){<br />      echo </span><span class="default">nl2br</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">);<br />    }<br />    elseif(</span><span class="default">$method</span><span class="keyword">==</span><span class="string">"email"</span><span class="keyword">){<br />      if(</span><span class="default">$email</span><span class="keyword">==</span><span class="string">"undefined"</span><span class="keyword">){<br />        </span><span class="default">$email</span><span class="keyword">=</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">"SERVER_ADMIN"</span><span class="keyword">];<br />      }<br /><br />      </span><span class="default">$mresult</span><span class="keyword">=</span><span class="default">mail</span><span class="keyword">(</span><span class="default">$email</span><span class="keyword">,</span><span class="string">"Debug Report for "</span><span class="keyword">.</span><span class="default">$_ENV</span><span class="keyword">[</span><span class="string">"HOSTNAME"</span><span class="keyword">].</span><span class="string">""</span><span class="keyword">,</span><span class="default">$message</span><span class="keyword">);<br />      if(</span><span class="default">$mresult</span><span class="keyword">==</span><span class="default">1</span><span class="keyword">){<br />        echo </span><span class="string">"Debug Report sent successfully.\n"</span><span class="keyword">;<br />      }<br />      else{<br />        echo </span><span class="string">"Failed to send Debug Report.\n"</span><span class="keyword">;      <br />      }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122660">  <div class="votes">
    <div id="Vu122660">
    <a href="/manual/vote-note.php?id=122660&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122660">
    <a href="/manual/vote-note.php?id=122660&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122660" title="66% like this...">
    2
    </div>
  </div>
  <a href="#122660" class="name">
  <strong class="user"><em>Joey</em></strong></a><a class="genanchor" href="#122660"> &para;</a><div class="date" title="2018-04-24 08:20"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122660">
<div class="phpcode"><code><span class="html">I occasionally use this as a hack to convert arguments to an array where terseness is needed (dealing with legacy code, etc).<br /><br />However in an object context it'll also pull in $this.<br /><br />Make sure to unset it. If you map it to properties or an array then setting the key this wont be an error.<br /><br />I recommend using a wrapper function that strips this from the result.</span></code></div>
  </div>
 </div>
  <div class="note" id="125755">  <div class="votes">
    <div id="Vu125755">
    <a href="/manual/vote-note.php?id=125755&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125755">
    <a href="/manual/vote-note.php?id=125755&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125755" title="66% like this...">
    1
    </div>
  </div>
  <a href="#125755" class="name">
  <strong class="user"><em>npelov at croler dot net</em></strong></a><a class="genanchor" href="#125755"> &para;</a><div class="date" title="2021-02-02 12:35"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125755">
<div class="phpcode"><code><span class="html">get_defined_vars() returns all variables - locally defined vars and global vars (well actually only super globals). If you need local vars only  - for example you need to get variables from a file - let's say config.php and you don't want a missing value to be replaced with a global defined somewhere else.<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="comment">/**<br />   * Filters out global vars from get_defined_vars() in order to get local vars only<br />   * @param array $localVars pass get_defined_vars() here<br />   *<br />   * @return array local vars only<br />   */<br />  </span><span class="keyword">function </span><span class="default">removeGlobals</span><span class="keyword">(array </span><span class="default">$localVars</span><span class="keyword">) {<br />    return </span><span class="default">array_diff_key</span><span class="keyword">(</span><span class="default">$localVars</span><span class="keyword">, </span><span class="default">$GLOBALS</span><span class="keyword">);<br />  }<br /><br />  </span><span class="default">define</span><span class="keyword">(</span><span class="string">'CONFIG_FILE_PATH'</span><span class="keyword">, </span><span class="string">'/path/to/config.php'</span><span class="keyword">);<br />  function </span><span class="default">readConfig</span><span class="keyword">() {<br />    require </span><span class="default">CONFIG_FILE_PATH</span><span class="keyword">;<br />    </span><span class="default">$config </span><span class="keyword">= </span><span class="default">removeGlobals</span><span class="keyword">(</span><span class="default">get_defined_vars</span><span class="keyword">());<br />    return </span><span class="default">$config</span><span class="keyword">;<br />  }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122661">  <div class="votes">
    <div id="Vu122661">
    <a href="/manual/vote-note.php?id=122661&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122661">
    <a href="/manual/vote-note.php?id=122661&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122661" title="66% like this...">
    1
    </div>
  </div>
  <a href="#122661" class="name">
  <strong class="user"><em>Joey</em></strong></a><a class="genanchor" href="#122661"> &para;</a><div class="date" title="2018-04-24 08:30"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122661">
<div class="phpcode"><code><span class="html">Some comments here point out that this function wont return references. It does however return names and names are "references".<br /><br />I would not recommend the suggestions here that convert it to references.<br /><br />Instead...<br /><br />    public function x($a, $b, $c) {<br />        foreach(array_keys(get_defined_vars()) as $key)<br />            if($key !== 'this')<br />                $this-&gt;y(${$key});<br />    }<br />    <br />    public function y(&amp;$input) {<br />        $input++;<br />    }<br /><br />Instead of ${} you can also use $$.<br /><br />I have done some whacky things in my time to make extremely generic code but I've never had to do anything like the above. It might not even work (but should since it's no different to $a[$key]).<br /><br />You could also do $$key++ but I've never seen code like that which wasn't horrifically bad (using dynamic where dynamic isn't beneficial).<br /><br />If you're doing something like that then give it additional scrutiny.</span></code></div>
  </div>
 </div>
  <div class="note" id="19322">  <div class="votes">
    <div id="Vu19322">
    <a href="/manual/vote-note.php?id=19322&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19322">
    <a href="/manual/vote-note.php?id=19322&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19322" title="57% like this...">
    3
    </div>
  </div>
  <a href="#19322" class="name">
  <strong class="user"><em>jgettys at gnuvox dot com</em></strong></a><a class="genanchor" href="#19322"> &para;</a><div class="date" title="2002-02-22 07:09"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19322">
<div class="phpcode"><code><span class="html">Simple routine to convert a get_defined_vars object to XML.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">obj2xml</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$indent</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">) {
<br />  while (list(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {
<br />    if (</span><span class="default">$key </span><span class="keyword">== </span><span class="string">'__attr'</span><span class="keyword">) continue;
<br />    </span><span class="comment">// Check for __attr
<br />    </span><span class="keyword">if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">-&gt;</span><span class="default">__attr</span><span class="keyword">)) {
<br />      while (list(</span><span class="default">$key2</span><span class="keyword">, </span><span class="default">$val2</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">-&gt;</span><span class="default">__attr</span><span class="keyword">)) {
<br />        </span><span class="default">$attr </span><span class="keyword">.= </span><span class="string">" </span><span class="default">$key2</span><span class="string">=\"</span><span class="default">$val2</span><span class="string">\""</span><span class="keyword">;
<br />      }
<br />    }
<br />    else </span><span class="default">$attr </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) || </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {
<br />      print(</span><span class="string">"</span><span class="default">$indent</span><span class="string">&lt;</span><span class="default">$key$attr</span><span class="string">&gt;\n"</span><span class="keyword">);
<br />      </span><span class="default">obj2xml</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">, </span><span class="default">$indent</span><span class="keyword">.</span><span class="string">'  '</span><span class="keyword">);
<br />      print(</span><span class="string">"</span><span class="default">$indent</span><span class="string">&lt;/</span><span class="default">$key</span><span class="string">&gt;\n"</span><span class="keyword">);
<br />    }
<br />    else print(</span><span class="string">"</span><span class="default">$indent</span><span class="string">&lt;</span><span class="default">$key$attr</span><span class="string">&gt;</span><span class="default">$val</span><span class="string">&lt;/</span><span class="default">$key</span><span class="string">&gt;\n"</span><span class="keyword">);
<br />  }
<br />}
<br />
<br /></span><span class="comment">//Example object
<br /></span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">-&gt;</span><span class="default">first </span><span class="keyword">= </span><span class="string">"John"</span><span class="keyword">;
<br /></span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">-&gt;</span><span class="default">last </span><span class="keyword">= </span><span class="string">"Smith"</span><span class="keyword">;
<br /></span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">arr</span><span class="keyword">[</span><span class="string">'Fruit'</span><span class="keyword">] = </span><span class="string">'Bannana'</span><span class="keyword">;
<br /></span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">arr</span><span class="keyword">[</span><span class="string">'Veg'</span><span class="keyword">] = </span><span class="string">'Carrot'</span><span class="keyword">;
<br /></span><span class="default">$y</span><span class="keyword">-&gt;</span><span class="default">customer </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">;
<br /></span><span class="default">$y</span><span class="keyword">-&gt;</span><span class="default">customer</span><span class="keyword">-&gt;</span><span class="default">__attr</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">=</span><span class="string">'176C4'</span><span class="keyword">;
<br />
<br /></span><span class="default">$z </span><span class="keyword">= </span><span class="default">get_defined_vars</span><span class="keyword">();
<br /></span><span class="default">obj2xml</span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">[</span><span class="string">'y'</span><span class="keyword">]);
<br /></span><span class="default">?&gt;
<br /></span>
<br />will output:
<br />&lt;customer id="176C4"&gt;
<br />  &lt;name&gt;
<br />    &lt;first&gt;John&lt;/first&gt;
<br />    &lt;last&gt;Smith&lt;/last&gt;
<br />  &lt;/name&gt;
<br />  &lt;arr&gt;
<br />    &lt;Fruit&gt;Bannana&lt;/Fruit&gt;
<br />    &lt;Veg&gt;Carrot&lt;/Veg&gt;
<br />  &lt;/arr&gt;
<br />&lt;/customer&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="85249">  <div class="votes">
    <div id="Vu85249">
    <a href="/manual/vote-note.php?id=85249&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85249">
    <a href="/manual/vote-note.php?id=85249&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85249" title="54% like this...">
    2
    </div>
  </div>
  <a href="#85249" class="name">
  <strong class="user"><em>SyCo</em></strong></a><a class="genanchor" href="#85249"> &para;</a><div class="date" title="2008-08-21 03:52"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85249">
<div class="phpcode"><code><span class="html">Here's a very simple function for debugging. It's far from perfect but I find it very handy. It outputs the var value and the var name on a new line. The problem is it'll echo any vars and their name if they share the same value. No big deal when debugging and saves the hassle of writing the HTML and var name when echoing a variable. (ev=echo variable). Using get_defined_vars() inside a function renames the var name to the functions variable so isn't as useful for debugging. Of course, you'll need access to the $GLOBALS array<br />&lt;?<br />function ev($variable){<br />    foreach($GLOBALS as $key =&gt; $value){<br />        if($variable===$value){<br />            echo '&lt;p&gt;'.$key.' - '.$value.'&lt;/p&gt;';<br />        }<br />    }<br />}<br /><br />$a=0;<br />ev($a);<br />$b=0;<br />ev($b);<br />$c=0;<br />ev($c);<br />?&gt;<br />Will output<br />a - 0<br /><br />a - 0<br />b - 0<br /><br />a - 0<br />b - 0<br />c - 0</span></code></div>
  </div>
 </div>
  <div class="note" id="86475">  <div class="votes">
    <div id="Vu86475">
    <a href="/manual/vote-note.php?id=86475&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86475">
    <a href="/manual/vote-note.php?id=86475&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86475" title="52% like this...">
    2
    </div>
  </div>
  <a href="#86475" class="name">
  <strong class="user"><em>donovan at example dot com</em></strong></a><a class="genanchor" href="#86475"> &para;</a><div class="date" title="2008-10-21 09:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86475">
<div class="phpcode"><code><span class="html">As a note, get_defined_vars() does not return a set of variable references (as I hoped). For example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// define a variable<br /></span><span class="default">$my_var </span><span class="keyword">= </span><span class="string">"foo"</span><span class="keyword">;<br /><br /></span><span class="comment">// get our list of defined variables<br /></span><span class="default">$defined_vars </span><span class="keyword">= </span><span class="default">get_defined_vars</span><span class="keyword">();<br /><br /></span><span class="comment">// now try to change the value through the returned array<br /></span><span class="default">$defined_vars</span><span class="keyword">[</span><span class="string">"my_var"</span><span class="keyword">] = </span><span class="string">"bar"</span><span class="keyword">;<br /><br />echo </span><span class="default">$my_var</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />will output "foo" (the original value). It'd be nice if get_defined_vars() had an optional argument to make them references, but I imagine its a rather specialized request. You can do it yourself (less conveniently) with something like:<br /><br /><span class="default">&lt;?php<br /><br />$defined_vars </span><span class="keyword">= array();<br /></span><span class="default">$var_names </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">get_defined_vars</span><span class="keyword">());<br /><br />foreach (</span><span class="default">$var_names </span><span class="keyword">as </span><span class="default">$var_name</span><span class="keyword">)<br />{<br />    </span><span class="default">$defined_vars</span><span class="keyword">[</span><span class="default">$var_name</span><span class="keyword">] =&amp; $</span><span class="default">$var_name</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121123">  <div class="votes">
    <div id="Vu121123">
    <a href="/manual/vote-note.php?id=121123&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121123">
    <a href="/manual/vote-note.php?id=121123&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121123" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121123" class="name">
  <strong class="user"><em>istiaquealamjoy at gmail dot com</em></strong></a><a class="genanchor" href="#121123"> &para;</a><div class="date" title="2017-05-23 05:37"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121123">
<div class="phpcode"><code><span class="html">for all those who don't know how to us this function. copy and run this code in your computer  .<br /><br />note: you need to know what superglobals are.....<br /><br /><span class="default">&lt;?php<br /><br /> <br />$A </span><span class="keyword">= </span><span class="default">5  </span><span class="keyword">;<br /></span><span class="default">$B </span><span class="keyword">= </span><span class="default">10 </span><span class="keyword">;<br /></span><span class="default">$C </span><span class="keyword">= </span><span class="default">15 </span><span class="keyword">;<br /></span><span class="default">$D </span><span class="keyword">= </span><span class="default">20 </span><span class="keyword">;<br /><br /></span><span class="default">$F </span><span class="keyword">= </span><span class="default">get_defined_vars</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$F</span><span class="keyword">);  </span><span class="comment">//don't use echo. it will show error<br /><br /></span><span class="default">?&gt;<br /></span><br />Result : will show all superglobals status along with your defined<br />variables along with its values</span></code></div>
  </div>
 </div>
  <div class="note" id="103519">  <div class="votes">
    <div id="Vu103519">
    <a href="/manual/vote-note.php?id=103519&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103519">
    <a href="/manual/vote-note.php?id=103519&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103519" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#103519" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#103519"> &para;</a><div class="date" title="2011-04-18 05:32"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103519">
<div class="phpcode"><code><span class="html">get_defined_vars() returns ALL the vars (in the current scope), what if you just want all YOUR vars, not PHP's super-globals?
<br />
<br /><span class="default">&lt;?php
<br />    var_export</span><span class="keyword">(</span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">get_defined_vars</span><span class="keyword">(), array(array())));
<br /></span><span class="default">?&gt;
<br /></span>
<br />Example...
<br />
<br /><span class="default">&lt;?php
<br />    $TOP_LEVEL_VAR</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;
<br />    </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">get_defined_vars</span><span class="keyword">(), array(array())));
<br /></span><span class="default">?&gt;
<br /></span>
<br />The output (with register_globals off) should be...
<br />
<br />array (
<br />  'TOP_LEVEL_VAR' =&gt; 1,
<br />)
<br />
<br />...it perfectly eliminated all the super-globals, without me having to specify them! (note with register_globals on, the output includes those globals, then TOP_LEVEL_VAR).
<br />
<br />Here it is, as a function...(it's the best I could do {I can't call get_defined_vars() inside get_user_defined_vars() cuz of the scope issue}).
<br />
<br /><span class="default">&lt;?php
<br />    header</span><span class="keyword">(</span><span class="string">'Content-type: text/plain'</span><span class="keyword">);
<br />
<br />    </span><span class="default">$TOP_LEVEL_VAR</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;
<br />
<br />    echo </span><span class="string">'register_globals('</span><span class="keyword">;
<br />    echo </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'register_globals'</span><span class="keyword">);
<br />    echo </span><span class="string">') '</span><span class="keyword">.</span><span class="default">phpversion</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;
<br />
<br />    </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">get_user_defined_vars</span><span class="keyword">(</span><span class="default">get_defined_vars</span><span class="keyword">()));
<br />
<br />    function </span><span class="default">get_user_defined_vars</span><span class="keyword">(</span><span class="default">$vars</span><span class="keyword">) {
<br />        return </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$vars</span><span class="keyword">, array(array()));
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note that originally I had an array of the super-globals I wanted removed from get_defined_vars()'s array, then I noticed even an empty double-array, array(array()), made it give me the correct result. Weird.
<br />
<br />This was tested on PHP 5.2.9.</span></code></div>
  </div>
 </div>
  <div class="note" id="98467">  <div class="votes">
    <div id="Vu98467">
    <a href="/manual/vote-note.php?id=98467&amp;page=function.get-defined-vars&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98467">
    <a href="/manual/vote-note.php?id=98467&amp;page=function.get-defined-vars&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98467" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#98467" class="name">
  <strong class="user"><em>Johan de Vries</em></strong></a><a class="genanchor" href="#98467"> &para;</a><div class="date" title="2010-06-17 08:09"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98467">
<div class="phpcode"><code><span class="html">Note that this only returns things you've used. See <a href="http://bugs.php.net/bug.php?id=52110" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=52110</a> . So don't expect this to have the $this entry, unless you assign $this to return $this.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.get-defined-vars&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.get-defined-vars.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.boolval.php" title="boolval">boolval</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-zval-dump.php" title="debug_&#8203;zval_&#8203;dump">debug_&#8203;zval_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.doubleval.php" title="doubleval">doubleval</a>
                        </li>
                                                <li class="">
                            <a href="function.empty.php" title="empty">empty</a>
                        </li>
                                                <li class="">
                            <a href="function.floatval.php" title="floatval">floatval</a>
                        </li>
                                                <li class="">
                            <a href="function.get-debug-type.php" title="get_&#8203;debug_&#8203;type">get_&#8203;debug_&#8203;type</a>
                        </li>
                                                <li class="current">
                            <a href="function.get-defined-vars.php" title="get_&#8203;defined_&#8203;vars">get_&#8203;defined_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-id.php" title="get_&#8203;resource_&#8203;id">get_&#8203;resource_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-type.php" title="get_&#8203;resource_&#8203;type">get_&#8203;resource_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.gettype.php" title="gettype">gettype</a>
                        </li>
                                                <li class="">
                            <a href="function.intval.php" title="intval">intval</a>
                        </li>
                                                <li class="">
                            <a href="function.is-array.php" title="is_&#8203;array">is_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.is-bool.php" title="is_&#8203;bool">is_&#8203;bool</a>
                        </li>
                                                <li class="">
                            <a href="function.is-callable.php" title="is_&#8203;callable">is_&#8203;callable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-countable.php" title="is_&#8203;countable">is_&#8203;countable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-double.php" title="is_&#8203;double">is_&#8203;double</a>
                        </li>
                                                <li class="">
                            <a href="function.is-float.php" title="is_&#8203;float">is_&#8203;float</a>
                        </li>
                                                <li class="">
                            <a href="function.is-int.php" title="is_&#8203;int">is_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.is-integer.php" title="is_&#8203;integer">is_&#8203;integer</a>
                        </li>
                                                <li class="">
                            <a href="function.is-iterable.php" title="is_&#8203;iterable">is_&#8203;iterable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-long.php" title="is_&#8203;long">is_&#8203;long</a>
                        </li>
                                                <li class="">
                            <a href="function.is-null.php" title="is_&#8203;null">is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.is-numeric.php" title="is_&#8203;numeric">is_&#8203;numeric</a>
                        </li>
                                                <li class="">
                            <a href="function.is-object.php" title="is_&#8203;object">is_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.is-real.php" title="is_&#8203;real">is_&#8203;real</a>
                        </li>
                                                <li class="">
                            <a href="function.is-resource.php" title="is_&#8203;resource">is_&#8203;resource</a>
                        </li>
                                                <li class="">
                            <a href="function.is-scalar.php" title="is_&#8203;scalar">is_&#8203;scalar</a>
                        </li>
                                                <li class="">
                            <a href="function.is-string.php" title="is_&#8203;string">is_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.isset.php" title="isset">isset</a>
                        </li>
                                                <li class="">
                            <a href="function.print-r.php" title="print_&#8203;r">print_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="">
                            <a href="function.unserialize.php" title="unserialize">unserialize</a>
                        </li>
                                                <li class="">
                            <a href="function.unset.php" title="unset">unset</a>
                        </li>
                                                <li class="">
                            <a href="function.var-dump.php" title="var_&#8203;dump">var_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.var-export.php" title="var_&#8203;export">var_&#8203;export</a>
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
