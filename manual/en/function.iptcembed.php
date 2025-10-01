<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: iptcembed - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.iptcembed.php">
 <link rel="shorturl" href="https://www.php.net/iptcembed">
 <link rel="alternate" href="https://www.php.net/iptcembed" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imagexbm.php">
 <link rel="next" href="https://www.php.net/manual/en/function.iptcparse.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.iptcembed.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.iptcembed.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.iptcembed.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.iptcembed.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.iptcembed.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.iptcembed.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.iptcembed.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.iptcembed.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.iptcembed.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.iptcembed.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.iptcembed.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Embeds binary IPTC data into a JPEG image" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: iptcembed - Manual" />
<meta name="twitter:description" content="Embeds binary IPTC data into a JPEG image" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: iptcembed - Manual" />
<meta itemprop="description" content="Embeds binary IPTC data into a JPEG image" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Embeds binary IPTC data into a JPEG image" />

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
        <a href="function.iptcparse.php">
          iptcparse &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imagexbm.php">
          &laquo; imagexbm        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.image.php'>GD</a></li>      <li><a href='ref.image.php'>GD and Image Functions</a></li>      </ul>
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
            <option value='en/function.iptcembed.php' selected="selected">English</option>
            <option value='de/function.iptcembed.php'>German</option>
            <option value='es/function.iptcembed.php'>Spanish</option>
            <option value='fr/function.iptcembed.php'>French</option>
            <option value='it/function.iptcembed.php'>Italian</option>
            <option value='ja/function.iptcembed.php'>Japanese</option>
            <option value='pt_BR/function.iptcembed.php'>Brazilian Portuguese</option>
            <option value='ru/function.iptcembed.php'>Russian</option>
            <option value='tr/function.iptcembed.php'>Turkish</option>
            <option value='uk/function.iptcembed.php'>Ukrainian</option>
            <option value='zh/function.iptcembed.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.iptcembed" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">iptcembed</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iptcembed</span> &mdash; <span class="dc-title">Embeds binary IPTC data into a JPEG image</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.iptcembed-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>iptcembed</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$iptc_data</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$spool</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
   Embeds binary IPTC data into a JPEG image.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.iptcembed-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">iptc_data</code></dt>
     <dd>
      <p class="para">
       The data to be written.
      </p>
     </dd>
    
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the JPEG image.
      </p>
     </dd>
    
    
     <dt><code class="parameter">spool</code></dt>
     <dd>
      <p class="para">
       Spool flag. If the spool flag is less than 2 then the JPEG will be 
       returned as a string. Otherwise the JPEG will be printed to STDOUT.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.iptcembed-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If <code class="parameter">spool</code> is less than 2, the JPEG will be returned,
    or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure. Otherwise returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success
    or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.iptcembed-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2949">
   <p><strong>Example #1 Embedding IPTC data into a JPEG</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// iptc_make_tag() function by Thies C. Arntzen<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">iptc_make_tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$rec</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$length </span><span style="color: #007700">= </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$retval </span><span style="color: #007700">= </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">0x1C</span><span style="color: #007700">) . </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$rec</span><span style="color: #007700">) . </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><br />    if(</span><span style="color: #0000BB">$length </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">0x8000</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$retval </span><span style="color: #007700">.= </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$length </span><span style="color: #007700">&gt;&gt; </span><span style="color: #0000BB">8</span><span style="color: #007700">) .  </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$length </span><span style="color: #007700">&amp; </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">);<br />    }<br />    else<br />    {<br />        </span><span style="color: #0000BB">$retval </span><span style="color: #007700">.= </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">0x80</span><span style="color: #007700">) . <br />                   </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">0x04</span><span style="color: #007700">) . <br />                   </span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$length </span><span style="color: #007700">&gt;&gt; </span><span style="color: #0000BB">24</span><span style="color: #007700">) &amp; </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">) . <br />                   </span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$length </span><span style="color: #007700">&gt;&gt; </span><span style="color: #0000BB">16</span><span style="color: #007700">) &amp; </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">) . <br />                   </span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$length </span><span style="color: #007700">&gt;&gt; </span><span style="color: #0000BB">8</span><span style="color: #007700">) &amp; </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">) . <br />                   </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$length </span><span style="color: #007700">&amp; </span><span style="color: #0000BB">0xFF</span><span style="color: #007700">);<br />    }<br /><br />    return </span><span style="color: #0000BB">$retval </span><span style="color: #007700">. </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Path to jpeg file<br /></span><span style="color: #0000BB">$path </span><span style="color: #007700">= </span><span style="color: #DD0000">'./phplogo.jpg'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Set the IPTC tags<br /></span><span style="color: #0000BB">$iptc </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'2#120' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Test image'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'2#116' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Copyright 2008-2009, The PHP Group'<br /></span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Convert the IPTC tags into binary code<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />foreach(</span><span style="color: #0000BB">$iptc </span><span style="color: #007700">as </span><span style="color: #0000BB">$tag </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$string</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$tag </span><span style="color: #007700">= </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$data </span><span style="color: #007700">.= </span><span style="color: #0000BB">iptc_make_tag</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$tag</span><span style="color: #007700">, </span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Embed the IPTC data<br /></span><span style="color: #0000BB">$content </span><span style="color: #007700">= </span><span style="color: #0000BB">iptcembed</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #0000BB">$path</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Write the new image data out to the file.<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">, </span><span style="color: #DD0000">"wb"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">$content</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-function.iptcembed-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">This function does not require the GD image library.</p></p></blockquote>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/functions/iptcembed.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.iptcembed%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.iptcembed&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.iptcembed.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113877">  <div class="votes">
    <div id="Vu113877">
    <a href="/manual/vote-note.php?id=113877&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113877">
    <a href="/manual/vote-note.php?id=113877&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113877" title="80% like this...">
    13
    </div>
  </div>
  <a href="#113877" class="name">
  <strong class="user"><em>ebashkoff at gmail dot com</em></strong></a><a class="genanchor" href="#113877"> &para;</a><div class="date" title="2013-12-12 03:05"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113877">
