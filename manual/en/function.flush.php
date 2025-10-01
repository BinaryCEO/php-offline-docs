<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: flush - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.flush.php">
 <link rel="shorturl" href="https://www.php.net/flush">
 <link rel="alternate" href="https://www.php.net/flush" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.outcontrol.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.outcontrol.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ob-clean.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.flush.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.flush.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.flush.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.flush.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.flush.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.flush.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.flush.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.flush.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.flush.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.flush.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.flush.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Flush system output buffer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: flush - Manual" />
<meta name="twitter:description" content="Flush system output buffer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: flush - Manual" />
<meta itemprop="description" content="Flush system output buffer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Flush system output buffer" />

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
        <a href="function.ob-clean.php">
          ob_clean &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.outcontrol.php">
          &laquo; Output Control Functions        </a>
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
            <option value='en/function.flush.php' selected="selected">English</option>
            <option value='de/function.flush.php'>German</option>
            <option value='es/function.flush.php'>Spanish</option>
            <option value='fr/function.flush.php'>French</option>
            <option value='it/function.flush.php'>Italian</option>
            <option value='ja/function.flush.php'>Japanese</option>
            <option value='pt_BR/function.flush.php'>Brazilian Portuguese</option>
            <option value='ru/function.flush.php'>Russian</option>
            <option value='tr/function.flush.php'>Turkish</option>
            <option value='uk/function.flush.php'>Ukrainian</option>
            <option value='zh/function.flush.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.flush" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">flush</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">flush</span> &mdash; <span class="dc-title">Flush system output buffer</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.flush-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>flush</strong></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Flushes the system write buffers of PHP and the backend used by PHP
   (e.g.: CGI, a web server).
   In a command line environment <span class="function"><strong>flush()</strong></span>
   will attempt to flush the contents of the buffers only
   whereas in a web context headers and the contents of the buffers are flushed.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    <span class="function"><strong>flush()</strong></span> may not be able to override
    the buffering scheme of the web server
    and it has no effect on any client-side buffering in the browser.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    This function does not have any effect on user level output handlers
    such as those started by <span class="function"><a href="function.ob-start.php" class="function">ob_start()</a></span>
    or <span class="function"><a href="function.output-add-rewrite-var.php" class="function">output_add_rewrite_var()</a></span>.
   </span>
  </p></blockquote>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    <span class="function"><strong>flush()</strong></span> can interfere with output handlers
    that set and send headers in a web context (e.g. <span class="function"><a href="function.ob-gzhandler.php" class="function">ob_gzhandler()</a></span>)
    by sending headers before these handlers can do so.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.flush-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.flush-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.flush-changelog">
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
      <td>8.4.0</td>
      <td>
       Flushing headers without a body will now succeed in FastCGI.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.flush-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ob-flush.php" class="function" rel="rdfs-seeAlso">ob_flush()</a> - Flush (send) the return value of the active output handler</span></li>
    <li><span class="function"><a href="function.ob-clean.php" class="function" rel="rdfs-seeAlso">ob_clean()</a> - Clean (erase) the contents of the active output buffer</span></li>
    <li><span class="function"><a href="function.ob-end-flush.php" class="function" rel="rdfs-seeAlso">ob_end_flush()</a> - Flush (send) the return value of the active output handler
   and turn the active output buffer off</span></li>
    <li><span class="function"><a href="function.ob-end-clean.php" class="function" rel="rdfs-seeAlso">ob_end_clean()</a> - Clean (erase) the contents of the active output buffer and turn it off</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/outcontrol/functions/flush.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.flush%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.flush&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.flush.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">21 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="54841">  <div class="votes">
    <div id="Vu54841">
    <a href="/manual/vote-note.php?id=54841&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54841">
    <a href="/manual/vote-note.php?id=54841&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54841" title="61% like this...">
    52
    </div>
  </div>
  <a href="#54841" class="name">
  <strong class="user"><em>js at jeansebastien dot com</em></strong></a><a class="genanchor" href="#54841"> &para;</a><div class="date" title="2005-07-16 11:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54841">
