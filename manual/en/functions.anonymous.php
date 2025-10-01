<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Anonymous functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/functions.anonymous.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/functions.anonymous.php">
 <link rel="alternate" href="https://www.php.net/manual/en/functions.anonymous.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.functions.php">
 <link rel="prev" href="https://www.php.net/manual/en/functions.internal.php">
 <link rel="next" href="https://www.php.net/manual/en/functions.arrow.php">

 <link rel="alternate" href="https://www.php.net/manual/en/functions.anonymous.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/functions.anonymous.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/functions.anonymous.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/functions.anonymous.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/functions.anonymous.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/functions.anonymous.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/functions.anonymous.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/functions.anonymous.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/functions.anonymous.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/functions.anonymous.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/functions.anonymous.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Anonymous functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Anonymous functions - Manual" />
<meta name="twitter:description" content="Anonymous functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Anonymous functions - Manual" />
<meta itemprop="description" content="Anonymous functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Anonymous functions" />

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
        <a href="functions.arrow.php">
          Arrow Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="functions.internal.php">
          &laquo; Internal (built-in) functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.functions.php'>Functions</a></li>      </ul>
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
            <option value='en/functions.anonymous.php' selected="selected">English</option>
            <option value='de/functions.anonymous.php'>German</option>
            <option value='es/functions.anonymous.php'>Spanish</option>
            <option value='fr/functions.anonymous.php'>French</option>
            <option value='it/functions.anonymous.php'>Italian</option>
            <option value='ja/functions.anonymous.php'>Japanese</option>
            <option value='pt_BR/functions.anonymous.php'>Brazilian Portuguese</option>
            <option value='ru/functions.anonymous.php'>Russian</option>
            <option value='tr/functions.anonymous.php'>Turkish</option>
            <option value='uk/functions.anonymous.php'>Ukrainian</option>
            <option value='zh/functions.anonymous.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="functions.anonymous" class="sect1">
   <h2 class="title">Anonymous functions</h2>

   <p class="simpara">
    Anonymous functions, also known as <code class="literal">closures</code>, allow the
    creation of functions which have no specified name. They are most useful as
    the value of <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>
    parameters, but they have many other uses.
   </p>
   <p class="simpara">
    Anonymous functions are implemented using the <a href="class.closure.php" class="link">
    <span class="classname"><a href="class.closure.php" class="classname">Closure</a></span></a> class.
   </p>

   <div class="example" id="example-238">
    <p><strong>Example #1 Anonymous function example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">preg_replace_callback</span><span style="color: #007700">(</span><span style="color: #DD0000">'~-([a-z])~'</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$match</span><span style="color: #007700">) {<br />    return </span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />}, </span><span style="color: #DD0000">'hello-world'</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// outputs helloWorld<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="simpara">
    Closures can also be used as the values of variables; PHP automatically 
    converts such expressions into instances of the
    <span class="classname"><a href="class.closure.php" class="classname">Closure</a></span> internal class. Assigning a closure to a
    variable uses the same syntax as any other assignment, including the
    trailing semicolon:
   </p>

   <div class="example" id="example-239">
    <p><strong>Example #2 Anonymous function variable assignment example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$greet </span><span style="color: #007700">= function(</span><span style="color: #0000BB">$name</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hello %s\r\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />};<br /><br /></span><span style="color: #0000BB">$greet</span><span style="color: #007700">(</span><span style="color: #DD0000">'World'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$greet</span><span style="color: #007700">(</span><span style="color: #DD0000">'PHP'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   
   <p class="simpara">
    Closures may also inherit variables from the parent scope. Any such
    variables must be passed to the <code class="literal">use</code> language construct.
    As of PHP 7.1, these variables must not include <a href="language.variables.predefined.php" class="link">superglobals</a>,
    <var class="varname">$this</var>, or variables with the same name as a parameter.
    A return type declaration of the function has to be placed
    <em>after</em> the <code class="literal">use</code> clause.
   </p>

   <div class="example" id="example-240">
    <p><strong>Example #3 Inheriting variables from the parent scope</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$message </span><span style="color: #007700">= </span><span style="color: #DD0000">'hello'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// No "use"<br /></span><span style="color: #0000BB">$example </span><span style="color: #007700">= function () {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />};<br /></span><span style="color: #0000BB">$example</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Inherit $message<br /></span><span style="color: #0000BB">$example </span><span style="color: #007700">= function () use (</span><span style="color: #0000BB">$message</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />};<br /></span><span style="color: #0000BB">$example</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Inherited variable's value is from when the function<br />// is defined, not when called<br /></span><span style="color: #0000BB">$message </span><span style="color: #007700">= </span><span style="color: #DD0000">'world'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$example</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Reset message<br /></span><span style="color: #0000BB">$message </span><span style="color: #007700">= </span><span style="color: #DD0000">'hello'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Inherit by-reference<br /></span><span style="color: #0000BB">$example </span><span style="color: #007700">= function () use (&amp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />};<br /></span><span style="color: #0000BB">$example</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// The changed value in the parent scope<br />// is reflected inside the function call<br /></span><span style="color: #0000BB">$message </span><span style="color: #007700">= </span><span style="color: #DD0000">'world'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$example</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Closures can also accept regular arguments<br /></span><span style="color: #0000BB">$example </span><span style="color: #007700">= function (</span><span style="color: #0000BB">$arg</span><span style="color: #007700">) use (</span><span style="color: #0000BB">$message</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$arg </span><span style="color: #007700">. </span><span style="color: #DD0000">' ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />};<br /></span><span style="color: #0000BB">$example</span><span style="color: #007700">(</span><span style="color: #DD0000">"hello"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Return type declaration comes after the use clause<br /></span><span style="color: #0000BB">$example </span><span style="color: #007700">= function () use (</span><span style="color: #0000BB">$message</span><span style="color: #007700">): </span><span style="color: #0000BB">string </span><span style="color: #007700">{<br />    return </span><span style="color: #DD0000">"hello </span><span style="color: #0000BB">$message</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />};<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$example</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