<div class="phpcode"><code><span class="html">The following code embeds both IPTC APP segment 13 and EXIF APP segment 1 data from a source file and embeds it into a destination file.  This overcomes the limitation where the iptcembed statement does not seem to embed EXIF data, only IPTC data.<br /><br />function transferIptcExif2File($srcfile, $destfile) {<br />    // Function transfers EXIF (APP1) and IPTC (APP13) from $srcfile and adds it to $destfile<br />    // JPEG file has format 0xFFD8 + [APP0] + [APP1] + ... [APP15] + &lt;image data&gt; where [APPi] are optional<br />    // Segment APPi (where i=0x0 to 0xF) has format 0xFFEi + 0xMM + 0xLL + &lt;data&gt; (where 0xMM is <br />    //   most significant 8 bits of (strlen(&lt;data&gt;) + 2) and 0xLL is the least significant 8 bits <br />    //   of (strlen(&lt;data&gt;) + 2)  <br /><br />    if (file_exists($srcfile) &amp;&amp; file_exists($destfile)) {<br />        $srcsize = @getimagesize($srcfile, $imageinfo);<br />        // Prepare EXIF data bytes from source file<br />        $exifdata = (is_array($imageinfo) &amp;&amp; key_exists("APP1", $imageinfo)) ? $imageinfo['APP1'] : null;<br />        if ($exifdata) {<br />            $exiflength = strlen($exifdata) + 2;<br />            if ($exiflength &gt; 0xFFFF) return false;<br />            // Construct EXIF segment<br />            $exifdata = chr(0xFF) . chr(0xE1) . chr(($exiflength &gt;&gt; 8) &amp; 0xFF) . chr($exiflength &amp; 0xFF) . $exifdata;<br />        }<br />        // Prepare IPTC data bytes from source file<br />        $iptcdata = (is_array($imageinfo) &amp;&amp; key_exists("APP13", $imageinfo)) ? $imageinfo['APP13'] : null;<br />        if ($iptcdata) {<br />            $iptclength = strlen($iptcdata) + 2;<br />            if ($iptclength &gt; 0xFFFF) return false;<br />            // Construct IPTC segment<br />            $iptcdata = chr(0xFF) . chr(0xED) . chr(($iptclength &gt;&gt; 8) &amp; 0xFF) . chr($iptclength &amp; 0xFF) . $iptcdata;<br />        }<br />        $destfilecontent = @file_get_contents($destfile);<br />        if (!$destfilecontent) return false;<br />        if (strlen($destfilecontent) &gt; 0) {<br />            $destfilecontent = substr($destfilecontent, 2);<br />            $portiontoadd = chr(0xFF) . chr(0xD8);          // Variable accumulates new &amp; original IPTC application segments<br />            $exifadded = !$exifdata;<br />            $iptcadded = !$iptcdata;<br /><br />            while ((substr($destfilecontent, 0, 2) &amp; 0xFFF0) === 0xFFE0) {<br />                $segmentlen = (substr($destfilecontent, 2, 2) &amp; 0xFFFF);<br />                $iptcsegmentnumber = (substr($destfilecontent, 1, 1) &amp; 0x0F);   // Last 4 bits of second byte is IPTC segment #<br />                if ($segmentlen &lt;= 2) return false;<br />                $thisexistingsegment = substr($destfilecontent, 0, $segmentlen + 2);<br />                if ((1 &lt;= $iptcsegmentnumber) &amp;&amp; (!$exifadded)) {<br />                    $portiontoadd .= $exifdata;<br />                    $exifadded = true;<br />                    if (1 === $iptcsegmentnumber) $thisexistingsegment = '';<br />                }<br />                if ((13 &lt;= $iptcsegmentnumber) &amp;&amp; (!$iptcadded)) {<br />                    $portiontoadd .= $iptcdata;<br />                    $iptcadded = true;<br />                    if (13 === $iptcsegmentnumber) $thisexistingsegment = '';<br />                }<br />                $portiontoadd .= $thisexistingsegment;<br />                $destfilecontent = substr($destfilecontent, $segmentlen + 2);<br />            }<br />            if (!$exifadded) $portiontoadd .= $exifdata;  //  Add EXIF data if not added already<br />            if (!$iptcadded) $portiontoadd .= $iptcdata;  //  Add IPTC data if not added already<br />            $outputfile = fopen($destfile, 'w');<br />            if ($outputfile) return fwrite($outputfile, $portiontoadd . $destfilecontent); else return false;<br />        } else {<br />            return false;<br />        }<br />    } else {<br />        return false;<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="85887">  <div class="votes">
    <div id="Vu85887">
    <a href="/manual/vote-note.php?id=85887&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85887">
    <a href="/manual/vote-note.php?id=85887&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85887" title="77% like this...">
    10
    </div>
  </div>
  <a href="#85887" class="name">
  <strong class="user"><em>support at image-host-script dot com</em></strong></a><a class="genanchor" href="#85887"> &para;</a><div class="date" title="2008-09-22 11:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85887">
<div class="phpcode"><code><span class="html">A class I recently wrote for manipulating IPTC data in an jpeg images. It does the job for editing exisiting data too, in easy manner. It is just a compilation of examples into single class.<br /><br />&lt;?<br /><br />    /************************************************************\<br />    <br />        IPTC EASY 1.0 - IPTC data manipulator for JPEG images<br />            <br />        All reserved www.image-host-script.com<br />        <br />        Sep 15, 2008<br />    <br />    \************************************************************/<br /><br />    DEFINE('IPTC_OBJECT_NAME', '005');<br />    DEFINE('IPTC_EDIT_STATUS', '007');<br />    DEFINE('IPTC_PRIORITY', '010');<br />    DEFINE('IPTC_CATEGORY', '015');<br />    DEFINE('IPTC_SUPPLEMENTAL_CATEGORY', '020');<br />    DEFINE('IPTC_FIXTURE_IDENTIFIER', '022');<br />    DEFINE('IPTC_KEYWORDS', '025');<br />    DEFINE('IPTC_RELEASE_DATE', '030');<br />    DEFINE('IPTC_RELEASE_TIME', '035');<br />    DEFINE('IPTC_SPECIAL_INSTRUCTIONS', '040');<br />    DEFINE('IPTC_REFERENCE_SERVICE', '045');<br />    DEFINE('IPTC_REFERENCE_DATE', '047');<br />    DEFINE('IPTC_REFERENCE_NUMBER', '050');<br />    DEFINE('IPTC_CREATED_DATE', '055');<br />    DEFINE('IPTC_CREATED_TIME', '060');<br />    DEFINE('IPTC_ORIGINATING_PROGRAM', '065');<br />    DEFINE('IPTC_PROGRAM_VERSION', '070');<br />    DEFINE('IPTC_OBJECT_CYCLE', '075');<br />    DEFINE('IPTC_BYLINE', '080');<br />    DEFINE('IPTC_BYLINE_TITLE', '085');<br />    DEFINE('IPTC_CITY', '090');<br />    DEFINE('IPTC_PROVINCE_STATE', '095');<br />    DEFINE('IPTC_COUNTRY_CODE', '100');<br />    DEFINE('IPTC_COUNTRY', '101');<br />    DEFINE('IPTC_ORIGINAL_TRANSMISSION_REFERENCE',     '103');<br />    DEFINE('IPTC_HEADLINE', '105');<br />    DEFINE('IPTC_CREDIT', '110');<br />    DEFINE('IPTC_SOURCE', '115');<br />    DEFINE('IPTC_COPYRIGHT_STRING', '116');<br />    DEFINE('IPTC_CAPTION', '120');<br />    DEFINE('IPTC_LOCAL_CAPTION', '121');<br /><br />    class iptc {<br />        var $meta=Array();<br />        var $hasmeta=false;<br />        var $file=false;<br />        <br />        <br />        function iptc($filename) {<br />            $size = getimagesize($filename,$info);<br />            $this-&gt;hasmeta = isset($info["APP13"]);<br />            if($this-&gt;hasmeta)<br />                $this-&gt;meta = iptcparse ($info["APP13"]);<br />            $this-&gt;file = $filename;<br />        }<br />        function set($tag, $data) {<br />            $this-&gt;meta ["2#$tag"]= Array( $data );<br />            $this-&gt;hasmeta=true;<br />        }<br />        function get($tag) {<br />            return isset($this-&gt;meta["2#$tag"]) ? $this-&gt;meta["2#$tag"][0] : false;<br />        }<br />        <br />        function dump() {<br />            print_r($this-&gt;meta);<br />        }<br />        function binary() {<br />            $iptc_new = '';<br />            foreach (array_keys($this-&gt;meta) as $s) {<br />                $tag = str_replace("2#", "", $s);<br />                $iptc_new .= $this-&gt;iptc_maketag(2, $tag, $this-&gt;meta[$s][0]);<br />            }        <br />            return $iptc_new;    <br />        }<br />        function iptc_maketag($rec,$dat,$val) {<br />            $len = strlen($val);<br />            if ($len &lt; 0x8000) {<br />                   return chr(0x1c).chr($rec).chr($dat).<br />                   chr($len &gt;&gt; 8).<br />                   chr($len &amp; 0xff).<br />                   $val;<br />            } else {<br />                   return chr(0x1c).chr($rec).chr($dat).<br />                   chr(0x80).chr(0x04).<br />                   chr(($len &gt;&gt; 24) &amp; 0xff).<br />                   chr(($len &gt;&gt; 16) &amp; 0xff).<br />                   chr(($len &gt;&gt; 8 ) &amp; 0xff).<br />                   chr(($len ) &amp; 0xff).<br />                   $val;<br />                   <br />            }<br />        }    <br />        function write() {<br />            if(!function_exists('iptcembed')) return false;<br />            $mode = 0;<br />            $content = iptcembed($this-&gt;binary(), $this-&gt;file, $mode);    <br />            $filename = $this-&gt;file;<br />                <br />            @unlink($filename); #delete if exists<br />            <br />            $fp = fopen($filename, "w");<br />            fwrite($fp, $content);<br />            fclose($fp);<br />        }    <br />        <br />        #requires GD library installed<br />        function removeAllTags() {<br />            $this-&gt;hasmeta=false;<br />            $this-&gt;meta=Array();<br />            $img = imagecreatefromstring(implode(file($this-&gt;file)));<br />            @unlink($this-&gt;file); #delete if exists<br />            imagejpeg($img,$this-&gt;file,100);<br />        }<br />    };<br />    <br />    <br />?&gt;<br /><br />Example read copyright string:<br /><br />$i = new iptc("test.jpg");<br />echo $i-&gt;get(IPTC_COPYRIGHT_STRING); <br /><br />Update copyright statement:<br />$i = new iptc("test.jpg");<br />echo $i-&gt;set(IPTC_COPYRIGHT_STRING,"Here goes the new data"); <br />$i-&gt;write();<br /><br />NOTE1: Data may be anything, even a binary file. I have so far tested and embedded an MS-Excel file directly to jpeg and it worked just perfect.<br /><br />NOTE2: The writing purpose, it uses GD Library.<br /><br />Further imporvements / changes may be followed at www.image-host-script.com<br /><br />I hope it helps.<br />Ali..</span></code></div>
  </div>
 </div>
  <div class="note" id="98891">  <div class="votes">
    <div id="Vu98891">
    <a href="/manual/vote-note.php?id=98891&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98891">
    <a href="/manual/vote-note.php?id=98891&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98891" title="70% like this...">
    4
    </div>
  </div>
  <a href="#98891" class="name">
  <strong class="user"><em>critto at o2 dot pl</em></strong></a><a class="genanchor" href="#98891"> &para;</a><div class="date" title="2010-07-14 06:25"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98891">
<div class="phpcode"><code><span class="html">If you want just to copy the IPTC data, eg. at the thumbnail creation, you don't have to parse the binary IPTC data into array and back; just do this:
<br />
<br /><span class="default">&lt;?php
<br />$fullFilePath</span><span class="keyword">=</span><span class="string">'photo1.jpg'</span><span class="keyword">;
<br /></span><span class="default">$fullPathThumb </span><span class="keyword">= </span><span class="string">'photo1thumb.jpg'</span><span class="keyword">;
<br /></span><span class="default">$imagesize        </span><span class="keyword">=    </span><span class="default">getImageSize</span><span class="keyword">(</span><span class="default">$fullFilePath</span><span class="keyword">, </span><span class="default">$info</span><span class="keyword">);
<br />if(isset(</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'APP13'</span><span class="keyword">])){
<br />    </span><span class="default">$content    </span><span class="keyword">=    </span><span class="default">iptcembed</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'APP13'</span><span class="keyword">], </span><span class="default">$fullPathThumb</span><span class="keyword">);
<br />   @</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$fullPathThumb</span><span class="keyword">);
<br />   </span><span class="default">$fw </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$fullPathThumb</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);
<br />   </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fw</span><span class="keyword">, </span><span class="default">$content</span><span class="keyword">);
<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fw</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="44546">  <div class="votes">
    <div id="Vu44546">
    <a href="/manual/vote-note.php?id=44546&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44546">
    <a href="/manual/vote-note.php?id=44546&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44546" title="75% like this...">
    2
    </div>
  </div>
  <a href="#44546" class="name">
  <strong class="user"><em>evan at nospam dot ozhiker dot com</em></strong></a><a class="genanchor" href="#44546"> &para;</a><div class="date" title="2004-08-09 09:53"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44546">