<div class="phpcode"><code><span class="html">This will show each line at a time with a pause of 2 seconds.<br />(Tested under IEx and Firefox)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (</span><span class="default">ob_get_level</span><span class="keyword">() == </span><span class="default">0</span><span class="keyword">) </span><span class="default">ob_start</span><span class="keyword">();<br /><br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">10</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br /><br />        echo </span><span class="string">"&lt;br&gt; Line to show."</span><span class="keyword">;<br />        echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">,</span><span class="default">4096</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;    <br /><br />        </span><span class="default">ob_flush</span><span class="keyword">();<br />        </span><span class="default">flush</span><span class="keyword">();<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br />}<br /><br />echo </span><span class="string">"Done."</span><span class="keyword">;<br /><br /></span><span class="default">ob_end_flush</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87807">  <div class="votes">
    <div id="Vu87807">
    <a href="/manual/vote-note.php?id=87807&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87807">
    <a href="/manual/vote-note.php?id=87807&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87807" title="67% like this...">
    20
    </div>
  </div>
  <a href="#87807" class="name">
  <strong class="user"><em>mandor at mandor dot net</em></strong></a><a class="genanchor" href="#87807"> &para;</a><div class="date" title="2008-12-22 07:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87807">
<div class="phpcode"><code><span class="html">This is what I use to turn off pretty much anything that could cause unwanted output buffering and turn on implicit flush:<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">@</span><span class="default">apache_setenv</span><span class="keyword">(</span><span class="string">'no-gzip'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    @</span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'zlib.output_compression'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />    @</span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'implicit_flush'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">ob_get_level</span><span class="keyword">(); </span><span class="default">$i</span><span class="keyword">++) { </span><span class="default">ob_end_flush</span><span class="keyword">(); }<br />    </span><span class="default">ob_implicit_flush</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />If it still fails though, keep in mind that Internet Explorer and Safari have a 1k buffer before incremental rendering kicks in, so you'll want to output some padding as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="124096">  <div class="votes">
    <div id="Vu124096">
    <a href="/manual/vote-note.php?id=124096&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124096">
    <a href="/manual/vote-note.php?id=124096&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124096" title="80% like this...">
    3
    </div>
  </div>
  <a href="#124096" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124096"> &para;</a><div class="date" title="2019-08-07 06:28"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124096">
<div class="phpcode"><code><span class="html">Regarding buffering by browser you can use:<br /><br />$out=str_pad($yourMessage.'&lt;br/&gt;',1024);<br />print($out);<br />ob_flush();<br />flush();<br /><br />Works for me in Firefox 60 ESR.</span></code></div>
  </div>
 </div>
  <div class="note" id="51679">  <div class="votes">
    <div id="Vu51679">
    <a href="/manual/vote-note.php?id=51679&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51679">
    <a href="/manual/vote-note.php?id=51679&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51679" title="67% like this...">
    19
    </div>
  </div>
  <a href="#51679" class="name">
  <strong class="user"><em>Ghostshaw at spymac dot com</em></strong></a><a class="genanchor" href="#51679"> &para;</a><div class="date" title="2005-04-07 04:45"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51679">
<div class="phpcode"><code><span class="html">I would like to point out that there is a function to replace ob_flush and flush. If you set ob_implicit_flush(true); at the top of the page it will automatically flush any echo or print you do in the rest of the script.<br /><br />Note that you still need a minimum amount of data to come through the browser filter. I would advice using str_pad($text,4096); since this automatically lenghtens the text with spaces to 4 KB which is the minimum limit when using FireFox and linux.<br /><br />I hope this helps you all out a bit.</span></code></div>
  </div>
 </div>
  <div class="note" id="125306">  <div class="votes">
    <div id="Vu125306">
    <a href="/manual/vote-note.php?id=125306&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125306">
    <a href="/manual/vote-note.php?id=125306&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125306" title="73% like this...">
    9
    </div>
  </div>
  <a href="#125306" class="name">
  <strong class="user"><em>fran at fran dot cr</em></strong></a><a class="genanchor" href="#125306"> &para;</a><div class="date" title="2020-08-28 03:29"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125306">
