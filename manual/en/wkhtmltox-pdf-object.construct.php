<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: wkhtmltox\PDF\Object::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/wkhtmltox-pdf-object.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/wkhtmltox-pdf-object.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/wkhtmltox-pdf-object.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.wkhtmltox-pdf-object.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.wkhtmltox-pdf-object.php">
 <link rel="next" href="https://www.php.net/manual/en/class.wkhtmltox-image-converter.php">

 <link rel="alternate" href="https://www.php.net/manual/en/wkhtmltox-pdf-object.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/wkhtmltox-pdf-object.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/wkhtmltox-pdf-object.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/wkhtmltox-pdf-object.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/wkhtmltox-pdf-object.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/wkhtmltox-pdf-object.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/wkhtmltox-pdf-object.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/wkhtmltox-pdf-object.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/wkhtmltox-pdf-object.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/wkhtmltox-pdf-object.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/wkhtmltox-pdf-object.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a new PDF Object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: wkhtmltox\PDF\Object::__construct - Manual" />
<meta name="twitter:description" content="Create a new PDF Object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: wkhtmltox\PDF\Object::__construct - Manual" />
<meta itemprop="description" content="Create a new PDF Object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a new PDF Object" />

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
        <a href="class.wkhtmltox-image-converter.php">
          wkhtmltox\Image\Converter &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.wkhtmltox-pdf-object.php">
          &laquo; wkhtmltox\PDF\Object        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.nontext.php'>Non-Text MIME Output</a></li>      <li><a href='book.wkhtmltox.php'>wkhtmltox</a></li>      <li><a href='class.wkhtmltox-pdf-object.php'>wkhtmltox\PDF\Object</a></li>      </ul>
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
            <option value='en/wkhtmltox-pdf-object.construct.php' selected="selected">English</option>
            <option value='de/wkhtmltox-pdf-object.construct.php'>German</option>
            <option value='es/wkhtmltox-pdf-object.construct.php'>Spanish</option>
            <option value='fr/wkhtmltox-pdf-object.construct.php'>French</option>
            <option value='it/wkhtmltox-pdf-object.construct.php'>Italian</option>
            <option value='ja/wkhtmltox-pdf-object.construct.php'>Japanese</option>
            <option value='pt_BR/wkhtmltox-pdf-object.construct.php'>Brazilian Portuguese</option>
            <option value='ru/wkhtmltox-pdf-object.construct.php'>Russian</option>
            <option value='tr/wkhtmltox-pdf-object.construct.php'>Turkish</option>
            <option value='uk/wkhtmltox-pdf-object.construct.php'>Ukrainian</option>
            <option value='zh/wkhtmltox-pdf-object.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="wkhtmltox-pdf-object.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">wkhtmltox\PDF\Object::__construct</h1>
  <p class="verinfo">(wkhtmltox &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">wkhtmltox\PDF\Object::__construct</span> &mdash; <span class="dc-title">Create a new PDF Object</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-wkhtmltox-pdf-object.construct-description">
  <h3 class="title">Description</h3>
  <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>wkhtmltox\PDF\Object::__construct</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$buffer</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$settings</code><span class="initializer"> = ?</span></span>)</div>

  <p class="para rdfs-comment">
  Creates a new PDF Object from the given buffer and optional configuration settings
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-wkhtmltox-pdf-object.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">buffer</code></dt>
    <dd>
     <p class="para">
      HTML
     </p>
    </dd>
   
   
    <dt><code class="parameter">settings</code></dt>
    <dd>
     <p class="para">
      <table class="doctable table">
       
       
        <thead>
         <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Values</th>
          <th>Changelog</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td>page</td>
          <td>URL or path of the HTML to convert</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>useExternalLinks</td>
          <td>set true to convert external links in the input into external PDF links in the output</td>
          <td>boolean</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>useLocalLinks</td>
          <td>set true to convert internal links in the input into internal PDF links in the output</td>
          <td>boolean</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>produceForms</td>
          <td>set true to turn HTML forms into PDF forms</td>
          <td>boolean</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>replacements</td>
          <td>undocumented</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>includeInOutline</td>
          <td>set true to include sections from this object in the outline and toc</td>
          <td>boolean</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>pagesCount</td>
          <td>set true to make page count in toc inclusive of the number of pages in this object</td>
          <td>boolean</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>tocXsl</td>
          <td>set to style sheet to convert this object into a toc object</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>toc.useDottedLines</td>
          <td>set true to use dotted lines in toc</td>
          <td>boolean</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>toc.captionText</td>
          <td>the caption text for toc</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>toc.forwardLinks</td>
          <td>set true to create links from toc to content</td>
          <td>boolean</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>toc.backLinks</td>
          <td>set true to create links from content to toc</td>
          <td>boolean</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>toc.indentation</td>
          <td>indentation for toc</td>
          <td>2em</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>toc.fontScale</td>
          <td>the factor to scale down the font at every toc level</td>
          <td>0.8</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>header.fontSize</td>
          <td>font size for use in header</td>
          <td>13</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>header.fontName</td>
          <td>name of font for use in header</td>
          <td>times</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>header.left</td>
          <td>text for left of header</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>header.center</td>
          <td>text for center of header</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>header.right</td>
          <td>text for right of header</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>header.line</td>
          <td>enable or disable horizontal rule under header</td>
          <td>boolean</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>header.spacing</td>
          <td>space between header and content</td>
          <td>1.8</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>header.htmlUrl</td>
          <td>URL or path of HTML to use in header</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>footer.fontSize</td>
          <td>font size for use in footer</td>
          <td>13</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>footer.fontName</td>
          <td>name of font for use in footer</td>
          <td>times</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>footer.left</td>
          <td>text for left of footer</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>footer.center</td>
          <td>text for center of footer</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>footer.right</td>
          <td>text for right of footer</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>footer.line</td>
          <td>enable or disable horizontal rule under footer</td>
          <td>boolean</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>footer.spacing</td>
          <td>space between footer and content</td>
          <td>1.8</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
          <td>footer.htmlUrl</td>
          <td>URL or path of HTML to use in footer</td>
          <td class="empty">&nbsp;</td>
          <td>&gt;= 0.1.0</td>
         </tr>

         <tr>
  <td>load.username</td>
  <td>user name to use when loging into a website</td>
  <td>bart</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.password</td>
  <td>the password to used when logging into a website</td>
  <td>elbarto</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.jsdelay</td>
  <td>the amount of time in milliseconds to wait after a page is loaded until it is captured</td>
  <td>1200</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.zoomFactor</td>
  <td>how much zoom should be applied to the content</td>
  <td>2.2</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.customHeaders</td>
  <td>custom headers to send when requesting the main web page</td>
  <td class="empty">&nbsp;</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.repertCustomHeaders</td>
  <td>set true to send with all requests</td>
  <td>boolean</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.cookies</td>
  <td>cookie string to send when requesting the main web page</td>
  <td class="empty">&nbsp;</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.post</td>
  <td>post string to send when requesting the main web page</td>
  <td class="empty">&nbsp;</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.blockLocalFileAccess</td>
  <td>disallow local and piped files to access other local files</td>
  <td>boolean</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.stopSlowScript</td>
  <td>stop slow running javascript</td>
  <td>boolean</td>
  <td class="empty">&nbsp;</td>