<div class="phpcode"><code><span class="html">You might have noticed that several metadata fields in Photoshop are not available via IPTC. <br />Also, Photoshop now uses XMP for it's primary metadata, meaning IPTC is only read by Photoshop if XMP is not present.<br /><br />I have written a library "PHP JPEG Metadata Toolkit" which bypasses this problem as it allows reading, writing and interpreting of virtually any type of metadata, including XMP, IPTC and EXIF. <br /><br />Try it out, and download it at: <br /><a href="http://www.ozhiker.com/electronics/pjmt/index.html" rel="nofollow" target="_blank">http://www.ozhiker.com/electronics/pjmt/index.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="101431">  <div class="votes">
    <div id="Vu101431">
    <a href="/manual/vote-note.php?id=101431&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101431">
    <a href="/manual/vote-note.php?id=101431&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101431" title="66% like this...">
    2
    </div>
  </div>
  <a href="#101431" class="name">
  <strong class="user"><em>Christoph Tavan</em></strong></a><a class="genanchor" href="#101431"> &para;</a><div class="date" title="2010-12-16 03:30"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101431">
<div class="phpcode"><code><span class="html">For everybody having issues with unicode (UTF-8) text in IPTC fields, set the "Coded Character Set"-field in the envelop (1:90, see <a href="http://www.iptc.org/std/IIM/4.1/specification/IIMV4.1.pdf" rel="nofollow" target="_blank">http://www.iptc.org/std/IIM/4.1/specification/IIMV4.1.pdf</a>).<br /><br />This can be accomplished by starting the $data-block with the following lines:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// These two lines ensure that UTF8-Encoding will work (set the 1:90 field in the envelop)<br />// @see <a href="http://cpanforum.com/threads/2114" rel="nofollow" target="_blank">http://cpanforum.com/threads/2114</a> for a hint<br /></span><span class="default">$utf8seq </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x1b</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x25</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x47</span><span class="keyword">);<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$utf8seq</span><span class="keyword">);<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x1C</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="string">'090'</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$length </span><span class="keyword">&gt;&gt; </span><span class="default">8</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$length </span><span class="keyword">&amp; </span><span class="default">0xFF</span><span class="keyword">) . </span><span class="default">$utf8seq</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />After that you can continue like in the example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach(</span><span class="default">$iptc </span><span class="keyword">as </span><span class="default">$tag </span><span class="keyword">=&gt; </span><span class="default">$string</span><span class="keyword">)<br />{<br />    </span><span class="default">$tag </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$tag</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">$data </span><span class="keyword">.= </span><span class="default">iptc_make_tag</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$tag</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="18564">  <div class="votes">
    <div id="Vu18564">
    <a href="/manual/vote-note.php?id=18564&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18564">
    <a href="/manual/vote-note.php?id=18564&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18564" title="100% like this...">
    2
    </div>
  </div>
  <a href="#18564" class="name">
  <strong class="user"><em>rupix at rediffmail dot com</em></strong></a><a class="genanchor" href="#18564"> &para;</a><div class="date" title="2002-01-28 04:24"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18564">
<div class="phpcode"><code><span class="html">Windows makes a distinction between 'text' and 'binary' files. So if you run the above code on a windows platform, it will produce a garbled image. To overcome this problem put the file mode in fopen() as 'wb' instead of 'w'. <br /><br />Cheerio !!<br /><br />Rupinder</span></code></div>
  </div>
 </div>
  <div class="note" id="103148">  <div class="votes">
    <div id="Vu103148">
    <a href="/manual/vote-note.php?id=103148&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103148">
    <a href="/manual/vote-note.php?id=103148&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103148" title="100% like this...">
    1
    </div>
  </div>
  <a href="#103148" class="name">
  <strong class="user"><em>soporte at etic dot com dot mx</em></strong></a><a class="genanchor" href="#103148"> &para;</a><div class="date" title="2011-03-28 06:50"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103148">
<div class="phpcode"><code><span class="html">I just found an error while trying to write several keywords (an array) with the binary function... please consider using the following: 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">binary</span><span class="keyword">() {
<br />            </span><span class="default">$iptc_new </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />            foreach (</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">meta</span><span class="keyword">) as </span><span class="default">$s</span><span class="keyword">) {
<br />                </span><span class="default">$tag </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"2#"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">);
<br />                if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">meta</span><span class="keyword">[</span><span class="default">$s</span><span class="keyword">])&gt;</span><span class="default">1</span><span class="keyword">){
<br />                    foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">meta</span><span class="keyword">[</span><span class="default">$s</span><span class="keyword">] as </span><span class="default">$row</span><span class="keyword">){
<br />                        </span><span class="default">$iptc_new </span><span class="keyword">.= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iptc_maketag</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$tag</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">);
<br />                    }
<br />                }else {
<br />                    </span><span class="default">$iptc_new </span><span class="keyword">.= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">iptc_maketag</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$tag</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">meta</span><span class="keyword">[</span><span class="default">$s</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]);
<br />                }
<br />            }
<br />            return </span><span class="default">$iptc_new</span><span class="keyword">;
<br />        }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42168">  <div class="votes">
    <div id="Vu42168">
    <a href="/manual/vote-note.php?id=42168&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42168">
    <a href="/manual/vote-note.php?id=42168&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42168" title="100% like this...">
    1
    </div>
  </div>
  <a href="#42168" class="name">
  <strong class="user"><em>dj dot cyberdance at gmx dot at</em></strong></a><a class="genanchor" href="#42168"> &para;</a><div class="date" title="2004-05-06 04:29"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42168">