<div class="phpcode"><code><span class="html">If you want to make flush work when using php-fpm from Apache httpd with mod_proxy_fcgi, since 2.4.31 you can append flushpackets=on to enable flushing, which is instant by default, and and flushwait=n where n is in milliseconds to delay the flushing time for performance seconds.<br /><br />These values can be appended to the &lt;Proxy&gt; directive, e.g. &lt;Proxy "fcgi://localhost/" flushpackets=on flushwait=500&gt; or in ProxyPass and ProxyPassMatch lines.<br /><br />The mod_proxy_fcgi documentation for 2.4 does not document this, but it is available in the 2.5 or trunk documentation.</span></code></div>
  </div>
 </div>
  <div class="note" id="113360">  <div class="votes">
    <div id="Vu113360">
    <a href="/manual/vote-note.php?id=113360&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113360">
    <a href="/manual/vote-note.php?id=113360&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113360" title="66% like this...">
    16
    </div>
  </div>
  <a href="#113360" class="name">
  <strong class="user"><em>php at stelio dot net</em></strong></a><a class="genanchor" href="#113360"> &para;</a><div class="date" title="2013-10-01 11:26"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113360">
<div class="phpcode"><code><span class="html">For a Windows system using IIS, the ResponseBufferLimit takes precedence over PHP's output_buffering settings. So you must also set the ResponseBufferLimit to be something lower than its default value.<br /><br />For IIS versions older than 7, the setting can be found in the %windir%\System32\inetsrv\fcgiext.ini file (the FastCGI config file). You can set the appropriate line to:<br />  ResponseBufferLimit=0<br /><br />For IIS 7+, the settings are stored in %windir%\System32\inetsrv\config. Edit the applicationHost.config file and search for PHP_via_FastCGI (assuming that you have installed PHP as a FastCGI module, as per the installation instructions, with the name PHP_via_FastCGI). Within the add tag, place the following setting at the end:<br />  responseBufferLimit="0"<br />So the entire line will look something like:<br />  &lt;add name="PHP_via_FastCGI" path="*.php" verb="*" modules="FastCgiModule" scriptProcessor="C:\PHP\php-cgi.exe" resourceType="Either" responseBufferLimit="0" /&gt;<br />Alternatively you can insert the setting using the following command:<br />  %windir%\system32\inetsrv\appcmd.exe set config /section:handlers "/[name='PHP_via_FastCGI'].ResponseBufferLimit:0"</span></code></div>
  </div>
 </div>
  <div class="note" id="68620">  <div class="votes">
    <div id="Vu68620">
    <a href="/manual/vote-note.php?id=68620&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68620">
    <a href="/manual/vote-note.php?id=68620&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68620" title="65% like this...">
    12
    </div>
  </div>
  <a href="#68620" class="name">
  <strong class="user"><em>no at spam dot com</em></strong></a><a class="genanchor" href="#68620"> &para;</a><div class="date" title="2006-08-03 11:51"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68620">
<div class="phpcode"><code><span class="html">ob_flush();flush();<br /><br />Not the other way around, because it wont work.</span></code></div>
  </div>
 </div>
  <div class="note" id="124861">  <div class="votes">
    <div id="Vu124861">
    <a href="/manual/vote-note.php?id=124861&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124861">
    <a href="/manual/vote-note.php?id=124861&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124861" title="69% like this...">
    5
    </div>
  </div>
  <a href="#124861" class="name">
  <strong class="user"><em>glafarge</em></strong></a><a class="genanchor" href="#124861"> &para;</a><div class="date" title="2020-03-27 06:20"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124861">
