<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: fann_get_rprop_delta_zero - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.fann-get-rprop-delta-zero.php">
 <link rel="shorturl" href="https://www.php.net/fann-get-rprop-delta-zero">
 <link rel="alternate" href="https://www.php.net/fann-get-rprop-delta-zero" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.fann.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fann-get-rprop-delta-min.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fann-get-rprop-increase-factor.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.fann-get-rprop-delta-zero.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.fann-get-rprop-delta-zero.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.fann-get-rprop-delta-zero.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.fann-get-rprop-delta-zero.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.fann-get-rprop-delta-zero.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.fann-get-rprop-delta-zero.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.fann-get-rprop-delta-zero.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.fann-get-rprop-delta-zero.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.fann-get-rprop-delta-zero.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.fann-get-rprop-delta-zero.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.fann-get-rprop-delta-zero.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the initial step-size" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: fann_get_rprop_delta_zero - Manual" />
<meta name="twitter:description" content="Returns the initial step-size" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: fann_get_rprop_delta_zero - Manual" />
<meta itemprop="description" content="Returns the initial step-size" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the initial step-size" />

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
        <a href="function.fann-get-rprop-increase-factor.php">
          fann_get_rprop_increase_factor &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fann-get-rprop-delta-min.php">
          &laquo; fann_get_rprop_delta_min        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.fann.php'>FANN</a></li>      <li><a href='ref.fann.php'>Fann Functions</a></li>      </ul>
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
            <option value='en/function.fann-get-rprop-delta-zero.php' selected="selected">English</option>
            <option value='de/function.fann-get-rprop-delta-zero.php'>German</option>
            <option value='es/function.fann-get-rprop-delta-zero.php'>Spanish</option>
            <option value='fr/function.fann-get-rprop-delta-zero.php'>French</option>
            <option value='it/function.fann-get-rprop-delta-zero.php'>Italian</option>
            <option value='ja/function.fann-get-rprop-delta-zero.php'>Japanese</option>
            <option value='pt_BR/function.fann-get-rprop-delta-zero.php'>Brazilian Portuguese</option>
            <option value='ru/function.fann-get-rprop-delta-zero.php'>Russian</option>
            <option value='tr/function.fann-get-rprop-delta-zero.php'>Turkish</option>
            <option value='uk/function.fann-get-rprop-delta-zero.php'>Ukrainian</option>
            <option value='zh/function.fann-get-rprop-delta-zero.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.fann-get-rprop-delta-zero" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">fann_get_rprop_delta_zero</h1>
  <p class="verinfo">(PECL fann &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">fann_get_rprop_delta_zero</span> &mdash; <span class="dc-title">Returns the initial step-size</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.fann-get-rprop-delta-zero-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>fann_get_rprop_delta_zero</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$ann</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   The initial step-size is a positive number determining the initial step size.
  </p>
  <p class="para">
   The default delta zero is 0.1.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.fann-get-rprop-delta-zero-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">ann</code></dt>
    <dd>
     <p class="para">Neural network <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.</p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.fann-get-rprop-delta-zero-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The initial step-size, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.fann-get-rprop-delta-zero-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.fann-set-rprop-delta-zero.php" class="function" rel="rdfs-seeAlso">fann_set_rprop_delta_zero()</a> - Sets the initial step-size</span></li>
    <li><span class="function"><a href="function.fann-get-rprop-delta-min.php" class="function" rel="rdfs-seeAlso">fann_get_rprop_delta_min()</a> - Returns the minimum step-size</span></li>
    <li><span class="function"><a href="function.fann-get-rprop-delta-max.php" class="function" rel="rdfs-seeAlso">fann_get_rprop_delta_max()</a> - Returns the maximum step-size</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/fann/functions/fann-get-rprop-delta-zero.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.fann-get-rprop-delta-zero%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.fann-get-rprop-delta-zero&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fann-get-rprop-delta-zero.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.fann.php">Fann Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.fann-cascadetrain-on-data.php" title="fann_&#8203;cascadetrain_&#8203;on_&#8203;data">fann_&#8203;cascadetrain_&#8203;on_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-cascadetrain-on-file.php" title="fann_&#8203;cascadetrain_&#8203;on_&#8203;file">fann_&#8203;cascadetrain_&#8203;on_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-clear-scaling-params.php" title="fann_&#8203;clear_&#8203;scaling_&#8203;params">fann_&#8203;clear_&#8203;scaling_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-copy.php" title="fann_&#8203;copy">fann_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-create-from-file.php" title="fann_&#8203;create_&#8203;from_&#8203;file">fann_&#8203;create_&#8203;from_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-create-shortcut.php" title="fann_&#8203;create_&#8203;shortcut">fann_&#8203;create_&#8203;shortcut</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-create-shortcut-array.php" title="fann_&#8203;create_&#8203;shortcut_&#8203;array">fann_&#8203;create_&#8203;shortcut_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-create-sparse.php" title="fann_&#8203;create_&#8203;sparse">fann_&#8203;create_&#8203;sparse</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-create-sparse-array.php" title="fann_&#8203;create_&#8203;sparse_&#8203;array">fann_&#8203;create_&#8203;sparse_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-create-standard.php" title="fann_&#8203;create_&#8203;standard">fann_&#8203;create_&#8203;standard</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-create-standard-array.php" title="fann_&#8203;create_&#8203;standard_&#8203;array">fann_&#8203;create_&#8203;standard_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-create-train.php" title="fann_&#8203;create_&#8203;train">fann_&#8203;create_&#8203;train</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-create-train-from-callback.php" title="fann_&#8203;create_&#8203;train_&#8203;from_&#8203;callback">fann_&#8203;create_&#8203;train_&#8203;from_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-descale-input.php" title="fann_&#8203;descale_&#8203;input">fann_&#8203;descale_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-descale-output.php" title="fann_&#8203;descale_&#8203;output">fann_&#8203;descale_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-descale-train.php" title="fann_&#8203;descale_&#8203;train">fann_&#8203;descale_&#8203;train</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-destroy.php" title="fann_&#8203;destroy">fann_&#8203;destroy</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-destroy-train.php" title="fann_&#8203;destroy_&#8203;train">fann_&#8203;destroy_&#8203;train</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-duplicate-train-data.php" title="fann_&#8203;duplicate_&#8203;train_&#8203;data">fann_&#8203;duplicate_&#8203;train_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-activation-function.php" title="fann_&#8203;get_&#8203;activation_&#8203;function">fann_&#8203;get_&#8203;activation_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-activation-steepness.php" title="fann_&#8203;get_&#8203;activation_&#8203;steepness">fann_&#8203;get_&#8203;activation_&#8203;steepness</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-bias-array.php" title="fann_&#8203;get_&#8203;bias_&#8203;array">fann_&#8203;get_&#8203;bias_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-bit-fail.php" title="fann_&#8203;get_&#8203;bit_&#8203;fail">fann_&#8203;get_&#8203;bit_&#8203;fail</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-bit-fail-limit.php" title="fann_&#8203;get_&#8203;bit_&#8203;fail_&#8203;limit">fann_&#8203;get_&#8203;bit_&#8203;fail_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-activation-functions.php" title="fann_&#8203;get_&#8203;cascade_&#8203;activation_&#8203;functions">fann_&#8203;get_&#8203;cascade_&#8203;activation_&#8203;functions</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-activation-functions-count.php" title="fann_&#8203;get_&#8203;cascade_&#8203;activation_&#8203;functions_&#8203;count">fann_&#8203;get_&#8203;cascade_&#8203;activation_&#8203;functions_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-activation-steepnesses.php" title="fann_&#8203;get_&#8203;cascade_&#8203;activation_&#8203;steepnesses">fann_&#8203;get_&#8203;cascade_&#8203;activation_&#8203;steepnesses</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-activation-steepnesses-count.php" title="fann_&#8203;get_&#8203;cascade_&#8203;activation_&#8203;steepnesses_&#8203;count">fann_&#8203;get_&#8203;cascade_&#8203;activation_&#8203;steepnesses_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-candidate-change-fraction.php" title="fann_&#8203;get_&#8203;cascade_&#8203;candidate_&#8203;change_&#8203;fraction">fann_&#8203;get_&#8203;cascade_&#8203;candidate_&#8203;change_&#8203;fraction</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-candidate-limit.php" title="fann_&#8203;get_&#8203;cascade_&#8203;candidate_&#8203;limit">fann_&#8203;get_&#8203;cascade_&#8203;candidate_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-candidate-stagnation-epochs.php" title="fann_&#8203;get_&#8203;cascade_&#8203;candidate_&#8203;stagnation_&#8203;epochs">fann_&#8203;get_&#8203;cascade_&#8203;candidate_&#8203;stagnation_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-max-cand-epochs.php" title="fann_&#8203;get_&#8203;cascade_&#8203;max_&#8203;cand_&#8203;epochs">fann_&#8203;get_&#8203;cascade_&#8203;max_&#8203;cand_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-max-out-epochs.php" title="fann_&#8203;get_&#8203;cascade_&#8203;max_&#8203;out_&#8203;epochs">fann_&#8203;get_&#8203;cascade_&#8203;max_&#8203;out_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-min-cand-epochs.php" title="fann_&#8203;get_&#8203;cascade_&#8203;min_&#8203;cand_&#8203;epochs">fann_&#8203;get_&#8203;cascade_&#8203;min_&#8203;cand_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-min-out-epochs.php" title="fann_&#8203;get_&#8203;cascade_&#8203;min_&#8203;out_&#8203;epochs">fann_&#8203;get_&#8203;cascade_&#8203;min_&#8203;out_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-num-candidate-groups.php" title="fann_&#8203;get_&#8203;cascade_&#8203;num_&#8203;candidate_&#8203;groups">fann_&#8203;get_&#8203;cascade_&#8203;num_&#8203;candidate_&#8203;groups</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-num-candidates.php" title="fann_&#8203;get_&#8203;cascade_&#8203;num_&#8203;candidates">fann_&#8203;get_&#8203;cascade_&#8203;num_&#8203;candidates</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-output-change-fraction.php" title="fann_&#8203;get_&#8203;cascade_&#8203;output_&#8203;change_&#8203;fraction">fann_&#8203;get_&#8203;cascade_&#8203;output_&#8203;change_&#8203;fraction</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-output-stagnation-epochs.php" title="fann_&#8203;get_&#8203;cascade_&#8203;output_&#8203;stagnation_&#8203;epochs">fann_&#8203;get_&#8203;cascade_&#8203;output_&#8203;stagnation_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-cascade-weight-multiplier.php" title="fann_&#8203;get_&#8203;cascade_&#8203;weight_&#8203;multiplier">fann_&#8203;get_&#8203;cascade_&#8203;weight_&#8203;multiplier</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-connection-array.php" title="fann_&#8203;get_&#8203;connection_&#8203;array">fann_&#8203;get_&#8203;connection_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-connection-rate.php" title="fann_&#8203;get_&#8203;connection_&#8203;rate">fann_&#8203;get_&#8203;connection_&#8203;rate</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-errno.php" title="fann_&#8203;get_&#8203;errno">fann_&#8203;get_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-errstr.php" title="fann_&#8203;get_&#8203;errstr">fann_&#8203;get_&#8203;errstr</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-layer-array.php" title="fann_&#8203;get_&#8203;layer_&#8203;array">fann_&#8203;get_&#8203;layer_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-learning-momentum.php" title="fann_&#8203;get_&#8203;learning_&#8203;momentum">fann_&#8203;get_&#8203;learning_&#8203;momentum</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-learning-rate.php" title="fann_&#8203;get_&#8203;learning_&#8203;rate">fann_&#8203;get_&#8203;learning_&#8203;rate</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-mse.php" title="fann_&#8203;get_&#8203;MSE">fann_&#8203;get_&#8203;MSE</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-network-type.php" title="fann_&#8203;get_&#8203;network_&#8203;type">fann_&#8203;get_&#8203;network_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-num-input.php" title="fann_&#8203;get_&#8203;num_&#8203;input">fann_&#8203;get_&#8203;num_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-num-layers.php" title="fann_&#8203;get_&#8203;num_&#8203;layers">fann_&#8203;get_&#8203;num_&#8203;layers</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-num-output.php" title="fann_&#8203;get_&#8203;num_&#8203;output">fann_&#8203;get_&#8203;num_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-quickprop-decay.php" title="fann_&#8203;get_&#8203;quickprop_&#8203;decay">fann_&#8203;get_&#8203;quickprop_&#8203;decay</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-quickprop-mu.php" title="fann_&#8203;get_&#8203;quickprop_&#8203;mu">fann_&#8203;get_&#8203;quickprop_&#8203;mu</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-rprop-decrease-factor.php" title="fann_&#8203;get_&#8203;rprop_&#8203;decrease_&#8203;factor">fann_&#8203;get_&#8203;rprop_&#8203;decrease_&#8203;factor</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-rprop-delta-max.php" title="fann_&#8203;get_&#8203;rprop_&#8203;delta_&#8203;max">fann_&#8203;get_&#8203;rprop_&#8203;delta_&#8203;max</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-rprop-delta-min.php" title="fann_&#8203;get_&#8203;rprop_&#8203;delta_&#8203;min">fann_&#8203;get_&#8203;rprop_&#8203;delta_&#8203;min</a>
                        </li>
                                                <li class="current">
                            <a href="function.fann-get-rprop-delta-zero.php" title="fann_&#8203;get_&#8203;rprop_&#8203;delta_&#8203;zero">fann_&#8203;get_&#8203;rprop_&#8203;delta_&#8203;zero</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-rprop-increase-factor.php" title="fann_&#8203;get_&#8203;rprop_&#8203;increase_&#8203;factor">fann_&#8203;get_&#8203;rprop_&#8203;increase_&#8203;factor</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-sarprop-step-error-shift.php" title="fann_&#8203;get_&#8203;sarprop_&#8203;step_&#8203;error_&#8203;shift">fann_&#8203;get_&#8203;sarprop_&#8203;step_&#8203;error_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-sarprop-step-error-threshold-factor.php" title="fann_&#8203;get_&#8203;sarprop_&#8203;step_&#8203;error_&#8203;threshold_&#8203;factor">fann_&#8203;get_&#8203;sarprop_&#8203;step_&#8203;error_&#8203;threshold_&#8203;factor</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-sarprop-temperature.php" title="fann_&#8203;get_&#8203;sarprop_&#8203;temperature">fann_&#8203;get_&#8203;sarprop_&#8203;temperature</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-sarprop-weight-decay-shift.php" title="fann_&#8203;get_&#8203;sarprop_&#8203;weight_&#8203;decay_&#8203;shift">fann_&#8203;get_&#8203;sarprop_&#8203;weight_&#8203;decay_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-total-connections.php" title="fann_&#8203;get_&#8203;total_&#8203;connections">fann_&#8203;get_&#8203;total_&#8203;connections</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-total-neurons.php" title="fann_&#8203;get_&#8203;total_&#8203;neurons">fann_&#8203;get_&#8203;total_&#8203;neurons</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-train-error-function.php" title="fann_&#8203;get_&#8203;train_&#8203;error_&#8203;function">fann_&#8203;get_&#8203;train_&#8203;error_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-train-stop-function.php" title="fann_&#8203;get_&#8203;train_&#8203;stop_&#8203;function">fann_&#8203;get_&#8203;train_&#8203;stop_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-get-training-algorithm.php" title="fann_&#8203;get_&#8203;training_&#8203;algorithm">fann_&#8203;get_&#8203;training_&#8203;algorithm</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-init-weights.php" title="fann_&#8203;init_&#8203;weights">fann_&#8203;init_&#8203;weights</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-length-train-data.php" title="fann_&#8203;length_&#8203;train_&#8203;data">fann_&#8203;length_&#8203;train_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-merge-train-data.php" title="fann_&#8203;merge_&#8203;train_&#8203;data">fann_&#8203;merge_&#8203;train_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-num-input-train-data.php" title="fann_&#8203;num_&#8203;input_&#8203;train_&#8203;data">fann_&#8203;num_&#8203;input_&#8203;train_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-num-output-train-data.php" title="fann_&#8203;num_&#8203;output_&#8203;train_&#8203;data">fann_&#8203;num_&#8203;output_&#8203;train_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-print-error.php" title="fann_&#8203;print_&#8203;error">fann_&#8203;print_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-randomize-weights.php" title="fann_&#8203;randomize_&#8203;weights">fann_&#8203;randomize_&#8203;weights</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-read-train-from-file.php" title="fann_&#8203;read_&#8203;train_&#8203;from_&#8203;file">fann_&#8203;read_&#8203;train_&#8203;from_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-reset-errno.php" title="fann_&#8203;reset_&#8203;errno">fann_&#8203;reset_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-reset-errstr.php" title="fann_&#8203;reset_&#8203;errstr">fann_&#8203;reset_&#8203;errstr</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-reset-mse.php" title="fann_&#8203;reset_&#8203;MSE">fann_&#8203;reset_&#8203;MSE</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-run.php" title="fann_&#8203;run">fann_&#8203;run</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-save.php" title="fann_&#8203;save">fann_&#8203;save</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-save-train.php" title="fann_&#8203;save_&#8203;train">fann_&#8203;save_&#8203;train</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-scale-input.php" title="fann_&#8203;scale_&#8203;input">fann_&#8203;scale_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-scale-input-train-data.php" title="fann_&#8203;scale_&#8203;input_&#8203;train_&#8203;data">fann_&#8203;scale_&#8203;input_&#8203;train_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-scale-output.php" title="fann_&#8203;scale_&#8203;output">fann_&#8203;scale_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-scale-output-train-data.php" title="fann_&#8203;scale_&#8203;output_&#8203;train_&#8203;data">fann_&#8203;scale_&#8203;output_&#8203;train_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-scale-train.php" title="fann_&#8203;scale_&#8203;train">fann_&#8203;scale_&#8203;train</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-scale-train-data.php" title="fann_&#8203;scale_&#8203;train_&#8203;data">fann_&#8203;scale_&#8203;train_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-activation-function.php" title="fann_&#8203;set_&#8203;activation_&#8203;function">fann_&#8203;set_&#8203;activation_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-activation-function-hidden.php" title="fann_&#8203;set_&#8203;activation_&#8203;function_&#8203;hidden">fann_&#8203;set_&#8203;activation_&#8203;function_&#8203;hidden</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-activation-function-layer.php" title="fann_&#8203;set_&#8203;activation_&#8203;function_&#8203;layer">fann_&#8203;set_&#8203;activation_&#8203;function_&#8203;layer</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-activation-function-output.php" title="fann_&#8203;set_&#8203;activation_&#8203;function_&#8203;output">fann_&#8203;set_&#8203;activation_&#8203;function_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-activation-steepness.php" title="fann_&#8203;set_&#8203;activation_&#8203;steepness">fann_&#8203;set_&#8203;activation_&#8203;steepness</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-activation-steepness-hidden.php" title="fann_&#8203;set_&#8203;activation_&#8203;steepness_&#8203;hidden">fann_&#8203;set_&#8203;activation_&#8203;steepness_&#8203;hidden</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-activation-steepness-layer.php" title="fann_&#8203;set_&#8203;activation_&#8203;steepness_&#8203;layer">fann_&#8203;set_&#8203;activation_&#8203;steepness_&#8203;layer</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-activation-steepness-output.php" title="fann_&#8203;set_&#8203;activation_&#8203;steepness_&#8203;output">fann_&#8203;set_&#8203;activation_&#8203;steepness_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-bit-fail-limit.php" title="fann_&#8203;set_&#8203;bit_&#8203;fail_&#8203;limit">fann_&#8203;set_&#8203;bit_&#8203;fail_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-callback.php" title="fann_&#8203;set_&#8203;callback">fann_&#8203;set_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-activation-functions.php" title="fann_&#8203;set_&#8203;cascade_&#8203;activation_&#8203;functions">fann_&#8203;set_&#8203;cascade_&#8203;activation_&#8203;functions</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-activation-steepnesses.php" title="fann_&#8203;set_&#8203;cascade_&#8203;activation_&#8203;steepnesses">fann_&#8203;set_&#8203;cascade_&#8203;activation_&#8203;steepnesses</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-candidate-change-fraction.php" title="fann_&#8203;set_&#8203;cascade_&#8203;candidate_&#8203;change_&#8203;fraction">fann_&#8203;set_&#8203;cascade_&#8203;candidate_&#8203;change_&#8203;fraction</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-candidate-limit.php" title="fann_&#8203;set_&#8203;cascade_&#8203;candidate_&#8203;limit">fann_&#8203;set_&#8203;cascade_&#8203;candidate_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-candidate-stagnation-epochs.php" title="fann_&#8203;set_&#8203;cascade_&#8203;candidate_&#8203;stagnation_&#8203;epochs">fann_&#8203;set_&#8203;cascade_&#8203;candidate_&#8203;stagnation_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-max-cand-epochs.php" title="fann_&#8203;set_&#8203;cascade_&#8203;max_&#8203;cand_&#8203;epochs">fann_&#8203;set_&#8203;cascade_&#8203;max_&#8203;cand_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-max-out-epochs.php" title="fann_&#8203;set_&#8203;cascade_&#8203;max_&#8203;out_&#8203;epochs">fann_&#8203;set_&#8203;cascade_&#8203;max_&#8203;out_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-min-cand-epochs.php" title="fann_&#8203;set_&#8203;cascade_&#8203;min_&#8203;cand_&#8203;epochs">fann_&#8203;set_&#8203;cascade_&#8203;min_&#8203;cand_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-min-out-epochs.php" title="fann_&#8203;set_&#8203;cascade_&#8203;min_&#8203;out_&#8203;epochs">fann_&#8203;set_&#8203;cascade_&#8203;min_&#8203;out_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-num-candidate-groups.php" title="fann_&#8203;set_&#8203;cascade_&#8203;num_&#8203;candidate_&#8203;groups">fann_&#8203;set_&#8203;cascade_&#8203;num_&#8203;candidate_&#8203;groups</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-output-change-fraction.php" title="fann_&#8203;set_&#8203;cascade_&#8203;output_&#8203;change_&#8203;fraction">fann_&#8203;set_&#8203;cascade_&#8203;output_&#8203;change_&#8203;fraction</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-output-stagnation-epochs.php" title="fann_&#8203;set_&#8203;cascade_&#8203;output_&#8203;stagnation_&#8203;epochs">fann_&#8203;set_&#8203;cascade_&#8203;output_&#8203;stagnation_&#8203;epochs</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-cascade-weight-multiplier.php" title="fann_&#8203;set_&#8203;cascade_&#8203;weight_&#8203;multiplier">fann_&#8203;set_&#8203;cascade_&#8203;weight_&#8203;multiplier</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-error-log.php" title="fann_&#8203;set_&#8203;error_&#8203;log">fann_&#8203;set_&#8203;error_&#8203;log</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-input-scaling-params.php" title="fann_&#8203;set_&#8203;input_&#8203;scaling_&#8203;params">fann_&#8203;set_&#8203;input_&#8203;scaling_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-learning-momentum.php" title="fann_&#8203;set_&#8203;learning_&#8203;momentum">fann_&#8203;set_&#8203;learning_&#8203;momentum</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-learning-rate.php" title="fann_&#8203;set_&#8203;learning_&#8203;rate">fann_&#8203;set_&#8203;learning_&#8203;rate</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-output-scaling-params.php" title="fann_&#8203;set_&#8203;output_&#8203;scaling_&#8203;params">fann_&#8203;set_&#8203;output_&#8203;scaling_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-quickprop-decay.php" title="fann_&#8203;set_&#8203;quickprop_&#8203;decay">fann_&#8203;set_&#8203;quickprop_&#8203;decay</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-quickprop-mu.php" title="fann_&#8203;set_&#8203;quickprop_&#8203;mu">fann_&#8203;set_&#8203;quickprop_&#8203;mu</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-rprop-decrease-factor.php" title="fann_&#8203;set_&#8203;rprop_&#8203;decrease_&#8203;factor">fann_&#8203;set_&#8203;rprop_&#8203;decrease_&#8203;factor</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-rprop-delta-max.php" title="fann_&#8203;set_&#8203;rprop_&#8203;delta_&#8203;max">fann_&#8203;set_&#8203;rprop_&#8203;delta_&#8203;max</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-rprop-delta-min.php" title="fann_&#8203;set_&#8203;rprop_&#8203;delta_&#8203;min">fann_&#8203;set_&#8203;rprop_&#8203;delta_&#8203;min</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-rprop-delta-zero.php" title="fann_&#8203;set_&#8203;rprop_&#8203;delta_&#8203;zero">fann_&#8203;set_&#8203;rprop_&#8203;delta_&#8203;zero</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-rprop-increase-factor.php" title="fann_&#8203;set_&#8203;rprop_&#8203;increase_&#8203;factor">fann_&#8203;set_&#8203;rprop_&#8203;increase_&#8203;factor</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-sarprop-step-error-shift.php" title="fann_&#8203;set_&#8203;sarprop_&#8203;step_&#8203;error_&#8203;shift">fann_&#8203;set_&#8203;sarprop_&#8203;step_&#8203;error_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-sarprop-step-error-threshold-factor.php" title="fann_&#8203;set_&#8203;sarprop_&#8203;step_&#8203;error_&#8203;threshold_&#8203;factor">fann_&#8203;set_&#8203;sarprop_&#8203;step_&#8203;error_&#8203;threshold_&#8203;factor</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-sarprop-temperature.php" title="fann_&#8203;set_&#8203;sarprop_&#8203;temperature">fann_&#8203;set_&#8203;sarprop_&#8203;temperature</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-sarprop-weight-decay-shift.php" title="fann_&#8203;set_&#8203;sarprop_&#8203;weight_&#8203;decay_&#8203;shift">fann_&#8203;set_&#8203;sarprop_&#8203;weight_&#8203;decay_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-scaling-params.php" title="fann_&#8203;set_&#8203;scaling_&#8203;params">fann_&#8203;set_&#8203;scaling_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-train-error-function.php" title="fann_&#8203;set_&#8203;train_&#8203;error_&#8203;function">fann_&#8203;set_&#8203;train_&#8203;error_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-train-stop-function.php" title="fann_&#8203;set_&#8203;train_&#8203;stop_&#8203;function">fann_&#8203;set_&#8203;train_&#8203;stop_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-training-algorithm.php" title="fann_&#8203;set_&#8203;training_&#8203;algorithm">fann_&#8203;set_&#8203;training_&#8203;algorithm</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-weight.php" title="fann_&#8203;set_&#8203;weight">fann_&#8203;set_&#8203;weight</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-set-weight-array.php" title="fann_&#8203;set_&#8203;weight_&#8203;array">fann_&#8203;set_&#8203;weight_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-shuffle-train-data.php" title="fann_&#8203;shuffle_&#8203;train_&#8203;data">fann_&#8203;shuffle_&#8203;train_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-subset-train-data.php" title="fann_&#8203;subset_&#8203;train_&#8203;data">fann_&#8203;subset_&#8203;train_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-test.php" title="fann_&#8203;test">fann_&#8203;test</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-test-data.php" title="fann_&#8203;test_&#8203;data">fann_&#8203;test_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-train.php" title="fann_&#8203;train">fann_&#8203;train</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-train-epoch.php" title="fann_&#8203;train_&#8203;epoch">fann_&#8203;train_&#8203;epoch</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-train-on-data.php" title="fann_&#8203;train_&#8203;on_&#8203;data">fann_&#8203;train_&#8203;on_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.fann-train-on-file.php" title="fann_&#8203;train_&#8203;on_&#8203;file">fann_&#8203;train_&#8203;on_&#8203;file</a>
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
