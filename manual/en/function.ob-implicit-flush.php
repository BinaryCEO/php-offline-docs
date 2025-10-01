<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ob_implicit_flush - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ob-implicit-flush.php">
 <link rel="shorturl" href="https://www.php.net/ob-implicit-flush">
 <link rel="alternate" href="https://www.php.net/ob-implicit-flush" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.outcontrol.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ob-get-status.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ob-list-handlers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ob-implicit-flush.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ob-implicit-flush.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ob-implicit-flush.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ob-implicit-flush.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ob-implicit-flush.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ob-implicit-flush.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ob-implicit-flush.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ob-implicit-flush.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ob-implicit-flush.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ob-implicit-flush.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ob-implicit-flush.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Turn implicit flush on/off" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ob_implicit_flush - Manual" />
<meta name="twitter:description" content="Turn implicit flush on/off" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ob_implicit_flush - Manual" />
<meta itemprop="description" content="Turn implicit flush on/off" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Turn implicit flush on/off" />

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
        <a href="function.ob-list-handlers.php">
          ob_list_handlers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ob-get-status.php">
          &laquo; ob_get_status        </a>
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
            <option value='en/function.ob-implicit-flush.php' selected="selected">English</option>
            <option value='de/function.ob-implicit-flush.php'>German</option>
            <option value='es/function.ob-implicit-flush.php'>Spanish</option>
            <option value='fr/function.ob-implicit-flush.php'>French</option>
            <option value='it/function.ob-implicit-flush.php'>Italian</option>
            <option value='ja/function.ob-implicit-flush.php'>Japanese</option>
            <option value='pt_BR/function.ob-implicit-flush.php'>Brazilian Portuguese</option>
            <option value='ru/function.ob-implicit-flush.php'>Russian</option>
            <option value='tr/function.ob-implicit-flush.php'>Turkish</option>
            <option value='uk/function.ob-implicit-flush.php'>Ukrainian</option>
            <option value='zh/function.ob-implicit-flush.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ob-implicit-flush" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ob_implicit_flush</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ob_implicit_flush</span> &mdash; <span class="dc-title">Turn implicit flush on/off</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ob-implicit-flush-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ob_implicit_flush</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$enable</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>ob_implicit_flush()</strong></span> will turn implicit flushing on or
   off. Implicit flushing will result in a flush operation after every block of
   code resulting in output, so that explicit calls to <span class="function"><a href="function.flush.php" class="function">flush()</a></span>
   will no longer be needed.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Printing empty strings or sending headers is not considered output
    and will not result in a flush operation.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    This function does not have any effect on user level output handlers
    such as those started by <span class="function"><a href="function.ob-start.php" class="function">ob_start()</a></span>
    or <span class="function"><a href="function.output-add-rewrite-var.php" class="function">output_add_rewrite_var()</a></span>.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ob-implicit-flush-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">enable</code></dt>
     <dd>
      <p class="para">
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to turn implicit flushing on, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ob-implicit-flush-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ob-implicit-flush-changelog">
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
       The <code class="parameter">enable</code> expects a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> value now;
       previously, an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> was expected.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.ob-implicit-flush-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.flush.php" class="function" rel="rdfs-seeAlso">flush()</a> - Flush system output buffer</span></li>
    <li><span class="function"><a href="function.ob-start.php" class="function" rel="rdfs-seeAlso">ob_start()</a> - Turn on output buffering</span></li>
    <li><span class="function"><a href="function.ob-end-flush.php" class="function" rel="rdfs-seeAlso">ob_end_flush()</a> - Flush (send) the return value of the active output handler
   and turn the active output buffer off</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/outcontrol/functions/ob-implicit-flush.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ob-implicit-flush%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ob-implicit-flush&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ob-implicit-flush.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116748">  <div class="votes">
    <div id="Vu116748">
    <a href="/manual/vote-note.php?id=116748&amp;page=function.ob-implicit-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116748">
    <a href="/manual/vote-note.php?id=116748&amp;page=function.ob-implicit-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116748" title="87% like this...">
    30
    </div>
  </div>
  <a href="#116748" class="name">
  <strong class="user"><em>Pedro Gimeno</em></strong></a><a class="genanchor" href="#116748"> &para;</a><div class="date" title="2015-02-22 06:11"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116748">