<div class="phpcode"><code><span class="html">When using PHP with mode CGI/FastCGI there is a new buffer (initiated by mod_fcgid with a default size of 65536 bytes). That causes `flush()` and `ob_flush()` not working as expected with implicit_flush(true).<br />Setting "OutputBufferSize 0" in mod_fcgid config resolves the issue.<br />Hope it helps !</span></code></div>
  </div>
 </div>
  <div class="note" id="57398">  <div class="votes">
    <div id="Vu57398">
    <a href="/manual/vote-note.php?id=57398&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57398">
    <a href="/manual/vote-note.php?id=57398&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57398" title="70% like this...">
    4
    </div>
  </div>
  <a href="#57398" class="name">
  <strong class="user"><em>mikael at oebb dot net</em></strong></a><a class="genanchor" href="#57398"> &para;</a><div class="date" title="2005-10-03 01:47"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57398">
<div class="phpcode"><code><span class="html">Hi all.<br />Been scratching my head over data NOT flushed to IE (6) even though I tried strpad 4096 chars, all headers OK,  TABLE and no TABLE, flush and ob_flush - still a blank page. Tried adding a sleep(1) before flushing - and everything worked as a charm.  <br /><br />/Mikael</span></code></div>
  </div>
 </div>
  <div class="note" id="50610">  <div class="votes">
    <div id="Vu50610">
    <a href="/manual/vote-note.php?id=50610&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50610">
    <a href="/manual/vote-note.php?id=50610&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50610" title="69% like this...">
    5
    </div>
  </div>
  <a href="#50610" class="name">
  <strong class="user"><em>siggi AT june systems DOT com</em></strong></a><a class="genanchor" href="#50610"> &para;</a><div class="date" title="2005-03-04 07:54"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50610">
<div class="phpcode"><code><span class="html">After searching through the PHP site, google and various forums, not finding a solution to my script not outputting anything while calling flush and ob_flush, I thought of trying to tell PHP to call:<br /><br />session_write_close();<br /><br />before starting echo'ing. It worked like a charm. I couldn't find any references to this, so I hope this note will help someone in the future.</span></code></div>
  </div>
 </div>
  <div class="note" id="109239">  <div class="votes">
    <div id="Vu109239">
    <a href="/manual/vote-note.php?id=109239&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109239">
    <a href="/manual/vote-note.php?id=109239&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109239" title="63% like this...">
    5
    </div>
  </div>
  <a href="#109239" class="name">
  <strong class="user"><em>Kris</em></strong></a><a class="genanchor" href="#109239"> &para;</a><div class="date" title="2012-06-29 01:19"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109239">
<div class="phpcode"><code><span class="html">I had a bunch of problems trying to get flush working on my windows box, I finally found a solution after reading everyones here and it not working.<br /><br />1) Set output_buffering = 0<br />2) Set zlib.output_compression = 0<br /><br />I then used Wireshark to monitor network packets, and indeed the server was pusing the data, but the browser was not displaying it.. So it was a browser buffer issue (I am on Firefox 13)<br /><br />For me I needed to send about 1k of data before it would display the data. To do this I added more header information.. <br /> In php.ini I set default_charset = "utf-8"<br />And that was enough to give me enough for the buffer issue.<br /><br />You can also try doing <br />echo str_repeat(" ", 1024), "\n";<br />at the start of the script.<br /><br />hope this helps</span></code></div>
  </div>
 </div>
  <div class="note" id="51143">  <div class="votes">
    <div id="Vu51143">
    <a href="/manual/vote-note.php?id=51143&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51143">
    <a href="/manual/vote-note.php?id=51143&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51143" title="63% like this...">
    5
    </div>
  </div>
  <a href="#51143" class="name">
  <strong class="user"><em>matt at nospamplease dot hevanet dot com</em></strong></a><a class="genanchor" href="#51143"> &para;</a><div class="date" title="2005-03-21 10:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51143">
