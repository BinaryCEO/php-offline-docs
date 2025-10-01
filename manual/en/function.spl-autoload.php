<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: spl_autoload - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.spl-autoload.php">
 <link rel="shorturl" href="https://www.php.net/spl-autoload">
 <link rel="alternate" href="https://www.php.net/spl-autoload" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.spl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.iterator-to-array.php">
 <link rel="next" href="https://www.php.net/manual/en/function.spl-autoload-call.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.spl-autoload.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.spl-autoload.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.spl-autoload.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.spl-autoload.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.spl-autoload.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.spl-autoload.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.spl-autoload.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.spl-autoload.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.spl-autoload.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.spl-autoload.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.spl-autoload.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Default implementation for __autoload()" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: spl_autoload - Manual" />
<meta name="twitter:description" content="Default implementation for __autoload()" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: spl_autoload - Manual" />
<meta itemprop="description" content="Default implementation for __autoload()" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Default implementation for __autoload()" />

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
        <a href="function.spl-autoload-call.php">
          spl_autoload_call &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.iterator-to-array.php">
          &laquo; iterator_to_array        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='ref.spl.php'>SPL Functions</a></li>      </ul>
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
            <option value='en/function.spl-autoload.php' selected="selected">English</option>
            <option value='de/function.spl-autoload.php'>German</option>
            <option value='es/function.spl-autoload.php'>Spanish</option>
            <option value='fr/function.spl-autoload.php'>French</option>
            <option value='it/function.spl-autoload.php'>Italian</option>
            <option value='ja/function.spl-autoload.php'>Japanese</option>
            <option value='pt_BR/function.spl-autoload.php'>Brazilian Portuguese</option>
            <option value='ru/function.spl-autoload.php'>Russian</option>
            <option value='tr/function.spl-autoload.php'>Turkish</option>
            <option value='uk/function.spl-autoload.php'>Ukrainian</option>
            <option value='zh/function.spl-autoload.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.spl-autoload" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">spl_autoload</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">spl_autoload</span> &mdash; <span class="dc-title">Default implementation for __autoload()</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.spl-autoload-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>spl_autoload</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$file_extensions</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   This function is intended to be used as a default implementation for
   <span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span>. If nothing else is specified and
   <span class="function"><a href="function.spl-autoload-register.php" class="function">spl_autoload_register()</a></span> is
   called without any parameters then <span class="function"><strong>spl_autoload()</strong></span> will be used for any
   later call to <span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span>. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.spl-autoload-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">class</code></dt>
     <dd>
      <p class="para">
       The name of the class being instantiated.
       When calling the function, the name of the class with the namespace is passed to the parameter.
       The <code class="parameter">class</code> will not contain the leading backslash of a fully-qualified identifier.
      </p>
     </dd>
    
    
     <dt><code class="parameter">file_extensions</code></dt>
     <dd>
      <p class="para">
       By default it checks all <a href="ini.core.php#ini.include-path" class="link">include_path</a>s to
       contain filenames built up by the lowercase class name appended by the
       filename extensions <code class="literal">.inc</code> and <code class="literal">.php</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.spl-autoload-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.spl-autoload-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws <span class="classname"><a href="class.logicexception.php" class="classname">LogicException</a></span> when the class is not found
   and there are no other autoloaders registered.
  </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-function.spl-autoload-changelog">
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
       <td>8.0.0</td>
       <td>
        <code class="parameter">file_extensions</code> is now nullable.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/functions/spl-autoload.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.spl-autoload%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.spl-autoload&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.spl-autoload.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92767">  <div class="votes">
    <div id="Vu92767">
    <a href="/manual/vote-note.php?id=92767&amp;page=function.spl-autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92767">
    <a href="/manual/vote-note.php?id=92767&amp;page=function.spl-autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92767" title="76% like this...">
    95
    </div>
  </div>
  <a href="#92767" class="name">
  <strong class="user"><em>simast at gmail dot com</em></strong></a><a class="genanchor" href="#92767"> &para;</a><div class="date" title="2009-08-07 10:22"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92767">