</tr>

<tr>
  <td>load.debugJavascript</td>
  <td>allow javascript to raise warnings</td>
  <td>boolean</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.loadErrorHandling</td>
  <td>set error handling strategy</td>
  <td>
   <table class="doctable table">
    
    
     <tbody class="tbody">
      <tr>
       <td>abort</td>
       <td>abort the convertion process</td>
      </tr>

      <tr>
       <td>skip</td>
       <td>do not add the object to the final output</td>
      </tr>

      <tr>
       <td>ignore</td>
       <td>try to add the object to the final output</td>
      </tr>

     </tbody>
    
   </table>

  </td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>load.proxy</td>
  <td class="empty">&nbsp;</td>
  <td class="empty">&nbsp;</td>
  <td>&gt;= 0.1.0</td>
</tr>


         <tr>
  <td>web.background</td>
  <td>include background image in output</td>
  <td>boolean</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>web.loadImages</td>
  <td>include images in output</td>
  <td>boolean</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>web.enableJavascript</td>
  <td>enable or disable javascript</td>
  <td>boolean</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>web.enableIntelligentShrinking</td>
  <td>enable to attempt to fit more content on page, only applies to PDF output</td>
  <td>boolean</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>web.minimumFontSize</td>
  <td>the minimum font size allowed</td>
  <td>9</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>web.printMediaType</td>
  <td>print content using print media type instead of screen media type</td>
  <td>boolean</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>web.defaultEncoding</td>
  <td>content to use where no encoding is specified</td>
  <td>utf-8</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>web.userStyleSheet</td>
  <td>URL or path to a user specified style sheet</td>
  <td>/path/to/style.css</td>
  <td>&gt;= 0.1.0</td>
</tr>

<tr>
  <td>web.enablePlugins</td>
  <td>enable or disable NS plugins</td>
  <td>boolean</td>
  <td>&gt;= 0.1.0</td>
</tr>


        </tbody>
       
      </table>

     </p>
    </dd>
   
  </dl>
 </div>


 



</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/wkhtmltox/wkhtmltox/pdf/object/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fwkhtmltox-pdf-object.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=wkhtmltox-pdf-object.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/wkhtmltox-pdf-object.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.wkhtmltox-pdf-object.php">wkhtmltox\PDF\Object</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="wkhtmltox-pdf-object.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
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
