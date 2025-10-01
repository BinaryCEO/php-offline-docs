<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ftp_rawlist - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ftp-rawlist.php">
 <link rel="shorturl" href="https://www.php.net/ftp-rawlist">
 <link rel="alternate" href="https://www.php.net/ftp-rawlist" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ftp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ftp-raw.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ftp-rename.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ftp-rawlist.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ftp-rawlist.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ftp-rawlist.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ftp-rawlist.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ftp-rawlist.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ftp-rawlist.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ftp-rawlist.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ftp-rawlist.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ftp-rawlist.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ftp-rawlist.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ftp-rawlist.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns a detailed list of files in the given directory" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ftp_rawlist - Manual" />
<meta name="twitter:description" content="Returns a detailed list of files in the given directory" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ftp_rawlist - Manual" />
<meta itemprop="description" content="Returns a detailed list of files in the given directory" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns a detailed list of files in the given directory" />

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
        <a href="function.ftp-rename.php">
          ftp_rename &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ftp-raw.php">
          &laquo; ftp_raw        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ftp.php'>FTP</a></li>      <li><a href='ref.ftp.php'>FTP Functions</a></li>      </ul>
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
            <option value='en/function.ftp-rawlist.php' selected="selected">English</option>
            <option value='de/function.ftp-rawlist.php'>German</option>
            <option value='es/function.ftp-rawlist.php'>Spanish</option>
            <option value='fr/function.ftp-rawlist.php'>French</option>
            <option value='it/function.ftp-rawlist.php'>Italian</option>
            <option value='ja/function.ftp-rawlist.php'>Japanese</option>
            <option value='pt_BR/function.ftp-rawlist.php'>Brazilian Portuguese</option>
            <option value='ru/function.ftp-rawlist.php'>Russian</option>
            <option value='tr/function.ftp-rawlist.php'>Turkish</option>
            <option value='uk/function.ftp-rawlist.php'>Ukrainian</option>
            <option value='zh/function.ftp-rawlist.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ftp-rawlist" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ftp_rawlist</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ftp_rawlist</span> &mdash; <span class="dc-title">Returns a detailed list of files in the given directory</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.ftp-rawlist-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ftp_rawlist</strong></span>(<span class="methodparam"><span class="type"><a href="class.ftp-connection.php" class="type FTP\Connection">FTP\Connection</a></span> <code class="parameter">$ftp</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$directory</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$recursive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>ftp_rawlist()</strong></span> executes the FTP 
   <strong class="command">LIST</strong> command, and returns the result as an array.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.ftp-rawlist-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ftp</code></dt>
     <dd>
       <p class="para">An <span class="classname"><a href="class.ftp-connection.php" class="classname">FTP\Connection</a></span> instance.</p>
     </dd>
    
    
     <dt><code class="parameter">directory</code></dt>
     <dd>
      <p class="para">
       The directory path. May include arguments for the <strong class="command">LIST</strong>
       command.
      </p>
     </dd>
    
    
     <dt><code class="parameter">recursive</code></dt>
     <dd>
      <p class="para">
       If set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the issued command will be <strong class="command">LIST -R</strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.ftp-rawlist-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array where each element corresponds to one line of text. Returns
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> when passed <code class="parameter">directory</code> is invalid.
  </p>
  <p class="para">
   The output is not parsed in any way. The system type identifier returned by
   <span class="function"><a href="function.ftp-systype.php" class="function">ftp_systype()</a></span> can be used to determine how the results 
   should be interpreted.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ftp-rawlist-changelog">
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
 <td>8.1.0</td>
 <td>
  The <code class="parameter">ftp</code> parameter expects an <span class="classname"><a href="class.ftp-connection.php" class="classname">FTP\Connection</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>

 
 <div class="refsect1 examples" id="refsect1-function.ftp-rawlist-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4581">
    <p><strong>Example #1 <span class="function"><strong>ftp_rawlist()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// set up basic connection<br /></span><span style="color: #0000BB">$ftp </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp_server</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// login with username and password<br /></span><span style="color: #0000BB">$login_result </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_login</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #0000BB">$ftp_user_name</span><span style="color: #007700">, </span><span style="color: #0000BB">$ftp_user_pass</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// get the file list for /<br /></span><span style="color: #0000BB">$buff </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_rawlist</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// close the connection<br /></span><span style="color: #0000BB">ftp_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// output the buffer<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$buff</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(3) {
  [0]=&gt;
  string(65) &quot;drwxr-x---   3 vincent  vincent      4096 Jul 12 12:16 public_ftp&quot;
  [1]=&gt;
  string(66) &quot;drwxr-x---  15 vincent  vincent      4096 Nov  3 21:31 public_html&quot;
  [2]=&gt;
  string(73) &quot;lrwxrwxrwx   1 vincent  vincent        11 Jul 12 12:16 www -&gt; public_html&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.ftp-rawlist-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ftp-nlist.php" class="function" rel="rdfs-seeAlso">ftp_nlist()</a> - Returns a list of files in the given directory</span></li>
    <li><span class="function"><a href="function.ftp-mlsd.php" class="function" rel="rdfs-seeAlso">ftp_mlsd()</a> - Returns a list of files in the given directory</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ftp/functions/ftp-rawlist.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ftp-rawlist%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ftp-rawlist&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-rawlist.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">24 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110803">  <div class="votes">
    <div id="Vu110803">
    <a href="/manual/vote-note.php?id=110803&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110803">
    <a href="/manual/vote-note.php?id=110803&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110803" title="72% like this...">
    42
    </div>
  </div>
  <a href="#110803" class="name">
  <strong class="user"><em>fredvanetten at tinqle dot com</em></strong></a><a class="genanchor" href="#110803"> &para;</a><div class="date" title="2012-12-10 07:12"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110803">
