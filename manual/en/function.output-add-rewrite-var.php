<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: output_add_rewrite_var - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.output-add-rewrite-var.php">
 <link rel="shorturl" href="https://www.php.net/output-add-rewrite-var">
 <link rel="alternate" href="https://www.php.net/output-add-rewrite-var" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.outcontrol.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ob-start.php">
 <link rel="next" href="https://www.php.net/manual/en/function.output-reset-rewrite-vars.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.output-add-rewrite-var.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.output-add-rewrite-var.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.output-add-rewrite-var.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.output-add-rewrite-var.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.output-add-rewrite-var.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.output-add-rewrite-var.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.output-add-rewrite-var.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.output-add-rewrite-var.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.output-add-rewrite-var.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.output-add-rewrite-var.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.output-add-rewrite-var.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Add URL rewriter values" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: output_add_rewrite_var - Manual" />
<meta name="twitter:description" content="Add URL rewriter values" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: output_add_rewrite_var - Manual" />
<meta itemprop="description" content="Add URL rewriter values" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Add URL rewriter values" />

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
        <a href="function.output-reset-rewrite-vars.php">
          output_reset_rewrite_vars &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ob-start.php">
          &laquo; ob_start        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.outcontrol.php'>Output Control</a></li>      <li><a href='ref.outcontrol.php'>Output Control Functions</a></li>      </ul>
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
            <option value='en/function.output-add-rewrite-var.php' selected="selected">English</option>
            <option value='de/function.output-add-rewrite-var.php'>German</option>
            <option value='es/function.output-add-rewrite-var.php'>Spanish</option>
            <option value='fr/function.output-add-rewrite-var.php'>French</option>
            <option value='it/function.output-add-rewrite-var.php'>Italian</option>
            <option value='ja/function.output-add-rewrite-var.php'>Japanese</option>
            <option value='pt_BR/function.output-add-rewrite-var.php'>Brazilian Portuguese</option>
            <option value='ru/function.output-add-rewrite-var.php'>Russian</option>
            <option value='tr/function.output-add-rewrite-var.php'>Turkish</option>
            <option value='uk/function.output-add-rewrite-var.php'>Ukrainian</option>
            <option value='zh/function.output-add-rewrite-var.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.output-add-rewrite-var" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">output_add_rewrite_var</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">output_add_rewrite_var</span> &mdash; <span class="dc-title">Add URL rewriter values</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.output-add-rewrite-var-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>output_add_rewrite_var</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function starts the <code class="literal">&#039;URL-Rewriter&#039;</code> output buffer handler
   if it is not active,
   stores the <code class="parameter">name</code> and <code class="parameter">value</code> parameters,
   and when the buffer is flushed rewrites the <abbr title="Uniform Resource Locator">URL</abbr>s
   and forms based on the applicable ini settings.
   Subsequent calls to this function will store all additional name/value pairs
   until the handler is turned off.
  </p>
  <p class="para">
   When the output buffer is flushed
   (by calling <span class="function"><a href="function.ob-flush.php" class="function">ob_flush()</a></span>, <span class="function"><a href="function.ob-end-flush.php" class="function">ob_end_flush()</a></span>,
   <span class="function"><a href="function.ob-get-flush.php" class="function">ob_get_flush()</a></span> or at the end of the script)
   the <code class="literal">&#039;URL-Rewriter&#039;</code> handler adds the name/value pairs
   as query parameters to <abbr title="Uniform Resource Locator">URL</abbr>s in attributes of HTML tags
   and adds hidden fields to forms based on the values of the
   <a href="outcontrol.configuration.php#ini.url-rewriter.tags" class="link">url_rewriter.tags</a> and
   <a href="outcontrol.configuration.php#ini.url-rewriter.hosts" class="link">url_rewriter.hosts</a>
   configuration directives.
  </p>
  <p class="para">
   Each name/value pair added to the <code class="literal">&#039;URL-Rewriter&#039;</code> handler
   is added to the <abbr title="Uniform Resource Locator">URL</abbr>s and/or forms
   even if this results in duplicate <abbr title="Uniform Resource Locator">URL</abbr> query parameters
   or elements with the same name attributes.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Once the <code class="literal">&#039;URL-Rewriter&#039;</code> handler has been turned off
    it cannot be started again.
   </span>
  </p></blockquote>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    Prior to PHP 8.4.0, the hosts to be rewritten were set in
    <a href="session.configuration.php#ini.session.trans-sid-hosts" class="link">session.trans_sid_hosts</a>
    instead of <a href="outcontrol.configuration.php#ini.url-rewriter.hosts" class="link">url_rewriter.hosts</a>.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.output-add-rewrite-var-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       The variable name.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The variable value.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.output-add-rewrite-var-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.output-add-rewrite-var-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>7.1.0</td>
       <td>
        As of PHP 7.1.0, a dedicated output buffer is used,
        <a href="outcontrol.configuration.php#ini.url-rewriter.tags" class="link">url_rewriter.tags</a>
        is used solely for output functions and
        <a href="outcontrol.configuration.php#ini.url-rewriter.tags" class="link">url_rewriter.hosts</a> is available.
        Prior to PHP 7.1.0, rewrite variables set by <span class="function"><strong>output_add_rewrite_var()</strong></span>
        shared an output buffer with transparent session id support
        (see <a href="session.configuration.php#ini.session.trans-sid-tags" class="link">session.trans_sid_tags</a>).
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.output-add-rewrite-var-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-629">
    <p><strong>Example #1 <span class="function"><strong>output_add_rewrite_var()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'url_rewriter.tags'</span><span style="color: #007700">, </span><span style="color: #DD0000">'a=href,form='</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">output_add_rewrite_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'var'</span><span style="color: #007700">, </span><span style="color: #DD0000">'value'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// some links<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'&lt;a href="file.php"&gt;link&lt;/a&gt;<br />&lt;a href="http://example.com"&gt;link2&lt;/a&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// a form<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'&lt;form action="script.php" method="post"&gt;<br />&lt;input type="text" name="var2" /&gt;<br />&lt;/form&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">ob_list_handlers</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">&lt;a href=&quot;file.php?var=value&quot;&gt;link&lt;/a&gt;
