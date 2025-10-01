<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.constants.php">
 <link rel="shorturl" href="https://www.php.net/constants">
 <link rel="alternate" href="https://www.php.net/constants" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/langref.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.variables.external.php">
 <link rel="next" href="https://www.php.net/manual/en/language.constants.syntax.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Constants - Manual" />
<meta name="twitter:description" content="Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Constants - Manual" />
<meta itemprop="description" content="Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Constants" />

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
        <a href="language.constants.syntax.php">
          Syntax &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.variables.external.php">
          &laquo; Variables From External Sources        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      </ul>
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
            <option value='en/language.constants.php' selected="selected">English</option>
            <option value='de/language.constants.php'>German</option>
            <option value='es/language.constants.php'>Spanish</option>
            <option value='fr/language.constants.php'>French</option>
            <option value='it/language.constants.php'>Italian</option>
            <option value='ja/language.constants.php'>Japanese</option>
            <option value='pt_BR/language.constants.php'>Brazilian Portuguese</option>
            <option value='ru/language.constants.php'>Russian</option>
            <option value='tr/language.constants.php'>Turkish</option>
            <option value='uk/language.constants.php'>Ukrainian</option>
            <option value='zh/language.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.constants" class="chapter">
  <h1 class="title">Constants</h1>
<h2>Table of Contents</h2><ul class="chunklist chunklist_chapter"><li><a href="language.constants.syntax.php">Syntax</a></li><li><a href="language.constants.predefined.php">Predefined constants</a></li><li><a href="language.constants.magic.php">Magic constants</a></li></ul>


  <p class="simpara">
   A constant is an identifier (name) for a simple value. As the name
   suggests, that value cannot change during the execution of the
   script (except for <a href="language.constants.magic.php" class="link">
   magic constants</a>, which aren&#039;t actually constants).
   Constants are case-sensitive. By convention, constant
   identifiers are always uppercase.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Prior to PHP 8.0.0, constants defined using the <span class="function"><a href="function.define.php" class="function">define()</a></span>
    function may be case-insensitive.
   </p>
  </p></blockquote>

  <p class="para">
   The name of a constant follows the same rules as any label in PHP. A 
   valid constant name starts with a letter or underscore, followed
   by any number of letters, numbers, or underscores. As a regular
   expression, it would be expressed thusly:
   <code class="code">^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$</code>
  </p>
  <p class="para">
   It is possible to <span class="function"><a href="function.define.php" class="function">define()</a></span> constants with reserved or even
   invalid names, whose value can only be retrieved with the
   <span class="function"><a href="function.constant.php" class="function">constant()</a></span> function. However, doing so is not recommended.
  </p>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">See also the
<a href="userlandnaming.php" class="xref">Userland Naming Guide</a>.</p></div>
  <p class="para">

   <div class="example" id="example-147">
    <p><strong>Example #1 Valid and invalid constant names</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Valid constant names<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">"FOO"</span><span style="color: #007700">,     </span><span style="color: #DD0000">"something"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">"FOO2"</span><span style="color: #007700">,    </span><span style="color: #DD0000">"something else"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">"FOO_BAR"</span><span style="color: #007700">, </span><span style="color: #DD0000">"something more"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Invalid constant names<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">"2FOO"</span><span style="color: #007700">,    </span><span style="color: #DD0000">"something"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// This is valid, but should be avoided:<br />// PHP may one day provide a magical constant<br />// that will break your script<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">"__FOO__"</span><span style="color: #007700">, </span><span style="color: #DD0000">"something"</span><span style="color: #007700">); <br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    For our purposes here, a letter is a-z, A-Z, and the ASCII
    characters from 128 through 255 (0x80-0xff).
   </span>
  </p></blockquote>

  <p class="simpara">
   Like <a href="language.variables.predefined.php" class="link">superglobals</a>, the scope of a constant is global.
   Constants can be accessed from anywhere in a script without regard to scope.
   For more information on scope, read the manual section on
   <a href="language.variables.scope.php" class="link">variable scope</a>.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    As of PHP 7.1.0, class constant may declare a visibility of protected
    or private, making them only available in the hierarchical scope of the
    class in which it is defined.
   </span>
  </p></blockquote>

  
  
  

  
 </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108717">  <div class="votes">
    <div id="Vu108717">
    <a href="/manual/vote-note.php?id=108717&amp;page=language.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108717">
    <a href="/manual/vote-note.php?id=108717&amp;page=language.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108717" title="65% like this...">
    260
    </div>
  </div>
  <a href="#108717" class="name">
  <strong class="user"><em>wbcarts at juno dot com</em></strong></a><a class="genanchor" href="#108717"> &para;</a><div class="date" title="2012-05-20 03:04"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108717">
<div class="phpcode"><code><span class="html">11/14/2016 - note updated by sobak
<br />-----
<br />
<br />CONSTANTS and PHP Class Definitions
<br />
<br />Using "define('MY_VAR', 'default value')" INSIDE a class definition does not work as expected. You have to use the PHP keyword 'const' and initialize it with a scalar value -- boolean, int, float, string (or array in PHP 5.6+) -- right away.
<br />
<br /><span class="default">&lt;?php
<br />
<br />define</span><span class="keyword">(</span><span class="string">'MIN_VALUE'</span><span class="keyword">, </span><span class="string">'0.0'</span><span class="keyword">);   </span><span class="comment">// RIGHT - Works OUTSIDE of a class definition.
<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'MAX_VALUE'</span><span class="keyword">, </span><span class="string">'1.0'</span><span class="keyword">);   </span><span class="comment">// RIGHT - Works OUTSIDE of a class definition.
<br />
<br />//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.
<br />//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.
<br />
<br /></span><span class="keyword">class </span><span class="default">Constants
<br /></span><span class="keyword">{
<br />  </span><span class="comment">//define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.
<br />  //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.
<br />
<br />  </span><span class="keyword">const </span><span class="default">MIN_VALUE </span><span class="keyword">= </span><span class="default">0.0</span><span class="keyword">;      </span><span class="comment">// RIGHT - Works INSIDE of a class definition.
<br />  </span><span class="keyword">const </span><span class="default">MAX_VALUE </span><span class="keyword">= </span><span class="default">1.0</span><span class="keyword">;      </span><span class="comment">// RIGHT - Works INSIDE of a class definition.
<br />
<br />  </span><span class="keyword">public static function </span><span class="default">getMinValue</span><span class="keyword">()
<br />  {
<br />    return </span><span class="default">self</span><span class="keyword">::</span><span class="default">MIN_VALUE</span><span class="keyword">;
<br />  }
<br />
<br />  public static function </span><span class="default">getMaxValue</span><span class="keyword">()
<br />  {
<br />    return </span><span class="default">self</span><span class="keyword">::</span><span class="default">MAX_VALUE</span><span class="keyword">;
<br />  }
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />#Example 1:
<br />You can access these constants DIRECTLY like so:
<br /> * type the class name exactly.
<br /> * type two (2) colons.
<br /> * type the const name exactly.
<br />
<br />#Example 2:
<br />Because our class definition provides two (2) static functions, you can also access them like so:
<br /> * type the class name exactly.
<br /> * type two (2) colons.
<br /> * type the function name exactly (with the parentheses).
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">#Example 1:
<br /></span><span class="default">$min </span><span class="keyword">= </span><span class="default">Constants</span><span class="keyword">::</span><span class="default">MIN_VALUE</span><span class="keyword">;
<br /></span><span class="default">$max </span><span class="keyword">= </span><span class="default">Constants</span><span class="keyword">::</span><span class="default">MAX_VALUE</span><span class="keyword">;
<br />
<br /></span><span class="comment">#Example 2:
<br /></span><span class="default">$min </span><span class="keyword">= </span><span class="default">Constants</span><span class="keyword">::</span><span class="default">getMinValue</span><span class="keyword">();
<br /></span><span class="default">$max </span><span class="keyword">= </span><span class="default">Constants</span><span class="keyword">::</span><span class="default">getMaxValue</span><span class="keyword">();
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Once class constants are declared AND initialized, they cannot be set to different values -- that is why there are no setMinValue() and setMaxValue() functions in the class definition -- which means they are READ-ONLY and STATIC (shared by all instances of the class).</span></code></div>
  </div>
 </div>
  <div class="note" id="125120">  <div class="votes">
    <div id="Vu125120">
    <a href="/manual/vote-note.php?id=125120&amp;page=language.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125120">
    <a href="/manual/vote-note.php?id=125120&amp;page=language.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125120" title="60% like this...">
    24
    </div>
  </div>
  <a href="#125120" class="name">
  <strong class="user"><em>warwick dot jm dot barnes at gmail dot com</em></strong></a><a class="genanchor" href="#125120"> &para;</a><div class="date" title="2020-06-16 07:49"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125120">
<div class="phpcode"><code><span class="html">The documentation says, "You can access constants anywhere in your script without regard to scope", but it's worth keeping in mind that a const declaration must appear in the source file before the place where it's used.<br /><br />This doesn't work (using PHP 5.4):<br /><span class="default">&lt;?php<br />foo</span><span class="keyword">();<br />const </span><span class="default">X </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />function </span><span class="default">foo</span><span class="keyword">() {<br />    echo </span><span class="string">"Value of X: " </span><span class="keyword">. </span><span class="default">X</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>Result: "Value of X: X"<br /><br />But this works:<br /><span class="default">&lt;?php<br /></span><span class="keyword">const </span><span class="default">X </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">foo</span><span class="keyword">();<br />function </span><span class="default">foo</span><span class="keyword">() {<br />    echo </span><span class="string">"Value of X: " </span><span class="keyword">. </span><span class="default">X</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>Result: "Value of X: 1"<br /><br />This is potentially confusing because you can refer to a function that occurs later in your source file, but not a constant. Even though the const declaration is processed at compile time, it behaves a bit like it's being processed at run time.</span></code></div>
  </div>
 </div>
  <div class="note" id="118671">  <div class="votes">
    <div id="Vu118671">
    <a href="/manual/vote-note.php?id=118671&amp;page=language.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118671">
    <a href="/manual/vote-note.php?id=118671&amp;page=language.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118671" title="60% like this...">
    27
    </div>
  </div>
  <a href="#118671" class="name">
  <strong class="user"><em>gried at NOSPAM dot nsys dot by</em></strong></a><a class="genanchor" href="#118671"> &para;</a><div class="date" title="2016-01-17 07:12"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118671">
<div class="phpcode"><code><span class="html">Lets expand comment of 'storm' about usage of undefined constants. His claim that 'An undefined constant evaluates as true...' is wrong and right at same time. As said further in documentation ' If you use an undefined constant, PHP assumes that you mean the name of the constant itself, just as if you called it as a string...'. So yeah, undefined global constant when accessed directly will be resolved as string equal to name of sought constant (as thought PHP supposes that programmer had forgot apostrophes and autofixes it) and non-zero non-empty string converts to True.<br /><br />There are two ways to prevent this:<br />1. always use function constant('CONST_NAME') to get constant value (BTW it also works for class constants - constant('CLASS_NAME::CONST_NAME') );<br />2. use only class constants (that are defined inside of class using keyword const) because they are not converted to string when not found but throw exception instead (Fatal error: Undefined class constant).</span></code></div>
  </div>
 </div>
  <div class="note" id="19363">  <div class="votes">
    <div id="Vu19363">
    <a href="/manual/vote-note.php?id=19363&amp;page=language.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19363">
    <a href="/manual/vote-note.php?id=19363&amp;page=language.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19363" title="60% like this...">
    30
    </div>
  </div>
  <a href="#19363" class="name">
  <strong class="user"><em>katana at katana-inc dot com</em></strong></a><a class="genanchor" href="#19363"> &para;</a><div class="date" title="2002-02-25 11:53"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19363">
<div class="phpcode"><code><span class="html">Warning, constants used within the heredoc syntax (<a href="http://www.php.net/manual/en/language.types.string.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/language.types.string.php</a>) are not interpreted!
<br />
<br />Editor's Note: This is true. PHP has no way of recognizing the constant from any other string of characters within the heredoc block.</span></code></div>
  </div>
 </div>
  <div class="note" id="52133">  <div class="votes">
    <div id="Vu52133">
    <a href="/manual/vote-note.php?id=52133&amp;page=language.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52133">
    <a href="/manual/vote-note.php?id=52133&amp;page=language.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52133" title="58% like this...">
    20
    </div>
  </div>
  <a href="#52133" class="name">
  <strong class="user"><em>hafenator2000 at yahoo dot com</em></strong></a><a class="genanchor" href="#52133"> &para;</a><div class="date" title="2005-04-21 02:09"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52133">
<div class="phpcode"><code><span class="html">PHP Modules also define constants.  Make sure to avoid constant name collisions.  There are two ways to do this that I can think of.<br />First: in your code make sure that the constant name is not already used.  ex. <span class="default">&lt;?php </span><span class="keyword">if (! </span><span class="default">defined</span><span class="keyword">(</span><span class="string">"CONSTANT_NAME"</span><span class="keyword">)) { </span><span class="default">Define</span><span class="keyword">(</span><span class="string">"CONSTANT_NAME"</span><span class="keyword">,</span><span class="string">"Some Value"</span><span class="keyword">); } </span><span class="default">?&gt;</span>  This can get messy when you start thinking about collision handling, and the implications of this.<br />Second: Use some off prepend to all your constant names without exception  ex. <span class="default">&lt;?php Define</span><span class="keyword">(</span><span class="string">"SITE_CONSTANT_NAME"</span><span class="keyword">,</span><span class="string">"Some Value"</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />Perhaps the developers or documentation maintainers could recommend a good prepend and ask module writers to avoid that prepend in modules.</span></code></div>
  </div>
 </div>
  <div class="note" id="74836">  <div class="votes">
    <div id="Vu74836">
    <a href="/manual/vote-note.php?id=74836&amp;page=language.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74836">
    <a href="/manual/vote-note.php?id=74836&amp;page=language.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74836" title="56% like this...">
    17
    </div>
  </div>
  <a href="#74836" class="name">
  <strong class="user"><em>Andreas R.</em></strong></a><a class="genanchor" href="#74836"> &para;</a><div class="date" title="2007-04-30 07:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74836">
<div class="phpcode"><code><span class="html">If you are looking for predefined constants like<br />* PHP_OS (to show the operating system, PHP was compiled for; php_uname('s') might be more suitable),<br />* DIRECTORY_SEPARATOR ("\\" on Win, '/' Linux,...)<br />* PATH_SEPARATOR (';' on Win, ':' on Linux,...)<br />they are buried in 'Predefined Constants' under 'List of Reserved Words' in the appendix:<br /><a href="http://www.php.net/manual/en/reserved.constants.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/reserved.constants.php</a><br />while the latter two are also mentioned in 'Directory Functions'<br /><a href="http://www.php.net/manual/en/ref.dir.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/ref.dir.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="35064">  <div class="votes">
    <div id="Vu35064">
    <a href="/manual/vote-note.php?id=35064&amp;page=language.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35064">
    <a href="/manual/vote-note.php?id=35064&amp;page=language.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35064" title="55% like this...">
    23
    </div>
  </div>
  <a href="#35064" class="name">
  <strong class="user"><em>ewspencer at industrex dot com</em></strong></a><a class="genanchor" href="#35064"> &para;</a><div class="date" title="2003-08-18 06:30"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35064">
<div class="phpcode"><code><span class="html">I find using the concatenation operator helps disambiguate value assignments with constants. For example, setting constants in a global configuration file:
<br />
<br /><span class="default">&lt;?php
<br />define</span><span class="keyword">(</span><span class="string">'LOCATOR'</span><span class="keyword">,   </span><span class="string">"/locator"</span><span class="keyword">);
<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'CLASSES'</span><span class="keyword">,   </span><span class="default">LOCATOR</span><span class="keyword">.</span><span class="string">"/code/classes"</span><span class="keyword">);
<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'FUNCTIONS'</span><span class="keyword">, </span><span class="default">LOCATOR</span><span class="keyword">.</span><span class="string">"/code/functions"</span><span class="keyword">);
<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'USERDIR'</span><span class="keyword">,   </span><span class="default">LOCATOR</span><span class="keyword">.</span><span class="string">"/user"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Later, I can use the same convention when invoking a constant's value for static constructs such as require() calls:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">require_once(</span><span class="default">FUNCTIONS</span><span class="keyword">.</span><span class="string">"/database.fnc"</span><span class="keyword">);
<br />require_once(</span><span class="default">FUNCTIONS</span><span class="keyword">.</span><span class="string">"/randchar.fnc"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />as well as dynamic constructs, typical of value assignment to variables:
<br />
<br /><span class="default">&lt;?php
<br />$userid  </span><span class="keyword">= </span><span class="default">randchar</span><span class="keyword">(</span><span class="default">8</span><span class="keyword">,</span><span class="string">'anc'</span><span class="keyword">,</span><span class="string">'u'</span><span class="keyword">);
<br /></span><span class="default">$usermap </span><span class="keyword">= </span><span class="default">USERDIR</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$userid</span><span class="keyword">.</span><span class="string">".png"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />The above convention works for me, and helps produce self-documenting code.
<br />
<br />-- Erich</span></code></div>
  </div>
 </div>
  <div class="note" id="116749">  <div class="votes">
    <div id="Vu116749">
    <a href="/manual/vote-note.php?id=116749&amp;page=language.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116749">
    <a href="/manual/vote-note.php?id=116749&amp;page=language.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116749" title="53% like this...">
    13
    </div>
  </div>
  <a href="#116749" class="name">
  <strong class="user"><em>Raheel Khan</em></strong></a><a class="genanchor" href="#116749"> &para;</a><div class="date" title="2015-02-22 08:39"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116749">
<div class="phpcode"><code><span class="html">class constant are by default public in nature but they cannot be assigned visibility factor and in turn gives syntax error<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">constants </span><span class="keyword">{<br /><br />    const </span><span class="default">MAX_VALUE </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br />        public const </span><span class="default">MIN_VALUE </span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br /><br />}<br /><br /></span><span class="comment">// This will work<br /></span><span class="keyword">echo </span><span class="default">constants</span><span class="keyword">::</span><span class="default">MAX_VALUE</span><span class="keyword">;<br /><br /></span><span class="comment">// This will return syntax error <br /></span><span class="keyword">echo </span><span class="default">constants</span><span class="keyword">::</span><span class="default">MIN_VALUE</span><span class="keyword">; <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52008">  <div class="votes">
    <div id="Vu52008">
    <a href="/manual/vote-note.php?id=52008&amp;page=language.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52008">
    <a href="/manual/vote-note.php?id=52008&amp;page=language.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52008" title="52% like this...">
    13
    </div>
  </div>
  <a href="#52008" class="name">
  <strong class="user"><em>storm</em></strong></a><a class="genanchor" href="#52008"> &para;</a><div class="date" title="2005-04-18 09:54"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52008">
<div class="phpcode"><code><span class="html">An undefined constant evaluates as true when not used correctly. Say for example you had something like this:<br /><br />settings.php<br /><span class="default">&lt;?php<br /></span><span class="comment">// Debug mode<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'DEBUG'</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />test.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">include(</span><span class="string">'settings.php'</span><span class="keyword">);<br /><br />if (</span><span class="default">DEBUG</span><span class="keyword">) {<br />   </span><span class="comment">// echo some sensitive data.<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />If for some reason settings.php doesn't get included and the DEBUG constant is not set, PHP will STILL print the sensitive data. The solution is to evaluate it. Like so:<br /><br />settings.php<br /><span class="default">&lt;?php<br /></span><span class="comment">// Debug mode<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'DEBUG'</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />test.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">include(</span><span class="string">'settings.php'</span><span class="keyword">);<br /><br />if (</span><span class="default">DEBUG </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {<br />   </span><span class="comment">// echo some sensitive data.<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />Now it works correctly.</span></code></div>
  </div>
 </div>
  <div class="note" id="130476">  <div class="votes">
    <div id="Vu130476">
    <a href="/manual/vote-note.php?id=130476&amp;page=language.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130476">
    <a href="/manual/vote-note.php?id=130476&amp;page=language.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130476" title="no votes...">
    0
    </div>
  </div>
  <a href="#130476" class="name">
  <strong class="user"><em>kawewong at gmail dot com</em></strong></a><a class="genanchor" href="#130476"> &para;</a><div class="date" title="2025-09-11 02:15"><strong>19 days ago</strong></div>
  <div class="text" id="Hcom130476">
<div class="phpcode"><code><span class="html">To set constant using `define()` will not work with `namespace` unlike using `const`.<br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">MyProject</span><span class="keyword">;<br /><br />const </span><span class="default">IS_IT_CONNECTED </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// will be able to access via `\MyProject\IS_IT_CONNECTED`<br /><br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'START_TIME'</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">());</span><span class="comment">// will be able to access via `START_TIME` only, not be able to access via ---`\MyProject\START_TIME`---<br /></span><span class="default">?&gt;<br /></span><br />Call:<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">\MyProject\IS_IT_CONNECTED</span><span class="keyword">);</span><span class="comment">// true<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">START_TIME</span><span class="keyword">);</span><span class="comment">// numbers<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">\MyProject\START_TIME</span><span class="keyword">);</span><span class="comment">// Fatal error: Uncaught Error: Undefined constant...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="langref.php">Language Reference</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.basic-syntax.php" title="Basic syntax">Basic syntax</a>
                        </li>
                                                <li class="">
                            <a href="language.types.php" title="Types">Types</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.php" title="Variables">Variables</a>
                        </li>
                                                <li class="current">
                            <a href="language.constants.php" title="Constants">Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.expressions.php" title="Expressions">Expressions</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.php" title="Operators">Operators</a>
                        </li>
                                                <li class="">
                            <a href="language.control-structures.php" title="Control Structures">Control Structures</a>
                        </li>
                                                <li class="">
                            <a href="language.functions.php" title="Functions">Functions</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.php" title="Classes and Objects">Classes and Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.php" title="Namespaces">Namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.errors.php" title="Errors">Errors</a>
                        </li>
                                                <li class="">
                            <a href="language.exceptions.php" title="Exceptions">Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="language.fibers.php" title="Fibers">Fibers</a>
                        </li>
                                                <li class="">
                            <a href="language.generators.php" title="Generators">Generators</a>
                        </li>
                                                <li class="">
                            <a href="language.attributes.php" title="Attributes">Attributes</a>
                        </li>
                                                <li class="">
                            <a href="language.references.php" title="References Explained">References Explained</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.php" title="Predefined Variables">Predefined Variables</a>
                        </li>
                                                <li class="">
                            <a href="reserved.exceptions.php" title="Predefined Exceptions">Predefined Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="reserved.interfaces.php" title="Predefined Interfaces and Classes">Predefined Interfaces and Classes</a>
                        </li>
                                                <li class="">
                            <a href="reserved.attributes.php" title="Predefined Attributes">Predefined Attributes</a>
                        </li>
                                                <li class="">
                            <a href="context.php" title="Context options and parameters">Context options and parameters</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.php" title="Supported Protocols and Wrappers">Supported Protocols and Wrappers</a>
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