Notice: Undefined variable: message in /example.php on line 6
NULL
string(5) &quot;hello&quot;
string(5) &quot;hello&quot;
string(5) &quot;hello&quot;
string(5) &quot;world&quot;
string(11) &quot;hello world&quot;
string(11) &quot;hello world&quot;
</pre></div>
    </div>
   </div>

   <p class="para">
    As of PHP 8.0.0, the list of scope-inherited variables may include a trailing
    comma, which will be ignored.
   </p>
   <p class="simpara">
    Inheriting variables from the parent scope is <em>not</em> 
    the same as using global variables. 
    Global variables exist in the global scope, which is the same no
    matter what function is executing. The parent scope of a closure is the
    function in which the closure was declared (not necessarily the function it
    was called from). See the following example:
   </p>

   <div class="example" id="example-241">
    <p><strong>Example #4 Closures and scoping</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// A basic shopping cart which contains a list of added products<br />// and the quantity of each product. Includes a method which<br />// calculates the total price of the items in the cart using a<br />// closure as a callback.<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Cart<br /></span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">PRICE_BUTTER  </span><span style="color: #007700">= </span><span style="color: #0000BB">1.00</span><span style="color: #007700">;<br />    const </span><span style="color: #0000BB">PRICE_MILK    </span><span style="color: #007700">= </span><span style="color: #0000BB">3.00</span><span style="color: #007700">;<br />    const </span><span style="color: #0000BB">PRICE_EGGS    </span><span style="color: #007700">= </span><span style="color: #0000BB">6.95</span><span style="color: #007700">;<br /><br />    protected </span><span style="color: #0000BB">$products </span><span style="color: #007700">= array();<br />    <br />    public function </span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$product</span><span style="color: #007700">, </span><span style="color: #0000BB">$quantity</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">products</span><span style="color: #007700">[</span><span style="color: #0000BB">$product</span><span style="color: #007700">] = </span><span style="color: #0000BB">$quantity</span><span style="color: #007700">;<br />    }<br />    <br />    public function </span><span style="color: #0000BB">getQuantity</span><span style="color: #007700">(</span><span style="color: #0000BB">$product</span><span style="color: #007700">)<br />    {<br />        return isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">products</span><span style="color: #007700">[</span><span style="color: #0000BB">$product</span><span style="color: #007700">]) ? </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">products</span><span style="color: #007700">[</span><span style="color: #0000BB">$product</span><span style="color: #007700">] :<br />               </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">;<br />    }<br />    <br />    public function </span><span style="color: #0000BB">getTotal</span><span style="color: #007700">(</span><span style="color: #0000BB">$tax</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$total </span><span style="color: #007700">= </span><span style="color: #0000BB">0.00</span><span style="color: #007700">;<br />        <br />        </span><span style="color: #0000BB">$callback </span><span style="color: #007700">=<br />            function (</span><span style="color: #0000BB">$quantity</span><span style="color: #007700">, </span><span style="color: #0000BB">$product</span><span style="color: #007700">) use (</span><span style="color: #0000BB">$tax</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">$total</span><span style="color: #007700">)<br />            {<br />                </span><span style="color: #0000BB">$pricePerItem </span><span style="color: #007700">= </span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__ </span><span style="color: #007700">. </span><span style="color: #DD0000">"::PRICE_" </span><span style="color: #007700">.<br />                    </span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$product</span><span style="color: #007700">));<br />                </span><span style="color: #0000BB">$total </span><span style="color: #007700">+= (</span><span style="color: #0000BB">$pricePerItem </span><span style="color: #007700">* </span><span style="color: #0000BB">$quantity</span><span style="color: #007700">) * (</span><span style="color: #0000BB">$tax </span><span style="color: #007700">+ </span><span style="color: #0000BB">1.0</span><span style="color: #007700">);<br />            };<br />        <br />        </span><span style="color: #0000BB">array_walk</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">products</span><span style="color: #007700">, </span><span style="color: #0000BB">$callback</span><span style="color: #007700">);<br />        return </span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$total</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$my_cart </span><span style="color: #007700">= new </span><span style="color: #0000BB">Cart</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Add some items to the cart<br /></span><span style="color: #0000BB">$my_cart</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #DD0000">'butter'</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$my_cart</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #DD0000">'milk'</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$my_cart</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #DD0000">'eggs'</span><span style="color: #007700">, </span><span style="color: #0000BB">6</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Print the total with a 5% sales tax.<br /></span><span style="color: #007700">print </span><span style="color: #0000BB">$my_cart</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTotal</span><span style="color: #007700">(</span><span style="color: #0000BB">0.05</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// The result is 54.29<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <div class="example" id="example-242">
    <p><strong>Example #5 Automatic binding of <code class="literal">$this</code></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Test<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">testing</span><span style="color: #007700">()<br />    {<br />        return function() {<br />            </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />        };<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$object </span><span style="color: #007700">= new </span><span style="color: #0000BB">Test</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$function </span><span style="color: #007700">= </span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">testing</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$function</span><span style="color: #007700">();<br />    <br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
object(Test)#1 (0) {
}
</pre></div>
    </div>
   </div>

   <p class="para">
    When declared in the context of a class, the current class is
    automatically bound to it, making <code class="literal">$this</code> available
    inside of the function&#039;s scope. If this automatic binding of the current
    class is not wanted, then
    <a href="functions.anonymous.php#functions.anonymous-functions.static" class="link">static anonymous
    functions</a> may be used instead.
   </p>

   <div class="sect2" id="functions.anonymous-functions.static">
    <h3 class="title">Static anonymous functions</h3>
    <p class="para">
     Anonymous functions may be declared statically. This
     prevents them from having the current class automatically bound to
     them. Objects may also not be bound to them at runtime.
    </p>
    <p class="para">
     <div class="example" id="example-243">
      <p><strong>Example #6 Attempting to use <code class="literal">$this</code> inside a static anonymous function</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$func </span><span style="color: #007700">= static function() {<br />            </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />        };<br />        </span><span style="color: #0000BB">$func</span><span style="color: #007700">();<br />    }<br />};<br />new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
Notice: Undefined variable: this in %s on line %d
NULL
</pre></div>
      </div>
     </div>
    </p>

    <p class="para">
     <div class="example" id="example-244">
      <p><strong>Example #7 Attempting to bind an object to a static anonymous function</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$func </span><span style="color: #007700">= static function() {<br />    </span><span style="color: #FF8000">// function body<br /></span><span style="color: #007700">};<br /></span><span style="color: #0000BB">$func </span><span style="color: #007700">= </span><span style="color: #0000BB">$func</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindTo</span><span style="color: #007700">(new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$func</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
Warning: Cannot bind an instance to a static closure in %s on line %d
</pre></div>
      </div>
     </div>
    </p>
   </div>
   
   <div class="sect2">
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
         <td>8.3.0</td>
         <td>
          Closures created from <a href="language.oop5.magic.php" class="link">magic
          methods</a> can accept named parameters.
         </td>
        </tr>

        <tr>
         <td>7.1.0</td>
         <td>
          Anonymous functions may not close over <a href="language.variables.predefined.php" class="link">superglobals</a>,
          <var class="varname">$this</var>, or any variable with the same name as a
          parameter.
         </td>
        </tr>

       </tbody>
      
     </table>

    </p>
   </div>

   <div class="sect2">
    <h3 class="title">Notes</h3>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      It is possible to use <span class="function"><a href="function.func-num-args.php" class="function">func_num_args()</a></span>,
      <span class="function"><a href="function.func-get-arg.php" class="function">func_get_arg()</a></span>, and <span class="function"><a href="function.func-get-args.php" class="function">func_get_args()</a></span>
      from within a closure.
     </span>
    </p></blockquote>
   </div>

  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/functions.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunctions.anonymous%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=functions.anonymous&amp;repo=en&amp;redirect=https://www.php.net/manual/en/functions.anonymous.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99287">  <div class="votes">
    <div id="Vu99287">
    <a href="/manual/vote-note.php?id=99287&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99287">
    <a href="/manual/vote-note.php?id=99287&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99287" title="81% like this...">
    336
    </div>
  </div>
  <a href="#99287" class="name">
  <strong class="user"><em>orls</em></strong></a><a class="genanchor" href="#99287"> &para;</a><div class="date" title="2010-08-08 06:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99287">