<div class="phpcode"><code><span class="html">Like IE, Safari needs a fair amount of data before it'll display anything, actually more than explorer.  The following code works for me in Firefox and Safari, and should work in IE as well.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">40000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />{<br />echo </span><span class="string">' '</span><span class="keyword">; </span><span class="comment">// extra spaces<br /></span><span class="keyword">}<br /></span><span class="comment">// keeps it flowing to the browser?<br /></span><span class="default">flush</span><span class="keyword">();<br /></span><span class="comment">// 50000 microseconds keeps things flowing in safari, IE, firefox, etc<br /></span><span class="default">usleep</span><span class="keyword">(</span><span class="default">50000</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />This code came from a comment on a blog discussing browser functionality with flush();</span></code></div>
  </div>
 </div>
  <div class="note" id="99988">  <div class="votes">
    <div id="Vu99988">
    <a href="/manual/vote-note.php?id=99988&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99988">
    <a href="/manual/vote-note.php?id=99988&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99988" title="60% like this...">
    5
    </div>
  </div>
  <a href="#99988" class="name">
  <strong class="user"><em>seb dot field at gmail dot com</em></strong></a><a class="genanchor" href="#99988"> &para;</a><div class="date" title="2010-09-18 03:52"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99988">
<div class="phpcode"><code><span class="html">If flush() function does not work. You must set next options in php.ini like:<br /><br />--[code]--<br /> output_buffering = Off  <br /> ;output_handler =   <br /> zlib.output_compression = Off  <br /> ;zlib.output_handler =   <br />--[^code^]--<br /><br />If things does not work you must view headers from the server and check `Server` string.<br />In my case, as the frontend was Nginx webserver and Apache work as backend.<br />Accordingly, buffering must be disabled in Nginx config file.<br />To stop buffering you must add next string to config file:<br /><br />--[code]--<br />proxy_buffering off;<br />--[^code^]--<br /><br />and restart Nginx daemon.  More information about  configuration you find in documentation on the nginx website.</span></code></div>
  </div>
 </div>
  <div class="note" id="118116">  <div class="votes">
    <div id="Vu118116">
    <a href="/manual/vote-note.php?id=118116&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118116">
    <a href="/manual/vote-note.php?id=118116&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118116" title="61% like this...">
    3
    </div>
  </div>
  <a href="#118116" class="name">
  <strong class="user"><em>php nospace juju ta ggooggle mail</em></strong></a><a class="genanchor" href="#118116"> &para;</a><div class="date" title="2015-10-06 10:53"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118116">
<div class="phpcode"><code><span class="html">combining some ideas i was finally able to get a long running script to give me real time feedback on what it was doing.  this was a wamp setup with php running as cgi.  i'm pretty sure that apache just wasn't sending any of the buffered output because it was trying to be helpful. also trying to be helpful, i hope this example solution helps someone.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// thx mandor at mandor<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'max_execution_time'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'implicit_flush'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">ob_implicit_flush</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br />echo </span><span class="string">'doing something'</span><span class="keyword">;  </span><span class="default">my_flush</span><span class="keyword">();<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);<br />echo </span><span class="string">'doing something else'</span><span class="keyword">; </span><span class="default">my_flush</span><span class="keyword">();<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);<br />echo </span><span class="string">'finally done - hooray'</span><span class="keyword">;<br /><br />function </span><span class="default">my_flush</span><span class="keyword">() {<br />  </span><span class="comment">// following matt at hevanet's lead<br />  </span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">10000</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) echo </span><span class="string">' '</span><span class="keyword">;<br />  </span><span class="default">ob_flush</span><span class="keyword">();<br />  </span><span class="default">flush</span><span class="keyword">();<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83037">  <div class="votes">
    <div id="Vu83037">
    <a href="/manual/vote-note.php?id=83037&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83037">
    <a href="/manual/vote-note.php?id=83037&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83037" title="60% like this...">
    5
    </div>
  </div>
  <a href="#83037" class="name">
  <strong class="user"><em>David</em></strong></a><a class="genanchor" href="#83037"> &para;</a><div class="date" title="2008-05-07 02:32"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83037">