<div class="phpcode"><code><span class="html">Here's a simple function that'll parse the data returned by ftp_rawlist() into an associative array. I wrote it because some of the functions listed below are way to long, complex or won't work with file names that contain spaces.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">listDetailed</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">$directory </span><span class="keyword">= </span><span class="string">'.'</span><span class="keyword">) {
<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$children </span><span class="keyword">= @</span><span class="default">ftp_rawlist</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">$directory</span><span class="keyword">))) {
<br />            </span><span class="default">$items </span><span class="keyword">= array();
<br />
<br />            foreach (</span><span class="default">$children </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">) {
<br />                </span><span class="default">$chunks </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/\s+/"</span><span class="keyword">, </span><span class="default">$child</span><span class="keyword">);
<br />                list(</span><span class="default">$item</span><span class="keyword">[</span><span class="string">'rights'</span><span class="keyword">], </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'number'</span><span class="keyword">], </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">], </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'group'</span><span class="keyword">], </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">], </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'month'</span><span class="keyword">], </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'day'</span><span class="keyword">], </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">]) = </span><span class="default">$chunks</span><span class="keyword">;
<br />                </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">] = </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]{</span><span class="default">0</span><span class="keyword">} === </span><span class="string">'d' </span><span class="keyword">? </span><span class="string">'directory' </span><span class="keyword">: </span><span class="string">'file'</span><span class="keyword">;
<br />                </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$chunks</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">);
<br />                </span><span class="default">$items</span><span class="keyword">[</span><span class="default">implode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$chunks</span><span class="keyword">)] = </span><span class="default">$item</span><span class="keyword">;
<br />            }
<br />
<br />            return </span><span class="default">$items</span><span class="keyword">;
<br />        }
<br />
<br />        </span><span class="comment">// Throw exception or return false &lt; up to you
<br />    </span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80218">  <div class="votes">
    <div id="Vu80218">
    <a href="/manual/vote-note.php?id=80218&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80218">
    <a href="/manual/vote-note.php?id=80218&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80218" title="100% like this...">
    4
    </div>
  </div>
  <a href="#80218" class="name">
  <strong class="user"><em>weltvolk</em></strong></a><a class="genanchor" href="#80218"> &para;</a><div class="date" title="2008-01-04 06:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80218">
<div class="phpcode"><code><span class="html">With this handy function based on functions presented here you get the file list in alphabetical order with all directories on top:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">rawlist_dump</span><span class="keyword">() {<br />  global </span><span class="default">$ftp_connect</span><span class="keyword">;<br />  </span><span class="default">$ftp_rawlist </span><span class="keyword">= </span><span class="default">ftp_rawlist</span><span class="keyword">(</span><span class="default">$ftp_connect</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">);<br />  foreach (</span><span class="default">$ftp_rawlist </span><span class="keyword">as </span><span class="default">$v</span><span class="keyword">) {<br />    </span><span class="default">$info </span><span class="keyword">= array();<br />    </span><span class="default">$vinfo </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/[\s]+/"</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">);<br />    if (</span><span class="default">$vinfo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] !== </span><span class="string">"total"</span><span class="keyword">) {<br />      </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'chmod'</span><span class="keyword">] = </span><span class="default">$vinfo</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />      </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'num'</span><span class="keyword">] = </span><span class="default">$vinfo</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />      </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'owner'</span><span class="keyword">] = </span><span class="default">$vinfo</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />      </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'group'</span><span class="keyword">] = </span><span class="default">$vinfo</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];<br />      </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">] = </span><span class="default">$vinfo</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">];<br />      </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'month'</span><span class="keyword">] = </span><span class="default">$vinfo</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">];<br />      </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'day'</span><span class="keyword">] = </span><span class="default">$vinfo</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">];<br />      </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">] = </span><span class="default">$vinfo</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">];<br />      </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">] = </span><span class="default">$vinfo</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">];<br />      </span><span class="default">$rawlist</span><span class="keyword">[</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">]] = </span><span class="default">$info</span><span class="keyword">;<br />    }<br />  }<br />  </span><span class="default">$dir </span><span class="keyword">= array();<br />  </span><span class="default">$file </span><span class="keyword">= array();<br />  foreach (</span><span class="default">$rawlist </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />    if (</span><span class="default">$v</span><span class="keyword">[</span><span class="string">'chmod'</span><span class="keyword">]{</span><span class="default">0</span><span class="keyword">} == </span><span class="string">"d"</span><span class="keyword">) {<br />      </span><span class="default">$dir</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br />    } elseif (</span><span class="default">$v</span><span class="keyword">[</span><span class="string">'chmod'</span><span class="keyword">]{</span><span class="default">0</span><span class="keyword">} == </span><span class="string">"-"</span><span class="keyword">) {<br />      </span><span class="default">$file</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br />    }<br />  }<br />  foreach (</span><span class="default">$dir </span><span class="keyword">as </span><span class="default">$dirname </span><span class="keyword">=&gt; </span><span class="default">$dirinfo</span><span class="keyword">) {<br />      echo </span><span class="string">"[ </span><span class="default">$dirname</span><span class="string"> ] " </span><span class="keyword">. </span><span class="default">$dirinfo</span><span class="keyword">[</span><span class="string">'chmod'</span><span class="keyword">] . </span><span class="string">" | " </span><span class="keyword">. </span><span class="default">$dirinfo</span><span class="keyword">[</span><span class="string">'owner'</span><span class="keyword">] . </span><span class="string">" | " </span><span class="keyword">. </span><span class="default">$dirinfo</span><span class="keyword">[</span><span class="string">'group'</span><span class="keyword">] . </span><span class="string">" | " </span><span class="keyword">. </span><span class="default">$dirinfo</span><span class="keyword">[</span><span class="string">'month'</span><span class="keyword">] . </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$dirinfo</span><span class="keyword">[</span><span class="string">'day'</span><span class="keyword">] . </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$dirinfo</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">] . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />  }<br />  foreach (</span><span class="default">$file </span><span class="keyword">as </span><span class="default">$filename </span><span class="keyword">=&gt; </span><span class="default">$fileinfo</span><span class="keyword">) {<br />      echo </span><span class="string">"</span><span class="default">$filename</span><span class="string"> " </span><span class="keyword">. </span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'chmod'</span><span class="keyword">] . </span><span class="string">" | " </span><span class="keyword">. </span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'owner'</span><span class="keyword">] . </span><span class="string">" | " </span><span class="keyword">. </span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'group'</span><span class="keyword">] . </span><span class="string">" | " </span><span class="keyword">. </span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">] . </span><span class="string">" Byte | " </span><span class="keyword">. </span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'month'</span><span class="keyword">] . </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'day'</span><span class="keyword">] . </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">] . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />  }<br />}<br /></span><span class="default">rawlist_dump</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114633">  <div class="votes">
    <div id="Vu114633">
    <a href="/manual/vote-note.php?id=114633&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114633">
    <a href="/manual/vote-note.php?id=114633&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114633" title="88% like this...">
    7
    </div>
  </div>
  <a href="#114633" class="name">
  <strong class="user"><em>mediaboat at gmail dot com</em></strong></a><a class="genanchor" href="#114633"> &para;</a><div class="date" title="2014-03-14 10:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114633">
