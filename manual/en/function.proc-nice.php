<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: proc_nice - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.proc-nice.php">
 <link rel="shorturl" href="https://www.php.net/proc-nice">
 <link rel="alternate" href="https://www.php.net/proc-nice" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.proc-get-status.php">
 <link rel="next" href="https://www.php.net/manual/en/function.proc-open.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.proc-nice.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.proc-nice.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.proc-nice.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.proc-nice.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.proc-nice.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.proc-nice.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.proc-nice.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.proc-nice.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.proc-nice.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.proc-nice.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.proc-nice.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Change the priority of the current process" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: proc_nice - Manual" />
<meta name="twitter:description" content="Change the priority of the current process" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: proc_nice - Manual" />
<meta itemprop="description" content="Change the priority of the current process" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Change the priority of the current process" />

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
        <a href="function.proc-open.php">
          proc_open &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.proc-get-status.php">
          &laquo; proc_get_status        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.exec.php'>Program execution</a></li>      <li><a href='ref.exec.php'>Program execution Functions</a></li>      </ul>
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
            <option value='en/function.proc-nice.php' selected="selected">English</option>
            <option value='de/function.proc-nice.php'>German</option>
            <option value='es/function.proc-nice.php'>Spanish</option>
            <option value='fr/function.proc-nice.php'>French</option>
            <option value='it/function.proc-nice.php'>Italian</option>
            <option value='ja/function.proc-nice.php'>Japanese</option>
            <option value='pt_BR/function.proc-nice.php'>Brazilian Portuguese</option>
            <option value='ru/function.proc-nice.php'>Russian</option>
            <option value='tr/function.proc-nice.php'>Turkish</option>
            <option value='uk/function.proc-nice.php'>Ukrainian</option>
            <option value='zh/function.proc-nice.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.proc-nice" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">proc_nice</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">proc_nice</span> &mdash; <span class="dc-title">Change the priority of the current process</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.proc-nice-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>proc_nice</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>proc_nice()</strong></span> changes the priority of the current
   process by the amount specified in <code class="parameter">priority</code>. A
   positive <code class="parameter">priority</code> will lower the priority of the
   current process, whereas a negative <code class="parameter">priority</code>
   will raise the priority.
  </p>
  <p class="para">
   <span class="function"><strong>proc_nice()</strong></span> is not related to
   <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> and its associated functions in any way.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.proc-nice-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">priority</code></dt>
     <dd>
      <p class="para">
       The new priority value, the value of this may differ on platforms.
      </p>
      <p class="para">
       On Unix, a low value, such as <code class="literal">-20</code> means high priority 
       whereas positive values have a lower priority.
      </p>
      <p class="para">
       For Windows the <code class="parameter">priority</code> parameter has the 
       following meaning:
      </p>
      <table class="doctable informaltable">
       
        <thead>
         <tr>
          <th>Priority class</th>
          <th>Possible values</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td style="vertical-align: top;">High priority</td>
          <td style="vertical-align: top;">
           <code class="parameter">priority</code> <code class="literal">&lt; -9</code>
          </td>
         </tr>

         <tr>
          <td style="vertical-align: top;">Above normal priority</td>
          <td style="vertical-align: top;">
           <code class="parameter">priority</code> <code class="literal">&lt; -4</code>
          </td>
         </tr>

         <tr>
          <td style="vertical-align: top;">Normal priority</td>
          <td style="vertical-align: top;">
           <code class="parameter">priority</code> <code class="literal">&lt; 5</code> &amp; 
           <code class="parameter">priority</code> <code class="literal">&gt; -5</code>
          </td>
         </tr>

         <tr>
          <td style="vertical-align: top;">Below normal priority</td>
          <td style="vertical-align: top;">
           <code class="parameter">priority</code> <code class="literal">&gt; 5</code>
          </td>
         </tr>

         <tr>
          <td style="vertical-align: top;">Idle priority</td>
          <td style="vertical-align: top;">
           <code class="parameter">priority</code> <code class="literal">&gt; 9</code>
          </td>
         </tr>

        </tbody>
       
      </table>

     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.proc-nice-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
   If an error occurs, like the user lacks permission to change the priority, 
   an error of level <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is also generated.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.proc-nice-changelog">
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
       <td>7.2.0</td>
       <td>
        This function is now available on Windows.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.proc-nice-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3603">
    <p><strong>Example #1 Using <span class="function"><strong>proc_nice()</strong></span> to set the process priority to high</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Highest priority<br /></span><span style="color: #0000BB">proc_nice</span><span style="color: #007700">(-</span><span style="color: #0000BB">20</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

 </div>


 <div class="refsect1 notes" id="refsect1-function.proc-nice-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <strong>Availability</strong><br />
   <p class="para">
    <span class="function"><strong>proc_nice()</strong></span> will only exist if your system has &#039;nice&#039;
    capabilities. &#039;nice&#039; conforms to: SVr4, SVID EXT, AT&amp;T, X/OPEN, BSD
    4.3.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <strong>Windows only</strong><br />
   <p class="para">
    <span class="function"><strong>proc_nice()</strong></span> will change the current <em>process</em>
    priority, even if PHP was compiled using thread safety.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.proc-nice-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.pcntl-setpriority.php" class="function" rel="rdfs-seeAlso">pcntl_setpriority()</a> - Change the priority of any process</span></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/functions/proc-nice.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.proc-nice%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.proc-nice&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.proc-nice.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111994">  <div class="votes">
    <div id="Vu111994">
    <a href="/manual/vote-note.php?id=111994&amp;page=function.proc-nice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111994">
    <a href="/manual/vote-note.php?id=111994&amp;page=function.proc-nice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111994" title="88% like this...">
    7
    </div>
  </div>
  <a href="#111994" class="name">
  <strong class="user"><em>kevin AT REMOVETHIS mrkmg.com</em></strong></a><a class="genanchor" href="#111994"> &para;</a><div class="date" title="2013-04-19 06:17"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111994">