<div class="phpcode"><code><span class="html">mod_security 2.x core rules will also prevent flush() from working.</span></code></div>
  </div>
 </div>
  <div class="note" id="51920">  <div class="votes">
    <div id="Vu51920">
    <a href="/manual/vote-note.php?id=51920&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51920">
    <a href="/manual/vote-note.php?id=51920&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51920" title="61% like this...">
    4
    </div>
  </div>
  <a href="#51920" class="name">
  <strong class="user"><em>Marty</em></strong></a><a class="genanchor" href="#51920"> &para;</a><div class="date" title="2005-04-14 08:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51920">
<div class="phpcode"><code><span class="html">This is an extention of Rusty's comment below: <br /><br />After sitting here for hours trying to make IE6 flush data out in the middle of a page (with it working perfectly in Firefox), I finally figured out the problem. IE will not display flushed data (even if it has it) unless the table that contains it is complete.<br /><br />Every new element you want IE to display must not be in ANY kind of table at all. You must end all your tables.</span></code></div>
  </div>
 </div>
  <div class="note" id="52863">  <div class="votes">
    <div id="Vu52863">
    <a href="/manual/vote-note.php?id=52863&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52863">
    <a href="/manual/vote-note.php?id=52863&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52863" title="59% like this...">
    5
    </div>
  </div>
  <a href="#52863" class="name">
  <strong class="user"><em>MOELZE �T GMX DOt DE   (Michael)</em></strong></a><a class="genanchor" href="#52863"> &para;</a><div class="date" title="2005-05-15 04:38"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52863">
<div class="phpcode"><code><span class="html">It is a bit complicated to work with the funktion flush() and you have to experiment with it a bit.
<br />So if you design a site which has a timeloop at the end that calls a other site via a form data input (Data Submit) you have
<br />to give something out to the buffer to get that new site loaden quick.
<br />
<br />For example:
<br />
<br /><span class="default">&lt;?php
<br />$instant</span><span class="keyword">=</span><span class="default">gettimeofday</span><span class="keyword">();
<br /></span><span class="default">$timenow</span><span class="keyword">=</span><span class="default">$instant</span><span class="keyword">[</span><span class="string">"sec"</span><span class="keyword">];</span><span class="comment">//Start Time
<br />
<br />//timeloop(e.g. for security_save after 30 min)
<br /></span><span class="keyword">while (</span><span class="default">1</span><span class="keyword">) { echo </span><span class="string">"&lt;b&gt;&lt;/b&gt;"</span><span class="keyword">;</span><span class="comment">//Useless (only to quickload next
<br />                                    //or same Site when do a switch)
<br /></span><span class="default">flush</span><span class="keyword">();                          </span><span class="comment">//giveout buffer
<br /></span><span class="default">$instant</span><span class="keyword">=</span><span class="default">gettimeofday</span><span class="keyword">();
<br /></span><span class="default">$timeactual</span><span class="keyword">=</span><span class="default">$instant</span><span class="keyword">[</span><span class="string">"sec"</span><span class="keyword">]; </span><span class="comment">//get Actual Time in Secs
<br /></span><span class="default">$flag</span><span class="keyword">=((</span><span class="default">$timeactual</span><span class="keyword">&gt;</span><span class="default">$timenow</span><span class="keyword">+</span><span class="default">$diff</span><span class="keyword">)? </span><span class="default">1</span><span class="keyword">:</span><span class="default">0</span><span class="keyword">);</span><span class="comment">//$diff=switchTime
<br /></span><span class="keyword">if (</span><span class="default">$flag</span><span class="keyword">) { </span><span class="default">what_do_at_switch_Time</span><span class="keyword">();</span><span class="comment">//Sec.Save etc.etc.
<br /></span><span class="default">$timenow</span><span class="keyword">=</span><span class="default">$timeactual</span><span class="keyword">; } </span><span class="comment">//Set new Start Time
<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">); </span><span class="comment">//Or so...(Important)
<br /></span><span class="keyword">} </span><span class="comment">//End of while-Loop
<br /></span><span class="default">?&gt;
<br /></span>
<br />So you can programm a security save or other function in your site and if you do a switch the upload of the new or same site (the called site) works...</span></code></div>
  </div>
 </div>
  <div class="note" id="74222">  <div class="votes">
    <div id="Vu74222">
    <a href="/manual/vote-note.php?id=74222&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74222">
    <a href="/manual/vote-note.php?id=74222&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74222" title="60% like this...">
    2
    </div>
  </div>
  <a href="#74222" class="name">
  <strong class="user"><em>Leon</em></strong></a><a class="genanchor" href="#74222"> &para;</a><div class="date" title="2007-03-30 04:14"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74222">