&lt;a href=&quot;http://example.com&quot;&gt;link2&lt;/a&gt;

&lt;form action=&quot;script.php&quot; method=&quot;post&quot;&gt;
&lt;input type=&quot;hidden&quot; name=&quot;var&quot; value=&quot;value&quot; /&gt;
&lt;input type=&quot;text&quot; name=&quot;var2&quot; /&gt;
&lt;/form&gt;

Array
(
    [0] =&gt; URL-Rewriter
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.output-add-rewrite-var-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.output-reset-rewrite-vars.php" class="function" rel="rdfs-seeAlso">output_reset_rewrite_vars()</a> - Reset URL rewriter values</span></li>
    <li><span class="function"><a href="function.ob-flush.php" class="function" rel="rdfs-seeAlso">ob_flush()</a> - Flush (send) the return value of the active output handler</span></li>
    <li><span class="function"><a href="function.ob-list-handlers.php" class="function" rel="rdfs-seeAlso">ob_list_handlers()</a> - List all output handlers in use</span></li>
    <li><a href="outcontrol.configuration.php#ini.url-rewriter.tags" class="link">url_rewriter.tags</a></li>
    <li><a href="outcontrol.configuration.php#ini.url-rewriter.hosts" class="link">url_rewriter.hosts</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/outcontrol/functions/output-add-rewrite-var.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.output-add-rewrite-var%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.output-add-rewrite-var&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.output-add-rewrite-var.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="81356">  <div class="votes">
    <div id="Vu81356">
    <a href="/manual/vote-note.php?id=81356&amp;page=function.output-add-rewrite-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81356">
    <a href="/manual/vote-note.php?id=81356&amp;page=function.output-add-rewrite-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81356" title="56% like this...">
    2
    </div>
  </div>
  <a href="#81356" class="name">
  <strong class="user"><em>Niko</em></strong></a><a class="genanchor" href="#81356"> &para;</a><div class="date" title="2008-02-24 01:58"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81356">
<div class="phpcode"><code><span class="html">This function also adds a parameter to &lt;input type="image"&gt; fields!<br /><br />Example:<br />This code:<br /><br />&lt;?<br />output_add_rewrite_var ('var','value');<br />echo '&lt;form action="" method="post"&gt;<br />        &lt;input type="image" src="image.jpg" alt="go"&gt;<br />        &lt;/form&gt;';<br />?&gt;<br /><br />will output something like this:<br /><br />&lt;form action="" method="post"&gt;<br />        &lt;input type="hidden" name="var" value="value"&gt;<br />        &lt;input type="image" src="image.jpg?var=value" alt="go"&gt;<br />        &lt;/form&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="86461">  <div class="votes">
    <div id="Vu86461">
    <a href="/manual/vote-note.php?id=86461&amp;page=function.output-add-rewrite-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86461">
    <a href="/manual/vote-note.php?id=86461&amp;page=function.output-add-rewrite-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86461" title="53% like this...">
    1
    </div>
  </div>
  <a href="#86461" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#86461"> &para;</a><div class="date" title="2008-10-20 09:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86461">
<div class="phpcode"><code><span class="html">For a completely valid XHTML document you have to set the arg_separator, use this before you use output-add-rewrite-var:
<br />
<br /><span class="default">&lt;?php
<br />ini_set</span><span class="keyword">(</span><span class="string">'arg_separator.input'</span><span class="keyword">, </span><span class="string">'&amp;'</span><span class="keyword">);
<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'arg_separator.output'</span><span class="keyword">, </span><span class="string">'&amp;'</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.output-add-rewrite-var&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.output-add-rewrite-var.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.outcontrol.php">Output Control Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.flush.php" title="flush">flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-clean.php" title="ob_&#8203;clean">ob_&#8203;clean</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-end-clean.php" title="ob_&#8203;end_&#8203;clean">ob_&#8203;end_&#8203;clean</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-end-flush.php" title="ob_&#8203;end_&#8203;flush">ob_&#8203;end_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-flush.php" title="ob_&#8203;flush">ob_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-clean.php" title="ob_&#8203;get_&#8203;clean">ob_&#8203;get_&#8203;clean</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-contents.php" title="ob_&#8203;get_&#8203;contents">ob_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-flush.php" title="ob_&#8203;get_&#8203;flush">ob_&#8203;get_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-length.php" title="ob_&#8203;get_&#8203;length">ob_&#8203;get_&#8203;length</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-level.php" title="ob_&#8203;get_&#8203;level">ob_&#8203;get_&#8203;level</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-get-status.php" title="ob_&#8203;get_&#8203;status">ob_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-implicit-flush.php" title="ob_&#8203;implicit_&#8203;flush">ob_&#8203;implicit_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-list-handlers.php" title="ob_&#8203;list_&#8203;handlers">ob_&#8203;list_&#8203;handlers</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-start.php" title="ob_&#8203;start">ob_&#8203;start</a>
                        </li>
                                                <li class="current">
                            <a href="function.output-add-rewrite-var.php" title="output_&#8203;add_&#8203;rewrite_&#8203;var">output_&#8203;add_&#8203;rewrite_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.output-reset-rewrite-vars.php" title="output_&#8203;reset_&#8203;rewrite_&#8203;vars">output_&#8203;reset_&#8203;rewrite_&#8203;vars</a>
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