<div class="phpcode"><code><span class="html">On a Linux system, running apache2 as a non-privileged user you can not increase the niceness of the process after decreasing it. Also, you can not use the apache_child_ terminate either. I found the following does work though:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//decrease niceness<br /></span><span class="default">proc_nice</span><span class="keyword">(</span><span class="default">19</span><span class="keyword">);<br /><br /></span><span class="comment">//kill child process to "reset" niceness<br /></span><span class="default">posix_kill</span><span class="keyword">( </span><span class="default">getmypid</span><span class="keyword">(), </span><span class="default">28 </span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98574">  <div class="votes">
    <div id="Vu98574">
    <a href="/manual/vote-note.php?id=98574&amp;page=function.proc-nice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98574">
    <a href="/manual/vote-note.php?id=98574&amp;page=function.proc-nice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98574" title="80% like this...">
    3
    </div>
  </div>
  <a href="#98574" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#98574"> &para;</a><div class="date" title="2010-06-24 12:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98574">
<div class="phpcode"><code><span class="html">If a process is reniced, then all its children inherit that niceness. So a PHP script can call proc_nice on itself, then invoke system(), and the command executed via system() will also be niced.<br /><br />Also worth making a note of ionice. There's no PHP function for this, but it's important. A nice'd program will happily try to chew up all i/o bandwidth with very little CPU usage, it can therefore make the entire computer non-responsive despite the programmer's intention.  Use "ionice -c3"  or see "man ionice"</span></code></div>
  </div>
 </div>
  <div class="note" id="101944">  <div class="votes">
    <div id="Vu101944">
    <a href="/manual/vote-note.php?id=101944&amp;page=function.proc-nice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101944">
    <a href="/manual/vote-note.php?id=101944&amp;page=function.proc-nice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101944" title="75% like this...">
    2
    </div>
  </div>
  <a href="#101944" class="name">
  <strong class="user"><em>Marek</em></strong></a><a class="genanchor" href="#101944"> &para;</a><div class="date" title="2011-01-19 08:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101944">
<div class="phpcode"><code><span class="html">Regarding ionice - on linux the impact of the ionice -c3 class is similar to that of nice, because the CPU "niceness" is taken into account when calculating the io niceness.</span></code></div>
  </div>
 </div>
  <div class="note" id="126009">  <div class="votes">
    <div id="Vu126009">
    <a href="/manual/vote-note.php?id=126009&amp;page=function.proc-nice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126009">
    <a href="/manual/vote-note.php?id=126009&amp;page=function.proc-nice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126009" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126009" class="name">
  <strong class="user"><em>phil_php at zieaon dot com</em></strong></a><a class="genanchor" href="#126009"> &para;</a><div class="date" title="2021-04-15 01:43"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126009">