<div class="phpcode"><code><span class="html">All  parse_rawlist Functions here have one Problem.<br /><br />when a file starts with a space character like " robots.txt ", it will be ignored.<br /><br />Rename, delete will fail...</span></code></div>
  </div>
 </div>
  <div class="note" id="97876">  <div class="votes">
    <div id="Vu97876">
    <a href="/manual/vote-note.php?id=97876&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97876">
    <a href="/manual/vote-note.php?id=97876&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97876" title="75% like this...">
    2
    </div>
  </div>
  <a href="#97876" class="name">
  <strong class="user"><em>shaun at shaunfreeman dot co dot uk</em></strong></a><a class="genanchor" href="#97876"> &para;</a><div class="date" title="2010-05-13 04:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97876">
<div class="phpcode"><code><span class="html">Get a listing of all files including hidden files except '.' or '..' use:
<br />
<br /><span class="default">&lt;?php
<br />ftp_chdir</span><span class="keyword">(</span><span class="default">$connid</span><span class="keyword">, </span><span class="default">$dir</span><span class="keyword">);
<br /></span><span class="default">ftp_rawlist</span><span class="keyword">(</span><span class="default">$connid</span><span class="keyword">, </span><span class="string">"-A"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This had me dancing in circles for some time!</span></code></div>
  </div>
 </div>
  <div class="note" id="101071">  <div class="votes">
    <div id="Vu101071">
    <a href="/manual/vote-note.php?id=101071&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101071">
    <a href="/manual/vote-note.php?id=101071&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101071" title="58% like this...">
    2
    </div>
  </div>
  <a href="#101071" class="name">
  <strong class="user"><em>Johnny Doe</em></strong></a><a class="genanchor" href="#101071"> &para;</a><div class="date" title="2010-11-24 06:18"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101071">
<div class="phpcode"><code><span class="html">In case anybody wants to get a detailed listing using the MLSD command over a passive connection, the following function might be helpful as a starting point for your own implementation:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ftp_mlsd</span><span class="keyword">(</span><span class="default">$ftp</span><span class="keyword">, </span><span class="default">$directory</span><span class="keyword">) {
<br />    </span><span class="default">$ok </span><span class="keyword">= @</span><span class="default">ftp_chdir</span><span class="keyword">(</span><span class="default">$ftp</span><span class="keyword">, </span><span class="default">$directory</span><span class="keyword">);
<br />    if (!</span><span class="default">$ok</span><span class="keyword">) {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">ftp_raw</span><span class="keyword">(</span><span class="default">$ftp</span><span class="keyword">, </span><span class="string">'PASV'</span><span class="keyword">);
<br />    if (</span><span class="default">preg_match</span><span class="keyword">(
<br />        </span><span class="string">'/^227.*\(([0-9]+,[0-9]+,[0-9]+,[0-9]+),([0-9]+),([0-9]+)\)$/'</span><span class="keyword">,
<br />        </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$matches</span><span class="keyword">)) {
<br />        </span><span class="default">$controlIP </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />        </span><span class="default">$controlPort </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">])*</span><span class="default">256</span><span class="keyword">+</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);
<br />        </span><span class="default">$socket </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$controlIP</span><span class="keyword">, </span><span class="default">$controlPort</span><span class="keyword">);
<br />        </span><span class="default">ftp_raw</span><span class="keyword">(</span><span class="default">$ftp</span><span class="keyword">, </span><span class="string">'MLSD'</span><span class="keyword">);
<br />        </span><span class="default">$s </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">)) {
<br />            </span><span class="default">$s </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);
<br />        }
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);
<br />        </span><span class="default">$files </span><span class="keyword">= array();
<br />        foreach (</span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">) as </span><span class="default">$line</span><span class="keyword">) {
<br />            if (!</span><span class="default">$line</span><span class="keyword">) {
<br />                continue;
<br />            }
<br />            </span><span class="default">$file </span><span class="keyword">= array();
<br />            foreach (</span><span class="default">explode</span><span class="keyword">(</span><span class="string">';'</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">) as </span><span class="default">$property</span><span class="keyword">) {
<br />                list(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'='</span><span class="keyword">, </span><span class="default">$property</span><span class="keyword">);
<br />                if (</span><span class="default">$value</span><span class="keyword">) {
<br />                    </span><span class="default">$file</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />                } else {
<br />                    </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);
<br />                }
<br />            }
<br />            </span><span class="default">$files</span><span class="keyword">[</span><span class="default">$filename</span><span class="keyword">] = </span><span class="default">$file</span><span class="keyword">;
<br />        }
<br />        return </span><span class="default">$files</span><span class="keyword">;
<br />    }
<br />    return </span><span class="default">false</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Please note that this function ignores the setting of ftp_pasv(). Making the function to work universally for both active and passive connections is left as an exercise to the reader ;-)</span></code></div>
  </div>
 </div>
  <div class="note" id="122642">  <div class="votes">
    <div id="Vu122642">
    <a href="/manual/vote-note.php?id=122642&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122642">
    <a href="/manual/vote-note.php?id=122642&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122642" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122642" class="name">
  <strong class="user"><em>Roline88 at hotmail dot com</em></strong></a><a class="genanchor" href="#122642"> &para;</a><div class="date" title="2018-04-19 05:26"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122642">
<div class="phpcode"><code><span class="html">Note that this function also will return false if the content of the provided directory is empty.</span></code></div>
  </div>
 </div>
  <div class="note" id="82752">  <div class="votes">
    <div id="Vu82752">
    <a href="/manual/vote-note.php?id=82752&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82752">
    <a href="/manual/vote-note.php?id=82752&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82752" title="100% like this...">
    2
    </div>
  </div>
  <a href="#82752" class="name">
  <strong class="user"><em>paul maybe at squirrel mail org</em></strong></a><a class="genanchor" href="#82752"> &para;</a><div class="date" title="2008-04-24 05:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82752">
