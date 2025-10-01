<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ini_set - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ini-set.php">
 <link rel="shorturl" href="https://www.php.net/ini-set">
 <link rel="alternate" href="https://www.php.net/ini-set" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.info.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ini-restore.php">
 <link rel="next" href="https://www.php.net/manual/en/function.memory-get-peak-usage.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ini-set.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ini-set.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ini-set.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ini-set.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ini-set.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ini-set.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ini-set.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ini-set.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ini-set.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ini-set.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ini-set.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sets the value of a configuration option" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ini_set - Manual" />
<meta name="twitter:description" content="Sets the value of a configuration option" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ini_set - Manual" />
<meta itemprop="description" content="Sets the value of a configuration option" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sets the value of a configuration option" />

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
        <a href="function.memory-get-peak-usage.php">
          memory_get_peak_usage &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ini-restore.php">
          &laquo; ini_restore        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.info.php'>PHP Options/Info</a></li>      <li><a href='ref.info.php'>PHP Options/Info Functions</a></li>      </ul>
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
            <option value='en/function.ini-set.php' selected="selected">English</option>
            <option value='de/function.ini-set.php'>German</option>
            <option value='es/function.ini-set.php'>Spanish</option>
            <option value='fr/function.ini-set.php'>French</option>
            <option value='it/function.ini-set.php'>Italian</option>
            <option value='ja/function.ini-set.php'>Japanese</option>
            <option value='pt_BR/function.ini-set.php'>Brazilian Portuguese</option>
            <option value='ru/function.ini-set.php'>Russian</option>
            <option value='tr/function.ini-set.php'>Turkish</option>
            <option value='uk/function.ini-set.php'>Ukrainian</option>
            <option value='zh/function.ini-set.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ini-set" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ini_set</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ini_set</span> &mdash; <span class="dc-title">Sets the value of a configuration option</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ini-set-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ini_set</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$option</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$value</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Sets the value of the given configuration option.  The configuration option
   will keep this new value during the script&#039;s execution, and will be restored
   at the script&#039;s ending.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ini-set-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">option</code></dt>
     <dd>
      <p class="para">
      </p>
      <p class="para">
       Not all the available options can be changed using
       <span class="function"><strong>ini_set()</strong></span>. There is a list of all available options
       in the <a href="ini.list.php" class="link">appendix</a>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The new value for the option.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ini-set-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the old value on success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ini-set-changelog">
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
       <code class="parameter">value</code> now accepts any scalar type (including <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>).
       Previously, only <span class="type"><a href="language.types.string.php" class="type string">string</a></span> values were accepted.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.ini-set-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-661">
    <p><strong>Example #1 Setting an ini option</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'display_errors'</span><span style="color: #007700">);<br /><br />if (!</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'display_errors'</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'display_errors'</span><span style="color: #007700">, </span><span style="color: #DD0000">'1'</span><span style="color: #007700">);<br />}<br /><br />echo </span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'display_errors'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ini-set-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.get-cfg-var.php" class="function" rel="rdfs-seeAlso">get_cfg_var()</a> - Gets the value of a PHP configuration option</span></li>
    <li><span class="function"><a href="function.ini-get.php" class="function" rel="rdfs-seeAlso">ini_get()</a> - Gets the value of a configuration option</span></li>
    <li><span class="function"><a href="function.ini-get-all.php" class="function" rel="rdfs-seeAlso">ini_get_all()</a> - Gets all configuration options</span></li>
    <li><span class="function"><a href="function.ini-restore.php" class="function" rel="rdfs-seeAlso">ini_restore()</a> - Restores the value of a configuration option</span></li>
    <li>
     <a href="configuration.changes.php" class="link">How to change configuration settings</a>
    </li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/info/functions/ini-set.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ini-set%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ini-set&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ini-set.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115747">  <div class="votes">
    <div id="Vu115747">
    <a href="/manual/vote-note.php?id=115747&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115747">
    <a href="/manual/vote-note.php?id=115747&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115747" title="58% like this...">
    23
    </div>
  </div>
  <a href="#115747" class="name">
  <strong class="user"><em>nl-x</em></strong></a><a class="genanchor" href="#115747"> &para;</a><div class="date" title="2014-09-17 11:32"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115747">
