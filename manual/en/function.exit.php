<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: exit - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.exit.php">
 <link rel="shorturl" href="https://www.php.net/exit">
 <link rel="alternate" href="https://www.php.net/exit" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.misc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.eval.php">
 <link rel="next" href="https://www.php.net/manual/en/function.get-browser.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.exit.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.exit.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.exit.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.exit.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.exit.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.exit.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.exit.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.exit.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.exit.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.exit.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.exit.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Terminate the current script with a status code or message" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: exit - Manual" />
<meta name="twitter:description" content="Terminate the current script with a status code or message" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: exit - Manual" />
<meta itemprop="description" content="Terminate the current script with a status code or message" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Terminate the current script with a status code or message" />

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
        <a href="function.get-browser.php">
          get_browser &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.eval.php">
          &laquo; eval        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.misc.php'>Misc.</a></li>      <li><a href='ref.misc.php'>Misc. Functions</a></li>      </ul>
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
            <option value='en/function.exit.php' selected="selected">English</option>
            <option value='de/function.exit.php'>German</option>
            <option value='es/function.exit.php'>Spanish</option>
            <option value='fr/function.exit.php'>French</option>
            <option value='it/function.exit.php'>Italian</option>
            <option value='ja/function.exit.php'>Japanese</option>
            <option value='pt_BR/function.exit.php'>Brazilian Portuguese</option>
            <option value='ru/function.exit.php'>Russian</option>
            <option value='tr/function.exit.php'>Turkish</option>
            <option value='uk/function.exit.php'>Ukrainian</option>
            <option value='zh/function.exit.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.exit" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">exit</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">exit</span> &mdash; <span class="dc-title">Terminate the current script with a status code or message</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.exit-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>exit</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$status</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.never.php" class="type never">never</a></span></div>

  <p class="simpara">
   Terminates execution of the script.
   <a href="function.register-shutdown-function.php" class="link">Shutdown functions</a>
   and <a href="language.oop5.decon.php#language.oop5.decon.destructor" class="link">object destructors</a>
   will always be executed even if <span class="function"><strong>exit()</strong></span> is called.
   However, <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> blocks are never executed.
  </p>
  <p class="simpara">
   An exit code of <code class="literal">0</code> is used to indicate that the program
   succeeded in its tasks.
   Any other value indicates some sort of error occurred during execution.
  </p>
  <p class="simpara">
   <span class="function"><strong>exit()</strong></span> is a special function,
   because it has a dedicated token in the parser,
   as such it can be used like a statement (i.e. without parentheses) to
   terminate the script with the default status code.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="simpara">
    It is not possible to disable, or create a namespaced function shadowing
    the global <span class="function"><strong>exit()</strong></span> function.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.exit-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">status</code></dt>
    <dd>
     <span class="simpara">
      If <code class="parameter">status</code> is a string,
      this function prints the <code class="parameter">status</code> just before exiting.
      The exit code returned by PHP is <code class="literal">0</code>.
     </span>
     <p class="para">
      If <code class="parameter">status</code> is an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>,
      the exit code returned by PHP will be <code class="parameter">status</code>.
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Exit codes should be in the range <code class="literal">0</code> to <code class="literal">254</code>,
        the exit code <code class="literal">255</code> is reserved by PHP and should not be used.
       </span>
      </p></blockquote>
     </p>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="simpara">
       Prior to PHP 8.4.0, <span class="function"><strong>exit()</strong></span> did not follow PHP&#039;s standard
       <a href="language.types.type-juggling.php#language.types.type-juggling.function" class="link">type juggling semantics</a>,
       nor respect the
       <a href="language.types.declarations.php#language.types.declarations.strict" class="link"><code class="literal">strict_types</code></a>
       declare.
      </p>
      <p class="simpara">
       Any value not of type <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> was cast to <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
       including <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> and <span class="type"><a href="language.types.array.php" class="type array">array</a></span> values.
       As of PHP 8.4.0, it follows the usual type juggling semantics and throws a
       <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span> on invalid values.
      </p>
     </div>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.exit-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="simpara">
   As this terminates the PHP script, no value is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.exit-changelog">
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
       <span class="function"><strong>exit()</strong></span> is now a proper function,
       therefore it follows the usual
       <a href="language.types.type-juggling.php#language.types.type-juggling.function" class="link">type juggling semantics</a>
       is affected by the
       <a href="language.types.declarations.php#language.types.declarations.strict" class="link"><code class="literal">strict_types</code></a>
       declare, can be called with named arguments, and be a
       <a href="functions.variable-functions.php" class="link">variable functions</a>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.exit-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-3744">
   <p><strong>Example #1 Basic <span class="function"><strong>exit()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// exit program normally<br /></span><span style="color: #007700">exit();<br />exit(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// exit with an error code<br /></span><span style="color: #007700">exit(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-3745">
   <p><strong>Example #2 <span class="function"><strong>exit()</strong></span> example with a <span class="type"><a href="language.types.string.php" class="type string">string</a></span></strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">'/path/to/data-file'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$file </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">)<br />    or exit(</span><span style="color: #DD0000">"unable to open file (</span><span style="color: #0000BB">$filename</span><span style="color: #DD0000">)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-3746">
   <p><strong>Example #3 Shutdown functions and destructors run regardless</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__destruct</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">'Destruct: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">__METHOD__ </span><span style="color: #007700">. </span><span style="color: #DD0000">'()' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />    }<br />}<br /><br />function </span><span style="color: #0000BB">shutdown</span><span style="color: #007700">()<br />{<br />    echo </span><span style="color: #DD0000">'Shutdown: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">__FUNCTION__ </span><span style="color: #007700">. </span><span style="color: #DD0000">'()' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">register_shutdown_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'shutdown'</span><span style="color: #007700">);<br /><br />exit();<br />echo </span><span style="color: #DD0000">'This will not be output.'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Shutdown: shutdown()
