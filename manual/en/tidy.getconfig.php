<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: tidy::getConfig - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/tidy.getconfig.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/tidy.getconfig.php">
 <link rel="alternate" href="https://www.php.net/manual/en/tidy.getconfig.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.tidy.php">
 <link rel="prev" href="https://www.php.net/manual/en/tidy.props.errorbuffer.php">
 <link rel="next" href="https://www.php.net/manual/en/tidy.gethtmlver.php">

 <link rel="alternate" href="https://www.php.net/manual/en/tidy.getconfig.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/tidy.getconfig.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/tidy.getconfig.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/tidy.getconfig.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/tidy.getconfig.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/tidy.getconfig.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/tidy.getconfig.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/tidy.getconfig.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/tidy.getconfig.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/tidy.getconfig.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/tidy.getconfig.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get current Tidy configuration" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: tidy::getConfig - Manual" />
<meta name="twitter:description" content="Get current Tidy configuration" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: tidy::getConfig - Manual" />
<meta itemprop="description" content="Get current Tidy configuration" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get current Tidy configuration" />

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
        <a href="tidy.gethtmlver.php">
          tidy::getHtmlVer &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="tidy.props.errorbuffer.php">
          &laquo; tidy::$errorBuffer        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.tidy.php'>Tidy</a></li>      <li><a href='class.tidy.php'>tidy</a></li>      </ul>
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
            <option value='en/tidy.getconfig.php' selected="selected">English</option>
            <option value='de/tidy.getconfig.php'>German</option>
            <option value='es/tidy.getconfig.php'>Spanish</option>
            <option value='fr/tidy.getconfig.php'>French</option>
            <option value='it/tidy.getconfig.php'>Italian</option>
            <option value='ja/tidy.getconfig.php'>Japanese</option>
            <option value='pt_BR/tidy.getconfig.php'>Brazilian Portuguese</option>
            <option value='ru/tidy.getconfig.php'>Russian</option>
            <option value='tr/tidy.getconfig.php'>Turkish</option>
            <option value='uk/tidy.getconfig.php'>Ukrainian</option>
            <option value='zh/tidy.getconfig.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="tidy.getconfig" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">tidy::getConfig</h1>
  <h1 class="refname">tidy_get_config</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.7.0)</p><p class="refpurpose"><span class="refname">tidy::getConfig</span> -- <span class="refname">tidy_get_config</span> &mdash; <span class="dc-title">Get current Tidy configuration</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-tidy.getconfig-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>tidy::getConfig</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>tidy_get_config</strong></span>(<span class="methodparam"><span class="type"><a href="class.tidy.php" class="type tidy">tidy</a></span> <code class="parameter">$tidy</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Gets the list of the configuration options in use by the given tidy
   <code class="parameter">tidy</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-tidy.getconfig-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">tidy</code></dt>
     <dd>
      <p class="para">
       The <span class="classname"><a href="class.tidy.php" class="classname">Tidy</a></span> object.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-tidy.getconfig-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array of configuration options.
  </p>
  <p class="para">
   For an explanation about each option, visit <a href="http://api.html-tidy.org/#quick-reference" class="link external">&raquo;&nbsp;http://api.html-tidy.org/#quick-reference</a>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-tidy.getconfig-examples">
  <h3 class="title">Examples</h3>  
  <p class="para">
   <div class="example" id="example-4087">
    <p><strong>Example #1 <span class="function"><strong>tidy::getConfig()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/p&gt;'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$config </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'indent' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">,<br />                </span><span style="color: #DD0000">'output-xhtml' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">,<br />                </span><span style="color: #DD0000">'wrap' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">200</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$tidy </span><span style="color: #007700">= </span><span style="color: #0000BB">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$html</span><span style="color: #007700">, </span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConfig</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [indent-spaces] =&gt; 2
    [wrap] =&gt; 200
    [tab-size] =&gt; 8
    [char-encoding] =&gt; 1
    [input-encoding] =&gt; 3
    [output-encoding] =&gt; 1
    [newline] =&gt; 1
    [doctype-mode] =&gt; 1
    [doctype] =&gt;
    [repeated-attributes] =&gt; 1
    [alt-text] =&gt;
    [slide-style] =&gt;
    [error-file] =&gt;
    [output-file] =&gt;
    [write-back] =&gt;
    [markup] =&gt; 1
    [show-warnings] =&gt; 1
    [quiet] =&gt;
    [indent] =&gt; 1
    [hide-endtags] =&gt;
    [input-xml] =&gt;
    [output-xml] =&gt; 1
    [output-xhtml] =&gt; 1
    [output-html] =&gt;
    [add-xml-decl] =&gt;
    [uppercase-tags] =&gt;
    [uppercase-attributes] =&gt;
    [bare] =&gt;
    [clean] =&gt;
    [logical-emphasis] =&gt;
    [drop-proprietary-attributes] =&gt;
    [drop-font-tags] =&gt;
    [drop-empty-paras] =&gt; 1
    [fix-bad-comments] =&gt; 1
    [break-before-br] =&gt;
    [split] =&gt;
    [numeric-entities] =&gt;
    [quote-marks] =&gt;
    [quote-nbsp] =&gt; 1
    [quote-ampersand] =&gt; 1
    [wrap-attributes] =&gt;
    [wrap-script-literals] =&gt;
    [wrap-sections] =&gt; 1
    [wrap-asp] =&gt; 1
    [wrap-jste] =&gt; 1
    [wrap-php] =&gt; 1
    [fix-backslash] =&gt; 1
    [indent-attributes] =&gt;
    [assume-xml-procins] =&gt;
    [add-xml-space] =&gt;
    [enclose-text] =&gt;
    [enclose-block-text] =&gt;
    [keep-time] =&gt;
    [word-2000] =&gt;
    [tidy-mark] =&gt;
    [gnu-emacs] =&gt;
    [gnu-emacs-file] =&gt;
    [literal-attributes] =&gt;
    [show-body-only] =&gt;
    [fix-uri] =&gt; 1
    [lower-literals] =&gt; 1
    [hide-comments] =&gt;
    [indent-cdata] =&gt;
    [force-output] =&gt; 1
    [show-errors] =&gt; 6
    [ascii-chars] =&gt; 1
    [join-classes] =&gt;
    [join-styles] =&gt; 1
    [escape-cdata] =&gt;
    [language] =&gt;
    [ncr] =&gt; 1
    [output-bom] =&gt; 2
    [replace-color] =&gt;
    [css-prefix] =&gt;
    [new-inline-tags] =&gt;
    [new-blocklevel-tags] =&gt;
    [new-empty-tags] =&gt;
    [new-pre-tags] =&gt;
    [accessibility-check] =&gt; 0
    [vertical-space] =&gt;
    [punctuation-wrap] =&gt;
    [merge-divs] =&gt; 1
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-tidy.getconfig-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><strong>tidy_reset_config()</strong></span></li>
   <li><span class="function"><strong>tidy_save_config()</strong></span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/tidy/tidy/getconfig.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ftidy.getconfig%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=tidy.getconfig&amp;repo=en&amp;redirect=https://www.php.net/manual/en/tidy.getconfig.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124682">  <div class="votes">
    <div id="Vu124682">
    <a href="/manual/vote-note.php?id=124682&amp;page=tidy.getconfig&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124682">
    <a href="/manual/vote-note.php?id=124682&amp;page=tidy.getconfig&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124682" title="no votes...">
    0
    </div>
  </div>
  <a href="#124682" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124682"> &para;</a><div class="date" title="2020-02-05 07:07"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124682">
<div class="phpcode"><code><span class="html">Beware of deprecated config options.<br /><br />For example 'drop-font-tags' was deprecated and removed in newer versions of Tidy.<br /><br />The URL provided for options reference is wrong, the proper API reference with a list of options per Tidy version is here: <a href="http://api.html-tidy.org/" rel="nofollow" target="_blank">http://api.html-tidy.org/</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=tidy.getconfig&amp;repo=en&amp;redirect=https://www.php.net/manual/en/tidy.getconfig.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.tidy.php">tidy</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="tidy.body.php" title="body">body</a>
                        </li>
                                                <li class="">
                            <a href="tidy.cleanrepair.php" title="cleanRepair">cleanRepair</a>
                        </li>
                                                <li class="">
                            <a href="tidy.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="tidy.diagnose.php" title="diagnose">diagnose</a>
                        </li>
                                                <li class="">
                            <a href="tidy.props.errorbuffer.php" title="$errorBuffer">$errorBuffer</a>
                        </li>
                                                <li class="current">
                            <a href="tidy.getconfig.php" title="getConfig">getConfig</a>
                        </li>
                                                <li class="">
                            <a href="tidy.gethtmlver.php" title="getHtmlVer">getHtmlVer</a>
                        </li>
                                                <li class="">
                            <a href="tidy.getopt.php" title="getOpt">getOpt</a>
                        </li>
                                                <li class="">
                            <a href="tidy.getoptdoc.php" title="getOptDoc">getOptDoc</a>
                        </li>
                                                <li class="">
                            <a href="tidy.getrelease.php" title="getRelease">getRelease</a>
                        </li>
                                                <li class="">
                            <a href="tidy.getstatus.php" title="getStatus">getStatus</a>
                        </li>
                                                <li class="">
                            <a href="tidy.head.php" title="head">head</a>
                        </li>
                                                <li class="">
                            <a href="tidy.html.php" title="html">html</a>
                        </li>
                                                <li class="">
                            <a href="tidy.isxhtml.php" title="isXhtml">isXhtml</a>
                        </li>
                                                <li class="">
                            <a href="tidy.isxml.php" title="isXml">isXml</a>
                        </li>
                                                <li class="">
                            <a href="tidy.parsefile.php" title="parseFile">parseFile</a>
                        </li>
                                                <li class="">
                            <a href="tidy.parsestring.php" title="parseString">parseString</a>
                        </li>
                                                <li class="">
                            <a href="tidy.repairfile.php" title="repairFile">repairFile</a>
                        </li>
                                                <li class="">
                            <a href="tidy.repairstring.php" title="repairString">repairString</a>
                        </li>
                                                <li class="">
                            <a href="tidy.root.php" title="root">root</a>
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