<div class="phpcode"><code><span class="html">I have experienced on some systems that ini_set() will fail and return a false, when trying to set a setting that was set inside php.ini inside a per-host setting. Beware of this.</span></code></div>
  </div>
 </div>
  <div class="note" id="22264">  <div class="votes">
    <div id="Vu22264">
    <a href="/manual/vote-note.php?id=22264&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22264">
    <a href="/manual/vote-note.php?id=22264&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22264" title="55% like this...">
    19
    </div>
  </div>
  <a href="#22264" class="name">
  <strong class="user"><em>Tr909 at com dot nospam dot bigfoot</em></strong></a><a class="genanchor" href="#22264"> &para;</a><div class="date" title="2002-06-12 10:04"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22264">
<div class="phpcode"><code><span class="html">[[[Editors note: Yes, this is very true.  Same with 
<br />register_globals, magic_quotes_gpc and others.
<br />]]]
<br />
<br />Many settings, although they do get set, have no influence in your script.... like upload_max_filesize will get set but uploaded files are already passed to your PHP script before the settings are changed.
<br />
<br />Also other settings, set by ini_set(), may be to late because of this (post_max_size etc.).
<br />beware, try settings thru php.ini or .htaccess.</span></code></div>
  </div>
 </div>
  <div class="note" id="121446">  <div class="votes">
    <div id="Vu121446">
    <a href="/manual/vote-note.php?id=121446&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121446">
    <a href="/manual/vote-note.php?id=121446&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121446" title="55% like this...">
    11
    </div>
  </div>
  <a href="#121446" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#121446"> &para;</a><div class="date" title="2017-07-27 11:29"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121446">
<div class="phpcode"><code><span class="html">When checking for the success of ini_set(), keep in mind that it will return the OLD value upon success - which may have been "0". Therefore you cannot just compare the return value - you have to check for "identity":<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// This will NOT determine the success of ini_set(), instead<br />// it only tests if the old value had been equivalent to false<br /></span><span class="keyword">if ( !</span><span class="default">ini_set</span><span class="keyword">( </span><span class="string">'display_errors'</span><span class="keyword">, </span><span class="string">'1' </span><span class="keyword">) ) <br />    throw new </span><span class="default">\Exception</span><span class="keyword">( </span><span class="string">'Unable to set display_errors.' </span><span class="keyword">);<br /><br /></span><span class="comment">// This is the CORRECT way to determine success<br /></span><span class="keyword">if ( </span><span class="default">ini_set</span><span class="keyword">( </span><span class="string">'display_errors'</span><span class="keyword">, </span><span class="string">'1' </span><span class="keyword">) === </span><span class="default">false </span><span class="keyword">) <br />    throw new </span><span class="default">\Exception</span><span class="keyword">( </span><span class="string">'Unable to set display_errors.' </span><span class="keyword">);    <br /><br /></span><span class="default">?&gt;<br /></span><br />This explains reported situations where ini_set() "always" seems to fail!</span></code></div>
  </div>
 </div>
  <div class="note" id="25601">  <div class="votes">
    <div id="Vu25601">
    <a href="/manual/vote-note.php?id=25601&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25601">
    <a href="/manual/vote-note.php?id=25601&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25601" title="54% like this...">
    12
    </div>
  </div>
  <a href="#25601" class="name">
  <strong class="user"><em>miroslav AT simunic DOT de</em></strong></a><a class="genanchor" href="#25601"> &para;</a><div class="date" title="2002-09-29 08:26"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25601">