Destruct: Foo::__destruct()</pre>
</div>
   </div>
  </div>
  <div class="example" id="example-3747">
   <p><strong>Example #4 <span class="function"><strong>exit()</strong></span> as a statement</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// exit program normally with exit code 0<br /></span><span style="color: #007700">exit;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-function.exit-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    Prior to PHP 8.4.0, <span class="function"><strong>exit()</strong></span> was a language construct
    and not a function, therefore it was not possible to call it using
    <a href="functions.variable-functions.php" class="link">variable functions</a>,
    or <a href="functions.arguments.php#functions.named-arguments" class="link">named arguments</a>.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.exit-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.register-shutdown-function.php" class="function" rel="rdfs-seeAlso">register_shutdown_function()</a> - Register a function for execution on shutdown</span></li>
   <li><a href="function.register-shutdown-function.php" class="link">Shutdown functions</a></li>
   <li><a href="language.oop5.decon.php#language.oop5.decon.destructor" class="link">object destructors</a></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/misc/functions/exit.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.exit%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.exit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.exit.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100731">  <div class="votes">
    <div id="Vu100731">
    <a href="/manual/vote-note.php?id=100731&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100731">
    <a href="/manual/vote-note.php?id=100731&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100731" title="71% like this...">
    40
    </div>
  </div>
  <a href="#100731" class="name">
  <strong class="user"><em>dexen dot devries at gmail dot com</em></strong></a><a class="genanchor" href="#100731"> &para;</a><div class="date" title="2010-11-03 05:54"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100731">