<div class="phpcode"><code><span class="html">I've spent a whole day debugging my code (that was based on the example below, posted by knut) until I found out, that iptcembed() only works if the image specified in jpeg_file_name already has IPTC fields included.<br /><br />That means that you cannot write IPTC fields in a jpeg file without preexisting IPTC information in it.<br /><br />Updating of IPTC fields also worked only with a few files, I don't really know what it depends on whether it works or not. (Well, it depends on the IPTC header, that's for sure :-)<br /><br />I'm using PHP 4.2.1, maybe this is fixed in more recent versions, but I don't believe...<br /><br />Nevertheless, here's some piece of code I tried:<br /><br />I replaced the line<br /><br />&lt;?<br />$iptc_old = iptcparse ($info["APP13"]);<br />?&gt;<br /><br />from knut's example below with<br /><br />&lt;?<br />$iptc_old["2#000"][0] = chr(0) . chr(2);<br />?&gt;<br /><br />This creates just an empty "Header" according to the IPTC spec. This one also is included when getting IPTC info using iptcparse(). So my intention was to create a fully new header, but when using iptcembed() afterwards, the file size of the new file was a little smaller than the original but without any IPTC info stored in it.</span></code></div>
  </div>
 </div>
  <div class="note" id="40064">  <div class="votes">
    <div id="Vu40064">
    <a href="/manual/vote-note.php?id=40064&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40064">
    <a href="/manual/vote-note.php?id=40064&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40064" title="100% like this...">
    1
    </div>
  </div>
  <a href="#40064" class="name">
  <strong class="user"><em>pprem at pprem dot net</em></strong></a><a class="genanchor" href="#40064"> &para;</a><div class="date" title="2004-02-20 10:04"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40064">
<div class="phpcode"><code><span class="html">I've a problem with the ltrim fucntion: sometimes it remove more characters than it must, so it's better to delete the line<br /><br />&lt;?<br />//   $image = rtrim ($image, $endchar);<br />?&gt;<br /><br />in the XMP_remove_from_jpeg function</span></code></div>
  </div>
 </div>
  <div class="note" id="104169">  <div class="votes">
    <div id="Vu104169">
    <a href="/manual/vote-note.php?id=104169&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104169">
    <a href="/manual/vote-note.php?id=104169&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104169" title="no votes...">
    0
    </div>
  </div>
  <a href="#104169" class="name">
  <strong class="user"><em>micheall at inthemdl dot net</em></strong></a><a class="genanchor" href="#104169"> &para;</a><div class="date" title="2011-05-29 05:00"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104169">
<div class="phpcode"><code><span class="html">While using the class file noted below you'll notice setting an array of keywords with the set() function will not work.  Try this instead:<br /><span class="default">&lt;?php<br />        </span><span class="keyword">function </span><span class="default">set</span><span class="keyword">(</span><span class="default">$tag</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">) {<br />            if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)){<br />                </span><span class="default">$c </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />                for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />                       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">meta</span><span class="keyword">[</span><span class="string">"2#</span><span class="default">$tag</span><span class="string">"</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />                }                <br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">hasmeta</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">meta</span><span class="keyword">[</span><span class="string">"2#</span><span class="default">$tag</span><span class="string">"</span><span class="keyword">]= Array( </span><span class="default">$data </span><span class="keyword">);<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">hasmeta</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />            }<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78255">  <div class="votes">
    <div id="Vu78255">
    <a href="/manual/vote-note.php?id=78255&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78255">
    <a href="/manual/vote-note.php?id=78255&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78255" title="50% like this...">
    0
    </div>
  </div>
  <a href="#78255" class="name">
  <strong class="user"><em>jb at ibbeck dot de</em></strong></a><a class="genanchor" href="#78255"> &para;</a><div class="date" title="2007-10-04 07:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78255">
<div class="phpcode"><code><span class="html">If you have a file without any IPTC record, you can add a new, empty one by calling iptcembed with an empty string as first argument, like this:<br /><br />$buffer = iptcembed("",$imagename,0);<br />$fp = fopen($imagename,"w");<br />fwrite($fp,$buffer);<br />fclose($fp);</span></code></div>
  </div>
 </div>
  <div class="note" id="76195">  <div class="votes">
    <div id="Vu76195">
    <a href="/manual/vote-note.php?id=76195&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76195">
    <a href="/manual/vote-note.php?id=76195&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76195" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76195" class="name">
  <strong class="user"><em>Bryce Fisher</em></strong></a><a class="genanchor" href="#76195"> &para;</a><div class="date" title="2007-07-04 09:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76195">
<div class="phpcode"><code><span class="html">In Thomas's wonderful code snippet below, the second parameter needs to be changed to "$filename", otherwise the script has no write the file. So the code should read:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//This function removes all header data from a JPG<br /></span><span class="keyword">function </span><span class="default">remove_XMP</span><span class="keyword">(</span><span class="default">$image_in</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">) {<br />  </span><span class="default">$filename_in </span><span class="keyword">= </span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$image_in</span><span class="keyword">);<br />  list(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">) = </span><span class="default">getimagesize</span><span class="keyword">(</span><span class="default">$filename_in</span><span class="keyword">);<br />  </span><span class="default">$image_dest </span><span class="keyword">= </span><span class="default">imagecreatetruecolor</span><span class="keyword">(</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />  </span><span class="default">$image </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg</span><span class="keyword">(</span><span class="default">$filename_in</span><span class="keyword">);<br />  </span><span class="default">imagecopyresampled</span><span class="keyword">(</span><span class="default">$image_dest</span><span class="keyword">, </span><span class="default">$image</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">,  </span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">,</span><span class="default">$width</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">);<br />  </span><span class="default">imagejpeg</span><span class="keyword">(</span><span class="default">$image_dest</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52812">  <div class="votes">
    <div id="Vu52812">
    <a href="/manual/vote-note.php?id=52812&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52812">
    <a href="/manual/vote-note.php?id=52812&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52812" title="no votes...">
    0
    </div>
  </div>
  <a href="#52812" class="name">
  <strong class="user"><em>muguran</em></strong></a><a class="genanchor" href="#52812"> &para;</a><div class="date" title="2005-05-13 01:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52812">
<div class="phpcode"><code><span class="html">Pay attention not add codes with length of value equal to 0; the behavior could be strange...<br />(e.g. $iptc_old["2#015"][0] = "")</span></code></div>
  </div>
 </div>
  <div class="note" id="42805">  <div class="votes">
    <div id="Vu42805">
    <a href="/manual/vote-note.php?id=42805&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42805">
    <a href="/manual/vote-note.php?id=42805&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42805" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#42805" class="name">
  <strong class="user"><em>dj dot cyberdance at gmx dot at</em></strong></a><a class="genanchor" href="#42805"> &para;</a><div class="date" title="2004-05-30 06:47"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42805">
<div class="phpcode"><code><span class="html">Yep it's me again :-) After some time I spent searching around for other possibilities to write IPTC fields to JPEG files I found this one:<br /><br /><a href="http://www.zonageek.com/software/php/jpeg/index.php" rel="nofollow" target="_blank">http://www.zonageek.com/software/php/jpeg/index.php</a><br /><br />This one seems to work pretty fine, remember that you have to install PEAR to get this running (Debian package php4-pear).</span></code></div>
  </div>
 </div>
  <div class="note" id="40047">  <div class="votes">
    <div id="Vu40047">
    <a href="/manual/vote-note.php?id=40047&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40047">
    <a href="/manual/vote-note.php?id=40047&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40047" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#40047" class="name">
  <strong class="user"><em>pprem at pprem dot net</em></strong></a><a class="genanchor" href="#40047"> &para;</a><div class="date" title="2004-02-19 04:10"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40047">
<div class="phpcode"><code><span class="html">Reading and changing IPTC make no problem with the PEAR function, but recent Adobe software add XMP datas on JPEG files and read them instead of IPTC datas. If you need to change IPTC on a JPEG file and want Adobe PS7 read them, you have two solutions:<br />- writing XMP and IPTC datas<br />- writing IPTC datas and removing XMP datas<br /><br />Because I've not enough time to work on XMP datas, I've choosen the second solution. Here is the result of this work:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// removing XMP datas from a JPEG file<br />// (c) Patrick Premartin 19/02/2004<br /><br /></span><span class="keyword">function </span><span class="default">XMP_remove_from_jpeg </span><span class="keyword">(&amp;</span><span class="default">$image</span><span class="keyword">) {<br />  </span><span class="default">$xmp_str </span><span class="keyword">= </span><span class="string">"<a href="http://ns.adobe.com/xap/1.0/" rel="nofollow" target="_blank">http://ns.adobe.com/xap/1.0/</a>"</span><span class="keyword">;<br />  </span><span class="default">$xmp_end </span><span class="keyword">= </span><span class="string">"&lt;?xpacket end='w'?&gt;"</span><span class="keyword">;<br />  </span><span class="default">$n_str </span><span class="keyword">= </span><span class="default">strpos </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$xmp_str</span><span class="keyword">);<br />  </span><span class="default">$n_end </span><span class="keyword">= </span><span class="default">strpos </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$xmp_end</span><span class="keyword">);<br />  if ((</span><span class="default">$n_str </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) &amp;&amp; (</span><span class="default">$n_end </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) &amp;&amp; (</span><span class="default">$n_str </span><span class="keyword">&lt; </span><span class="default">$n_end</span><span class="keyword">)) {<br />    </span><span class="default">$n_str </span><span class="keyword">-= </span><span class="default">4</span><span class="keyword">; </span><span class="comment">// FF E1 .x. .y. (xy is the length of the XMP block -&gt; first char of this block<br />    </span><span class="default">$n_end </span><span class="keyword">+= </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$xmp_end</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">; </span><span class="comment">// last char of this block<br />    </span><span class="default">$endchar </span><span class="keyword">= </span><span class="default">$image </span><span class="keyword">[</span><span class="default">$n_str</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">];<br />    if (</span><span class="default">$endchar </span><span class="keyword">== </span><span class="string">" "</span><span class="keyword">) {<br />      </span><span class="default">$endchar </span><span class="keyword">= </span><span class="string">"A"</span><span class="keyword">;<br />    } else {<br />      </span><span class="default">$endchar </span><span class="keyword">= </span><span class="string">" "</span><span class="keyword">;<br />    }<br />    </span><span class="default">$xmp_len </span><span class="keyword">= </span><span class="default">$n_end</span><span class="keyword">-</span><span class="default">$n_str</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$img_len </span><span class="keyword">= </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">$img_len </span><span class="keyword">- </span><span class="default">$xmp_len</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$n_str</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$img_len</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">++) {<br />      if (</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">) {<br />        </span><span class="default">$image </span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$image </span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">$xmp_len</span><span class="keyword">];<br />      } else {<br />        </span><span class="default">$image </span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$endchar</span><span class="keyword">;<br />      }<br />    }<br />    </span><span class="default">$image </span><span class="keyword">= </span><span class="default">rtrim </span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">, </span><span class="default">$endchar</span><span class="keyword">);<br />    return </span><span class="default">true</span><span class="keyword">;<br />  } else {<br />    return </span><span class="default">false</span><span class="keyword">;<br />  }<br />}<br /><br />function </span><span class="default">XMP_remove_from_jpegfile </span><span class="keyword">(</span><span class="default">$filename_in</span><span class="keyword">, </span><span class="default">$filename_out</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">) {<br />  if (</span><span class="string">""</span><span class="keyword">==</span><span class="default">$filename_out</span><span class="keyword">) {<br />    </span><span class="default">$filename_out </span><span class="keyword">= </span><span class="default">$filename_in</span><span class="keyword">;<br />  }<br />  if ((</span><span class="string">""</span><span class="keyword">!=</span><span class="default">$filename_in</span><span class="keyword">) &amp;&amp; (</span><span class="default">file_exists </span><span class="keyword">(</span><span class="default">$filename_in</span><span class="keyword">)) &amp;&amp; ((</span><span class="default">$len_in </span><span class="keyword">= </span><span class="default">filesize </span><span class="keyword">(</span><span class="default">$filename_in</span><span class="keyword">)) &gt; </span><span class="default">0</span><span class="keyword">)) {<br />    </span><span class="comment">// chargement du fichier en m?moire<br />    </span><span class="default">$f_in </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">(</span><span class="default">$filename_in</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);<br />    </span><span class="default">$img </span><span class="keyword">= </span><span class="default">fread </span><span class="keyword">(</span><span class="default">$f_in</span><span class="keyword">, </span><span class="default">$len_in</span><span class="keyword">);<br />    </span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$f_in</span><span class="keyword">);<br />    </span><span class="comment">// suppression du XMP de l'image<br />    </span><span class="keyword">if (</span><span class="default">XMP_remove_from_jpeg </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">)) {<br />      </span><span class="comment">// enregistrement du fichier sur disque<br />      </span><span class="default">$f_out </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">(</span><span class="default">$filename_out</span><span class="keyword">, </span><span class="string">"wb"</span><span class="keyword">);<br />      </span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$f_out</span><span class="keyword">, </span><span class="default">$img</span><span class="keyword">, </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">));<br />      </span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$f_out</span><span class="keyword">);<br />    }<br />  }<br />}<br /><br /></span><span class="default">XMP_remove_from_jpegfile </span><span class="keyword">(</span><span class="string">"ps7_hr.jpg"</span><span class="keyword">, </span><span class="string">"ps7_hr_.jpg"</span><span class="keyword">); </span><span class="comment">// create a new picture without XMP datas<br /><br /></span><span class="default">XMP_remove_from_jpegfile </span><span class="keyword">(</span><span class="string">"ps8_hr.jpg"</span><span class="keyword">); </span><span class="comment">// replace the existing file<br /></span><span class="default">?&gt;<br /></span><br />In the future, I'll work on changing XMP datas and IPTC in the same way and will publish it ther or as a in PEAR.<br /><br />May the force be with us :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="18549">  <div class="votes">
    <div id="Vu18549">
    <a href="/manual/vote-note.php?id=18549&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18549">
    <a href="/manual/vote-note.php?id=18549&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18549" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#18549" class="name">
  <strong class="user"><em>knut dot satre dot NoSpam at No_Spam dot nord dot no</em></strong></a><a class="genanchor" href="#18549"> &para;</a><div class="date" title="2002-01-27 03:45"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18549">
<div class="phpcode"><code><span class="html">Example to read IPTC text from an image, changing the text an write to a new file using the functions iptcparse and iptcembed.<br /> <br />Also a list of the most common IPTC fields.<br /><br />&lt;?<br />// original file name<br />$image_name_old = "test.jpg";<br /><br />// New file name<br />$image_name_new = "test2.jpg";<br /><br />// Reads the IPTC text in to the array '$iptc'<br />// The number after the '#' is the IPTC field<br />// Ex: $iptc["2#120"][0] is Caption<br />// $iptc["2#055"][0]; is Creation date<br />$size = GetImageSize ("$image_name_old",&amp;$info);<br />$iptc_old = iptcparse ($info["APP13"]);<br /><br />// Adding or replacing IPTC text<br />   // This ex. replace the original category or create it if it dos not exist<br />   $iptc_old["2#015"][0] = "Sport";<br />   // .. and adding more text to the original caption<br />   $iptc_old["2#120"][0] .= " More caption text";<br /><br />   // Making the new IPTC string<br />   foreach (array_keys($iptc_old) as $s){<br />      // Finds the IPTC numbers<br />      $tag = str_replace("2#", "", $s);<br />      // Creating the string<br />      $iptc_new .= iptc_maketag(2, $tag, $iptc_old[$s][0]);<br />   }<br /><br />// The original file and the new IPTC Text into $content<br />// Mode 0 - puts the image file into $content<br />// Mode 1 - puts the image file into $content and directly to the web client<br />// Mode 2 - puts the image file to web client<br />$mode = 0;<br />$content = iptcembed($iptc_new, $image_name_old, $mode);<br /><br />// writes the new file<br />$fp = fopen($image_name_new, "w");<br />fwrite($fp, $content);<br />fclose($fp);<br /><br />// Function to format the new IPTC text, (thanks to Thies C. Arntzen)<br />function iptc_maketag($rec,$dat,$val){<br />         $len = strlen($val);<br />         if ($len &lt; 0x8000)<br />                  return chr(0x1c).chr($rec).chr($dat).<br />                  chr($len &gt;&gt; 8).<br />                  chr($len &amp; 0xff).<br />                  $val;<br />         else<br />                  return chr(0x1c).chr($rec).chr($dat).<br />                  chr(0x80).chr(0x04).<br />                  chr(($len &gt;&gt; 24) &amp; 0xff).<br />                  chr(($len &gt;&gt; 16) &amp; 0xff).<br />                  chr(($len &gt;&gt; 8 ) &amp; 0xff).<br />                  chr(($len ) &amp; 0xff).<br />                  $val;<br />}<br /><br />?&gt;<br /><br />--- The most common IPTC Fileds<br />005 - Object Name<br />007 - Edit Status<br />010 - Priority<br />015 - Category<br />020 - Supplemental Category<br />022 - Fixture Identifier<br />025 - Keywords<br />030 - Release Date<br />035 - Release Time<br />040 - Special Instructions<br />045 - Reference Service<br />047 - Reference Date<br />050 - Reference Number<br />055 - Created Date<br />060 - Created Time<br />065 - Originating Program<br />070 - Program Version<br />075 - Object Cycle<br />080 - Byline<br />085 - Byline Title<br />090 - City<br />095 - Province State<br />100 - Country Code<br />101 - Country<br />103 - Original Transmission Reference<br />105 - Headline<br />110 - Credit<br />115 - Source<br />116 - Copyright String<br />120 - Caption<br />121 - Local Caption</span></code></div>
  </div>
 </div>
  <div class="note" id="103610">  <div class="votes">
    <div id="Vu103610">
    <a href="/manual/vote-note.php?id=103610&amp;page=function.iptcembed&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103610">
    <a href="/manual/vote-note.php?id=103610&amp;page=function.iptcembed&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103610" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#103610" class="name">
  <strong class="user"><em>Jarek Milewski</em></strong></a><a class="genanchor" href="#103610"> &para;</a><div class="date" title="2011-04-22 03:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103610">
<div class="phpcode"><code><span class="html">To remove all EXIF, XMP etc. tags from a jpeg file you need no resampling (which, by the way, may give you memory problems). It's just enough to recreate the image, presumably with 100% quality in order not to loose anything. The code is as simple as that:
<br />
<br /><span class="default">&lt;?php
<br />    $img </span><span class="keyword">= </span><span class="default">imagecreatefromjpeg </span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);
<br />    </span><span class="default">imagejpeg </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);
<br />    </span><span class="default">imagedestroy </span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.iptcembed&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.iptcembed.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.image.php">GD and Image Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.gd-info.php" title="gd_&#8203;info">gd_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.getimagesize.php" title="getimagesize">getimagesize</a>
                        </li>
                                                <li class="">
                            <a href="function.getimagesizefromstring.php" title="getimagesizefromstring">getimagesizefromstring</a>
                        </li>
                                                <li class="">
                            <a href="function.image-type-to-extension.php" title="image_&#8203;type_&#8203;to_&#8203;extension">image_&#8203;type_&#8203;to_&#8203;extension</a>
                        </li>
                                                <li class="">
                            <a href="function.image-type-to-mime-type.php" title="image_&#8203;type_&#8203;to_&#8203;mime_&#8203;type">image_&#8203;type_&#8203;to_&#8203;mime_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.image2wbmp.php" title="image2wbmp">image2wbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffine.php" title="imageaffine">imageaffine</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffinematrixconcat.php" title="imageaffinematrixconcat">imageaffinematrixconcat</a>
                        </li>
                                                <li class="">
                            <a href="function.imageaffinematrixget.php" title="imageaffinematrixget">imageaffinematrixget</a>
                        </li>
                                                <li class="">
                            <a href="function.imagealphablending.php" title="imagealphablending">imagealphablending</a>
                        </li>
                                                <li class="">
                            <a href="function.imageantialias.php" title="imageantialias">imageantialias</a>
                        </li>
                                                <li class="">
                            <a href="function.imagearc.php" title="imagearc">imagearc</a>
                        </li>
                                                <li class="">
                            <a href="function.imageavif.php" title="imageavif">imageavif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagebmp.php" title="imagebmp">imagebmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagechar.php" title="imagechar">imagechar</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecharup.php" title="imagecharup">imagecharup</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorallocate.php" title="imagecolorallocate">imagecolorallocate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorallocatealpha.php" title="imagecolorallocatealpha">imagecolorallocatealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorat.php" title="imagecolorat">imagecolorat</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosest.php" title="imagecolorclosest">imagecolorclosest</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosestalpha.php" title="imagecolorclosestalpha">imagecolorclosestalpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorclosesthwb.php" title="imagecolorclosesthwb">imagecolorclosesthwb</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolordeallocate.php" title="imagecolordeallocate">imagecolordeallocate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorexact.php" title="imagecolorexact">imagecolorexact</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorexactalpha.php" title="imagecolorexactalpha">imagecolorexactalpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolormatch.php" title="imagecolormatch">imagecolormatch</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorresolve.php" title="imagecolorresolve">imagecolorresolve</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorresolvealpha.php" title="imagecolorresolvealpha">imagecolorresolvealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorset.php" title="imagecolorset">imagecolorset</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorsforindex.php" title="imagecolorsforindex">imagecolorsforindex</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolorstotal.php" title="imagecolorstotal">imagecolorstotal</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecolortransparent.php" title="imagecolortransparent">imagecolortransparent</a>
                        </li>
                                                <li class="">
                            <a href="function.imageconvolution.php" title="imageconvolution">imageconvolution</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopy.php" title="imagecopy">imagecopy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopymerge.php" title="imagecopymerge">imagecopymerge</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopymergegray.php" title="imagecopymergegray">imagecopymergegray</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopyresampled.php" title="imagecopyresampled">imagecopyresampled</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecopyresized.php" title="imagecopyresized">imagecopyresized</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreate.php" title="imagecreate">imagecreate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromavif.php" title="imagecreatefromavif">imagecreatefromavif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefrombmp.php" title="imagecreatefrombmp">imagecreatefrombmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd.php" title="imagecreatefromgd">imagecreatefromgd</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd2.php" title="imagecreatefromgd2">imagecreatefromgd2</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgd2part.php" title="imagecreatefromgd2part">imagecreatefromgd2part</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromgif.php" title="imagecreatefromgif">imagecreatefromgif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromjpeg.php" title="imagecreatefromjpeg">imagecreatefromjpeg</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefrompng.php" title="imagecreatefrompng">imagecreatefrompng</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromstring.php" title="imagecreatefromstring">imagecreatefromstring</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromtga.php" title="imagecreatefromtga">imagecreatefromtga</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromwbmp.php" title="imagecreatefromwbmp">imagecreatefromwbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromwebp.php" title="imagecreatefromwebp">imagecreatefromwebp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromxbm.php" title="imagecreatefromxbm">imagecreatefromxbm</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatefromxpm.php" title="imagecreatefromxpm">imagecreatefromxpm</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecreatetruecolor.php" title="imagecreatetruecolor">imagecreatetruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecrop.php" title="imagecrop">imagecrop</a>
                        </li>
                                                <li class="">
                            <a href="function.imagecropauto.php" title="imagecropauto">imagecropauto</a>
                        </li>
                                                <li class="">
                            <a href="function.imagedashedline.php" title="imagedashedline">imagedashedline</a>
                        </li>
                                                <li class="">
                            <a href="function.imagedestroy.php" title="imagedestroy">imagedestroy</a>
                        </li>
                                                <li class="">
                            <a href="function.imageellipse.php" title="imageellipse">imageellipse</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefill.php" title="imagefill">imagefill</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledarc.php" title="imagefilledarc">imagefilledarc</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledellipse.php" title="imagefilledellipse">imagefilledellipse</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledpolygon.php" title="imagefilledpolygon">imagefilledpolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilledrectangle.php" title="imagefilledrectangle">imagefilledrectangle</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilltoborder.php" title="imagefilltoborder">imagefilltoborder</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefilter.php" title="imagefilter">imagefilter</a>
                        </li>
                                                <li class="">
                            <a href="function.imageflip.php" title="imageflip">imageflip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefontheight.php" title="imagefontheight">imagefontheight</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefontwidth.php" title="imagefontwidth">imagefontwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.imageftbbox.php" title="imageftbbox">imageftbbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imagefttext.php" title="imagefttext">imagefttext</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegammacorrect.php" title="imagegammacorrect">imagegammacorrect</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegd.php" title="imagegd">imagegd</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegd2.php" title="imagegd2">imagegd2</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegetclip.php" title="imagegetclip">imagegetclip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegetinterpolation.php" title="imagegetinterpolation">imagegetinterpolation</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegif.php" title="imagegif">imagegif</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegrabscreen.php" title="imagegrabscreen">imagegrabscreen</a>
                        </li>
                                                <li class="">
                            <a href="function.imagegrabwindow.php" title="imagegrabwindow">imagegrabwindow</a>
                        </li>
                                                <li class="">
                            <a href="function.imageinterlace.php" title="imageinterlace">imageinterlace</a>
                        </li>
                                                <li class="">
                            <a href="function.imageistruecolor.php" title="imageistruecolor">imageistruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagejpeg.php" title="imagejpeg">imagejpeg</a>
                        </li>
                                                <li class="">
                            <a href="function.imagelayereffect.php" title="imagelayereffect">imagelayereffect</a>
                        </li>
                                                <li class="">
                            <a href="function.imageline.php" title="imageline">imageline</a>
                        </li>
                                                <li class="">
                            <a href="function.imageloadfont.php" title="imageloadfont">imageloadfont</a>
                        </li>
                                                <li class="">
                            <a href="function.imageopenpolygon.php" title="imageopenpolygon">imageopenpolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepalettecopy.php" title="imagepalettecopy">imagepalettecopy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepalettetotruecolor.php" title="imagepalettetotruecolor">imagepalettetotruecolor</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepng.php" title="imagepng">imagepng</a>
                        </li>
                                                <li class="">
                            <a href="function.imagepolygon.php" title="imagepolygon">imagepolygon</a>
                        </li>
                                                <li class="">
                            <a href="function.imagerectangle.php" title="imagerectangle">imagerectangle</a>
                        </li>
                                                <li class="">
                            <a href="function.imageresolution.php" title="imageresolution">imageresolution</a>
                        </li>
                                                <li class="">
                            <a href="function.imagerotate.php" title="imagerotate">imagerotate</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesavealpha.php" title="imagesavealpha">imagesavealpha</a>
                        </li>
                                                <li class="">
                            <a href="function.imagescale.php" title="imagescale">imagescale</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetbrush.php" title="imagesetbrush">imagesetbrush</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetclip.php" title="imagesetclip">imagesetclip</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetinterpolation.php" title="imagesetinterpolation">imagesetinterpolation</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetpixel.php" title="imagesetpixel">imagesetpixel</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetstyle.php" title="imagesetstyle">imagesetstyle</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesetthickness.php" title="imagesetthickness">imagesetthickness</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesettile.php" title="imagesettile">imagesettile</a>
                        </li>
                                                <li class="">
                            <a href="function.imagestring.php" title="imagestring">imagestring</a>
                        </li>
                                                <li class="">
                            <a href="function.imagestringup.php" title="imagestringup">imagestringup</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesx.php" title="imagesx">imagesx</a>
                        </li>
                                                <li class="">
                            <a href="function.imagesy.php" title="imagesy">imagesy</a>
                        </li>
                                                <li class="">
                            <a href="function.imagetruecolortopalette.php" title="imagetruecolortopalette">imagetruecolortopalette</a>
                        </li>
                                                <li class="">
                            <a href="function.imagettfbbox.php" title="imagettfbbox">imagettfbbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imagettftext.php" title="imagettftext">imagettftext</a>
                        </li>
                                                <li class="">
                            <a href="function.imagetypes.php" title="imagetypes">imagetypes</a>
                        </li>
                                                <li class="">
                            <a href="function.imagewbmp.php" title="imagewbmp">imagewbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagewebp.php" title="imagewebp">imagewebp</a>
                        </li>
                                                <li class="">
                            <a href="function.imagexbm.php" title="imagexbm">imagexbm</a>
                        </li>
                                                <li class="current">
                            <a href="function.iptcembed.php" title="iptcembed">iptcembed</a>
                        </li>
                                                <li class="">
                            <a href="function.iptcparse.php" title="iptcparse">iptcparse</a>
                        </li>
                                                <li class="">
                            <a href="function.jpeg2wbmp.php" title="jpeg2wbmp">jpeg2wbmp</a>
                        </li>
                                                <li class="">
                            <a href="function.png2wbmp.php" title="png2wbmp">png2wbmp</a>
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