<div class="phpcode"><code><span class="html">If it's not your server and therefore you want to hide the data in your session variables from other users, it�s very useful to set the session.save_handler in your scripts to shared memory with:
<br />
<br /><span class="default">&lt;?php ini_set</span><span class="keyword">(</span><span class="string">'session.save_handler'</span><span class="keyword">,</span><span class="string">'mm'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />Remember: You have to set it in every script that uses the session variables BEFORE "session_start()" or php won't find them.</span></code></div>
  </div>
 </div>
  <div class="note" id="70835">  <div class="votes">
    <div id="Vu70835">
    <a href="/manual/vote-note.php?id=70835&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70835">
    <a href="/manual/vote-note.php?id=70835&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70835" title="55% like this...">
    11
    </div>
  </div>
  <a href="#70835" class="name">
  <strong class="user"><em>daevid at daevid dot com</em></strong></a><a class="genanchor" href="#70835"> &para;</a><div class="date" title="2006-10-30 05:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70835">
<div class="phpcode"><code><span class="html">Be careful with setting an output_handler, as you can't use ini_set() to change it. *sigh*<br /><br />In my php.ini I have this for my web pages (and I want it): <br /><br />  output_handler = ob_gzhandler<br /><br />But this causes my command line scripts to not show output until the very end.<br /><br />#!/usr/bin/php -q<br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">'output_handler'</span><span class="keyword">, </span><span class="string">'mb_output_handler'</span><span class="keyword">);<br />echo </span><span class="string">"\noutput_handler =&gt; " </span><span class="keyword">. </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'output_handler'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />root@# ./myscript.php<br />output_handler =&gt; ob_gzhandler<br /><br />Apparently (acording to Richard Lynch):<br /><br />&gt; TOO LATE!<br />&gt; The ob_start() has already kicked in by this point.<br />&gt; ob_flush() until there are no more buffers.</span></code></div>
  </div>
 </div>
  <div class="note" id="115528">  <div class="votes">
    <div id="Vu115528">
    <a href="/manual/vote-note.php?id=115528&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115528">
    <a href="/manual/vote-note.php?id=115528&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115528" title="52% like this...">
    6
    </div>
  </div>
  <a href="#115528" class="name">
  <strong class="user"><em>anonymous</em></strong></a><a class="genanchor" href="#115528"> &para;</a><div class="date" title="2014-08-10 04:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115528">
<div class="phpcode"><code><span class="html">Note that this function only works with PHP_INI_ALL options!</span></code></div>
  </div>
 </div>
  <div class="note" id="106430">  <div class="votes">
    <div id="Vu106430">
    <a href="/manual/vote-note.php?id=106430&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106430">
    <a href="/manual/vote-note.php?id=106430&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106430" title="52% like this...">
    5
    </div>
  </div>
  <a href="#106430" class="name">
  <strong class="user"><em>Nathan</em></strong></a><a class="genanchor" href="#106430"> &para;</a><div class="date" title="2011-11-08 08:56"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106430">
<div class="phpcode"><code><span class="html">Careful - in some cases, when setting zlib.output_compression to "On" via ini_set, PHP won't send the Content-type header and browsers will garble the output. Set it to the desired buffer size instead, which sends the correct header:<br /><br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">"zlib.output_compression"</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60542">  <div class="votes">
    <div id="Vu60542">
    <a href="/manual/vote-note.php?id=60542&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60542">
    <a href="/manual/vote-note.php?id=60542&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60542" title="52% like this...">
    4
    </div>
  </div>
  <a href="#60542" class="name">
  <strong class="user"><em>Ron Ludwig</em></strong></a><a class="genanchor" href="#60542"> &para;</a><div class="date" title="2006-01-10 11:30"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60542">
<div class="phpcode"><code><span class="html">When your ISP does not allow you to add the default include directories - it might be useful to extend the 'include_path' variable:
<br />
<br /><span class="default">&lt;?php ini_set</span><span class="keyword">(</span><span class="string">'include_path'</span><span class="keyword">,</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'include_path'</span><span class="keyword">).</span><span class="string">':../includes:'</span><span class="keyword">);  </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63822">  <div class="votes">
    <div id="Vu63822">
    <a href="/manual/vote-note.php?id=63822&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63822">
    <a href="/manual/vote-note.php?id=63822&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63822" title="51% like this...">
    4
    </div>
  </div>
  <a href="#63822" class="name">
  <strong class="user"><em>RebootConcepts.com</em></strong></a><a class="genanchor" href="#63822"> &para;</a><div class="date" title="2006-03-31 01:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63822">
<div class="phpcode"><code><span class="html">set PHP_INI_PERDIR settings in a .htaccess file with 'php_flag' like this:<br /><br />php_flag register_globals off<br />php_flag magic_quotes_gpc on</span></code></div>
  </div>
 </div>
  <div class="note" id="44717">  <div class="votes">
    <div id="Vu44717">
    <a href="/manual/vote-note.php?id=44717&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44717">
    <a href="/manual/vote-note.php?id=44717&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44717" title="50% like this...">
    0
    </div>
  </div>
  <a href="#44717" class="name">
  <strong class="user"><em>sean at php dot net</em></strong></a><a class="genanchor" href="#44717"> &para;</a><div class="date" title="2004-08-13 06:54"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44717">