<div class="phpcode"><code><span class="html">Note that the name ob_implicit_flush is misleading. Despite its name, this function does NOT work with the user output buffer, i.e. the one that the rest of the ob_* functions work with. It will NOT do an automatic ob_flush(). It will do an automatic flush(). Different things.<br /><br />For example, the following script:<br /><br /><span class="default">&lt;?php<br />  ob_implicit_flush</span><span class="keyword">();<br />  for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />  {<br />    echo </span><span class="string">"</span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />  }<br /></span><span class="default">?&gt;<br /></span><br />will be equivalent to this one:<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />  {<br />    echo </span><span class="string">"</span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;<br />    </span><span class="default">flush</span><span class="keyword">();<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />  }<br /></span><span class="default">?&gt;<br /></span><br />That script will not output anything until the end, if 'output_buffering' is set to 'on' in php.ini. Unfortunately, there is no way to do an implicit ob_flush() after each output, that I am aware of.<br /><br />If you want the output to come out as it is generated, one solution is to *also* add ob_end_clean() or ob_end_flush() to the beginning of the script:<br /><br /><span class="default">&lt;?php<br />  ob_end_flush</span><span class="keyword">();<br />  </span><span class="default">ob_implicit_flush</span><span class="keyword">();<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />  {<br />    echo </span><span class="string">"</span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />  }<br /></span><span class="default">?&gt;<br /></span><br />This will output as it goes. This is only a problem if you only want one part of the output to come out in real time, and want the rest buffered. In that case, since there's no function to do an implicit ob_flush() every time, you need to call it explicitly. For example, this works:<br /><br /><span class="default">&lt;?php<br />  ob_start</span><span class="keyword">(); </span><span class="comment">// not needed if output_buffering is on in php.ini<br />  </span><span class="default">ob_implicit_flush</span><span class="keyword">(); </span><span class="comment">// implicitly calls flush() after every ob_flush()<br /><br />  </span><span class="keyword">echo </span><span class="string">"This output is buffered.\n"</span><span class="keyword">;<br />  echo </span><span class="string">"As is this.\n"</span><span class="keyword">;<br /><br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />  {<br />    echo </span><span class="string">"</span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;<br />    </span><span class="default">ob_flush</span><span class="keyword">();<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />  }<br /></span><span class="default">?&gt;<br /></span><br />Note also that some browsers may wait until they have a certain amount of output. See flush [ <a href="http://php.net/manual/en/function.flush.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.flush.php</a> ] for details. It was my case with Firefox (Iceweasel 17.0); unless I output 1024 bytes at the beginning, it does not begin to output.</span></code></div>
  </div>
 </div>
  <div class="note" id="119072">  <div class="votes">
    <div id="Vu119072">
    <a href="/manual/vote-note.php?id=119072&amp;page=function.ob-implicit-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119072">
    <a href="/manual/vote-note.php?id=119072&amp;page=function.ob-implicit-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119072" title="100% like this...">
    4
    </div>
  </div>
  <a href="#119072" class="name">
  <strong class="user"><em>damian at thebestisp dot  dot  dot com</em></strong></a><a class="genanchor" href="#119072"> &para;</a><div class="date" title="2016-03-28 04:06"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119072">
<div class="phpcode"><code><span class="html">It seems like some people are using this to workaround output buffering instead of simply turning it off. To me, if you have an output buffer, it's there for a reason, otherwise you would either do stuff and use ob_flush() or ob_end_flush(), do stuff, and maybe ob_start() again.<br />Here's how to properly end all output buffers without having to suppress errors (due to there not being any buffers). If you do want a single level of output buffering, I've included a piece for that as well.<br /><span class="default">&lt;?php<br /></span><span class="comment">#Get rid of output buffer entirely<br /></span><span class="keyword">while (</span><span class="default">ob_get_level</span><span class="keyword">()) {</span><span class="default">ob_end_flush</span><span class="keyword">();}<br /><br /></span><span class="comment">#Make sure we have 1 level of output buffering if this isn't CLI.<br /></span><span class="default">$notcli</span><span class="keyword">=(int)(</span><span class="default">PHP_SAPI</span><span class="keyword">!==</span><span class="string">'cli'</span><span class="keyword">);<br />while ((</span><span class="default">$diff</span><span class="keyword">=</span><span class="default">ob_get_level</span><span class="keyword">()-</span><span class="default">$notcli</span><span class="keyword">)!==</span><span class="default">0</span><span class="keyword">) {<br />    if (</span><span class="default">$diff</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">) {</span><span class="default">ob_end_flush</span><span class="keyword">();}<br />    else {</span><span class="default">ob_start</span><span class="keyword">();}<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78385">  <div class="votes">
    <div id="Vu78385">
    <a href="/manual/vote-note.php?id=78385&amp;page=function.ob-implicit-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78385">
    <a href="/manual/vote-note.php?id=78385&amp;page=function.ob-implicit-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78385" title="70% like this...">
    8
    </div>
  </div>
  <a href="#78385" class="name">
  <strong class="user"><em>rocca at start dot ca</em></strong></a><a class="genanchor" href="#78385"> &para;</a><div class="date" title="2007-10-09 11:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78385">
<div class="phpcode"><code><span class="html">You can also get the unbuffered output with Linux/Apache without having to do the implicit flush after each line by calling:<br /><br />ob_implicit_flush(true);<br />ob_end_flush();<br /><br />...at the start of the script.</span></code></div>
  </div>
 </div>
  <div class="note" id="60973">  <div class="votes">
    <div id="Vu60973">
    <a href="/manual/vote-note.php?id=60973&amp;page=function.ob-implicit-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60973">
    <a href="/manual/vote-note.php?id=60973&amp;page=function.ob-implicit-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60973" title="63% like this...">
    6
    </div>
  </div>
  <a href="#60973" class="name">
  <strong class="user"><em>Paul Yanchenko</em></strong></a><a class="genanchor" href="#60973"> &para;</a><div class="date" title="2006-01-21 04:15"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60973">
<div class="phpcode"><code><span class="html">There is another workaround for ob_implicit_flush() in console. Yes, it doesn't works as expected, but you can get similar result by specifying chunk_size=2 in ob_start():<br /><br /><span class="default">&lt;?php<br />  ob_start</span><span class="keyword">(</span><span class="string">'ob_logstdout'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will result that every new line (which ends with \n) will flush output buffer.<br /><br />Hope this will help you.</span></code></div>
  </div>
 </div>
  <div class="note" id="33778">  <div class="votes">
    <div id="Vu33778">
    <a href="/manual/vote-note.php?id=33778&amp;page=function.ob-implicit-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33778">
    <a href="/manual/vote-note.php?id=33778&amp;page=function.ob-implicit-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33778" title="64% like this...">
    5
    </div>
  </div>
  <a href="#33778" class="name">
  <strong class="user"><em>calimero at Creatixnet dot com</em></strong></a><a class="genanchor" href="#33778"> &para;</a><div class="date" title="2003-07-07 12:00"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33778">
<div class="phpcode"><code><span class="html">######### BEWARE ##########<br /><br />There is a bug (or at least an unexpected feature of ob_implicit_flush) that has been already discussed on the PHP bugtracker :<br /><br /><a href="http://bugs.php.net/bug.php?id=23877" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=23877</a><br /><a href="http://bugs.php.net/bug.php?id=16676" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=16676</a><br /><br />Code like this WILL NOT work :<br /><br />&lt;?<br />// This will not work as expected on Linux.<br />ob_implicit_flush (1);<br />for($i=0;$i&lt;10;$i++) {<br />   echo "grrrrrrrrrr\n";<br />   sleep(1);<br />}<br />?&gt;<br /><br />This feature happens on Linux versions of PHP, in all versions of php4 prior to 4.3.3 (don't know yet for the next ones) but also in php5 beta1. ob_implicit_flush has NO EFFECT on command-line (console, CLI) scripts, no flushing at all will be made, all output will be sent at the end of the script.<br /><br />There is a workaround using ob_end_flush() and ob_flush, here it is :<br /><br />&lt;?<br />// This works !<br />ob_end_flush();<br />for($i=0;$i&lt;10;$i++) {<br />  echo "yeah :-))))\n";<br />  @ob_flush();<br />  sleep(1);<br />}<br />?&gt;<br /><br />hope this will help. It would have helped me...</span></code></div>
  </div>
 </div>
  <div class="note" id="35072">  <div class="votes">
    <div id="Vu35072">
    <a href="/manual/vote-note.php?id=35072&amp;page=function.ob-implicit-flush&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35072">
    <a href="/manual/vote-note.php?id=35072&amp;page=function.ob-implicit-flush&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35072" title="62% like this...">
    2
    </div>
  </div>
  <a href="#35072" class="name">
  <strong class="user"><em>mhumphrey at _spammenot_designvision dot com</em></strong></a><a class="genanchor" href="#35072"> &para;</a><div class="date" title="2003-08-18 02:41"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35072">
<div class="phpcode"><code><span class="html">From experimenting, it looks like using sessions with session.use_trans_sid=1 will force your output to be buffered regardless of this setting.<br /><br />My guess is that this is so PHP can hunt for URLs in your output to automatically add the Session ID to them.  It must wait until script output is complete before it starts that replacement, rather than doing it "on the fly".<br /><br />When i comment out my session_start() line, i get continuous output to the browser.  Put it back in, and i only see the page when it's completely loaded.  Change session.use_trans_sid = 0 and i get continuous output again.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ob-implicit-flush&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ob-implicit-flush.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