<div class="phpcode"><code><span class="html">Watch out when 'importing' variables to a closure's scope  -- it's easy to miss / forget that they are actually being *copied* into the closure's scope, rather than just being made available.<br /><br />So you will need to explicitly pass them in by reference if your closure cares about their contents over time:<br /><br /><span class="default">&lt;?php<br />$result </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br /></span><span class="default">$one </span><span class="keyword">= function()<br />{ </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">); };<br /><br /></span><span class="default">$two </span><span class="keyword">= function() use (</span><span class="default">$result</span><span class="keyword">)<br />{ </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">); };<br /><br /></span><span class="default">$three </span><span class="keyword">= function() use (&amp;</span><span class="default">$result</span><span class="keyword">)<br />{ </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">); };<br /><br /></span><span class="default">$result</span><span class="keyword">++;<br /><br /></span><span class="default">$one</span><span class="keyword">();    </span><span class="comment">// outputs NULL: $result is not in scope<br /></span><span class="default">$two</span><span class="keyword">();    </span><span class="comment">// outputs int(0): $result was copied<br /></span><span class="default">$three</span><span class="keyword">();    </span><span class="comment">// outputs int(1)<br /></span><span class="default">?&gt;<br /></span><br />Another less trivial example with objects (what I actually tripped up on):<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//set up variable in advance<br /></span><span class="default">$myInstance </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br /></span><span class="default">$broken </span><span class="keyword">= function() </span><span class="default">uses </span><span class="keyword">(</span><span class="default">$myInstance</span><span class="keyword">)<br />{<br />    if(!empty(</span><span class="default">$myInstance</span><span class="keyword">)) </span><span class="default">$myInstance</span><span class="keyword">-&gt;</span><span class="default">doSomething</span><span class="keyword">();<br />};<br /><br /></span><span class="default">$working </span><span class="keyword">= function() </span><span class="default">uses </span><span class="keyword">(&amp;</span><span class="default">$myInstance</span><span class="keyword">)<br />{<br />    if(!empty(</span><span class="default">$myInstance</span><span class="keyword">)) </span><span class="default">$myInstance</span><span class="keyword">-&gt;</span><span class="default">doSomething</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">//$myInstance might be instantiated, might not be<br /></span><span class="keyword">if(</span><span class="default">SomeBusinessLogic</span><span class="keyword">::</span><span class="default">worked</span><span class="keyword">() == </span><span class="default">true</span><span class="keyword">)<br />{<br />    </span><span class="default">$myInstance </span><span class="keyword">= new </span><span class="default">myClass</span><span class="keyword">();<br />}<br /><br /></span><span class="default">$broken</span><span class="keyword">();    </span><span class="comment">// will never do anything: $myInstance will ALWAYS be null inside this closure.<br /></span><span class="default">$working</span><span class="keyword">();    </span><span class="comment">// will call doSomething if $myInstance is instantiated<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117504">  <div class="votes">
    <div id="Vu117504">
    <a href="/manual/vote-note.php?id=117504&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117504">
    <a href="/manual/vote-note.php?id=117504&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117504" title="71% like this...">
    30
    </div>
  </div>
  <a href="#117504" class="name">
  <strong class="user"><em>erolmon dot kskn at gmail dot com</em></strong></a><a class="genanchor" href="#117504"> &para;</a><div class="date" title="2015-06-19 09:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117504">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    </span><span class="comment">/*<br />    (string) $name Name of the function that you will add to class.<br />    Usage : $Foo-&gt;add(function(){},$name);<br />    This will add a public function in Foo Class.<br />    */<br />    </span><span class="keyword">class </span><span class="default">Foo<br />    </span><span class="keyword">{<br />        public function </span><span class="default">add</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">,</span><span class="default">$name</span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$name</span><span class="keyword">} = </span><span class="default">$func</span><span class="keyword">;<br />        }<br />        public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">,</span><span class="default">$arguments</span><span class="keyword">){<br />            </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$func</span><span class="keyword">}, </span><span class="default">$arguments</span><span class="keyword">); <br />        }<br />    }<br />    </span><span class="default">$Foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br />    </span><span class="default">$Foo</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(function(){<br />        echo </span><span class="string">"Hello World"</span><span class="keyword">;<br />    },</span><span class="string">"helloWorldFunction"</span><span class="keyword">);<br />    </span><span class="default">$Foo</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(function(</span><span class="default">$parameterone</span><span class="keyword">){<br />        echo </span><span class="default">$parameterone</span><span class="keyword">;<br />    },</span><span class="string">"exampleFunction"</span><span class="keyword">);<br />    </span><span class="default">$Foo</span><span class="keyword">-&gt;</span><span class="default">helloWorldFunction</span><span class="keyword">(); </span><span class="comment">/*Output : Hello World*/<br />    </span><span class="default">$Foo</span><span class="keyword">-&gt;</span><span class="default">exampleFunction</span><span class="keyword">(</span><span class="string">"Hello PHP"</span><span class="keyword">); </span><span class="comment">/*Output : Hello PHP*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113896">  <div class="votes">
    <div id="Vu113896">
    <a href="/manual/vote-note.php?id=113896&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113896">
    <a href="/manual/vote-note.php?id=113896&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113896" title="70% like this...">
    29
    </div>
  </div>
  <a href="#113896" class="name">
  <strong class="user"><em>cHao</em></strong></a><a class="genanchor" href="#113896"> &para;</a><div class="date" title="2013-12-13 11:42"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113896">
<div class="phpcode"><code><span class="html">In case you were wondering (cause i was), anonymous functions can return references just like named functions can.  Simply use the &amp; the same way you would for a named function...right after the `function` keyword (and right before the nonexistent name).<br /><br /><span class="default">&lt;?php<br />    $value </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$fn </span><span class="keyword">= function &amp;() use (&amp;</span><span class="default">$value</span><span class="keyword">) { return </span><span class="default">$value</span><span class="keyword">; };<br /><br />    </span><span class="default">$x </span><span class="keyword">=&amp; </span><span class="default">$fn</span><span class="keyword">();<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);        </span><span class="comment">// 'int(0)', 'int(0)'<br />    </span><span class="keyword">++</span><span class="default">$x</span><span class="keyword">;<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);        </span><span class="comment">// 'int(1)', 'int(1)'</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121034">  <div class="votes">
    <div id="Vu121034">
    <a href="/manual/vote-note.php?id=121034&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121034">
    <a href="/manual/vote-note.php?id=121034&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121034" title="68% like this...">
    12
    </div>
  </div>
  <a href="#121034" class="name">
  <strong class="user"><em>ayon at hyurl dot com</em></strong></a><a class="genanchor" href="#121034"> &para;</a><div class="date" title="2017-04-29 05:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121034">
<div class="phpcode"><code><span class="html">One way to call a anonymous function recursively is to use the USE keyword and pass a reference to the function itself:<br /><br /><span class="default">&lt;?php<br />$count </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$add </span><span class="keyword">= function(</span><span class="default">$count</span><span class="keyword">) use (&amp;</span><span class="default">$add</span><span class="keyword">){<br />    </span><span class="default">$count </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">;<br />    if(</span><span class="default">$count </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">) </span><span class="default">$count </span><span class="keyword">= </span><span class="default">$add</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">); </span><span class="comment">//recursive calling<br />    </span><span class="keyword">return </span><span class="default">$count</span><span class="keyword">;<br />};<br />echo </span><span class="default">$add</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">); </span><span class="comment">//Will output 10 as expected<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91610">  <div class="votes">
    <div id="Vu91610">
    <a href="/manual/vote-note.php?id=91610&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91610">
    <a href="/manual/vote-note.php?id=91610&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91610" title="67% like this...">
    15
    </div>
  </div>
  <a href="#91610" class="name">
  <strong class="user"><em>a dot schaffhirt at sedna-soft dot de</em></strong></a><a class="genanchor" href="#91610"> &para;</a><div class="date" title="2009-06-19 02:55"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91610">
<div class="phpcode"><code><span class="html">When using anonymous functions as properties in Classes, note that there are three name scopes: one for constants, one for properties and one for methods. That means, you can use the same name for a constant, for a property and for a method at a time.<br /><br />Since a property can be also an anonymous function as of PHP 5.3.0, an oddity arises when they share the same name, not meaning that there would be any conflict.<br /><br />Consider the following example:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">MyClass </span><span class="keyword">{<br />        const </span><span class="default">member </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />        <br />        public </span><span class="default">$member</span><span class="keyword">;<br />        <br />        public function </span><span class="default">member </span><span class="keyword">() {<br />            return </span><span class="string">"method 'member'"</span><span class="keyword">;<br />        }<br />        <br />        public function </span><span class="default">__construct </span><span class="keyword">() {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">member </span><span class="keyword">= function () {<br />                return </span><span class="string">"anonymous function 'member'"</span><span class="keyword">;<br />            };<br />        }<br />    }<br />    <br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: text/plain"</span><span class="keyword">);<br />    <br />    </span><span class="default">$myObj </span><span class="keyword">= new </span><span class="default">MyClass</span><span class="keyword">();<br /><br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">MyClass</span><span class="keyword">::</span><span class="default">member</span><span class="keyword">);  </span><span class="comment">// int(1)<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$myObj</span><span class="keyword">-&gt;</span><span class="default">member</span><span class="keyword">);   </span><span class="comment">// object(Closure)#2 (0) {}<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$myObj</span><span class="keyword">-&gt;</span><span class="default">member</span><span class="keyword">()); </span><span class="comment">// string(15) "method 'member'"<br />    </span><span class="default">$myMember </span><span class="keyword">= </span><span class="default">$myObj</span><span class="keyword">-&gt;</span><span class="default">member</span><span class="keyword">;<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$myMember</span><span class="keyword">());      </span><span class="comment">// string(27) "anonymous function 'member'"<br /></span><span class="default">?&gt;<br /></span><br />That means, regular method invocations work like expected and like before. The anonymous function instead, must be retrieved into a variable first (just like a property) and can only then be invoked.<br /><br />Best regards,</span></code></div>
  </div>
 </div>
  <div class="note" id="94804">  <div class="votes">
    <div id="Vu94804">
    <a href="/manual/vote-note.php?id=94804&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94804">
    <a href="/manual/vote-note.php?id=94804&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94804" title="67% like this...">
    10
    </div>
  </div>
  <a href="#94804" class="name">
  <strong class="user"><em>rob at ubrio dot us</em></strong></a><a class="genanchor" href="#94804"> &para;</a><div class="date" title="2009-11-25 10:20"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94804">
<div class="phpcode"><code><span class="html">You can always call protected members using the __call() method - similar to how you hack around this in Ruby using send.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">Fun
<br /></span><span class="keyword">{
<br /> protected function </span><span class="default">debug</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">)
<br /> {
<br />   echo </span><span class="string">"DEBUG: </span><span class="default">$message</span><span class="string">\n"</span><span class="keyword">;
<br /> }
<br />
<br /> public function </span><span class="default">yield_something</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">)
<br /> {
<br />   return </span><span class="default">$callback</span><span class="keyword">(</span><span class="string">"Soemthing!!"</span><span class="keyword">);
<br /> }
<br />
<br /> public function </span><span class="default">having_fun</span><span class="keyword">()
<br /> {
<br />   </span><span class="default">$self </span><span class="keyword">=&amp; </span><span class="default">$this</span><span class="keyword">;
<br />   return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">yield_something</span><span class="keyword">(function(</span><span class="default">$data</span><span class="keyword">) use (&amp;</span><span class="default">$self</span><span class="keyword">)
<br />   {
<br />     </span><span class="default">$self</span><span class="keyword">-&gt;</span><span class="default">debug</span><span class="keyword">(</span><span class="string">"Doing stuff to the data"</span><span class="keyword">);
<br />     </span><span class="comment">// do something with $data
<br />     </span><span class="default">$self</span><span class="keyword">-&gt;</span><span class="default">debug</span><span class="keyword">(</span><span class="string">"Finished doing stuff with the data."</span><span class="keyword">);
<br />   });
<br /> }
<br />
<br /> </span><span class="comment">// Ah-Ha!
<br /> </span><span class="keyword">public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">, </span><span class="default">$args </span><span class="keyword">= array())
<br /> {
<br />   if(</span><span class="default">is_callable</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">)))
<br />     return </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">), </span><span class="default">$args</span><span class="keyword">);
<br /> }
<br />}
<br />
<br /></span><span class="default">$fun </span><span class="keyword">= new </span><span class="default">Fun</span><span class="keyword">();
<br />echo </span><span class="default">$fun</span><span class="keyword">-&gt;</span><span class="default">having_fun</span><span class="keyword">();
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122809">  <div class="votes">
    <div id="Vu122809">
    <a href="/manual/vote-note.php?id=122809&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122809">
    <a href="/manual/vote-note.php?id=122809&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122809" title="64% like this...">
    13
    </div>
  </div>
  <a href="#122809" class="name">
  <strong class="user"><em>dexen dot devries at gmail dot com</em></strong></a><a class="genanchor" href="#122809"> &para;</a><div class="date" title="2018-06-07 09:54"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122809">
<div class="phpcode"><code><span class="html">Every instance of a lambda has own instance of static variables. This provides for great event handlers, accumulators, etc., etc.<br /><br />Creating new lambda with function() { ... }; expression creates new instance of its static variables. Assigning a lambda to a variable does not create a new instance. A lambda is object of class Closure, and assigning lambdas to variables has the same semantics as assigning object instance to variables.<br /><br />Example script: $a and $b have separate instances of static variables, thus produce different output. However $b and $c share their instance of static variables - because $c is refers to the same object of class Closure as $b - thus produce the same output.<br /><br />#!/usr/bin/env php<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">generate_lambda</span><span class="keyword">() : </span><span class="default">Closure<br /></span><span class="keyword">{<br />        </span><span class="comment"># creates new instance of lambda<br />    </span><span class="keyword">return function(</span><span class="default">$v </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />        static </span><span class="default">$stored</span><span class="keyword">;<br />        if (</span><span class="default">$v </span><span class="keyword">!== </span><span class="default">null</span><span class="keyword">)<br />            </span><span class="default">$stored </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">;<br />        return </span><span class="default">$stored</span><span class="keyword">;<br />    };<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">generate_lambda</span><span class="keyword">();  </span><span class="comment"># creates new instance of statics<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">generate_lambda</span><span class="keyword">();  </span><span class="comment"># creates new instance of statics<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">;                                 </span><span class="comment"># uses the same instance of statics as $b<br /><br /></span><span class="default">$a</span><span class="keyword">(</span><span class="string">'test AAA'</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">(</span><span class="string">'test BBB'</span><span class="keyword">);<br /></span><span class="default">$c</span><span class="keyword">(</span><span class="string">'test CCC'</span><span class="keyword">);  </span><span class="comment"># this overwrites content held by $b, because it refers to the same object<br /><br /></span><span class="default">var_dump</span><span class="keyword">([ </span><span class="default">$a</span><span class="keyword">(), </span><span class="default">$b</span><span class="keyword">(), </span><span class="default">$c</span><span class="keyword">() ]);<br /></span><span class="default">?&gt;<br /></span><br />This test script outputs:<br />array(3) {<br />  [0]=&gt;<br />  string(8) "test AAA"<br />  [1]=&gt;<br />  string(8) "test CCC"<br />  [2]=&gt;<br />  string(8) "test CCC"<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="114433">  <div class="votes">
    <div id="Vu114433">
    <a href="/manual/vote-note.php?id=114433&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114433">
    <a href="/manual/vote-note.php?id=114433&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114433" title="64% like this...">
    11
    </div>
  </div>
  <a href="#114433" class="name">
  <strong class="user"><em>mail at mkharitonov dot net</em></strong></a><a class="genanchor" href="#114433"> &para;</a><div class="date" title="2014-02-20 11:20"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114433">
<div class="phpcode"><code><span class="html">Some comparisons of PHP and JavaScript closures.<br /><br />=== Example 1 (passing by value) ===<br />PHP code:<br /><span class="default">&lt;?php<br />$aaa </span><span class="keyword">= </span><span class="default">111</span><span class="keyword">;<br /></span><span class="default">$func </span><span class="keyword">= function() use(</span><span class="default">$aaa</span><span class="keyword">){ print </span><span class="default">$aaa</span><span class="keyword">; };<br /></span><span class="default">$aaa </span><span class="keyword">= </span><span class="default">222</span><span class="keyword">;<br /></span><span class="default">$func</span><span class="keyword">(); </span><span class="comment">// Outputs "111"<br /></span><span class="default">?&gt;<br /></span><br />Similar JavaScript code:<br />&lt;script type="text/javascript"&gt;<br />var aaa = 111;<br />var func = (function(aaa){ return function(){ alert(aaa); } })(aaa);<br />aaa = 222;<br />func(); // Outputs "111"<br />&lt;/script&gt;<br /><br />Be careful, following code is not similar to previous code:<br />&lt;script type="text/javascript"&gt;<br />var aaa = 111;<br />var bbb = aaa;<br />var func = function(){ alert(bbb); };<br />aaa = 222;<br />func(); // Outputs "111", but only while "bbb" is not changed after function declaration<br /><br />// And this technique is not working in loops:<br />var functions = [];<br />for (var i = 0; i &lt; 2; i++)<br />{<br />    var i2 = i;<br />    functions.push(function(){ alert(i2); });<br />}<br />functions[0](); // Outputs "1", wrong!<br />functions[1](); // Outputs "1", ok<br />&lt;/script&gt;<br /><br />=== Example 2 (passing by reference) ===<br />PHP code:<br /><span class="default">&lt;?php<br />$aaa </span><span class="keyword">= </span><span class="default">111</span><span class="keyword">;<br /></span><span class="default">$func </span><span class="keyword">= function() use(&amp;</span><span class="default">$aaa</span><span class="keyword">){ print </span><span class="default">$aaa</span><span class="keyword">; };<br /></span><span class="default">$aaa </span><span class="keyword">= </span><span class="default">222</span><span class="keyword">;<br /></span><span class="default">$func</span><span class="keyword">(); </span><span class="comment">// Outputs "222"<br /></span><span class="default">?&gt;<br /></span><br />Similar JavaScript code:<br />&lt;script type="text/javascript"&gt;<br />var aaa = 111;<br />var func = function(){ alert(aaa); };<br />aaa = 222; // Outputs "222"<br />func();<br />&lt;/script&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="105261">  <div class="votes">
    <div id="Vu105261">
    <a href="/manual/vote-note.php?id=105261&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105261">
    <a href="/manual/vote-note.php?id=105261&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105261" title="64% like this...">
    11
    </div>
  </div>
  <a href="#105261" class="name">
  <strong class="user"><em>simon at generalflows dot com</em></strong></a><a class="genanchor" href="#105261"> &para;</a><div class="date" title="2011-08-05 08:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105261">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/* <br /> * An example showing how to use closures to implement a Python-like decorator <br /> * pattern.<br /> *<br /> * My goal was that you should be able to decorate a function with any<br /> * other function, then call the decorated function directly: <br /> *<br /> * Define function:         $foo = function($a, $b, $c, ...) {...}<br /> * Define decorator:        $decorator = function($func) {...}<br /> * Decorate it:             $foo = $decorator($foo)<br /> * Call it:                 $foo($a, $b, $c, ...)<br /> *<br /> * This example show an authentication decorator for a service, using a simple<br /> * mock session and mock service. <br /> */<br /> <br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="comment">/* <br /> * Define an example decorator. A decorator function should take the form:<br /> * $decorator = function($func) {<br /> *     return function() use $func) {<br /> *         // Do something, then call the decorated function when needed:<br /> *         $args = func_get_args($func);<br /> *         call_user_func_array($func, $args);<br /> *         // Do something else.<br /> *     };<br /> * };<br /> */<br /></span><span class="default">$authorise </span><span class="keyword">= function(</span><span class="default">$func</span><span class="keyword">) {<br />    return function() use (</span><span class="default">$func</span><span class="keyword">) {<br />        if (</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'is_authorised'</span><span class="keyword">] == </span><span class="default">true</span><span class="keyword">) {<br />            </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">);<br />            </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br />        }<br />        else {<br />            echo </span><span class="string">"Access Denied"</span><span class="keyword">;<br />        }<br />    };<br />};<br /><br /></span><span class="comment">/* <br /> * Define a function to be decorated, in this example a mock service that<br /> * need to be authorised. <br /> */ <br /></span><span class="default">$service </span><span class="keyword">= function(</span><span class="default">$foo</span><span class="keyword">) {<br />    echo </span><span class="string">"Service returns: </span><span class="default">$foo</span><span class="string">"</span><span class="keyword">;<br />};<br /><br /></span><span class="comment">/* <br /> * Decorate it. Ensure you replace the origin function reference with the<br /> * decorated function; ie just $authorise($service) won't work, so do<br /> * $service = $authorise($service)<br /> */<br /></span><span class="default">$service </span><span class="keyword">= </span><span class="default">$authorise</span><span class="keyword">(</span><span class="default">$service</span><span class="keyword">);<br /><br /></span><span class="comment">/* <br /> * Establish mock authorisation, call the service; should get <br /> * 'Service returns: test 1'. <br /> */<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'is_authorised'</span><span class="keyword">] = </span><span class="default">true</span><span class="keyword">;<br /></span><span class="default">$service</span><span class="keyword">(</span><span class="string">'test 1'</span><span class="keyword">);<br /><br /></span><span class="comment">/* <br /> * Remove mock authorisation, call the service; should get 'Access Denied'. <br /> */<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'is_authorised'</span><span class="keyword">] = </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$service</span><span class="keyword">(</span><span class="string">'test 2'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120611">  <div class="votes">
    <div id="Vu120611">
    <a href="/manual/vote-note.php?id=120611&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120611">
    <a href="/manual/vote-note.php?id=120611&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120611" title="62% like this...">
    14
    </div>
  </div>
  <a href="#120611" class="name">
  <strong class="user"><em>john at binkmail dot com</em></strong></a><a class="genanchor" href="#120611"> &para;</a><div class="date" title="2017-02-07 07:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120611">
<div class="phpcode"><code><span class="html">PERFORMANCE BENCHMARK 2017!<br /><br />I decided to compare a single, saved closure against constantly creating the same anonymous closure on every loop iteration. And I tried 10 million loop iterations, in PHP 7.0.14 from Dec 2016. Result:<br /><br />a single saved closure kept in a variable and re-used (10000000 iterations): 1.3874590396881 seconds<br /><br />new anonymous closure created each time (10000000 iterations): 2.8460240364075 seconds<br /><br />In other words, over the course of 10 million iterations, creating the closure again during every iteration only added a total of "1.459 seconds" to the runtime. So that means that every creation of a new anonymous closure takes about 146 nanoseconds on my 7 years old dual-core laptop. I guess PHP keeps a cached "template" for the anonymous function and therefore doesn't need much time to create a new instance of the closure!<br /><br />So you do NOT have to worry about constantly re-creating your anonymous closures over and over again in tight loops! At least not as of PHP 7! There is absolutely NO need to save an instance in a variable and re-use it. And not being restricted by that is a great thing, because it means you can feel free to use anonymous functions exactly where they matter, as opposed to defining them somewhere else in the code. :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="122182">  <div class="votes">
    <div id="Vu122182">
    <a href="/manual/vote-note.php?id=122182&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122182">
    <a href="/manual/vote-note.php?id=122182&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122182" title="62% like this...">
    12
    </div>
  </div>
  <a href="#122182" class="name">
  <strong class="user"><em>toonitw at gmail dot com</em></strong></a><a class="genanchor" href="#122182"> &para;</a><div class="date" title="2017-12-27 05:40"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122182">
<div class="phpcode"><code><span class="html">As of PHP 7.0, you can use IIFE(Immediately-invoked function expression) by wrapping your anonymous function with ().<br /><br /><span class="default">&lt;?php<br />$type </span><span class="keyword">= </span><span class="string">'number'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">( ...( function() use (</span><span class="default">$type</span><span class="keyword">) { <br />    if (</span><span class="default">$type</span><span class="keyword">==</span><span class="string">'number'</span><span class="keyword">) return [</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">]; <br />    else if (</span><span class="default">$type</span><span class="keyword">==</span><span class="string">'alphabet'</span><span class="keyword">) return [</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'b'</span><span class="keyword">,</span><span class="string">'c'</span><span class="keyword">];<br />} )() );<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114079">  <div class="votes">
    <div id="Vu114079">
    <a href="/manual/vote-note.php?id=114079&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114079">
    <a href="/manual/vote-note.php?id=114079&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114079" title="62% like this...">
    8
    </div>
  </div>
  <a href="#114079" class="name">
  <strong class="user"><em>derkontrollfreak+9hy5l at gmail dot com</em></strong></a><a class="genanchor" href="#114079"> &para;</a><div class="date" title="2014-01-09 04:41"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114079">