<div class="phpcode"><code><span class="html">It is important to note that this is a relative change. I didn't read the description properly and couldn't figure out why setting proc_nice(0) didn't take the forked children back to 0!<br />For example if you run:<br /><span class="default">&lt;?php<br />proc_nice</span><span class="keyword">(-</span><span class="default">5</span><span class="keyword">);<br /></span><span class="default">proc_nice</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">); </span><span class="comment">// will have no effect<br /></span><span class="default">proc_nice</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">); </span><span class="comment">// will take the niceness back to 0<br /> <br /></span><span class="default">?&gt;<br /></span><br />In PHP CLI under Debian (and probably many other Linux flavours) you can read the 'niceness' from the proc filesystem.  (There may be a PHP command that gives this info but there doesn't seem to be a link to it on this page.)<br />E.g<br /><span class="default">&lt;?php<br />$Current_Niceness_Value </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"/proc/"</span><span class="keyword">.</span><span class="default">getmypid</span><span class="keyword">().</span><span class="string">"/stat"</span><span class="keyword">))[</span><span class="default">18</span><span class="keyword">]);<br /><br /></span><span class="comment">// Note: Older versions of Linux return an unsigned integer which has to be converted to a signed integer. <br /></span><span class="default">$Current_Niceness_Value </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"l"</span><span class="keyword">,</span><span class="default">pack</span><span class="keyword">(</span><span class="string">"L"</span><span class="keyword">,</span><span class="default">intval</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"/proc/"</span><span class="keyword">.</span><span class="default">getmypid</span><span class="keyword">().</span><span class="string">"/stat"</span><span class="keyword">))[</span><span class="default">18</span><span class="keyword">])))[</span><span class="default">1</span><span class="keyword">];<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87225">  <div class="votes">
    <div id="Vu87225">
    <a href="/manual/vote-note.php?id=87225&amp;page=function.proc-nice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87225">
    <a href="/manual/vote-note.php?id=87225&amp;page=function.proc-nice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87225" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87225" class="name">
  <strong class="user"><em>pandi at home dot pl</em></strong></a><a class="genanchor" href="#87225"> &para;</a><div class="date" title="2008-11-25 05:22"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87225">
<div class="phpcode"><code><span class="html">Simple function for check process nice, by default returns nice of current process:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public static function </span><span class="default">getProcessNice </span><span class="keyword">(</span><span class="default">$pid </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    if (!</span><span class="default">$pid</span><span class="keyword">) {<br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">getmypid </span><span class="keyword">();<br />    }<br />        <br />    </span><span class="default">$res </span><span class="keyword">= `</span><span class="string">ps -p </span><span class="default">$pid</span><span class="string"> -o "%p %n"</span><span class="keyword">`;<br />        <br />    </span><span class="default">preg_match </span><span class="keyword">(</span><span class="string">'/^\s*\w+\s+\w+\s*(\d+)\s+(\d+)/m'</span><span class="keyword">, </span><span class="default">$res</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />        <br />    return array (</span><span class="string">'pid' </span><span class="keyword">=&gt; (isset (</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) ? </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">), </span><span class="string">'nice' </span><span class="keyword">=&gt; (isset (</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) ? </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] : </span><span class="default">null</span><span class="keyword">));<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.proc-nice&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.proc-nice.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.exec.php">Program execution Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.escapeshellarg.php" title="escapeshellarg">escapeshellarg</a>
                        </li>
                                                <li class="">
                            <a href="function.escapeshellcmd.php" title="escapeshellcmd">escapeshellcmd</a>
                        </li>
                                                <li class="">
                            <a href="function.exec.php" title="exec">exec</a>
                        </li>
                                                <li class="">
                            <a href="function.passthru.php" title="passthru">passthru</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-close.php" title="proc_&#8203;close">proc_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-get-status.php" title="proc_&#8203;get_&#8203;status">proc_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="current">
                            <a href="function.proc-nice.php" title="proc_&#8203;nice">proc_&#8203;nice</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-open.php" title="proc_&#8203;open">proc_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-terminate.php" title="proc_&#8203;terminate">proc_&#8203;terminate</a>
                        </li>
                                                <li class="">
                            <a href="function.shell-exec.php" title="shell_&#8203;exec">shell_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.system.php" title="system">system</a>
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