<div class="phpcode"><code><span class="html">Note, that the default autoload implementation is written in C land and is always slightly faster then your native PHP one.<br /><br />Here is a trick to use default implementation with any configuration:<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">// Your custom class dir<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'CLASS_DIR'</span><span class="keyword">, </span><span class="string">'class/'</span><span class="keyword">)<br /><br />    </span><span class="comment">// Add your class dir to include path<br />    </span><span class="default">set_include_path</span><span class="keyword">(</span><span class="default">get_include_path</span><span class="keyword">().</span><span class="default">PATH_SEPARATOR</span><span class="keyword">.</span><span class="default">CLASS_DIR</span><span class="keyword">);<br /><br />    </span><span class="comment">// You can use this trick to make autoloader look for commonly used "My.class.php" type filenames<br />    </span><span class="default">spl_autoload_extensions</span><span class="keyword">(</span><span class="string">'.class.php'</span><span class="keyword">);<br /><br />    </span><span class="comment">// Use default autoload implementation<br />    </span><span class="default">spl_autoload_register</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />This also works with namespaces out of the box. So you can write code like "use My\Name\Object" and it will map to "class/My/Name/Object.class.php" file path!</span></code></div>
  </div>
 </div>
  <div class="note" id="127242">  <div class="votes">
    <div id="Vu127242">
    <a href="/manual/vote-note.php?id=127242&amp;page=function.spl-autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127242">
    <a href="/manual/vote-note.php?id=127242&amp;page=function.spl-autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127242" title="80% like this...">
    3
    </div>
  </div>
  <a href="#127242" class="name">
  <strong class="user"><em>theking2 at king dot ma</em></strong></a><a class="genanchor" href="#127242"> &para;</a><div class="date" title="2022-07-09 10:41"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127242">
<div class="phpcode"><code><span class="html">Both namespaces and class names are case insensitive. This can cause problems with autoloading in OS/filesystems that _are_<br /><br />Consider this code:<br /><span class="default">&lt;?php </span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">set_include_path</span><span class="keyword">(</span><span class="default">get_include_path</span><span class="keyword">() . </span><span class="default">PATH_SEPARATOR </span><span class="keyword">. </span><span class="string">'class/'</span><span class="keyword">);<br /></span><span class="default">spl_autoload_extensions</span><span class="keyword">(</span><span class="string">'.class.php'</span><span class="keyword">);<br /></span><span class="default">spl_autoload_register</span><span class="keyword">();<br /><br /></span><span class="default">$foobar </span><span class="keyword">= new </span><span class="default">\foo\bar</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />and a class file /class/foo/bar.class.php:<br /><span class="default">&lt;?php </span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br />namespace </span><span class="default">Foo</span><span class="keyword">;<br /><br />class </span><span class="default">Bar </span><span class="keyword">{<br />  public function </span><span class="default">__construct</span><span class="keyword">() {<br />    echo </span><span class="string">'Map constructed'</span><span class="keyword">;<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />this will work fine regardless of a case sensitive or not case sensitive OS/FS. <br /><br />A file called ./class/Foo/Bar.class.php will only be found on a not case sensitive situation as the default class loader will mb_strtolower() the class name to find the class filename.<br /><br />Btw. this content of a class file will be equivalent to the one above:<br /><span class="default">&lt;?php </span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br />namespace </span><span class="default">foo</span><span class="keyword">;<br /><br />class </span><span class="default">bar </span><span class="keyword">{<br />  public function </span><span class="default">__construct</span><span class="keyword">() {<br />    echo </span><span class="string">'Map constructed'</span><span class="keyword">;<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />The class /foo/bar and /Foo/Bar are one and the same thing.</span></code></div>
  </div>
 </div>
  <div class="note" id="103548">  <div class="votes">
    <div id="Vu103548">
    <a href="/manual/vote-note.php?id=103548&amp;page=function.spl-autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103548">
    <a href="/manual/vote-note.php?id=103548&amp;page=function.spl-autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103548" title="72% like this...">
    11
    </div>
  </div>
  <a href="#103548" class="name">
  <strong class="user"><em>Luke Scott</em></strong></a><a class="genanchor" href="#103548"> &para;</a><div class="date" title="2011-04-19 07:03"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103548">