<div class="phpcode"><code><span class="html">Beware that since PHP 5.4 registering a Closure as an object property that has been instantiated in the same object scope will create a circular reference which prevents immediate object destruction:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Test<br /></span><span class="keyword">{<br />    private </span><span class="default">$closure</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">closure </span><span class="keyword">= function () {<br />        };<br />    }<br /><br />    public function </span><span class="default">__destruct</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"destructed\n"</span><span class="keyword">;<br />    }<br />}<br /><br />new </span><span class="default">Test</span><span class="keyword">;<br />echo </span><span class="string">"finished\n"</span><span class="keyword">;<br /><br /></span><span class="comment">/*<br /> * Result in PHP 5.3:<br /> * ------------------<br /> * destructed<br /> * finished<br /> *<br /> * Result since PHP 5.4:<br /> * ---------------------<br /> * finished<br /> * destructed<br /> */<br /><br /></span><span class="default">?&gt;<br /></span><br />To circumvent this, you can instantiate the Closure in a static method:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">()<br />{<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">closure </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">createClosure</span><span class="keyword">();<br />}<br /><br />public static function </span><span class="default">createClosure</span><span class="keyword">()<br />{<br />    return function () {<br />    };<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123498">  <div class="votes">
    <div id="Vu123498">
    <a href="/manual/vote-note.php?id=123498&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123498">
    <a href="/manual/vote-note.php?id=123498&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123498" title="57% like this...">
    4
    </div>
  </div>
  <a href="#123498" class="name">
  <strong class="user"><em>jake dot tunaley at berkeleyit dot com</em></strong></a><a class="genanchor" href="#123498"> &para;</a><div class="date" title="2019-01-07 05:04"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123498">
<div class="phpcode"><code><span class="html">Beware of using $this in anonymous functions assigned to a static variable.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    public function </span><span class="default">bar</span><span class="keyword">() {<br />        static </span><span class="default">$anonymous </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        if (</span><span class="default">$anonymous </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {<br />            </span><span class="comment">// Expression is not allowed as static initializer workaround<br />            </span><span class="default">$anonymous </span><span class="keyword">= function () {<br />                return </span><span class="default">$this</span><span class="keyword">;<br />            };<br />        }<br />        return </span><span class="default">$anonymous</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">() === </span><span class="default">$a</span><span class="keyword">); </span><span class="comment">// True<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">() === </span><span class="default">$a</span><span class="keyword">); </span><span class="comment">// Also true<br /></span><span class="default">?&gt;<br /></span><br />In a static anonymous function, $this will be the value of whatever object instance that method was called on first.<br /><br />To get the behaviour you're probably expecting, you need to pass the $this context into the function.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    public function </span><span class="default">bar</span><span class="keyword">() {<br />        static </span><span class="default">$anonymous </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        if (</span><span class="default">$anonymous </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {<br />            </span><span class="comment">// Expression is not allowed as static initializer workaround<br />            </span><span class="default">$anonymous </span><span class="keyword">= function (</span><span class="default">self $thisObj</span><span class="keyword">) {<br />                return </span><span class="default">$thisObj</span><span class="keyword">;<br />            };<br />        }<br />        return </span><span class="default">$anonymous</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">() === </span><span class="default">$a</span><span class="keyword">); </span><span class="comment">// True<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">() === </span><span class="default">$a</span><span class="keyword">); </span><span class="comment">// False<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97906">  <div class="votes">
    <div id="Vu97906">
    <a href="/manual/vote-note.php?id=97906&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97906">
    <a href="/manual/vote-note.php?id=97906&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97906" title="56% like this...">
    7
    </div>
  </div>
  <a href="#97906" class="name">
  <strong class="user"><em>kdelux at gmail dot com</em></strong></a><a class="genanchor" href="#97906"> &para;</a><div class="date" title="2010-05-14 08:55"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97906">
<div class="phpcode"><code><span class="html">Here is an example of one way to define, then use the variable ( $this ) in Closure functions.  The code below explores all uses, and shows restrictions.<br /><br />The most useful tool in this snippet is the requesting_class() function that will tell you which class is responsible for executing the current Closure().  <br /><br />Overview:<br />-----------------------<br />Successfully find calling object reference.<br />Successfully call $this(__invoke);<br />Successfully reference $$this-&gt;name;<br />Successfully call call_user_func(array($this, 'method'))<br /><br />Failure: reference anything through $this-&gt;<br />Failure: $this-&gt;name = ''; <br />Failure: $this-&gt;delfect(); <br /><br /><span class="default">&lt;?php<br /> <br />    <br />    <br />    </span><span class="keyword">function </span><span class="default">requesting_class</span><span class="keyword">()<br />    {<br />        foreach(</span><span class="default">debug_backtrace</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) as </span><span class="default">$stack</span><span class="keyword">){<br />            if(isset(</span><span class="default">$stack</span><span class="keyword">[</span><span class="string">'object'</span><span class="keyword">])){<br />                return </span><span class="default">$stack</span><span class="keyword">[</span><span class="string">'object'</span><span class="keyword">];<br />            }<br />        }<br />        <br />    }<br />    <br />        <br />    <br />    <br />    <br />    <br />    class </span><span class="default">Person<br />    </span><span class="keyword">{<br />        public </span><span class="default">$name </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        public </span><span class="default">$head </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        public </span><span class="default">$feet </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        public </span><span class="default">$deflected </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        <br />        function </span><span class="default">__invoke</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">){ return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$p</span><span class="keyword">; }<br />        function </span><span class="default">__toString</span><span class="keyword">(){ return </span><span class="string">'this'</span><span class="keyword">; } </span><span class="comment">// test for reference<br />        <br />        </span><span class="keyword">function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">){ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">; }<br />        function </span><span class="default">deflect</span><span class="keyword">(){ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">deflected </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; }<br />        <br />        public function </span><span class="default">shoot</span><span class="keyword">()<br />        { </span><span class="comment">// If customAttack is defined, use that as the shoot resut.  Otherwise shoot feet<br />            </span><span class="keyword">if(</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">customAttack</span><span class="keyword">)){<br />                return </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">customAttack</span><span class="keyword">);<br />            }<br />            <br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">feet </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br /><br />    </span><span class="default">$p </span><span class="keyword">= new </span><span class="default">Person</span><span class="keyword">(</span><span class="string">'Bob'</span><span class="keyword">);<br /><br />    <br />    </span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">customAttack </span><span class="keyword">= <br />                function(){<br />                    <br />                    echo </span><span class="default">$this</span><span class="keyword">; </span><span class="comment">// Notice: Undefined variable: this<br />                    <br />                    #$this = new Class() // FATAL ERROR<br />                    <br />                    // Trick to assign the variable '$this'<br />                    </span><span class="default">extract</span><span class="keyword">(array(</span><span class="string">'this' </span><span class="keyword">=&gt; </span><span class="default">requesting_class</span><span class="keyword">())); </span><span class="comment">// Determine what class is responsible for making the call to Closure<br />                    <br />                    </span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$this  </span><span class="keyword">);  </span><span class="comment">// Passive reference works<br />                    </span><span class="default">var_dump</span><span class="keyword">( $</span><span class="default">$this </span><span class="keyword">); </span><span class="comment">// Added to class:  function __toString(){ return 'this'; }<br />                    <br />                    </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">(</span><span class="string">'name'</span><span class="keyword">); </span><span class="comment">// Success<br />                    </span><span class="keyword">echo </span><span class="default">$name</span><span class="keyword">;            </span><span class="comment">// Outputs: Bob<br />                    </span><span class="keyword">echo </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />                    echo $</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;<br />                    <br />                    </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'deflect'</span><span class="keyword">), array()); </span><span class="comment">// SUCCESSFULLY CALLED<br />                    <br />                    #$this-&gt;head = 0; //** FATAL ERROR: Using $this when not in object context<br />                    </span><span class="keyword">$</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">head </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;  </span><span class="comment">// Successfully sets value<br />                    <br />                </span><span class="keyword">};<br /> <br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">);<br />    <br />    </span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">shoot</span><span class="keyword">();<br />    <br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">);<br /><br />    <br />    die();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129516">  <div class="votes">
    <div id="Vu129516">
    <a href="/manual/vote-note.php?id=129516&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129516">
    <a href="/manual/vote-note.php?id=129516&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129516" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129516" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#129516"> &para;</a><div class="date" title="2024-05-21 04:43"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129516">
<div class="phpcode"><code><span class="html">If you have a closure (or other callable) stored in an object property and you want to call it, you can use parentheses to disambiguate between it and a method call:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Test<br /></span><span class="keyword">{<br />    public </span><span class="default">$callable</span><span class="keyword">;<br /><br />    function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callable </span><span class="keyword">= function(</span><span class="default">$a</span><span class="keyword">) { return </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">; };<br />    }<br />}<br /><br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">;<br /><br />echo (</span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">callable</span><span class="keyword">)(</span><span class="default">40</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128951">  <div class="votes">
    <div id="Vu128951">
    <a href="/manual/vote-note.php?id=128951&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128951">
    <a href="/manual/vote-note.php?id=128951&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128951" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128951" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#128951"> &para;</a><div class="date" title="2023-10-13 11:46"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128951">
<div class="phpcode"><code><span class="html">"If this automatic binding of the current class is not wanted, then static anonymous functions may be used instead. "<br /><br />The main reason why you would not want automatic binding is that as long as the Closure object created for the anonymous function exists, it retains a reference to the object that spawned it, preventing the object from being destroyed, even if the object is no longer alive anywhere else in the program, and even if the function itself doesn't use $this.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Foo<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(private </span><span class="default">string $id</span><span class="keyword">)<br />    {<br />        echo </span><span class="string">"Creating Foo " </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">gimme_function</span><span class="keyword">()<br />    {<br />        return function(){};<br />    }<br />    public function </span><span class="default">gimme_static_function</span><span class="keyword">()<br />    {<br />        return static function(){};<br />    }<br />    public function </span><span class="default">__destruct</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"Destroying Foo " </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />}<br /><br />echo </span><span class="string">"An object is destroyed as soon as its last reference is removed.\n"</span><span class="keyword">;<br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(</span><span class="string">'Alice'</span><span class="keyword">);<br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(</span><span class="string">'Bob'</span><span class="keyword">); </span><span class="comment">// Causes Alice to be destroyed.<br />// Now destroy Bob.<br /></span><span class="keyword">unset(</span><span class="default">$t</span><span class="keyword">);<br />echo </span><span class="string">"---\n"</span><span class="keyword">;<br /><br />echo </span><span class="string">"A non-static anonymous function retains a reference to the object which created it.\n"</span><span class="keyword">;<br /></span><span class="default">$u </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(</span><span class="string">'Carol'</span><span class="keyword">);<br /></span><span class="default">$ufn </span><span class="keyword">= </span><span class="default">$u</span><span class="keyword">-&gt;</span><span class="default">gimme_function</span><span class="keyword">();<br /></span><span class="default">$u </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(</span><span class="string">'Daisy'</span><span class="keyword">); </span><span class="comment">// Does not cause Carol to be destroyed,<br />                       // because there is still a reference to<br />                       // it in the function held by $ufn.<br /></span><span class="keyword">unset(</span><span class="default">$u</span><span class="keyword">); </span><span class="comment">// Causes Daisy to be destroyed.<br /></span><span class="keyword">echo </span><span class="string">"---\n"</span><span class="keyword">; </span><span class="comment">// Note that Carol hasn't been destroyed yet.<br /><br /></span><span class="keyword">echo </span><span class="string">"A static anonymous function does not retain a reference to the object which created it.\n"</span><span class="keyword">;<br /></span><span class="default">$v </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(</span><span class="string">'Eve'</span><span class="keyword">);<br /></span><span class="default">$vfn </span><span class="keyword">= </span><span class="default">$v</span><span class="keyword">-&gt;</span><span class="default">gimme_static_function</span><span class="keyword">();<br /></span><span class="default">$v </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">(</span><span class="string">'Farid'</span><span class="keyword">); </span><span class="comment">// The function held by $vfn does not<br />                       // hold a reference to Eve, so Eve does get destroyed here.<br /></span><span class="keyword">unset(</span><span class="default">$v</span><span class="keyword">); </span><span class="comment">// Destroy Farid<br /></span><span class="keyword">echo </span><span class="string">"---\n"</span><span class="keyword">;<br /></span><span class="comment">// And then the program finishes, discarding any references to any objects still alive<br />// (specifically, Carol).<br /></span><span class="default">?&gt;<br /></span><br />Because $ufn survived to the end of the end of the program, Carol survived as well. $vfn also survived to the end of the program, but the function it contained was declared static, so didn't retain a reference to Eve.<br /><br />Anonymous functions that retain references to otherwise-dead objects are therefore a potential source of memory leaks. If the function has no use for the object that spawned it, declaring it static prevents it from causing the object to outlive its usefulness.</span></code></div>
  </div>
 </div>
  <div class="note" id="107245">  <div class="votes">
    <div id="Vu107245">
    <a href="/manual/vote-note.php?id=107245&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107245">
    <a href="/manual/vote-note.php?id=107245&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107245" title="51% like this...">
    1
    </div>
  </div>
  <a href="#107245" class="name">
  <strong class="user"><em>mike at borft dot student dot utwente dot nl</em></strong></a><a class="genanchor" href="#107245"> &para;</a><div class="date" title="2012-01-24 02:46"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107245">
<div class="phpcode"><code><span class="html">Since it is possible to assign closures to class variables, it is a shame it is not possible to call them directly. ie. the following does not work:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{<br /><br />  public </span><span class="default">test</span><span class="keyword">;<br /><br />  public function </span><span class="default">__construct</span><span class="keyword">(){<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">= function(</span><span class="default">$a</span><span class="keyword">) {<br />      print </span><span class="string">"</span><span class="default">$a</span><span class="string">\n"</span><span class="keyword">;<br />    };<br />  }<br />}<br /><br /></span><span class="default">$f </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">();<br /><br /></span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />However, it is possible using the magic __call function:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{<br /><br />  public </span><span class="default">test</span><span class="keyword">;<br /><br />  public function </span><span class="default">__construct</span><span class="keyword">(){<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">= function(</span><span class="default">$a</span><span class="keyword">) {<br />      print </span><span class="string">"</span><span class="default">$a</span><span class="string">\n"</span><span class="keyword">;<br />    };<br />  }<br /><br />  public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">){<br />    if ( </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$method</span><span class="keyword">} instanceof </span><span class="default">Closure </span><span class="keyword">) {<br />      return </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$method</span><span class="keyword">},</span><span class="default">$args</span><span class="keyword">);<br />    } else {<br />      return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__call</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br />    }<br />  }<br />}<br /></span><span class="default">$f </span><span class="keyword">= new </span><span class="default">foo</span><span class="keyword">();<br /></span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>it <br />Hope it helps someone ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="92664">  <div class="votes">
    <div id="Vu92664">
    <a href="/manual/vote-note.php?id=92664&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92664">
    <a href="/manual/vote-note.php?id=92664&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92664" title="51% like this...">
    1
    </div>
  </div>
  <a href="#92664" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#92664"> &para;</a><div class="date" title="2009-08-03 02:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92664">
<div class="phpcode"><code><span class="html">If you want to check whether you're dealing with a closure specifically and not a string or array callback you can do this:<br /><br /><span class="default">&lt;?php<br />$isAClosure </span><span class="keyword">= </span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$thing</span><span class="keyword">) &amp;&amp; </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$thing</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98978">  <div class="votes">
    <div id="Vu98978">
    <a href="/manual/vote-note.php?id=98978&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98978">
    <a href="/manual/vote-note.php?id=98978&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98978" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#98978" class="name">
  <strong class="user"><em>gabriel dot totoliciu at ddsec dot net</em></strong></a><a class="genanchor" href="#98978"> &para;</a><div class="date" title="2010-07-19 10:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98978">
<div class="phpcode"><code><span class="html">If you want to make a recursive closure, you will need to write this:<br /><br />$some_var1="1";<br />$some_var2="2";<br /><br />function($param1, $param2) use ($some_var1, $some_var2)<br />{<br /><br />//some code here<br /><br />call_user_func(__FUNCTION__, $other_param1, $other_param2);<br /><br />//some code here<br /><br />}<br /><br />If you need to pass values by reference you should check out<br /><br /><a href="http://www.php.net/manual/en/function.call-user-func.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.call-user-func.php</a><br /><a href="http://www.php.net/manual/en/function.call-user-func-array.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.call-user-func-array.php</a><br /><br />If you're wondering if $some_var1 and $some_var2 are still visible by using the call_user_func, yes, they are available.</span></code></div>
  </div>
 </div>
  <div class="note" id="129679">  <div class="votes">
    <div id="Vu129679">
    <a href="/manual/vote-note.php?id=129679&amp;page=functions.anonymous&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129679">
    <a href="/manual/vote-note.php?id=129679&amp;page=functions.anonymous&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129679" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#129679" class="name">
  <strong class="user"><em>petersenc at gmail dot com</em></strong></a><a class="genanchor" href="#129679"> &para;</a><div class="date" title="2024-07-31 02:44"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129679">
<div class="phpcode"><code><span class="html">As of PHP 8.3.9 PHP doesn't allow type hinting within the use statement. Consider the following Laravel route:<br /><br />Route::get('/tags/{tag}', function (string $tag) use ($posts): View {<br />    $tagPosts = $posts-&gt;filter(<br />            function (Post $post) use ($tag): bool {<br />                return in_array($tag, $post-&gt;tags);<br />            }<br />        );<br />    <br />    return view('tags.show', [<br />        'posts' =&gt; $tagPosts,<br />        'tag' =&gt; $tag<br />    ]);<br />});<br /><br />As you can see I can make the code more verbose in the closures by type hinting the parameters and the return type. use however doesn't allow type hinting.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=functions.anonymous&amp;repo=en&amp;redirect=https://www.php.net/manual/en/functions.anonymous.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.functions.php">Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="functions.user-defined.php" title="User-&#8203;defined functions">User-&#8203;defined functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.arguments.php" title="Function parameters and arguments">Function parameters and arguments</a>
                        </li>
                                                <li class="">
                            <a href="functions.returning-values.php" title="Returning values">Returning values</a>
                        </li>
                                                <li class="">
                            <a href="functions.variable-functions.php" title="Variable functions">Variable functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.internal.php" title="Internal (built-&#8203;in) functions">Internal (built-&#8203;in) functions</a>
                        </li>
                                                <li class="current">
                            <a href="functions.anonymous.php" title="Anonymous functions">Anonymous functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.arrow.php" title="Arrow Functions">Arrow Functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.first_class_callable_syntax.php" title="First class callable syntax">First class callable syntax</a>
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
