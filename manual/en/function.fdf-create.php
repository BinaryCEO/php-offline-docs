<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: fdf_create - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.fdf-create.php">
 <link rel="shorturl" href="https://www.php.net/fdf-create">
 <link rel="alternate" href="https://www.php.net/fdf-create" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.fdf.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fdf-close.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fdf-enum-values.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.fdf-create.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.fdf-create.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.fdf-create.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.fdf-create.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.fdf-create.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.fdf-create.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.fdf-create.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.fdf-create.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.fdf-create.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.fdf-create.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.fdf-create.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a new FDF document" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: fdf_create - Manual" />
<meta name="twitter:description" content="Create a new FDF document" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: fdf_create - Manual" />
<meta itemprop="description" content="Create a new FDF document" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a new FDF document" />

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
        <a href="function.fdf-enum-values.php">
          fdf_enum_values &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fdf-close.php">
          &laquo; fdf_close        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.nontext.php'>Non-Text MIME Output</a></li>      <li><a href='book.fdf.php'>FDF</a></li>      <li><a href='ref.fdf.php'>FDF Functions</a></li>      </ul>
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
            <option value='en/function.fdf-create.php' selected="selected">English</option>
            <option value='de/function.fdf-create.php'>German</option>
            <option value='es/function.fdf-create.php'>Spanish</option>
            <option value='fr/function.fdf-create.php'>French</option>
            <option value='it/function.fdf-create.php'>Italian</option>
            <option value='ja/function.fdf-create.php'>Japanese</option>
            <option value='pt_BR/function.fdf-create.php'>Brazilian Portuguese</option>
            <option value='ru/function.fdf-create.php'>Russian</option>
            <option value='tr/function.fdf-create.php'>Turkish</option>
            <option value='uk/function.fdf-create.php'>Ukrainian</option>
            <option value='zh/function.fdf-create.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.fdf-create" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">fdf_create</h1>
  <p class="verinfo">(PHP 4, PHP 5 &lt; 5.3.0, PECL fdf SVN)</p><p class="refpurpose"><span class="refname">fdf_create</span> &mdash; <span class="dc-title">Create a new FDF document</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.fdf-create-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>fdf_create</strong></span>(): <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></div>

  <p class="para rdfs-comment">
   Creates a new FDF document. 
  </p>
  <p class="para">
   This function is needed if one would like to populate input fields in a
   PDF document with data.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.fdf-create-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.fdf-create-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a FDF document handle, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.fdf-create-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3399">
    <p><strong>Example #1 Populating a PDF document</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$outfdf </span><span style="color: #007700">= </span><span style="color: #0000BB">fdf_create</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">fdf_set_value</span><span style="color: #007700">(</span><span style="color: #0000BB">$outfdf</span><span style="color: #007700">, </span><span style="color: #DD0000">"volume"</span><span style="color: #007700">, </span><span style="color: #0000BB">$volume</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">fdf_set_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$outfdf</span><span style="color: #007700">, </span><span style="color: #DD0000">"http:/testfdf/resultlabel.pdf"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fdf_save</span><span style="color: #007700">(</span><span style="color: #0000BB">$outfdf</span><span style="color: #007700">, </span><span style="color: #DD0000">"outtest.fdf"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fdf_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$outfdf</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">Header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-type: application/vnd.fdf"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"outtest.fdf"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fpassthru</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #DD0000">"outtest.fdf"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.fdf-create-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.fdf-close.php" class="function" rel="rdfs-seeAlso">fdf_close()</a> - Close an FDF document</span></li>
    <li><span class="function"><a href="function.fdf-save.php" class="function" rel="rdfs-seeAlso">fdf_save()</a> - Save a FDF document</span></li>
    <li><span class="function"><a href="function.fdf-open.php" class="function" rel="rdfs-seeAlso">fdf_open()</a> - Open a FDF document</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/fdf/functions/fdf-create.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.fdf-create%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.fdf-create&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fdf-create.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="67263">  <div class="votes">
    <div id="Vu67263">
    <a href="/manual/vote-note.php?id=67263&amp;page=function.fdf-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67263">
    <a href="/manual/vote-note.php?id=67263&amp;page=function.fdf-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67263" title="no votes...">
    0
    </div>
  </div>
  <a href="#67263" class="name">
  <strong class="user"><em>jwadhwani at pobox dot com</em></strong></a><a class="genanchor" href="#67263"> &para;</a><div class="date" title="2006-06-06 08:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67263">