<div class="phpcode"><code><span class="html">I've spent days trying to figure out why flush didn't work all of a sudden, while it used to work perfectly. Apparently, it was McAfee Spamkiller that caused problems. Disabling it didn't work, I had to completely remove it. Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="72985">  <div class="votes">
    <div id="Vu72985">
    <a href="/manual/vote-note.php?id=72985&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72985">
    <a href="/manual/vote-note.php?id=72985&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72985" title="60% like this...">
    2
    </div>
  </div>
  <a href="#72985" class="name">
  <strong class="user"><em>Kirk</em></strong></a><a class="genanchor" href="#72985"> &para;</a><div class="date" title="2007-02-06 12:25"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72985">
<div class="phpcode"><code><span class="html">If you're not explictly using the buffering functions, then ob_flush() is only necessary if output buffering is turned on in your php.ini file.<br /><br />flush() is only necessary if implicit_flush is turned off in your php.ini file. Setting implicit_flush to on will remove the need for all these flush() calls, but it's generally only good in an extremely controlled environment. Turning on implicit_flush in a production environment can be bad.</span></code></div>
  </div>
 </div>
  <div class="note" id="87040">  <div class="votes">
    <div id="Vu87040">
    <a href="/manual/vote-note.php?id=87040&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87040">
    <a href="/manual/vote-note.php?id=87040&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87040" title="53% like this...">
    1
    </div>
  </div>
  <a href="#87040" class="name">
  <strong class="user"><em>Arerano</em></strong></a><a class="genanchor" href="#87040"> &para;</a><div class="date" title="2008-11-16 06:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87040">
<div class="phpcode"><code><span class="html">This helped me getting flushing to work.<br />Using apache with deflate.<br /><br />Turning compression off for this script: (add it somewhere at the top of the script)<br />apache_setenv('no-gzip', '1');<br /><br />However, this only works if php is running as a module rather than a cgi-extension and safe mode must be disabled.<br /><br />You can also turn the compression off for a directory by making a .htaccess file and adding the following entry:<br />mod_gzip_on Off<br /><br />However that affects the whole directory.<br />Hope I could help.</span></code></div>
  </div>
 </div>
  <div class="note" id="129259">  <div class="votes">
    <div id="Vu129259">
    <a href="/manual/vote-note.php?id=129259&amp;page=function.flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129259">
    <a href="/manual/vote-note.php?id=129259&amp;page=function.flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129259" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129259" class="name">
  <strong class="user"><em>remco dot pc at outlook dot com</em></strong></a><a class="genanchor" href="#129259"> &para;</a><div class="date" title="2024-02-18 05:20"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129259">
<div class="phpcode"><code><span class="html">on php8.3-fpm with apache 2.4.57<br /><br />In order flush to work in the browser you need to send some more data (at least 4096 bytes / flush) and you need to add a setting for that site to the virtual host of your apache2 configuration:<br /><br />&lt;FilesMatch \.php$&gt;<br />        SetHandler "proxy:unix:/run/php/php8.3-fpm.sock|fcgi://localhost"<br />&lt;/FilesMatch&gt;<br />&lt;Proxy fcgi://localhost/"&gt;<br />        ProxySet enablereuse=on flushpackets=on<br />&lt;/Proxy&gt;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.flush&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.flush.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.outcontrol.php">Output Control Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
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
                                                <li class="">
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