<div class="phpcode"><code><span class="html">If you want to avoid calling exit() in FastCGI as per the comments below, but really, positively want to exit cleanly from nested function call or include, consider doing it the Python way:<br /><br />define an exception named `SystemExit', throw it instead of calling exit() and catch it in index.php with an empty handler to finish script execution cleanly.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// file: index.php<br /></span><span class="keyword">class </span><span class="default">SystemExit </span><span class="keyword">extends </span><span class="default">Exception </span><span class="keyword">{}<br />try {<br />   </span><span class="comment">/* code code */<br /></span><span class="keyword">}<br />catch (</span><span class="default">SystemExit $e</span><span class="keyword">) { </span><span class="comment">/* do nothing */ </span><span class="keyword">}<br /></span><span class="comment">// end of file: index.php<br /><br />// some deeply nested function or .php file    <br /><br /></span><span class="keyword">if (</span><span class="default">SOME_EXIT_CONDITION</span><span class="keyword">)<br />   throw new </span><span class="default">SystemExit</span><span class="keyword">(); </span><span class="comment">// instead of exit()<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90713">  <div class="votes">
    <div id="Vu90713">
    <a href="/manual/vote-note.php?id=90713&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90713">
    <a href="/manual/vote-note.php?id=90713&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90713" title="67% like this...">
    34
    </div>
  </div>
  <a href="#90713" class="name">
  <strong class="user"><em>albert at removethis dot peschar dot net</em></strong></a><a class="genanchor" href="#90713"> &para;</a><div class="date" title="2009-05-05 11:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90713">
<div class="phpcode"><code><span class="html">jbezorg at gmail proposed the following:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SCRIPT_FILENAME'</span><span class="keyword">] == </span><span class="default">__FILE__ </span><span class="keyword">)<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: /'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />After sending the `Location:' header PHP _will_ continue parsing, and all code below the header() call will still be executed.  So instead use:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SCRIPT_FILENAME'</span><span class="keyword">] == </span><span class="default">__FILE__</span><span class="keyword">)<br />{<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: /'</span><span class="keyword">);<br />  exit;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117146">  <div class="votes">
    <div id="Vu117146">
    <a href="/manual/vote-note.php?id=117146&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117146">
    <a href="/manual/vote-note.php?id=117146&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117146" title="71% like this...">
    21
    </div>
  </div>
  <a href="#117146" class="name">
  <strong class="user"><em>theonenkl at gmail dot com</em></strong></a><a class="genanchor" href="#117146"> &para;</a><div class="date" title="2015-04-21 03:33"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117146">
<div class="phpcode"><code><span class="html">A side-note for the use of exit with finally: if you exit somewhere in a try block, the finally won't be executed. Could not sound obvious: for instance in Java you never issue an exit, at least a return in your controller; in PHP instead you could find yourself exiting from a controller method (e.g. in case you issue a redirect).<br /><br />Here follows the POC:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">"testing finally wit exit\n"</span><span class="keyword">;<br /><br />try {<br />    echo </span><span class="string">"In try, exiting\n"</span><span class="keyword">;<br /><br />    exit;<br />} catch(</span><span class="default">Exception $e</span><span class="keyword">) {<br />    echo </span><span class="string">"catched\n"</span><span class="keyword">;<br />} finally {<br />    echo </span><span class="string">"in finally\n"</span><span class="keyword">;<br />}<br /><br />echo </span><span class="string">"In the end\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />This will print:<br /><br />testing finally wit exit<br />In try, exiting</span></code></div>
  </div>
 </div>
  <div class="note" id="100100">  <div class="votes">
    <div id="Vu100100">
    <a href="/manual/vote-note.php?id=100100&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100100">
    <a href="/manual/vote-note.php?id=100100&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100100" title="62% like this...">
    12
    </div>
  </div>
  <a href="#100100" class="name">
  <strong class="user"><em>vincent dot laag at gmail dot com</em></strong></a><a class="genanchor" href="#100100"> &para;</a><div class="date" title="2010-09-24 12:51"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100100">
<div class="phpcode"><code><span class="html">Don't use the  exit() function in the auto prepend file with fastcgi (linux/bsd os).<br />It has the effect of leaving opened files with for result at least a nice  "Too many open files  ..." error.</span></code></div>
  </div>
 </div>
  <div class="note" id="35203">  <div class="votes">
    <div id="Vu35203">
    <a href="/manual/vote-note.php?id=35203&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35203">
    <a href="/manual/vote-note.php?id=35203&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35203" title="62% like this...">
    7
    </div>
  </div>
  <a href="#35203" class="name">
  <strong class="user"><em>emils at tvnet dot lv</em></strong></a><a class="genanchor" href="#35203"> &para;</a><div class="date" title="2003-08-23 08:14"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35203">
<div class="phpcode"><code><span class="html">Note, that using exit() will explicitly cause Roxen webserver to die, if PHP is used as Roxen SAPI module. There is no known workaround for that, except not to use exit(). CGI versions of PHP are not affected.</span></code></div>
  </div>
 </div>
  <div class="note" id="127945">  <div class="votes">
    <div id="Vu127945">
    <a href="/manual/vote-note.php?id=127945&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127945">
    <a href="/manual/vote-note.php?id=127945&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127945" title="62% like this...">
    2
    </div>
  </div>
  <a href="#127945" class="name">
  <strong class="user"><em>tianyiw at vip dot qq dot com</em></strong></a><a class="genanchor" href="#127945"> &para;</a><div class="date" title="2022-11-17 10:59"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127945">
<div class="phpcode"><code><span class="html">These are the standard error codes in Linux or UNIX.<br /><br />1 - Catchall for general errors<br />2 - Misuse of shell builtins (according to Bash documentation)<br />126 - Command invoked cannot execute<br />127 - “command not found”<br />128 - Invalid argument to exit<br />128+n - Fatal error signal “n”<br />130 - Script terminated by Control-C<br />255\* - Exit status out of range</span></code></div>
  </div>
 </div>
  <div class="note" id="86620">  <div class="votes">
    <div id="Vu86620">
    <a href="/manual/vote-note.php?id=86620&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86620">
    <a href="/manual/vote-note.php?id=86620&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86620" title="55% like this...">
    9
    </div>
  </div>
  <a href="#86620" class="name">
  <strong class="user"><em>void a t informance d o t info</em></strong></a><a class="genanchor" href="#86620"> &para;</a><div class="date" title="2008-10-26 02:11"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86620">
<div class="phpcode"><code><span class="html">To rich dot lovely at klikzltd dot co dot uk:<br /><br />Using a "@" before header() to suppress its error, and relying on the "headers already sent" error seems to me a very bad idea while building any serious website.<br /><br />This is *not* a clean way to prevent a file from being called directly. At least this is not a secure method, as you rely on the presence of an exception sent by the parser at runtime.<br /><br />I recommend using a more common way as defining a constant or assigning a variable with any value, and checking for its presence in the included script, like:<br /><br />in index.php:<br /><span class="default">&lt;?php<br />define </span><span class="keyword">(</span><span class="string">'INDEX'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />in your included file:<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'INDEX'</span><span class="keyword">)) {<br />   die(</span><span class="string">'You cannot call this script directly !'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />BR.<br /><br />Ninj</span></code></div>
  </div>
 </div>
  <div class="note" id="122462">  <div class="votes">
    <div id="Vu122462">
    <a href="/manual/vote-note.php?id=122462&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122462">
    <a href="/manual/vote-note.php?id=122462&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122462" title="60% like this...">
    3
    </div>
  </div>
  <a href="#122462" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#122462"> &para;</a><div class="date" title="2018-03-01 10:57"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122462">
<div class="phpcode"><code><span class="html">Calling 'exit' will bypass the auto_append_file option.<br />On some free hosting this risks you getting removed, as they may be using for ads and analytics.<br /><br />So be a bit careful if using this on the most common output branch.</span></code></div>
  </div>
 </div>
  <div class="note" id="124648">  <div class="votes">
    <div id="Vu124648">
    <a href="/manual/vote-note.php?id=124648&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124648">
    <a href="/manual/vote-note.php?id=124648&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124648" title="57% like this...">
    3
    </div>
  </div>
  <a href="#124648" class="name">
  <strong class="user"><em>jean dot claveau at gmail dot com</em></strong></a><a class="genanchor" href="#124648"> &para;</a><div class="date" title="2020-01-25 10:56"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124648">
<div class="phpcode"><code><span class="html">Beware if you enabled uopz extension, it disables exit / die() by default. They are just "skipped".<br /><br /><a href="https://www.php.net/manual/en/function.uopz-allow-exit.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.uopz-allow-exit.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="18120">  <div class="votes">
    <div id="Vu18120">
    <a href="/manual/vote-note.php?id=18120&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18120">
    <a href="/manual/vote-note.php?id=18120&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18120" title="56% like this...">
    5
    </div>
  </div>
  <a href="#18120" class="name">
  <strong class="user"><em>devinemke at devinemke dot com</em></strong></a><a class="genanchor" href="#18120"> &para;</a><div class="date" title="2002-01-11 12:38"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18120">
<div class="phpcode"><code><span class="html">If you are using templates with numerous includes then exit() will end you script and your template will not complete (no &lt;/table&gt;, &lt;/body&gt;, &lt;/html&gt; etc...).  Rather than having complex nested conditional logic within your content, just create a "footer.php" file that closes all of your HTML and if you want to exit out of a script just include() the footer before you exit().<br /><br />for example:<br /><br />include ('header.php');<br />blah blah blah <br />if (!$mysql_connect) {<br />echo "unable to connect";<br />include ('footer.php');<br />exit;<br />}<br />blah blah blah<br />include ('footer.php');</span></code></div>
  </div>
 </div>
  <div class="note" id="126175">  <div class="votes">
    <div id="Vu126175">
    <a href="/manual/vote-note.php?id=126175&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126175">
    <a href="/manual/vote-note.php?id=126175&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126175" title="57% like this...">
    1
    </div>
  </div>
  <a href="#126175" class="name">
  <strong class="user"><em>bill dot gates at hotmail dot com</em></strong></a><a class="genanchor" href="#126175"> &para;</a><div class="date" title="2021-06-16 01:43"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126175">
<div class="phpcode"><code><span class="html">Be noticed about uopz (User Operations for Zend) extension of PHP. It disables (prevents) halting of PHP scripts (both FPM and CLI) on calling `exit()` and `die()` by default just after enabling the extension. Therefore your script will continue to execute.<br /><br />Details: <a href="https://www.php.net/manual/en/uopz.configuration.php#ini.uopz.exit" rel="nofollow" target="_blank">https://www.php.net/manual/en/uopz.configuration.php#ini.uopz.exit</a></span></code></div>
  </div>
 </div>
  <div class="note" id="108225">  <div class="votes">
    <div id="Vu108225">
    <a href="/manual/vote-note.php?id=108225&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108225">
    <a href="/manual/vote-note.php?id=108225&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108225" title="53% like this...">
    4
    </div>
  </div>
  <a href="#108225" class="name">
  <strong class="user"><em>alexyam at live dot com</em></strong></a><a class="genanchor" href="#108225"> &para;</a><div class="date" title="2012-04-09 04:19"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108225">
<div class="phpcode"><code><span class="html">When using php-fpm, fastcgi_finish_request() should be used instead of register_shutdown_function() and exit()<br /><br />For example, under nginx and php-fpm 5.3+, this will make browsers wait 10 seconds to show output:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">echo </span><span class="string">"You have to wait 10 seconds to see this.&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'shutdown'</span><span class="keyword">);<br />    exit;<br />    function </span><span class="default">shutdown</span><span class="keyword">(){<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">);<br />        echo </span><span class="string">"Because exit() doesn't terminate php-fpm calls immediately.&lt;br&gt;"</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />This doesn't:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">echo </span><span class="string">"You can see this from the browser immediately.&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">fastcgi_finish_request</span><span class="keyword">();<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">);<br />    echo </span><span class="string">"You can't see this form the browser."</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117838">  <div class="votes">
    <div id="Vu117838">
    <a href="/manual/vote-note.php?id=117838&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117838">
    <a href="/manual/vote-note.php?id=117838&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117838" title="53% like this...">
    2
    </div>
  </div>
  <a href="#117838" class="name">
  <strong class="user"><em>m dot libergolis at gmail dot com</em></strong></a><a class="genanchor" href="#117838"> &para;</a><div class="date" title="2015-08-18 06:44"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117838">
<div class="phpcode"><code><span class="html">In addition to "void a t informance d o t info", here's a one-liner that requires no constant:<br /><br /><span class="default">&lt;?php basename</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_SELF'</span><span class="keyword">]) == </span><span class="default">basename</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">) &amp;&amp; die(</span><span class="string">'Thou shall not pass!'</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />Placing it at the beginning of a PHP file will prevent direct access to the script.<br /><br />To redirect to / instead of dying:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">basename</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_SELF'</span><span class="keyword">]) == </span><span class="default">basename</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">)) {<br />    if (</span><span class="default">ob_get_contents</span><span class="keyword">()) </span><span class="default">ob_clean</span><span class="keyword">(); </span><span class="comment">// ob_get_contents() even works without active output buffering<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: /'</span><span class="keyword">);<br />    die;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Doing the same in a one-liner:<br /><br /><span class="default">&lt;?php basename</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_SELF'</span><span class="keyword">]) == </span><span class="default">basename</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">) &amp;&amp; (!</span><span class="default">ob_get_contents</span><span class="keyword">() || </span><span class="default">ob_clean</span><span class="keyword">()) &amp;&amp; </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: /'</span><span class="keyword">) &amp;&amp; die; </span><span class="default">?&gt;<br /></span><br />A note to security: Even though $_SERVER['PHP_SELF'] comes from the user, it's safe to assume its validity, as the "manipulation" takes place _before_ the actual file execution, meaning that the string _must_ have been valid enough to execute the file. Also, basename() is binary safe, so you can safely rely on this function.</span></code></div>
  </div>
 </div>
  <div class="note" id="121619">  <div class="votes">
    <div id="Vu121619">
    <a href="/manual/vote-note.php?id=121619&amp;page=function.exit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121619">
    <a href="/manual/vote-note.php?id=121619&amp;page=function.exit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121619" title="52% like this...">
    1
    </div>
  </div>
  <a href="#121619" class="name">
  <strong class="user"><em>sunfundev at gmail dot com</em></strong></a><a class="genanchor" href="#121619"> &para;</a><div class="date" title="2017-09-07 04:02"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121619">