<div class="phpcode"><code><span class="html">For fdf_save you need to provide the complete path, such as :fdf_save($outfdf,"c:/inetpub/wwwroot/temp_sites/fdf/outtest.fdf"); and not only outtest.fdf.</span></code></div>
  </div>
 </div>
  <div class="note" id="36300">  <div class="votes">
    <div id="Vu36300">
    <a href="/manual/vote-note.php?id=36300&amp;page=function.fdf-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36300">
    <a href="/manual/vote-note.php?id=36300&amp;page=function.fdf-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36300" title="no votes...">
    0
    </div>
  </div>
  <a href="#36300" class="name">
  <strong class="user"><em>Punkisdead</em></strong></a><a class="genanchor" href="#36300"> &para;</a><div class="date" title="2003-10-04 12:03"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36300">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$outfdf </span><span class="keyword">= </span><span class="default">fdf_create</span><span class="keyword">();<br /></span><span class="default">$volume </span><span class="keyword">= </span><span class="string">"test"</span><span class="keyword">;<br /></span><span class="default">fdf_set_value</span><span class="keyword">(</span><span class="default">$outfdf</span><span class="keyword">, </span><span class="string">"volume"</span><span class="keyword">, </span><span class="default">$volume</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="default">fdf_set_file</span><span class="keyword">(</span><span class="default">$outfdf</span><span class="keyword">, </span><span class="string">"<a href="http://localhost/webapps/volume.pdf" rel="nofollow" target="_blank">http://localhost/webapps/volume.pdf</a>"</span><span class="keyword">);<br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">"Content-type: application/vnd.fdf"</span><span class="keyword">);<br /></span><span class="default">fdf_save</span><span class="keyword">(</span><span class="default">$outfdf</span><span class="keyword">);<br /></span><span class="default">fdf_close</span><span class="keyword">(</span><span class="default">$outfdf</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />This works for IE 5.5+  <br /><br />It will populate the fields and open the resulting pdf for you, without having to create an fdf file and adding the open script to the pdf...</span></code></div>
  </div>
 </div>
  <div class="note" id="30413">  <div class="votes">
    <div id="Vu30413">
    <a href="/manual/vote-note.php?id=30413&amp;page=function.fdf-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30413">
    <a href="/manual/vote-note.php?id=30413&amp;page=function.fdf-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30413" title="50% like this...">
    0
    </div>
  </div>
  <a href="#30413" class="name">
  <strong class="user"><em>Sergei</em></strong></a><a class="genanchor" href="#30413"> &para;</a><div class="date" title="2003-03-17 11:43"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30413">