<div class="phpcode"><code><span class="html">Regarding converting permissions from symbolic notation to octal, note that Hazem dot Khaled at gmail dot com's chmodnum function produces INCORRECT results.  The resutls are base-10 numbers that only LOOK like they are octal numbers.  The function also ignores setuid, setgid and sticky bits, and will produce incorrect numbers if such a file is encountered.  Instead, this brute-force code works.  Maybe there is something more slick, but this isn't too CPU-intensive (note that it assumes you've error-checked that you indeed have a 10-character string!):<br /><br />      $permissions = 'drwxr-xr-x';  // or whatever<br />      $mode = 0;<br /><br />      if ($permissions[1] == 'r') $mode += 0400;<br />      if ($permissions[2] == 'w') $mode += 0200;<br />      if ($permissions[3] == 'x') $mode += 0100;<br />      else if ($permissions[3] == 's') $mode += 04100;<br />      else if ($permissions[3] == 'S') $mode += 04000;<br /><br />      if ($permissions[4] == 'r') $mode += 040;<br />      if ($permissions[5] == 'w') $mode += 020;<br />      if ($permissions[6] == 'x') $mode += 010;<br />      else if ($permissions[6] == 's') $mode += 02010;<br />      else if ($permissions[6] == 'S') $mode += 02000;<br /><br />      if ($permissions[7] == 'r') $mode += 04;<br />      if ($permissions[8] == 'w') $mode += 02;<br />      if ($permissions[9] == 'x') $mode += 01;<br />      else if ($permissions[9] == 't') $mode += 01001;<br />      else if ($permissions[9] == 'T') $mode += 01000;<br /><br />      printf('Mode is %d decimal and %o octal', $mode, $mode);</span></code></div>
  </div>
 </div>
  <div class="note" id="59346">  <div class="votes">
    <div id="Vu59346">
    <a href="/manual/vote-note.php?id=59346&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59346">
    <a href="/manual/vote-note.php?id=59346&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59346" title="100% like this...">
    2
    </div>
  </div>
  <a href="#59346" class="name">
  <strong class="user"><em>admin at mikeholloway dot co dot uk</em></strong></a><a class="genanchor" href="#59346"> &para;</a><div class="date" title="2005-12-03 02:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59346">
<div class="phpcode"><code><span class="html">I was having problems picking up the directories on a mac using cjacobsen at pge dot cl's (11-Jan-05) solution. Slight ammendment to the regexp works for me:<br /><br />ereg("([-dl][rwxstST-]+).* ?([0-9 ]* )?([a-zA-Z0-9]+).* ([a-zA-Z0-9]+).* ([0-9]*) ([a-zA-Z]+[0-9: ]*[0-9])[ ]+(([0-9]{2}:[0-9]{2})|[0-9]{4}) (.+)", $file, $regs)</span></code></div>
  </div>
 </div>
  <div class="note" id="97683">  <div class="votes">
    <div id="Vu97683">
    <a href="/manual/vote-note.php?id=97683&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97683">
    <a href="/manual/vote-note.php?id=97683&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97683" title="no votes...">
    0
    </div>
  </div>
  <a href="#97683" class="name">
  <strong class="user"><em>John</em></strong></a><a class="genanchor" href="#97683"> &para;</a><div class="date" title="2010-05-02 04:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97683">
<div class="phpcode"><code><span class="html">There are a couple of php-related reasons given here for ftp_rawlist returning an empty result. However be aware that ZoneAlarm (and possibly other) firewalls can block responses without giving any visible clue so be sure to check that first.</span></code></div>
  </div>
 </div>
  <div class="note" id="94412">  <div class="votes">
    <div id="Vu94412">
    <a href="/manual/vote-note.php?id=94412&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94412">
    <a href="/manual/vote-note.php?id=94412&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94412" title="no votes...">
    0
    </div>
  </div>
  <a href="#94412" class="name">
  <strong class="user"><em>nospam at advancedonsite dot com</em></strong></a><a class="genanchor" href="#94412"> &para;</a><div class="date" title="2009-11-03 08:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94412">
<div class="phpcode"><code><span class="html">ftp_rawlist kept returning empty file listing, it would work on some machines but not others, it turned out to be ftp_pasv command was needed.<br />Very frustrating</span></code></div>
  </div>
 </div>
  <div class="note" id="91722">  <div class="votes">
    <div id="Vu91722">
    <a href="/manual/vote-note.php?id=91722&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91722">
    <a href="/manual/vote-note.php?id=91722&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91722" title="no votes...">
    0
    </div>
  </div>
  <a href="#91722" class="name">
  <strong class="user"><em>ahmadmarafa at gmail dot com</em></strong></a><a class="genanchor" href="#91722"> &para;</a><div class="date" title="2009-06-23 07:38"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91722">
<div class="phpcode"><code><span class="html">this is function to check for dirs 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ftp_isdir</span><span class="keyword">(</span><span class="default">$connect_id</span><span class="keyword">,</span><span class="default">$dir</span><span class="keyword">)
<br />{
<br />    if(</span><span class="default">ftp_chdir</span><span class="keyword">(</span><span class="default">$connect_id</span><span class="keyword">,</span><span class="default">$dir</span><span class="keyword">))
<br />    {
<br />        </span><span class="default">ftp_cdup</span><span class="keyword">(</span><span class="default">$connect_id</span><span class="keyword">);
<br />        return </span><span class="default">true</span><span class="keyword">;
<br />
<br />    }
<br />    else
<br />    {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49628">  <div class="votes">
    <div id="Vu49628">
    <a href="/manual/vote-note.php?id=49628&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49628">
    <a href="/manual/vote-note.php?id=49628&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49628" title="100% like this...">
    1
    </div>
  </div>
  <a href="#49628" class="name">
  <strong class="user"><em>marc dot peterlongo at francetelecom dot com</em></strong></a><a class="genanchor" href="#49628"> &para;</a><div class="date" title="2005-02-03 02:57"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49628">
<div class="phpcode"><code><span class="html">When you try:<br /><br />$path = "directory pathname with spaces";<br />$list = ftp_rawlist($conn_id,$path);<br /><br />It doesn't work<br /><br />but when you try:<br /><br />$path = "directory pathname with spaces";<br />ftp_chdir($conn_id,$path);<br />$list = ftp_rawlist($conn_id,".");<br /><br />It works</span></code></div>
  </div>
 </div>
  <div class="note" id="91120">  <div class="votes">
    <div id="Vu91120">
    <a href="/manual/vote-note.php?id=91120&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91120">
    <a href="/manual/vote-note.php?id=91120&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91120" title="no votes...">
    0
    </div>
  </div>
  <a href="#91120" class="name">
  <strong class="user"><em>tmp at gmx dot de</em></strong></a><a class="genanchor" href="#91120"> &para;</a><div class="date" title="2009-05-26 04:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91120">
<div class="phpcode"><code><span class="html">To format the _recrusive_ result of this function I use this:<br /><br /><span class="default">&lt;?php<br />$conn_id </span><span class="keyword">= </span><span class="default">ftp_connect</span><span class="keyword">(</span><span class="default">FTP_SERVER</span><span class="keyword">);<br /><br /></span><span class="default">$login_result </span><span class="keyword">= </span><span class="default">ftp_login</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">FTP_USR</span><span class="keyword">, </span><span class="default">FTP_PASS</span><span class="keyword">);<br /><br /></span><span class="default">$rawfiles </span><span class="keyword">= </span><span class="default">ftp_rawlist</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">ftp_close</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">);<br /><br /></span><span class="comment">// here the magic begins!<br /></span><span class="default">$structure </span><span class="keyword">= array();<br /></span><span class="default">$arraypointer </span><span class="keyword">= &amp;</span><span class="default">$structure</span><span class="keyword">;<br />foreach (</span><span class="default">$rawfiles </span><span class="keyword">as </span><span class="default">$rawfile</span><span class="keyword">) {<br />    if (</span><span class="default">$rawfile</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">'/'</span><span class="keyword">) {<br />        </span><span class="default">$paths </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">':'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$rawfile</span><span class="keyword">)), </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$arraypointer </span><span class="keyword">= &amp;</span><span class="default">$structure</span><span class="keyword">;<br />        foreach (</span><span class="default">$paths </span><span class="keyword">as </span><span class="default">$path</span><span class="keyword">) {<br />            foreach (</span><span class="default">$arraypointer </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">) {<br />                if (</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'text'</span><span class="keyword">] == </span><span class="default">$path</span><span class="keyword">) {<br />                    </span><span class="default">$arraypointer </span><span class="keyword">= &amp;</span><span class="default">$arraypointer</span><span class="keyword">[ </span><span class="default">$i </span><span class="keyword">][</span><span class="string">'children'</span><span class="keyword">];<br />                    break;<br />                }<br />            }<br />        }<br />    } elseif(!empty(</span><span class="default">$rawfile</span><span class="keyword">)) {<br />        </span><span class="default">$info </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/[\s]+/"</span><span class="keyword">, </span><span class="default">$rawfile</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">);        <br />        </span><span class="default">$arraypointer</span><span class="keyword">[] = array(<br />            </span><span class="string">'text'   </span><span class="keyword">=&gt; </span><span class="default">$info</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">],<br />            </span><span class="string">'isDir'  </span><span class="keyword">=&gt; </span><span class="default">$info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]{</span><span class="default">0</span><span class="keyword">} == </span><span class="string">'d'</span><span class="keyword">,<br />            </span><span class="string">'size'   </span><span class="keyword">=&gt; </span><span class="default">byteconvert</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]),<br />            </span><span class="string">'chmod'  </span><span class="keyword">=&gt; </span><span class="default">chmodnum</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]),<br />            </span><span class="string">'date'   </span><span class="keyword">=&gt; </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] . </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] . </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]),<br />            </span><span class="string">'raw'    </span><span class="keyword">=&gt; </span><span class="default">$info<br />            </span><span class="comment">// the 'children' attribut is automatically added if the folder contains at least one file<br />        </span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">// in $structure is all the data<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$structure</span><span class="keyword">);<br /><br /></span><span class="comment">// little helper functions<br /></span><span class="keyword">function </span><span class="default">byteconvert</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">) {<br />    </span><span class="default">$symbol </span><span class="keyword">= array(</span><span class="string">'B'</span><span class="keyword">, </span><span class="string">'KB'</span><span class="keyword">, </span><span class="string">'MB'</span><span class="keyword">, </span><span class="string">'GB'</span><span class="keyword">, </span><span class="string">'TB'</span><span class="keyword">, </span><span class="string">'PB'</span><span class="keyword">, </span><span class="string">'EB'</span><span class="keyword">, </span><span class="string">'ZB'</span><span class="keyword">, </span><span class="string">'YB'</span><span class="keyword">);<br />    </span><span class="default">$exp </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">( </span><span class="default">log</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">) / </span><span class="default">log</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">) );<br />    return </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">'%.2f ' </span><span class="keyword">. </span><span class="default">$symbol</span><span class="keyword">[ </span><span class="default">$exp </span><span class="keyword">], (</span><span class="default">$bytes </span><span class="keyword">/ </span><span class="default">pow</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">, </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$exp</span><span class="keyword">))) );<br />}<br /><br />function </span><span class="default">chmodnum</span><span class="keyword">(</span><span class="default">$chmod</span><span class="keyword">) {<br />    </span><span class="default">$trans </span><span class="keyword">= array(</span><span class="string">'-' </span><span class="keyword">=&gt; </span><span class="string">'0'</span><span class="keyword">, </span><span class="string">'r' </span><span class="keyword">=&gt; </span><span class="string">'4'</span><span class="keyword">, </span><span class="string">'w' </span><span class="keyword">=&gt; </span><span class="string">'2'</span><span class="keyword">, </span><span class="string">'x' </span><span class="keyword">=&gt; </span><span class="string">'1'</span><span class="keyword">);<br />    </span><span class="default">$chmod </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$chmod</span><span class="keyword">, </span><span class="default">$trans</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$chmod</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />    return </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) . </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) . </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]));<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89540">  <div class="votes">
    <div id="Vu89540">
    <a href="/manual/vote-note.php?id=89540&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89540">
    <a href="/manual/vote-note.php?id=89540&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89540" title="no votes...">
    0
    </div>
  </div>
  <a href="#89540" class="name">
  <strong class="user"><em>francois frao_o</em></strong></a><a class="genanchor" href="#89540"> &para;</a><div class="date" title="2009-03-12 10:47"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89540">
<div class="phpcode"><code><span class="html">Why not using POSIX regex to do the job here ? A preg_replace returns the information in an associative array with the following keys:<br /><br />&lt;rights&gt;<br />&lt;number&gt;<br />&lt;owner&gt;<br />&lt;group&gt;<br />&lt;file_size&gt;<br />&lt;mod_time&gt;<br />&lt;file&gt;<br />&lt;type&gt; * that's a bonus: it will tell you if the item is either a file or a directory<br /><br />Code is shown below:<br /><br />$list=@ftp_rawlist($con,$directory) ;<br /><br />$items=array() ;<br /><br />foreach($list as $_)<br />preg_replace(<br /><br />'`^(.{10}+)(\s*)(\d{1})(\s*)(\d*|\w*)'.<br />'(\s*)(\d*|\w*)(\s*)(\d*)\s'.<br />'([a-zA-Z]{3}+)(\s*)([0-9]{1,2}+)'.<br />'(\s*)([0-9]{2}+):([0-9]{2}+)(\s*)(.*)$`Ue',<br /><br />'$items[]=array(<br />"rights"=&gt;"$1", <br />"number"=&gt;"$3", <br />"owner"=&gt;"$5", "group"=&gt;"$7",<br />"file_size"=&gt;"$9",<br />"mod_time"=&gt;"$10 $12 $14:$15",<br />"file"=&gt;"$17",<br />"type"=&gt;print_r((preg_match("/^d/","$1"))?"dir":"file",1));',<br /><br />$_) ; # :p</span></code></div>
  </div>
 </div>
  <div class="note" id="46784">  <div class="votes">
    <div id="Vu46784">
    <a href="/manual/vote-note.php?id=46784&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46784">
    <a href="/manual/vote-note.php?id=46784&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46784" title="100% like this...">
    1
    </div>
  </div>
  <a href="#46784" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#46784"> &para;</a><div class="date" title="2004-10-22 07:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46784">
<div class="phpcode"><code><span class="html">Note that there is no standard for the format, therefore don't be suprised when parsing routines for this work perfectly on some servers, and fail horribly on some.</span></code></div>
  </div>
 </div>
  <div class="note" id="86869">  <div class="votes">
    <div id="Vu86869">
    <a href="/manual/vote-note.php?id=86869&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86869">
    <a href="/manual/vote-note.php?id=86869&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86869" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86869" class="name">
  <strong class="user"><em>www.bosssftp.com</em></strong></a><a class="genanchor" href="#86869"> &para;</a><div class="date" title="2008-11-07 02:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86869">
<div class="phpcode"><code><span class="html">Some FTP servers only allow you to get list of files under current working directory. So if you always get result as empty array (array(0){ }), try changing the cwd befor get the list:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ftprawlist</span><span class="keyword">(</span><span class="default">$connid</span><span class="keyword">, </span><span class="default">$dir</span><span class="keyword">) {
<br />  </span><span class="default">ftp_chdir</span><span class="keyword">(</span><span class="default">$connid</span><span class="keyword">, </span><span class="default">$dir</span><span class="keyword">);
<br />  return </span><span class="default">ftp_rawlist</span><span class="keyword">(</span><span class="default">$connid</span><span class="keyword">, </span><span class="string">"-a"</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70447">  <div class="votes">
    <div id="Vu70447">
    <a href="/manual/vote-note.php?id=70447&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70447">
    <a href="/manual/vote-note.php?id=70447&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70447" title="no votes...">
    0
    </div>
  </div>
  <a href="#70447" class="name">
  <strong class="user"><em>ari at bs-inc dot com</em></strong></a><a class="genanchor" href="#70447"> &para;</a><div class="date" title="2006-10-17 01:24"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70447">
<div class="phpcode"><code><span class="html">This is a little cleaner:<br /><br />function parse_rawlist( $array )<br />{<br />    foreach($array as $curraw)<br />    {<br />        $struc = array();<br />        $current = preg_split("/[\s]+/",$curraw,9);<br /><br />        $struc['perms']  = $current[0];<br />        $struc['number'] = $current[1];<br />        $struc['owner']  = $current[2];<br />        $struc['group']  = $current[3];<br />        $struc['size']  = $current[4];<br />        $struc['month']  = $current[5];<br />        $struc['day']    = $current[6];<br />        $struc['time']  = $current[7];<br />        $struc['year']  = $current[8];<br />        $struc['raw']  = $curraw;<br />        $structure[$struc['name']] = $struc;<br />    }<br />   return $structure;<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="114910">  <div class="votes">
    <div id="Vu114910">
    <a href="/manual/vote-note.php?id=114910&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114910">
    <a href="/manual/vote-note.php?id=114910&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114910" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#114910" class="name">
  <strong class="user"><em>nickman at freemail dot hu</em></strong></a><a class="genanchor" href="#114910"> &para;</a><div class="date" title="2014-04-24 07:17"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114910">
<div class="phpcode"><code><span class="html">The solution of fredvanetten at tinqle dot com is nice but needs further evaluation as because of the preg_split and static listing of the variables will produce different values: comparing a file of today or an older, from a previous year:<br /><br />Array<br />(<br />    [time] =&gt; 2012<br />    [day] =&gt; 11<br />    [month] =&gt; Sep<br />    [size] =&gt; 37262<br />    [group] =&gt; group<br />    [user] =&gt; owner<br />    [number] =&gt; 1<br />    [rights] =&gt; -rw-rw-rw-<br />)<br /><br />Array<br />(<br />    [time] =&gt; 14:01<br />    [day] =&gt; 23<br />    [month] =&gt; Apr<br />    [size] =&gt; 37262<br />    [group] =&gt; group<br />    [user] =&gt; owner<br />    [number] =&gt; 1<br />    [rights] =&gt; -rw-rw-rw-<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="52635">  <div class="votes">
    <div id="Vu52635">
    <a href="/manual/vote-note.php?id=52635&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52635">
    <a href="/manual/vote-note.php?id=52635&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52635" title="no votes...">
    0
    </div>
  </div>
  <a href="#52635" class="name">
  <strong class="user"><em>nate at 8networks dot com</em></strong></a><a class="genanchor" href="#52635"> &para;</a><div class="date" title="2005-05-07 12:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52635">
<div class="phpcode"><code><span class="html">this snip fixes the date problem with the listing and sorts out the variables:<br /><br />$filedata['access_permissions']<br />$filedata['link_count']<br />$filedata['uid']<br />$filedata['gid']<br />$filedata['size']<br />$filedata['mod_date_month']<br />$filedata['mod_date_day']<br />$filedata['mod_time']<br />$filedata['name']<br /><br />list($filedata['access_permissions'], $filedata['link_count'], $filedata['uid'], $filedata['gid'], $filedata['size'], $filedata['mod_date_month'], $filedata['mod_date_day'], $filedata['mod_time'], $filedata['name']) = preg_split("/[\s,]+/", $value);<br /><br />$filedata['type'] = $filedata['access_permissions']{0};<br /><br />$filedata['access_permissions'] = substr($filedata['access_permissions'],1);<br /><br />// now check the date to see if the last modifcation was this year or last.<br /><br />if ( strrpos($filedata['mod_time'], ':') != 2 ) { $filedata['mod_date'] = $filedata['mod_date_month'] ." " . $filedata['mod_date_day'] . " " . $filedata['mod_time']; $filedata['mod_time'] = "00:00"; } else { $filedata['mod_date'] = $filedata['mod_date_month'] ." " . $filedata['mod_date_day'] . " " . date("Y"); }</span></code></div>
  </div>
 </div>
  <div class="note" id="48899">  <div class="votes">
    <div id="Vu48899">
    <a href="/manual/vote-note.php?id=48899&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48899">
    <a href="/manual/vote-note.php?id=48899&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48899" title="no votes...">
    0
    </div>
  </div>
  <a href="#48899" class="name">
  <strong class="user"><em>cjacobsen at pge dot cl</em></strong></a><a class="genanchor" href="#48899"> &para;</a><div class="date" title="2005-01-11 05:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48899">
<div class="phpcode"><code><span class="html">Excelent expresion, but don't match SUID, SGUI and Sticky flags when 'x' is disabled. Fix it with [rwxstST-].<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">itemize_dir</span><span class="keyword">(</span><span class="default">$contents</span><span class="keyword">) {<br />   foreach (</span><span class="default">$contents </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) {<br />       if(</span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"([-dl][rwxstST-]+).* ([0-9]*) ([a-zA-Z0-9]+).* ([a-zA-Z0-9]+).* ([0-9]*) ([a-zA-Z]+[0-9: ]*[0-9])[ ]+(([0-9]{2}:[0-9]{2})|[0-9]{4}) (.+)"</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$regs</span><span class="keyword">)) {<br />           </span><span class="default">$type </span><span class="keyword">= (int) </span><span class="default">strpos</span><span class="keyword">(</span><span class="string">"-dl"</span><span class="keyword">, </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]{</span><span class="default">0</span><span class="keyword">});<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">] = </span><span class="default">$type</span><span class="keyword">;<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'rights'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'number'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'group'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'date'</span><span class="keyword">] = </span><span class="default">date</span><span class="keyword">(</span><span class="string">"m-d"</span><span class="keyword">,</span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$regs</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]));<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">9</span><span class="keyword">];<br />       }<br />       </span><span class="default">$dir_list</span><span class="keyword">[] = </span><span class="default">$tmp_array</span><span class="keyword">;<br />   }<br />   return </span><span class="default">$dir_list</span><span class="keyword">;<br />}<br /></span><span class="default">$buff </span><span class="keyword">= </span><span class="default">ftp_rawlist</span><span class="keyword">(</span><span class="default">$cid</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">);<br /></span><span class="default">$items </span><span class="keyword">= </span><span class="default">itemize_dir</span><span class="keyword">(</span><span class="default">$buff</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="48339">  <div class="votes">
    <div id="Vu48339">
    <a href="/manual/vote-note.php?id=48339&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48339">
    <a href="/manual/vote-note.php?id=48339&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48339" title="no votes...">
    0
    </div>
  </div>
  <a href="#48339" class="name">
  <strong class="user"><em>greg at upsdn dot net</em></strong></a><a class="genanchor" href="#48339"> &para;</a><div class="date" title="2004-12-19 11:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48339">
<div class="phpcode"><code><span class="html">list all (including hidden files and dirs):<br /><span class="default">&lt;?php<br />  $contents </span><span class="keyword">= </span><span class="default">ftp_rawlist</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="string">"-al "</span><span class="keyword">.</span><span class="default">$dir_name</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />just as ftp command:<br />LIST al <br /><br />"-aF " is equal to '-al', please refer to "ls --help"</span></code></div>
  </div>
 </div>
  <div class="note" id="47713">  <div class="votes">
    <div id="Vu47713">
    <a href="/manual/vote-note.php?id=47713&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47713">
    <a href="/manual/vote-note.php?id=47713&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47713" title="no votes...">
    0
    </div>
  </div>
  <a href="#47713" class="name">
  <strong class="user"><em>greg at upsdn dot net</em></strong></a><a class="genanchor" href="#47713"> &para;</a><div class="date" title="2004-11-25 10:55"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47713">
<div class="phpcode"><code><span class="html">The previous regular expression(by Jonathan Almarez,ergye at yahoo dot com and guru at virusas dot lt) is very good.But i found it does not  take into account for directories(number&gt;9)<br /><br />Change [0-9] to [0-9]*<br /><br />The code below not only parses:<br />drwxrwxr-x     9 msik     ia           4096 Nov  5 14:19 Group3<br /><br />It also parses:<br />drwxrwxr-x   19 msik     ia           4096 Nov  5 14:19 Group3<br />3 <br />drwxrwxr-x   119 msik     ia           4096 Nov  5 14:19 Group3<br />3 <br /><br />0 = file<br />1 = directory<br />2 = simlink<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">itemize_dir</span><span class="keyword">(</span><span class="default">$contents</span><span class="keyword">) {<br />   foreach (</span><span class="default">$contents </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) {<br />       if(</span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"([-dl][rwxst-]+).* ([0-9]*) ([a-zA-Z0-9]+).* ([a-zA-Z0-9]+).* ([0-9]*) ([a-zA-Z]+[0-9: ]*[0-9])[ ]+(([0-9]{2}:[0-9]{2})|[0-9]{4}) (.+)"</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$regs</span><span class="keyword">)) {<br />           </span><span class="default">$type </span><span class="keyword">= (int) </span><span class="default">strpos</span><span class="keyword">(</span><span class="string">"-dl"</span><span class="keyword">, </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]{</span><span class="default">0</span><span class="keyword">});<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">] = </span><span class="default">$type</span><span class="keyword">;<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'rights'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'number'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'group'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'date'</span><span class="keyword">] = </span><span class="default">date</span><span class="keyword">(</span><span class="string">"m-d"</span><span class="keyword">,</span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$regs</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]));<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">];<br />           </span><span class="default">$tmp_array</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">9</span><span class="keyword">];<br />       }<br />       </span><span class="default">$dir_list</span><span class="keyword">[] = </span><span class="default">$tmp_array</span><span class="keyword">;<br />   }<br />   return </span><span class="default">$dir_list</span><span class="keyword">;<br />}<br /></span><span class="default">$buff </span><span class="keyword">= </span><span class="default">ftp_rawlist</span><span class="keyword">(</span><span class="default">$cid</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">);<br /></span><span class="default">$items </span><span class="keyword">= </span><span class="default">itemize_dir</span><span class="keyword">(</span><span class="default">$buff</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="38759">  <div class="votes">
    <div id="Vu38759">
    <a href="/manual/vote-note.php?id=38759&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38759">
    <a href="/manual/vote-note.php?id=38759&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38759" title="no votes...">
    0
    </div>
  </div>
  <a href="#38759" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#38759"> &para;</a><div class="date" title="2004-01-06 03:40"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38759">
<div class="phpcode"><code><span class="html">If you write<br /><span class="default">&lt;?php<br />rawlist </span><span class="keyword">(</span><span class="default">$ftp</span><span class="keyword">, </span><span class="string">"-a"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>The command will be "LIST -a", so the retuned list will also contain hidden files like ".htaccess".<br /><br />In this case all files and folders of the current directory are contained.<br />To list another folder, you must change to it with "ftp_chdir".</span></code></div>
  </div>
 </div>
  <div class="note" id="45309">  <div class="votes">
    <div id="Vu45309">
    <a href="/manual/vote-note.php?id=45309&amp;page=function.ftp-rawlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45309">
    <a href="/manual/vote-note.php?id=45309&amp;page=function.ftp-rawlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45309" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#45309" class="name">
  <strong class="user"><em>eros at speedy dot com dot ar</em></strong></a><a class="genanchor" href="#45309"> &para;</a><div class="date" title="2004-09-01 02:06"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45309">
<div class="phpcode"><code><span class="html">NO, NO, NO.<br /><br />The above examples are all wrong, the spaces given in array are not there "just because", its just a tabbed structure. In php we don't have structures like in c/cpp, but the following function will do the job.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">parse_rawlist</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">) {<br /><br />    for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++ ) {<br /><br />        </span><span class="default">$current </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />    <br />        </span><span class="default">$structure</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'perms'</span><span class="keyword">]  = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />        </span><span class="default">$structure</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'number'</span><span class="keyword">] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">));<br />        </span><span class="default">$structure</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'owner'</span><span class="keyword">]  = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">));<br />        </span><span class="default">$structure</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'group'</span><span class="keyword">]  = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">, </span><span class="default">24</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">));<br />        </span><span class="default">$structure</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'size'</span><span class="keyword">]   = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">, </span><span class="default">33</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">));<br />        </span><span class="default">$structure</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'month'</span><span class="keyword">]  = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">, </span><span class="default">42</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">));<br />        </span><span class="default">$structure</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'day'</span><span class="keyword">]    = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">, </span><span class="default">46</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">));<br />        </span><span class="default">$structure</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'time'</span><span class="keyword">]   = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">, </span><span class="default">49</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br />        </span><span class="default">$structure</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">]   = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">, </span><span class="default">55</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">) - </span><span class="default">55</span><span class="keyword">);<br /><br />    }<br /><br />    return </span><span class="default">$structure</span><span class="keyword">;<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ftp-rawlist&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-rawlist.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ftp.php">FTP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ftp-alloc.php" title="ftp_&#8203;alloc">ftp_&#8203;alloc</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-append.php" title="ftp_&#8203;append">ftp_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-cdup.php" title="ftp_&#8203;cdup">ftp_&#8203;cdup</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-chdir.php" title="ftp_&#8203;chdir">ftp_&#8203;chdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-chmod.php" title="ftp_&#8203;chmod">ftp_&#8203;chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-close.php" title="ftp_&#8203;close">ftp_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-connect.php" title="ftp_&#8203;connect">ftp_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-delete.php" title="ftp_&#8203;delete">ftp_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-exec.php" title="ftp_&#8203;exec">ftp_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-fget.php" title="ftp_&#8203;fget">ftp_&#8203;fget</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-fput.php" title="ftp_&#8203;fput">ftp_&#8203;fput</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-get.php" title="ftp_&#8203;get">ftp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-get-option.php" title="ftp_&#8203;get_&#8203;option">ftp_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-login.php" title="ftp_&#8203;login">ftp_&#8203;login</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-mdtm.php" title="ftp_&#8203;mdtm">ftp_&#8203;mdtm</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-mkdir.php" title="ftp_&#8203;mkdir">ftp_&#8203;mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-mlsd.php" title="ftp_&#8203;mlsd">ftp_&#8203;mlsd</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-continue.php" title="ftp_&#8203;nb_&#8203;continue">ftp_&#8203;nb_&#8203;continue</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-fget.php" title="ftp_&#8203;nb_&#8203;fget">ftp_&#8203;nb_&#8203;fget</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-fput.php" title="ftp_&#8203;nb_&#8203;fput">ftp_&#8203;nb_&#8203;fput</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-get.php" title="ftp_&#8203;nb_&#8203;get">ftp_&#8203;nb_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-put.php" title="ftp_&#8203;nb_&#8203;put">ftp_&#8203;nb_&#8203;put</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nlist.php" title="ftp_&#8203;nlist">ftp_&#8203;nlist</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-pasv.php" title="ftp_&#8203;pasv">ftp_&#8203;pasv</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-put.php" title="ftp_&#8203;put">ftp_&#8203;put</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-pwd.php" title="ftp_&#8203;pwd">ftp_&#8203;pwd</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-quit.php" title="ftp_&#8203;quit">ftp_&#8203;quit</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-raw.php" title="ftp_&#8203;raw">ftp_&#8203;raw</a>
                        </li>
                                                <li class="current">
                            <a href="function.ftp-rawlist.php" title="ftp_&#8203;rawlist">ftp_&#8203;rawlist</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-rename.php" title="ftp_&#8203;rename">ftp_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-rmdir.php" title="ftp_&#8203;rmdir">ftp_&#8203;rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-set-option.php" title="ftp_&#8203;set_&#8203;option">ftp_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-site.php" title="ftp_&#8203;site">ftp_&#8203;site</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-size.php" title="ftp_&#8203;size">ftp_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-ssl-connect.php" title="ftp_&#8203;ssl_&#8203;connect">ftp_&#8203;ssl_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-systype.php" title="ftp_&#8203;systype">ftp_&#8203;systype</a>
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