<div class="phpcode"><code><span class="html">&gt;&gt; Shutdown functions and object destructors will always be executed even if exit is called.<br /><br />It is false if you call exit into desctructor.<br /><br />Normal exit:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A<br /></span><span class="keyword">{<br />    public function </span><span class="default">__destruct</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"bye A\n"</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">B<br /></span><span class="keyword">{<br />    public function </span><span class="default">__destruct</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"bye B\n"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">;<br />exit;<br /><br /></span><span class="comment">// Output:<br />// bye B<br />// bye A<br /></span><span class="default">?&gt;<br /></span><br />// Exit into desctructor:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A<br /></span><span class="keyword">{<br />    public function </span><span class="default">__destruct</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"bye A\n"</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">B<br /></span><span class="keyword">{<br />    public function </span><span class="default">__destruct</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"bye B\n"</span><span class="keyword">;<br />        exit;<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">;<br /><br /></span><span class="comment">// Output:<br />// bye B<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.exit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.exit.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.misc.php">Misc. Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.connection-aborted.php" title="connection_&#8203;aborted">connection_&#8203;aborted</a>
                        </li>
                                                <li class="">
                            <a href="function.connection-status.php" title="connection_&#8203;status">connection_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.constant.php" title="constant">constant</a>
                        </li>
                                                <li class="">
                            <a href="function.define.php" title="define">define</a>
                        </li>
                                                <li class="">
                            <a href="function.defined.php" title="defined">defined</a>
                        </li>
                                                <li class="">
                            <a href="function.die.php" title="die">die</a>
                        </li>
                                                <li class="">
                            <a href="function.eval.php" title="eval">eval</a>
                        </li>
                                                <li class="current">
                            <a href="function.exit.php" title="exit">exit</a>
                        </li>
                                                <li class="">
                            <a href="function.get-browser.php" title="get_&#8203;browser">get_&#8203;browser</a>
                        </li>
                                                <li class="">
                            <a href="function.halt-compiler.php" title="_&#8203;_&#8203;halt_&#8203;compiler">_&#8203;_&#8203;halt_&#8203;compiler</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-file.php" title="highlight_&#8203;file">highlight_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-string.php" title="highlight_&#8203;string">highlight_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.hrtime.php" title="hrtime">hrtime</a>
                        </li>
                                                <li class="">
                            <a href="function.ignore-user-abort.php" title="ignore_&#8203;user_&#8203;abort">ignore_&#8203;user_&#8203;abort</a>
                        </li>
                                                <li class="">
                            <a href="function.pack.php" title="pack">pack</a>
                        </li>
                                                <li class="">
                            <a href="function.php-strip-whitespace.php" title="php_&#8203;strip_&#8203;whitespace">php_&#8203;strip_&#8203;whitespace</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-conv.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;conv">sapi_&#8203;windows_&#8203;cp_&#8203;conv</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-get.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;get">sapi_&#8203;windows_&#8203;cp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-is-utf8.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8">sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-set.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;set">sapi_&#8203;windows_&#8203;cp_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-generate-ctrl-event.php" title="sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event">sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-set-ctrl-handler.php" title="sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler">sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-vt100-support.php" title="sapi_&#8203;windows_&#8203;vt100_&#8203;support">sapi_&#8203;windows_&#8203;vt100_&#8203;support</a>
                        </li>
                                                <li class="">
                            <a href="function.show-source.php" title="show_&#8203;source">show_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.sleep.php" title="sleep">sleep</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-getloadavg.php" title="sys_&#8203;getloadavg">sys_&#8203;getloadavg</a>
                        </li>
                                                <li class="">
                            <a href="function.time-nanosleep.php" title="time_&#8203;nanosleep">time_&#8203;nanosleep</a>
                        </li>
                                                <li class="">
                            <a href="function.time-sleep-until.php" title="time_&#8203;sleep_&#8203;until">time_&#8203;sleep_&#8203;until</a>
                        </li>
                                                <li class="">
                            <a href="function.uniqid.php" title="uniqid">uniqid</a>
                        </li>
                                                <li class="">
                            <a href="function.unpack.php" title="unpack">unpack</a>
                        </li>
                                                <li class="">
                            <a href="function.usleep.php" title="usleep">usleep</a>
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