<div class="phpcode"><code><span class="html">I thought the following might save someone a lot of time. The example fdf snippet above, namely:<br /><br /><span class="default">&lt;?php<br />$outfdf </span><span class="keyword">= </span><span class="default">fdf_create</span><span class="keyword">();<br /></span><span class="default">fdf_set_value</span><span class="keyword">(</span><span class="default">$outfdf</span><span class="keyword">, </span><span class="string">"volume"</span><span class="keyword">, </span><span class="default">$volume</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="default">fdf_set_file</span><span class="keyword">(</span><span class="default">$outfdf</span><span class="keyword">, </span><span class="string">"http:/testfdf/resultlabel.pdf"</span><span class="keyword">);<br /></span><span class="default">fdf_save</span><span class="keyword">(</span><span class="default">$outfdf</span><span class="keyword">, </span><span class="string">"outtest.fdf"</span><span class="keyword">);<br /></span><span class="default">fdf_close</span><span class="keyword">(</span><span class="default">$outfdf</span><span class="keyword">);<br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">"Content-type: application/vnd.fdf"</span><span class="keyword">);<br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"outtest.fdf"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br /></span><span class="default">fpassthru</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /></span><span class="default">unlink</span><span class="keyword">(</span><span class="string">"outtest.fdf"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will not work (or there's at least a big possibility it won't) in IE (version 6 sure and I suspect lower versions as well) if you have session.auto_start on. Apparently, setting a cookie before feeding the fdf to the browser somehow messes it up. It works fine in Netscape though. I spent days on Google before I found a post somewhere about someone else having the same problem. <br /><br />The solution? Well, I created a separate directory in the web tree and turned session.auto_start off just for that directory like this:<br /><br />&lt;Location /new_directory&gt;<br />    php_admin_flag session.auto_start 0<br />&lt;/Location&gt;<br /><br />Hope this was useful to somebody.</span></code></div>
  </div>
 </div>
  <div class="note" id="34893">  <div class="votes">
    <div id="Vu34893">
    <a href="/manual/vote-note.php?id=34893&amp;page=function.fdf-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34893">
    <a href="/manual/vote-note.php?id=34893&amp;page=function.fdf-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34893" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#34893" class="name">
  <strong class="user"><em>mlarke at nanuc dot ca</em></strong></a><a class="genanchor" href="#34893"> &para;</a><div class="date" title="2003-08-10 05:14"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34893">
<div class="phpcode"><code><span class="html">Header("Content-type: application/vnd.fdf"); simply does not work in IE. The easiest method to automatically load the fdf file is to open the 'pdf' file via php. With use of Acrobat <br />document -&gt; page action -&gt; page open -&gt; add -&gt; javascript<br />and paste the following into the pdf file:<br /><br />this.importAnFDF("my_fdf_file.fdf");<br /><br />This will auto-load the fdf contents<br />Cheers Mike</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.fdf-create&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fdf-create.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.fdf.php">FDF Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.fdf-add-doc-javascript.php" title="fdf_&#8203;add_&#8203;doc_&#8203;javascript">fdf_&#8203;add_&#8203;doc_&#8203;javascript</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-add-template.php" title="fdf_&#8203;add_&#8203;template">fdf_&#8203;add_&#8203;template</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-close.php" title="fdf_&#8203;close">fdf_&#8203;close</a>
                        </li>
                                                <li class="current">
                            <a href="function.fdf-create.php" title="fdf_&#8203;create">fdf_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-enum-values.php" title="fdf_&#8203;enum_&#8203;values">fdf_&#8203;enum_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-errno.php" title="fdf_&#8203;errno">fdf_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-error.php" title="fdf_&#8203;error">fdf_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-get-ap.php" title="fdf_&#8203;get_&#8203;ap">fdf_&#8203;get_&#8203;ap</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-get-attachment.php" title="fdf_&#8203;get_&#8203;attachment">fdf_&#8203;get_&#8203;attachment</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-get-encoding.php" title="fdf_&#8203;get_&#8203;encoding">fdf_&#8203;get_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-get-file.php" title="fdf_&#8203;get_&#8203;file">fdf_&#8203;get_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-get-flags.php" title="fdf_&#8203;get_&#8203;flags">fdf_&#8203;get_&#8203;flags</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-get-opt.php" title="fdf_&#8203;get_&#8203;opt">fdf_&#8203;get_&#8203;opt</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-get-status.php" title="fdf_&#8203;get_&#8203;status">fdf_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-get-value.php" title="fdf_&#8203;get_&#8203;value">fdf_&#8203;get_&#8203;value</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-get-version.php" title="fdf_&#8203;get_&#8203;version">fdf_&#8203;get_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-header.php" title="fdf_&#8203;header">fdf_&#8203;header</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-next-field-name.php" title="fdf_&#8203;next_&#8203;field_&#8203;name">fdf_&#8203;next_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-open.php" title="fdf_&#8203;open">fdf_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-open-string.php" title="fdf_&#8203;open_&#8203;string">fdf_&#8203;open_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-remove-item.php" title="fdf_&#8203;remove_&#8203;item">fdf_&#8203;remove_&#8203;item</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-save.php" title="fdf_&#8203;save">fdf_&#8203;save</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-save-string.php" title="fdf_&#8203;save_&#8203;string">fdf_&#8203;save_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-ap.php" title="fdf_&#8203;set_&#8203;ap">fdf_&#8203;set_&#8203;ap</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-encoding.php" title="fdf_&#8203;set_&#8203;encoding">fdf_&#8203;set_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-file.php" title="fdf_&#8203;set_&#8203;file">fdf_&#8203;set_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-flags.php" title="fdf_&#8203;set_&#8203;flags">fdf_&#8203;set_&#8203;flags</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-javascript-action.php" title="fdf_&#8203;set_&#8203;javascript_&#8203;action">fdf_&#8203;set_&#8203;javascript_&#8203;action</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-on-import-javascript.php" title="fdf_&#8203;set_&#8203;on_&#8203;import_&#8203;javascript">fdf_&#8203;set_&#8203;on_&#8203;import_&#8203;javascript</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-opt.php" title="fdf_&#8203;set_&#8203;opt">fdf_&#8203;set_&#8203;opt</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-status.php" title="fdf_&#8203;set_&#8203;status">fdf_&#8203;set_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-submit-form-action.php" title="fdf_&#8203;set_&#8203;submit_&#8203;form_&#8203;action">fdf_&#8203;set_&#8203;submit_&#8203;form_&#8203;action</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-target-frame.php" title="fdf_&#8203;set_&#8203;target_&#8203;frame">fdf_&#8203;set_&#8203;target_&#8203;frame</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-value.php" title="fdf_&#8203;set_&#8203;value">fdf_&#8203;set_&#8203;value</a>
                        </li>
                                                <li class="">
                            <a href="function.fdf-set-version.php" title="fdf_&#8203;set_&#8203;version">fdf_&#8203;set_&#8203;version</a>
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