<div class="phpcode"><code><span class="html">While this doesn't belong in the manual, it should be useful for people looking on this page for zend_optimizer.* ini options, which are commonly installed:
<br />
<br />Information on the "zend_optimizer.optimization_level" and "zend_optimizer.enable_loader" options is available at:
<br />
<br /><a href="http://www.zend.com/support/user_docs/ZendOptimizer/PDF/ZendOptimizer_UserGuide.pdf" rel="nofollow" target="_blank">http://www.zend.com/support/user_docs/ZendOptimizer/PDF/ZendOptimizer_UserGuide.pdf</a></span></code></div>
  </div>
 </div>
  <div class="note" id="118305">  <div class="votes">
    <div id="Vu118305">
    <a href="/manual/vote-note.php?id=118305&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118305">
    <a href="/manual/vote-note.php?id=118305&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118305" title="48% like this...">
    -3
    </div>
  </div>
  <a href="#118305" class="name">
  <strong class="user"><em>Er.ellison</em></strong></a><a class="genanchor" href="#118305"> &para;</a><div class="date" title="2015-11-13 07:44"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118305">
<div class="phpcode"><code><span class="html">if u receive  an Error with generic like  :<br />Maximum execution time of 30 seconds exceeded <br /><br />if u set ini_set(max_execution_time, 300);<br />your problem will be solved <br />pls note that the 300 , is 300 seconds , which means 5 minute  you can set another value !</span></code></div>
  </div>
 </div>
  <div class="note" id="19874">  <div class="votes">
    <div id="Vu19874">
    <a href="/manual/vote-note.php?id=19874&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19874">
    <a href="/manual/vote-note.php?id=19874&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19874" title="48% like this...">
    -3
    </div>
  </div>
  <a href="#19874" class="name">
  <strong class="user"><em>johnzoet at netscape dot com</em></strong></a><a class="genanchor" href="#19874"> &para;</a><div class="date" title="2002-03-13 06:13"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19874">