<div class="phpcode"><code><span class="html">If you want to make the best use out of autoload with an APC cache don't use spl_autoload. It uses relative paths and thus will perform a stat even with apc.stat=0 (either that, or it doesn't work at all).<br /><br />Instead make a custom function and use require/include with an absolute path (register it with spl_autoload_register).<br /><br />Do NOT use *_once functions or a relative path. This will fail harder than spl_autoload.<br /><br />Also avoid using file_exists and is_file. This will also perform a stat.<br /><br />Why are stats bad? Because they access the file system. PHP does have a stat cache that helps, but it defeats the purpose of apc.stat = 0.<br /><br />It's also good to keep in mind that it's good to keep your custom autoload function simple. This is my Loader class:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Loader<br /></span><span class="keyword">{    <br />    public static function </span><span class="default">registerAutoload</span><span class="keyword">()<br />    {<br />        return </span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="default">__CLASS__</span><span class="keyword">, </span><span class="string">'includeClass'</span><span class="keyword">));<br />    }<br />    <br />    public static function </span><span class="default">unregisterAutoload</span><span class="keyword">()<br />    {<br />        return </span><span class="default">spl_autoload_unregister</span><span class="keyword">(array(</span><span class="default">__CLASS__</span><span class="keyword">, </span><span class="string">'includeClass'</span><span class="keyword">));<br />    }<br />    <br />    public static function </span><span class="default">includeClass</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">)<br />    {<br />        require(</span><span class="default">PATH </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">, </span><span class="string">'_\\'</span><span class="keyword">, </span><span class="string">'//'</span><span class="keyword">) . </span><span class="string">'.php'</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Also want to point out that APC does an optimization with require/include (not *_once) with relative paths if require/include is done in the global scope (and isn't conditional). So it would be a good idea to explicitly include files you know you're going to use on every request (but don't use *_once). You could, for example, add a "registerProfiledAutoload" to the above class and keep track of what you're including to help you determine what you could explicitly include (during development, not production). The key is try not to make heavy use out of autoload.<br /><br />If you must use relative paths and don't care about having to lower-case your file-names then spl_autoload works great.</span></code></div>
  </div>
 </div>
  <div class="note" id="98762">  <div class="votes">
    <div id="Vu98762">
    <a href="/manual/vote-note.php?id=98762&amp;page=function.spl-autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98762">
    <a href="/manual/vote-note.php?id=98762&amp;page=function.spl-autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98762" title="67% like this...">
    18
    </div>
  </div>
  <a href="#98762" class="name">
  <strong class="user"><em>daniel</em></strong></a><a class="genanchor" href="#98762"> &para;</a><div class="date" title="2010-07-05 07:58"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98762">
<div class="phpcode"><code><span class="html">Note this function will LOWERCASE the class names its looking for, dont be confused when it cant find Foo_Bar.php<br /><br />also, unlike most other autoloader code snippets, this function DOES NOT translate underscores to slashes.<br /><br />class Foo_Bar {}<br />will load foo_bar.php and will not try to load foo/bar.php<br /><br />You can get around this with<br />spl_autoload_register(function($class) { return spl_autoload(str_replace('_', '/', $class));});</span></code></div>
  </div>
 </div>
  <div class="note" id="114855">  <div class="votes">
    <div id="Vu114855">
    <a href="/manual/vote-note.php?id=114855&amp;page=function.spl-autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114855">
    <a href="/manual/vote-note.php?id=114855&amp;page=function.spl-autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114855" title="69% like this...">
    10
    </div>
  </div>
  <a href="#114855" class="name">
  <strong class="user"><em>EVODelavega</em></strong></a><a class="genanchor" href="#114855"> &para;</a><div class="date" title="2014-04-15 08:39"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114855">
<div class="phpcode"><code><span class="html">Just thought I'd react to simast at gmail dot com's note: While he has a point in saying C outperforms PHP, his suggestion is micro-optimization. I'm not 100% against micro-optimizing code, but if you do, go all the way:<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">// Your custom class dir<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'CLASS_DIR'</span><span class="keyword">, </span><span class="string">'class/'</span><span class="keyword">)<br /><br />    </span><span class="comment">// Add your class dir to include path<br />    </span><span class="default">set_include_path</span><span class="keyword">(</span><span class="default">get_include_path</span><span class="keyword">().</span><span class="default">PATH_SEPARATOR</span><span class="keyword">.</span><span class="default">CLASS_DIR</span><span class="keyword">);<br /><br /></span><span class="default">This adds the </span><span class="keyword">include </span><span class="default">path to THE END of the paths PHP will scan </span><span class="keyword">for </span><span class="default">the </span><span class="keyword">class </span><span class="default">file</span><span class="keyword">, </span><span class="default">resulting in a bunch of misses </span><span class="keyword">(</span><span class="default">file</span><span class="keyword">-</span><span class="default">not</span><span class="keyword">-</span><span class="default">found</span><span class="string">'s) before actually looking into the CLASS_DIR.<br />A more sensible approach, then would be to write<br /><br />    set_include_path(<br />        CLASS_DIR.<br />        PATH_SEPARATOR,<br />        get_include_path()<br />    );</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78053">  <div class="votes">
    <div id="Vu78053">
    <a href="/manual/vote-note.php?id=78053&amp;page=function.spl-autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78053">
    <a href="/manual/vote-note.php?id=78053&amp;page=function.spl-autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78053" title="66% like this...">
    12
    </div>
  </div>
  <a href="#78053" class="name">
  <strong class="user"><em>safak_ozpinar at NOSPAM dot yahoo dot com</em></strong></a><a class="genanchor" href="#78053"> &para;</a><div class="date" title="2007-09-25 07:17"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78053">
<div class="phpcode"><code><span class="html">Note that, the orders of file extensions is important for performance. You should make the priority of your favourite file extension higest or use only one extension for your class files. Check out this example:<br /><br />Some class files:<br /><br />ClassA.php<br /><span class="default">&lt;?php </span><span class="keyword">class </span><span class="default">ClassA </span><span class="keyword">{ var </span><span class="default">$val </span><span class="keyword">= </span><span class="string">'Hello from class "ClassA"'</span><span class="keyword">; } </span><span class="default">?&gt;<br /></span>ClassB.php<br /><span class="default">&lt;?php </span><span class="keyword">class </span><span class="default">ClassB </span><span class="keyword">{ var </span><span class="default">$val </span><span class="keyword">= </span><span class="string">'Hello from class "ClassB"'</span><span class="keyword">; } </span><span class="default">?&gt;<br /></span>ClassC.php<br /><span class="default">&lt;?php </span><span class="keyword">class </span><span class="default">ClassC </span><span class="keyword">{ var </span><span class="default">$val </span><span class="keyword">= </span><span class="string">'Hello from class "ClassC"'</span><span class="keyword">; } </span><span class="default">?&gt;<br /></span>ClassD.php<br /><span class="default">&lt;?php </span><span class="keyword">class </span><span class="default">ClassD </span><span class="keyword">{ var </span><span class="default">$val </span><span class="keyword">= </span><span class="string">'Hello from class "ClassD"'</span><span class="keyword">; } </span><span class="default">?&gt;<br /></span>ClassE.php<br /><span class="default">&lt;?php </span><span class="keyword">class </span><span class="default">ClassE </span><span class="keyword">{ var </span><span class="default">$val </span><span class="keyword">= </span><span class="string">'Hello from class "ClassE"'</span><span class="keyword">; } </span><span class="default">?&gt;<br /></span><br />1. Simple:<br /><span class="default">&lt;?php<br /></span><span class="comment">// default priority: .inc .php<br /></span><span class="keyword">for(</span><span class="default">$n</span><span class="keyword">=</span><span class="default">65</span><span class="keyword">; </span><span class="default">$n</span><span class="keyword">&lt;</span><span class="default">70</span><span class="keyword">; </span><span class="default">$n</span><span class="keyword">++) {<br />    </span><span class="default">$className </span><span class="keyword">= </span><span class="string">'Class'</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">);<br />    </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">);<br />    </span><span class="default">$ins </span><span class="keyword">= new </span><span class="default">$className</span><span class="keyword">;<br />    echo </span><span class="default">$ins</span><span class="keyword">-&gt;</span><span class="default">val</span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /></span><span class="comment">// 4.2 miliseconds<br /></span><span class="default">?&gt;<br /></span><br />2. Change priority:<br /><span class="default">&lt;?php<br />spl_autoload_extensions</span><span class="keyword">(</span><span class="string">'.php,.inc'</span><span class="keyword">);<br /></span><span class="comment">// new priority: .php .inc<br /></span><span class="keyword">for(</span><span class="default">$n</span><span class="keyword">=</span><span class="default">65</span><span class="keyword">; </span><span class="default">$n</span><span class="keyword">&lt;</span><span class="default">70</span><span class="keyword">; </span><span class="default">$n</span><span class="keyword">++) {<br />    </span><span class="default">$className </span><span class="keyword">= </span><span class="string">'Class'</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">);<br />    </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">);<br />    </span><span class="default">$ins </span><span class="keyword">= new </span><span class="default">$className</span><span class="keyword">;<br />    echo </span><span class="default">$ins</span><span class="keyword">-&gt;</span><span class="default">val</span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /></span><span class="comment">// 1.4 miliseconds<br /></span><span class="default">?&gt;<br /></span><br />Or you can use this simple function that runs a bit faster for the extensions with lower priority :)<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">my_autoload</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">, </span><span class="default">$extList</span><span class="keyword">=</span><span class="string">'.inc,.php'</span><span class="keyword">) {<br />    </span><span class="default">$ext </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">,</span><span class="default">$extList</span><span class="keyword">);<br />    foreach(</span><span class="default">$ext </span><span class="keyword">as </span><span class="default">$x</span><span class="keyword">) {<br />        </span><span class="default">$fname </span><span class="keyword">= </span><span class="default">$className</span><span class="keyword">.</span><span class="default">$x</span><span class="keyword">;<br />        if(@</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$fname</span><span class="keyword">)) {<br />            require_once(</span><span class="default">$fname</span><span class="keyword">);<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br />for(</span><span class="default">$n</span><span class="keyword">=</span><span class="default">65</span><span class="keyword">; </span><span class="default">$n</span><span class="keyword">&lt;</span><span class="default">70</span><span class="keyword">; </span><span class="default">$n</span><span class="keyword">++) {<br />    </span><span class="default">$className </span><span class="keyword">= </span><span class="string">'Class'</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">);<br />    </span><span class="default">my_autoload</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">);<br />    </span><span class="default">$ins </span><span class="keyword">= new </span><span class="default">$className</span><span class="keyword">;<br />    echo </span><span class="default">$ins</span><span class="keyword">-&gt;</span><span class="default">val</span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /></span><span class="comment">// 2.6 miliseconds<br /></span><span class="default">?&gt;<br /></span>---<br />Safak Ozpinar - Istanbul University, Computer Engineering</span></code></div>
  </div>
 </div>
  <div class="note" id="113613">  <div class="votes">
    <div id="Vu113613">
    <a href="/manual/vote-note.php?id=113613&amp;page=function.spl-autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113613">
    <a href="/manual/vote-note.php?id=113613&amp;page=function.spl-autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113613" title="66% like this...">
    8
    </div>
  </div>
  <a href="#113613" class="name">
  <strong class="user"><em>Philip</em></strong></a><a class="genanchor" href="#113613"> &para;</a><div class="date" title="2013-11-05 03:05"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113613">
<div class="phpcode"><code><span class="html">The documentation is a little unclear when it says: "The lowercased name of the class (and namespace) being instantiated". <br /><br />What it actually means is that the argument can be in whatever case you want, but it will be converted to lowercase before PHP starts looking for files. This is probably because in PHP, class names are case-insensitive (as well as function names and namespaces) so it needs to convert to some canonical format.</span></code></div>
  </div>
 </div>
  <div class="note" id="108930">  <div class="votes">
    <div id="Vu108930">
    <a href="/manual/vote-note.php?id=108930&amp;page=function.spl-autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108930">
    <a href="/manual/vote-note.php?id=108930&amp;page=function.spl-autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108930" title="59% like this...">
    12
    </div>
  </div>
  <a href="#108930" class="name">
  <strong class="user"><em>Ivan Stojmenovic</em></strong></a><a class="genanchor" href="#108930"> &para;</a><div class="date" title="2012-06-06 01:19"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108930">
<div class="phpcode"><code><span class="html">One small example that shows how you can use spl_autoload function in your MVC, Framewrk's applications. For example, will use the Loader class.<br /> <br /><br /><span class="default">&lt;?php<br /><br /> </span><span class="keyword">class </span><span class="default">Loader<br /> </span><span class="keyword">{<br />        <br />    </span><span class="comment">/**<br />     * Controller Directory Path<br />     *<br />     * @var Array<br />     * @access protected<br />     */<br />    </span><span class="keyword">protected </span><span class="default">$_controllerDirectoryPath </span><span class="keyword">= array();<br />    <br />    </span><span class="comment">/**<br />     * Model Directory Path<br />     *<br />     * @var Array<br />     * @access protected<br />     */<br />    </span><span class="keyword">protected </span><span class="default">$_modelDirectoryPath </span><span class="keyword">= array();<br />    <br />    </span><span class="comment">/**<br />     * Library Directory Path<br />     *<br />     * @var Array<br />     * @access protected<br />     */<br />    </span><span class="keyword">protected </span><span class="default">$_libraryDirectoryPath </span><span class="keyword">= array();<br />    <br />    <br />    </span><span class="comment">/** <br />     * Constructor<br />     * Constant contain my full path to Model, View, Controllers and Lobrary-<br />     * Direcories.<br />     *<br />     * @Constant MPATH,VPATH,CPATH,LPATH<br />     */<br />     <br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">modelDirectoryPath      </span><span class="keyword">= </span><span class="default">MPATH</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">viewDirectoryPath        </span><span class="keyword">= </span><span class="default">VPATH</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">controllerDirectoryPath </span><span class="keyword">= </span><span class="default">CPATH</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">libraryDirectoryPath     </span><span class="keyword">= </span><span class="default">LPATH</span><span class="keyword">;<br />        <br />        </span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">,</span><span class="string">'load_controller'</span><span class="keyword">));<br />        </span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">,</span><span class="string">'load_model'</span><span class="keyword">));<br />        </span><span class="default">spl_autoload_register</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">,</span><span class="string">'load_library'</span><span class="keyword">));<br />   <br />        </span><span class="default">log_message</span><span class="keyword">(</span><span class="string">'debug'</span><span class="keyword">,</span><span class="string">"Loader Class Initialized"</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/** <br />     *-----------------------------------------------------<br />     * Load Library<br />     *-----------------------------------------------------<br />     * Method for load library.<br />     * This method return class object.<br />     *<br />     * @library String<br />     * @param String<br />     * @access public<br />     */    <br />    </span><span class="keyword">public function </span><span class="default">load_library</span><span class="keyword">(</span><span class="default">$library</span><span class="keyword">, </span><span class="default">$param </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$library</span><span class="keyword">)) {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">initialize_class</span><span class="keyword">(</span><span class="default">$library</span><span class="keyword">);<br />        }<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$library</span><span class="keyword">)) {<br />            foreach (</span><span class="default">$library </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">) {<br />                return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">initialize_class</span><span class="keyword">(</span><span class="default">$library</span><span class="keyword">);<br />            }<br />        }                <br />    }<br /><br />    </span><span class="comment">/** <br />     *-----------------------------------------------------<br />     * Initialize Class<br />     *-----------------------------------------------------<br />     * Method for initialise class<br />     * This method return new object. <br />     * This method can initialize more class using (array)<br />     *<br />     * @library String|Array<br />     * @param String<br />     * @access public<br />     */    <br />    </span><span class="keyword">public function </span><span class="default">initialize_class</span><span class="keyword">(</span><span class="default">$library</span><span class="keyword">)<br />    {<br />        try {<br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$library</span><span class="keyword">)) {<br />                foreach(</span><span class="default">$library </span><span class="keyword">as </span><span class="default">$class</span><span class="keyword">) {<br />                    </span><span class="default">$arrayObject </span><span class="keyword">=  new </span><span class="default">$class</span><span class="keyword">;<br />                }            <br />                return </span><span class="default">$this</span><span class="keyword">;<br />            }<br />            if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$library</span><span class="keyword">)) {<br />                </span><span class="default">$stringObject </span><span class="keyword">= new </span><span class="default">$library</span><span class="keyword">;<br />            }else {<br />                throw new </span><span class="default">ISException</span><span class="keyword">(</span><span class="string">'Class name must be string.'</span><span class="keyword">);<br />            }<br />            if (</span><span class="default">null </span><span class="keyword">== </span><span class="default">$library</span><span class="keyword">) {<br />                throw new </span><span class="default">ISException</span><span class="keyword">(</span><span class="string">'You must enter the name of the class.'</span><span class="keyword">);<br />            }<br />        } catch(</span><span class="default">Exception $exception</span><span class="keyword">) {<br />            echo </span><span class="default">$exception</span><span class="keyword">;<br />        }<br />    }    <br />    <br />    </span><span class="comment">/**<br />     * Autoload Controller class<br />     *<br />     * @param  string $class<br />     * @return object<br />     */<br />     <br />    </span><span class="keyword">public function </span><span class="default">load_controller</span><span class="keyword">(</span><span class="default">$controller</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$controller</span><span class="keyword">) {<br />            </span><span class="default">set_include_path</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">controllerDirectoryPath</span><span class="keyword">);<br />            </span><span class="default">spl_autoload_extensions</span><span class="keyword">(</span><span class="string">'.php'</span><span class="keyword">);<br />            </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">);<br />        }<br />    }    <br />    <br /><br />      </span><span class="comment">/**<br />     * Autoload Model class<br />     *<br />     * @param  string $class<br />     * @return object<br />     */<br />     <br />    </span><span class="keyword">public function </span><span class="default">load_models</span><span class="keyword">(</span><span class="default">$model</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$model</span><span class="keyword">) {<br />            </span><span class="default">set_include_path</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">modelDirectoryPath</span><span class="keyword">);<br />            </span><span class="default">spl_autoload_extensions</span><span class="keyword">(</span><span class="string">'.php'</span><span class="keyword">);<br />            </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">);<br />        }<br />    }    <br />    <br />      </span><span class="comment">/**<br />     * Autoload Library class<br />     *<br />     * @param  string $class<br />     * @return object<br />     */<br />     <br />    </span><span class="keyword">public function </span><span class="default">load_library</span><span class="keyword">(</span><span class="default">$library</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$library</span><span class="keyword">) {<br />            </span><span class="default">set_include_path</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">libraryDirectoryPath</span><span class="keyword">);<br />            </span><span class="default">spl_autoload_extensions</span><span class="keyword">(</span><span class="string">'.php'</span><span class="keyword">);<br />            </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">);<br />        }<br />    }<br />    <br /><br />    <br /> }<br /> <br /> </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110142">  <div class="votes">
    <div id="Vu110142">
    <a href="/manual/vote-note.php?id=110142&amp;page=function.spl-autoload&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110142">
    <a href="/manual/vote-note.php?id=110142&amp;page=function.spl-autoload&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110142" title="57% like this...">
    5
    </div>
  </div>
  <a href="#110142" class="name">
  <strong class="user"><em>contato at felipebarth dot com dot br</em></strong></a><a class="genanchor" href="#110142"> &para;</a><div class="date" title="2012-09-23 09:14"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110142">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">/*
<br />* defined function responsible for loading class,
<br />* replacing the old __ autoload.
<br />* ROOT is constant of the path root of the system
<br />*/
<br /></span><span class="default">spl_autoload_extensions</span><span class="keyword">(</span><span class="string">'.class.php'</span><span class="keyword">);
<br /></span><span class="default">spl_autoload_register</span><span class="keyword">(</span><span class="string">'loadClasses'</span><span class="keyword">);
<br />
<br /> function </span><span class="default">loadClasses</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">)
<br /> {
<br />    
<br />    if( </span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">ROOT_DIR</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">.</span><span class="string">'controller/'</span><span class="keyword">.</span><span class="default">$className</span><span class="keyword">.</span><span class="string">'.class.php' </span><span class="keyword">) ){
<br />        </span><span class="default">set_include_path</span><span class="keyword">(</span><span class="default">ROOT_DIR</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">.</span><span class="string">'controller'</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">);
<br />        </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">);
<br />    }
<br />    elseif( </span><span class="default">file_exists</span><span class="keyword">(</span><span class="string">'model/'</span><span class="keyword">.</span><span class="default">$className</span><span class="keyword">.</span><span class="string">'.class.php' </span><span class="keyword">) ){
<br />        </span><span class="default">set_include_path</span><span class="keyword">(</span><span class="default">ROOT_DIR</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">.</span><span class="string">'model'</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">);
<br />        </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">);
<br />    }elseif( </span><span class="default">file_exists</span><span class="keyword">(</span><span class="string">'view/'</span><span class="keyword">.</span><span class="default">$className</span><span class="keyword">.</span><span class="string">'.class.php' </span><span class="keyword">) ){
<br />        </span><span class="default">set_include_path</span><span class="keyword">(</span><span class="default">ROOT_DIR</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">.</span><span class="string">'view'</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">);
<br />        </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">$className    </span><span class="keyword">);
<br />    }else
<br />    {
<br />        </span><span class="default">set_include_path</span><span class="keyword">(</span><span class="default">ROOT_DIR</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">.</span><span class="string">'lib'</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">);
<br />        </span><span class="default">spl_autoload</span><span class="keyword">(</span><span class="default">$className    </span><span class="keyword">);
<br />    }
<br /> }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.spl-autoload&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.spl-autoload.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.spl.php">SPL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.class-implements.php" title="class_&#8203;implements">class_&#8203;implements</a>
                        </li>
                                                <li class="">
                            <a href="function.class-parents.php" title="class_&#8203;parents">class_&#8203;parents</a>
                        </li>
                                                <li class="">
                            <a href="function.class-uses.php" title="class_&#8203;uses">class_&#8203;uses</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-apply.php" title="iterator_&#8203;apply">iterator_&#8203;apply</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-count.php" title="iterator_&#8203;count">iterator_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.iterator-to-array.php" title="iterator_&#8203;to_&#8203;array">iterator_&#8203;to_&#8203;array</a>
                        </li>
                                                <li class="current">
                            <a href="function.spl-autoload.php" title="spl_&#8203;autoload">spl_&#8203;autoload</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-call.php" title="spl_&#8203;autoload_&#8203;call">spl_&#8203;autoload_&#8203;call</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-extensions.php" title="spl_&#8203;autoload_&#8203;extensions">spl_&#8203;autoload_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-functions.php" title="spl_&#8203;autoload_&#8203;functions">spl_&#8203;autoload_&#8203;functions</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-register.php" title="spl_&#8203;autoload_&#8203;register">spl_&#8203;autoload_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-autoload-unregister.php" title="spl_&#8203;autoload_&#8203;unregister">spl_&#8203;autoload_&#8203;unregister</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-classes.php" title="spl_&#8203;classes">spl_&#8203;classes</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-object-hash.php" title="spl_&#8203;object_&#8203;hash">spl_&#8203;object_&#8203;hash</a>
                        </li>
                                                <li class="">
                            <a href="function.spl-object-id.php" title="spl_&#8203;object_&#8203;id">spl_&#8203;object_&#8203;id</a>
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