<div class="phpcode"><code><span class="html">[[[Editors note: Just because you're able to set something 
<br />doesn't mean it will work as expected.  Depends on the 
<br />setting.  For example. setting register_globals at 
<br />runtime will be of little use as its job has already 
<br />been completed by the time it reaches your script.
<br />]]]
<br />
<br />When a setting can not be changed in a user script, the return value of ini_set is "empty", not "false" as you may expect.
<br />If you check in your script for return value is "false" the script will continue processing, although the setting has not been set.
<br />The boolean return value is used for settings that can be changed in a script. Otherwise the empty value is returned.
<br />To test for both error conditions use:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (empty(</span><span class="default">$blnResult</span><span class="keyword">) or (!</span><span class="default">$blnResult</span><span class="keyword">)) {
<br />   echo </span><span class="string">"setting cannot be set"</span><span class="keyword">;
<br />   exit;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126764">  <div class="votes">
    <div id="Vu126764">
    <a href="/manual/vote-note.php?id=126764&amp;page=function.ini-set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126764">
    <a href="/manual/vote-note.php?id=126764&amp;page=function.ini-set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126764" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#126764" class="name">
  <strong class="user"><em>Julien MOREAU aka PixEye</em></strong></a><a class="genanchor" href="#126764"> &para;</a><div class="date" title="2022-01-14 10:48"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126764">
<div class="phpcode"><code><span class="html">In order to change zend.assertions or assert.exception values, try with the ini_set() function but be aware that it may fail.<br /><br />Example:<br /><span class="default">&lt;?php<br />$ret </span><span class="keyword">= @</span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'zend.assertions'</span><span class="keyword">, </span><span class="string">'1'</span><span class="keyword">);<br />if (</span><span class="default">$ret </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) echo </span><span class="string">'ini_set() failed before line '</span><span class="keyword">, </span><span class="default">__LINE__</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ini-set&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ini-set.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.info.php">PHP Options/Info Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.assert.php" title="assert">assert</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-get-process-title.php" title="cli_&#8203;get_&#8203;process_&#8203;title">cli_&#8203;get_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-set-process-title.php" title="cli_&#8203;set_&#8203;process_&#8203;title">cli_&#8203;set_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.dl.php" title="dl">dl</a>
                        </li>
                                                <li class="">
                            <a href="function.extension-loaded.php" title="extension_&#8203;loaded">extension_&#8203;loaded</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-collect-cycles.php" title="gc_&#8203;collect_&#8203;cycles">gc_&#8203;collect_&#8203;cycles</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-disable.php" title="gc_&#8203;disable">gc_&#8203;disable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enable.php" title="gc_&#8203;enable">gc_&#8203;enable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enabled.php" title="gc_&#8203;enabled">gc_&#8203;enabled</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-mem-caches.php" title="gc_&#8203;mem_&#8203;caches">gc_&#8203;mem_&#8203;caches</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-status.php" title="gc_&#8203;status">gc_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.get-cfg-var.php" title="get_&#8203;cfg_&#8203;var">get_&#8203;cfg_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.get-current-user.php" title="get_&#8203;current_&#8203;user">get_&#8203;current_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-constants.php" title="get_&#8203;defined_&#8203;constants">get_&#8203;defined_&#8203;constants</a>
                        </li>
                                                <li class="">
                            <a href="function.get-extension-funcs.php" title="get_&#8203;extension_&#8203;funcs">get_&#8203;extension_&#8203;funcs</a>
                        </li>
                                                <li class="">
                            <a href="function.get-include-path.php" title="get_&#8203;include_&#8203;path">get_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.get-included-files.php" title="get_&#8203;included_&#8203;files">get_&#8203;included_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-loaded-extensions.php" title="get_&#8203;loaded_&#8203;extensions">get_&#8203;loaded_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.get-required-files.php" title="get_&#8203;required_&#8203;files">get_&#8203;required_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resources.php" title="get_&#8203;resources">get_&#8203;resources</a>
                        </li>
                                                <li class="">
                            <a href="function.getenv.php" title="getenv">getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getlastmod.php" title="getlastmod">getlastmod</a>
                        </li>
                                                <li class="">
                            <a href="function.getmygid.php" title="getmygid">getmygid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyinode.php" title="getmyinode">getmyinode</a>
                        </li>
                                                <li class="">
                            <a href="function.getmypid.php" title="getmypid">getmypid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyuid.php" title="getmyuid">getmyuid</a>
                        </li>
                                                <li class="">
                            <a href="function.getopt.php" title="getopt">getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.getrusage.php" title="getrusage">getrusage</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-alter.php" title="ini_&#8203;alter">ini_&#8203;alter</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get.php" title="ini_&#8203;get">ini_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get-all.php" title="ini_&#8203;get_&#8203;all">ini_&#8203;get_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-parse-quantity.php" title="ini_&#8203;parse_&#8203;quantity">ini_&#8203;parse_&#8203;quantity</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-restore.php" title="ini_&#8203;restore">ini_&#8203;restore</a>
                        </li>
                                                <li class="current">
                            <a href="function.ini-set.php" title="ini_&#8203;set">ini_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-peak-usage.php" title="memory_&#8203;get_&#8203;peak_&#8203;usage">memory_&#8203;get_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-usage.php" title="memory_&#8203;get_&#8203;usage">memory_&#8203;get_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-reset-peak-usage.php" title="memory_&#8203;reset_&#8203;peak_&#8203;usage">memory_&#8203;reset_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-loaded-file.php" title="php_&#8203;ini_&#8203;loaded_&#8203;file">php_&#8203;ini_&#8203;loaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-scanned-files.php" title="php_&#8203;ini_&#8203;scanned_&#8203;files">php_&#8203;ini_&#8203;scanned_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.php-sapi-name.php" title="php_&#8203;sapi_&#8203;name">php_&#8203;sapi_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.php-uname.php" title="php_&#8203;uname">php_&#8203;uname</a>
                        </li>
                                                <li class="">
                            <a href="function.phpcredits.php" title="phpcredits">phpcredits</a>
                        </li>
                                                <li class="">
                            <a href="function.phpinfo.php" title="phpinfo">phpinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.phpversion.php" title="phpversion">phpversion</a>
                        </li>
                                                <li class="">
                            <a href="function.putenv.php" title="putenv">putenv</a>
                        </li>
                                                <li class="">
                            <a href="function.set-include-path.php" title="set_&#8203;include_&#8203;path">set_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.set-time-limit.php" title="set_&#8203;time_&#8203;limit">set_&#8203;time_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-get-temp-dir.php" title="sys_&#8203;get_&#8203;temp_&#8203;dir">sys_&#8203;get_&#8203;temp_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.version-compare.php" title="version_&#8203;compare">version_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-thread-id.php" title="zend_&#8203;thread_&#8203;id">zend_&#8203;thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-version.php" title="zend_&#8203;version">zend_&#8203;version</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.assert-options.php" title="assert_&#8203;options">assert_&#8203;options</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-gpc.php" title="get_&#8203;magic_&#8203;quotes_&#8203;gpc">get_&#8203;magic_&#8203;quotes_&#8203;gpc</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-runtime.php" title="get_&#8203;magic_&#8203;quotes_&#8203;runtime">get_&#8203;magic_&#8203;quotes_&#8203;runtime</a>
                    </li>
                                    <li class="">
                        <a href="function.restore-include-path.php" title="restore_&#8203;include_&#8203;path">restore_&#8203;include_&#8203;path</a>
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
