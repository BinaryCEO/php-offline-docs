<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: List of Parser Tokens - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/tokens.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/tokens.php">
 <link rel="alternate" href="https://www.php.net/manual/en/tokens.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/appendices.php">
 <link rel="prev" href="https://www.php.net/manual/en/types.comparisons.php">
 <link rel="next" href="https://www.php.net/manual/en/userlandnaming.php">

 <link rel="alternate" href="https://www.php.net/manual/en/tokens.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/tokens.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/tokens.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/tokens.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/tokens.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/tokens.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/tokens.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/tokens.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/tokens.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/tokens.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/tokens.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="List of Parser Tokens" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: List of Parser Tokens - Manual" />
<meta name="twitter:description" content="List of Parser Tokens" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: List of Parser Tokens - Manual" />
<meta itemprop="description" content="List of Parser Tokens" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="List of Parser Tokens" />

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
        <a href="userlandnaming.php">
          Userland Naming Guide &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="types.comparisons.php">
          &laquo; PHP type comparison tables        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      </ul>
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
            <option value='en/tokens.php' selected="selected">English</option>
            <option value='de/tokens.php'>German</option>
            <option value='es/tokens.php'>Spanish</option>
            <option value='fr/tokens.php'>French</option>
            <option value='it/tokens.php'>Italian</option>
            <option value='ja/tokens.php'>Japanese</option>
            <option value='pt_BR/tokens.php'>Brazilian Portuguese</option>
            <option value='ru/tokens.php'>Russian</option>
            <option value='tr/tokens.php'>Turkish</option>
            <option value='uk/tokens.php'>Ukrainian</option>
            <option value='zh/tokens.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="tokens" class="appendix">
 <h1 class="title">List of Parser Tokens</h1>

 <p class="para">
  Various parts of the PHP language are represented internally by tokens.
  A code snippet that contains an invalid sequence of tokens may lead to errors like
  <code class="literal">Parse error: syntax error, unexpected token &quot;==&quot;, expecting &quot;(&quot; in script.php on line 10.&quot;</code>
  where token <code class="code">==</code> is internally represented by <strong><code><a href="tokens.php#constant.t-is-equal">T_IS_EQUAL</a></code></strong>.
 </p>

 <p class="para">
  The following table lists all tokens. They are also available as PHP constants.
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <strong>Usage of T_* constants</strong><br />
  <p class="para">
   T_* constants values are automatically generated based on PHP&#039;s underlying parser infrastructure.
   This means that the concrete value of a token may change between two PHP
   versions.
   This means that your code should never rely directly
   on the original T_* values taken from PHP version X.Y.Z, to provide some compatibility
   across multiple PHP versions.
  </p>

  <p class="para">
   To make use of T_* constants across multiple PHP versions, undefined constants
   may be defined by the user (using big numbers like <code class="literal">10000</code>) with an
   appropriate strategy that will work with both PHP versions and T_* values.
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Prior to PHP 7.4.0, T_FN is not defined.<br /></span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'T_FN'</span><span style="color: #007700">) || </span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'T_FN'</span><span style="color: #007700">, </span><span style="color: #0000BB">10001</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </p>
 </p></blockquote>

 <table class="doctable table">
  <caption><strong>Tokens</strong></caption>
  
   <thead>
    <tr>
     <th>Token</th>
     <th>Syntax</th>
     <th>Reference</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr id="constant.t-abstract">
     <td><strong><code><a href="tokens.php#constant.t-abstract">T_ABSTRACT</a></code></strong></td>
     <td>abstract</td>
     <td><a href="language.oop5.abstract.php" class="xref">Class Abstraction</a></td>
    </tr>

    <tr id="constant.t-ampersand-followed-by-var-or-vararg">
     <td><strong><code><a href="tokens.php#constant.t-ampersand-followed-by-var-or-vararg">T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG</a></code></strong></td>
     <td>&amp;</td>
     <td><a href="language.types.declarations.php" class="xref">Type declarations</a> (available as of PHP 8.1.0)</td>
    </tr>

    <tr id="constant.t-ampersand-not-followed-by-var-or-vararg">
     <td><strong><code><a href="tokens.php#constant.t-ampersand-not-followed-by-var-or-vararg">T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG</a></code></strong></td>
     <td>&amp;</td>
     <td><a href="language.types.declarations.php" class="xref">Type declarations</a> (available as of PHP 8.1.0)</td>
    </tr>

    <tr id="constant.t-and-equal">
     <td><strong><code><a href="tokens.php#constant.t-and-equal">T_AND_EQUAL</a></code></strong></td>
     <td>&amp;=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-array">
     <td><strong><code><a href="tokens.php#constant.t-array">T_ARRAY</a></code></strong></td>
     <td>array()</td>
     <td><span class="function"><a href="function.array.php" class="function">array()</a></span>, <a href="language.types.array.php#language.types.array.syntax" class="link">array syntax</a></td>
    </tr>

    <tr id="constant.t-array-cast">
     <td><strong><code><a href="tokens.php#constant.t-array-cast">T_ARRAY_CAST</a></code></strong></td>
     <td>(array)</td>
     <td><a href="language.types.type-juggling.php#language.types.typecasting" class="link">type-casting</a></td>
    </tr>

    <tr id="constant.t-as">
     <td><strong><code><a href="tokens.php#constant.t-as">T_AS</a></code></strong></td>
     <td>as</td>
     <td><a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a></td>
    </tr>

    <tr id="constant.t-attribute">
     <td><strong><code><a href="tokens.php#constant.t-attribute">T_ATTRIBUTE</a></code></strong></td>
     <td>#[</td>
     <td><a href="language.attributes.php" class="link">attributes</a> (available as of PHP 8.0.0)</td>
    </tr>

    <tr id="constant.t-bad-character">
     <td><strong><code><a href="tokens.php#constant.t-bad-character">T_BAD_CHARACTER</a></code></strong></td>
     <td class="empty">&nbsp;</td>
     <td>
      anything below ASCII 32 except \t (0x09), \n (0x0a) and \r (0x0d)
      (available as of PHP 7.4.0)
     </td>
    </tr>

    <tr id="constant.t-boolean-and">
     <td><strong><code><a href="tokens.php#constant.t-boolean-and">T_BOOLEAN_AND</a></code></strong></td>
     <td>&amp;&amp;</td>
     <td><a href="language.operators.logical.php" class="link">logical operators</a></td>
    </tr>

    <tr id="constant.t-boolean-or">
     <td><strong><code><a href="tokens.php#constant.t-boolean-or">T_BOOLEAN_OR</a></code></strong></td>
     <td>||</td>
     <td><a href="language.operators.logical.php" class="link">logical operators</a></td>
    </tr>

    <tr id="constant.t-bool-cast">
     <td><strong><code><a href="tokens.php#constant.t-bool-cast">T_BOOL_CAST</a></code></strong></td>
     <td>(bool) or (boolean)</td>
     <td><a href="language.types.type-juggling.php#language.types.typecasting" class="link">type-casting</a></td>
    </tr>

    <tr id="constant.t-break">
     <td><strong><code><a href="tokens.php#constant.t-break">T_BREAK</a></code></strong></td>
     <td>break</td>
     <td><a href="control-structures.break.php" class="link">break</a></td>
    </tr>

    <tr id="constant.t-callable">
     <td><strong><code><a href="tokens.php#constant.t-callable">T_CALLABLE</a></code></strong></td>
     <td>callable</td>
     <td><a href="language.types.callable.php" class="link">callable</a></td>
    </tr>

    <tr id="constant.t-case">
     <td><strong><code><a href="tokens.php#constant.t-case">T_CASE</a></code></strong></td>
     <td>case</td>
     <td><a href="control-structures.switch.php" class="link">switch</a></td>
    </tr>

    <tr id="constant.t-catch">
     <td><strong><code><a href="tokens.php#constant.t-catch">T_CATCH</a></code></strong></td>
     <td>catch</td>
     <td><a href="language.exceptions.php" class="xref">Exceptions</a></td>
    </tr>

    <tr id="constant.t-class">
     <td><strong><code><a href="tokens.php#constant.t-class">T_CLASS</a></code></strong></td>
     <td>class</td>
     <td><a href="language.oop5.php" class="link">classes and objects</a></td>
    </tr>

    <tr id="constant.t-class-c">
     <td><strong><code><a href="tokens.php#constant.t-class-c">T_CLASS_C</a></code></strong></td>
     <td>__CLASS__</td>
     <td>
      <a href="language.constants.magic.php" class="link">magic constants</a>
     </td>
    </tr>

    <tr id="constant.t-clone">
     <td><strong><code><a href="tokens.php#constant.t-clone">T_CLONE</a></code></strong></td>
     <td>clone</td>
     <td>
      <a href="language.oop5.php" class="link">classes and objects</a>
     </td>
    </tr>

    <tr id="constant.t-close-tag">
     <td><strong><code><a href="tokens.php#constant.t-close-tag">T_CLOSE_TAG</a></code></strong></td>
     <td>?&gt; or %&gt;</td>
     <td><a href="language.basic-syntax.phpmode.php" class="link">escaping
     from HTML</a></td>
    </tr>

    <tr id="constant.t-coalesce">
     <td><strong><code><a href="tokens.php#constant.t-coalesce">T_COALESCE</a></code></strong></td>
     <td>??</td>
     <td>
      <a href="language.operators.comparison.php#language.operators.comparison.coalesce" class="link">comparison operators</a>
     </td>
    </tr>

    <tr id="constant.t-coalesce-equal">
     <td><strong><code><a href="tokens.php#constant.t-coalesce-equal">T_COALESCE_EQUAL</a></code></strong></td>
     <td>??=</td>
     <td>
      <a href="language.operators.assignment.php" class="link">assignment operators</a>
      (available as of PHP 7.4.0)
     </td>
    </tr>

    <tr id="constant.t-comment">
     <td><strong><code><a href="tokens.php#constant.t-comment">T_COMMENT</a></code></strong></td>
     <td>// or #, and /* */</td>
     <td><a href="language.basic-syntax.comments.php" class="link">comments</a></td>
    </tr>

    <tr id="constant.t-concat-equal">
     <td><strong><code><a href="tokens.php#constant.t-concat-equal">T_CONCAT_EQUAL</a></code></strong></td>
     <td>.=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-const">
     <td><strong><code><a href="tokens.php#constant.t-const">T_CONST</a></code></strong></td>
     <td>const</td>
     <td><a href="language.constants.php" class="link">class constants</a></td>
    </tr>

    <tr id="constant.t-constant-encapsed-string">
     <td><strong><code><a href="tokens.php#constant.t-constant-encapsed-string">T_CONSTANT_ENCAPSED_STRING</a></code></strong></td>
     <td>&quot;foo&quot; or &#039;bar&#039;</td>
     <td><a href="language.types.string.php#language.types.string.syntax" class="link">string syntax</a></td>
    </tr>

    <tr id="constant.t-continue">
     <td><strong><code><a href="tokens.php#constant.t-continue">T_CONTINUE</a></code></strong></td>
     <td>continue</td>
     <td><a href="control-structures.continue.php" class="link">continue</a></td>
    </tr>

    <tr id="constant.t-curly-open">
     <td><strong><code><a href="tokens.php#constant.t-curly-open">T_CURLY_OPEN</a></code></strong></td>
     <td>{$</td>
     <td>
      <a href="language.types.string.php#language.types.string.parsing.advanced" class="link">advanced</a>
      variable string interpolation
     </td>
    </tr>

    <tr id="constant.t-dec">
     <td><strong><code><a href="tokens.php#constant.t-dec">T_DEC</a></code></strong></td>
     <td>--</td>
     <td><a href="language.operators.increment.php" class="link">incrementing/decrementing
     operators</a></td>
    </tr>

    <tr id="constant.t-declare">
     <td><strong><code><a href="tokens.php#constant.t-declare">T_DECLARE</a></code></strong></td>
     <td>declare</td>
     <td><a href="control-structures.declare.php" class="link">declare</a></td>
    </tr>

    <tr id="constant.t-default">
     <td><strong><code><a href="tokens.php#constant.t-default">T_DEFAULT</a></code></strong></td>
     <td>default</td>
     <td><a href="control-structures.switch.php" class="link">switch</a></td>
    </tr>

    <tr id="constant.t-dir">
     <td><strong><code><a href="tokens.php#constant.t-dir">T_DIR</a></code></strong></td>
     <td>__DIR__</td>
     <td><a href="language.constants.magic.php" class="link">magic constants</a></td>
    </tr>

    <tr id="constant.t-div-equal">
     <td><strong><code><a href="tokens.php#constant.t-div-equal">T_DIV_EQUAL</a></code></strong></td>
     <td>/=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-dnumber">
     <td><strong><code><a href="tokens.php#constant.t-dnumber">T_DNUMBER</a></code></strong></td>
     <td>0.12, etc.</td>
     <td><a href="language.types.float.php" class="link">floating point numbers</a></td>
    </tr>

    <tr id="constant.t-do">
     <td><strong><code><a href="tokens.php#constant.t-do">T_DO</a></code></strong></td>
     <td>do</td>
     <td><a href="control-structures.do.while.php" class="link">do..while</a></td>
    </tr>

    <tr id="constant.t-doc-comment">
     <td><strong><code><a href="tokens.php#constant.t-doc-comment">T_DOC_COMMENT</a></code></strong></td>
     <td>/** */</td>
     <td>
      <a href="language.basic-syntax.comments.php" class="link">PHPDoc style comments</a>
     </td>
    </tr>

    <tr id="constant.t-dollar-open-curly-braces">
     <td><strong><code><a href="tokens.php#constant.t-dollar-open-curly-braces">T_DOLLAR_OPEN_CURLY_BRACES</a></code></strong></td>
     <td>${</td>
     <td>
      <a href="language.types.string.php#language.types.string.parsing.basic" class="link">basic</a>
      variable string interpolation
     </td>
    </tr>

    <tr id="constant.t-double-arrow">
     <td><strong><code><a href="tokens.php#constant.t-double-arrow">T_DOUBLE_ARROW</a></code></strong></td>
     <td>=&gt;</td>
     <td><a href="language.types.array.php#language.types.array.syntax" class="link">array syntax</a></td>
    </tr>

    <tr id="constant.t-double-cast">
     <td><strong><code><a href="tokens.php#constant.t-double-cast">T_DOUBLE_CAST</a></code></strong></td>
     <td>(real), (double) or (float)</td>
     <td><a href="language.types.type-juggling.php#language.types.typecasting" class="link">type-casting</a></td>
    </tr>

    <tr id="constant.t-double-colon">
     <td><strong><code><a href="tokens.php#constant.t-double-colon">T_DOUBLE_COLON</a></code></strong></td>
     <td>::</td>
     <td>see <strong><code><a href="tokens.php#constant.t-paamayim-nekudotayim">T_PAAMAYIM_NEKUDOTAYIM</a></code></strong> below</td>
    </tr>

    <tr id="constant.t-echo">
     <td><strong><code><a href="tokens.php#constant.t-echo">T_ECHO</a></code></strong></td>
     <td>echo</td>
     <td><span class="function"><a href="function.echo.php" class="function">echo</a></span></td>
    </tr>

    <tr id="constant.t-ellipsis">
     <td><strong><code><a href="tokens.php#constant.t-ellipsis">T_ELLIPSIS</a></code></strong></td>
     <td>...</td>
     <td>
      <a href="functions.arguments.php#functions.variable-arg-list" class="link">function arguments</a>
     </td>
    </tr>

    <tr id="constant.t-else">
     <td><strong><code><a href="tokens.php#constant.t-else">T_ELSE</a></code></strong></td>
     <td>else</td>
     <td><a href="control-structures.else.php" class="link">else</a></td>
    </tr>

    <tr id="constant.t-elseif">
     <td><strong><code><a href="tokens.php#constant.t-elseif">T_ELSEIF</a></code></strong></td>
     <td>elseif</td>
     <td><a href="control-structures.elseif.php" class="link">elseif</a></td>
    </tr>

    <tr id="constant.t-empty">
     <td><strong><code><a href="tokens.php#constant.t-empty">T_EMPTY</a></code></strong></td>
     <td>empty</td>
     <td><span class="function"><a href="function.empty.php" class="function">empty()</a></span></td>
    </tr>

    <tr id="constant.t-encapsed-and-whitespace">
     <td><strong><code><a href="tokens.php#constant.t-encapsed-and-whitespace">T_ENCAPSED_AND_WHITESPACE</a></code></strong></td>
     <td>&quot; $a&quot;</td>
     <td><a href="language.types.string.php#language.types.string.parsing" class="link">constant part of
     string with variables</a></td>
    </tr>

    <tr id="constant.t-enddeclare">
     <td><strong><code><a href="tokens.php#constant.t-enddeclare">T_ENDDECLARE</a></code></strong></td>
     <td>enddeclare</td>
     <td><a href="control-structures.declare.php" class="link">declare</a>, <a href="control-structures.alternative-syntax.php" class="link">alternative syntax</a></td>
    </tr>

    <tr id="constant.t-endfor">
     <td><strong><code><a href="tokens.php#constant.t-endfor">T_ENDFOR</a></code></strong></td>
     <td>endfor</td>
     <td><a href="control-structures.for.php" class="link">for</a>, <a href="control-structures.alternative-syntax.php" class="link">alternative syntax</a></td>
    </tr>

    <tr id="constant.t-endforeach">
     <td><strong><code><a href="tokens.php#constant.t-endforeach">T_ENDFOREACH</a></code></strong></td>
     <td>endforeach</td>
     <td><a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a>, <a href="control-structures.alternative-syntax.php" class="link">alternative syntax</a></td>
    </tr>

    <tr id="constant.t-endif">
     <td><strong><code><a href="tokens.php#constant.t-endif">T_ENDIF</a></code></strong></td>
     <td>endif</td>
     <td><a href="control-structures.if.php" class="link">if</a>, <a href="control-structures.alternative-syntax.php" class="link">alternative syntax</a></td>
    </tr>

    <tr id="constant.t-endswitch">
     <td><strong><code><a href="tokens.php#constant.t-endswitch">T_ENDSWITCH</a></code></strong></td>
     <td>endswitch</td>
     <td><a href="control-structures.switch.php" class="link">switch</a>, <a href="control-structures.alternative-syntax.php" class="link">alternative syntax</a></td>
    </tr>

    <tr id="constant.t-endwhile">
     <td><strong><code><a href="tokens.php#constant.t-endwhile">T_ENDWHILE</a></code></strong></td>
     <td>endwhile</td>
     <td><a href="control-structures.while.php" class="link">while</a>, <a href="control-structures.alternative-syntax.php" class="link">alternative syntax</a></td>
    </tr>

    <tr id="constant.t-enum">
     <td><strong><code><a href="tokens.php#constant.t-enum">T_ENUM</a></code></strong></td>
     <td>enum</td>
     <td><a href="language.types.enumerations.php" class="link">Enumerations</a> (available as of PHP 8.1.0)</td>
    </tr>

    <tr id="constant.t-end-heredoc">
     <td><strong><code><a href="tokens.php#constant.t-end-heredoc">T_END_HEREDOC</a></code></strong></td>
     <td class="empty">&nbsp;</td>
     <td><a href="language.types.string.php#language.types.string.syntax.heredoc" class="link">heredoc
     syntax</a></td>
    </tr>

    <tr id="constant.t-eval">
     <td><strong><code><a href="tokens.php#constant.t-eval">T_EVAL</a></code></strong></td>
     <td>eval()</td>
     <td><span class="function"><a href="function.eval.php" class="function">eval()</a></span></td>
    </tr>

    <tr id="constant.t-exit">
     <td><strong><code><a href="tokens.php#constant.t-exit">T_EXIT</a></code></strong></td>
     <td>exit or die</td>
     <td><span class="function"><a href="function.exit.php" class="function">exit()</a></span>, <span class="function"><a href="function.die.php" class="function">die()</a></span></td>
    </tr>

    <tr id="constant.t-extends">
     <td><strong><code><a href="tokens.php#constant.t-extends">T_EXTENDS</a></code></strong></td>
     <td>extends</td>
     <td><a href="language.oop5.basic.php#language.oop5.basic.extends" class="link">extends</a>, <a href="language.oop5.php" class="link">classes and objects</a></td>
    </tr>

    <tr id="constant.t-file">
     <td><strong><code><a href="tokens.php#constant.t-file">T_FILE</a></code></strong></td>
     <td>__FILE__</td>
     <td><a href="language.constants.magic.php" class="link">magic constants</a></td>
    </tr>

    <tr id="constant.t-final">
     <td><strong><code><a href="tokens.php#constant.t-final">T_FINAL</a></code></strong></td>
     <td>final</td>
     <td><a href="language.oop5.final.php" class="xref">Final Keyword</a></td>
    </tr>

    <tr id="constant.t-finally">
     <td><strong><code><a href="tokens.php#constant.t-finally">T_FINALLY</a></code></strong></td>
     <td>finally</td>
     <td><a href="language.exceptions.php" class="xref">Exceptions</a></td>
    </tr>

    <tr id="constant.t-fn">
     <td><strong><code><a href="tokens.php#constant.t-fn">T_FN</a></code></strong></td>
     <td>fn</td>
     <td>
      <a href="functions.arrow.php" class="link">arrow functions</a>
      (available as of PHP 7.4.0)
     </td>
    </tr>

    <tr id="constant.t-for">
     <td><strong><code><a href="tokens.php#constant.t-for">T_FOR</a></code></strong></td>
     <td>for</td>
     <td><a href="control-structures.for.php" class="link">for</a></td>
    </tr>

    <tr id="constant.t-foreach">
     <td><strong><code><a href="tokens.php#constant.t-foreach">T_FOREACH</a></code></strong></td>
     <td>foreach</td>
     <td><a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a></td>
    </tr>

    <tr id="constant.t-function">
     <td><strong><code><a href="tokens.php#constant.t-function">T_FUNCTION</a></code></strong></td>
     <td>function</td>
     <td><a href="language.functions.php" class="link">functions</a></td>
    </tr>

    <tr id="constant.t-func-c">
     <td><strong><code><a href="tokens.php#constant.t-func-c">T_FUNC_C</a></code></strong></td>
     <td>__FUNCTION__</td>
     <td>
      <a href="language.constants.magic.php" class="link">magic constants</a>
     </td>
    </tr>

    <tr id="constant.t-global">
     <td><strong><code><a href="tokens.php#constant.t-global">T_GLOBAL</a></code></strong></td>
     <td>global</td>
     <td><a href="language.variables.scope.php" class="link">variable scope</a></td>
    </tr>

    <tr id="constant.t-goto">
     <td><strong><code><a href="tokens.php#constant.t-goto">T_GOTO</a></code></strong></td>
     <td>goto</td>
     <td><a href="control-structures.goto.php" class="link">goto</a></td>
    </tr>

    <tr id="constant.t-halt-compiler">
     <td><strong><code><a href="tokens.php#constant.t-halt-compiler">T_HALT_COMPILER</a></code></strong></td>
     <td>__halt_compiler()</td>
     <td><a href="function.halt-compiler.php" class="xref">__halt_compiler</a></td>
    </tr>

    <tr id="constant.t-if">
     <td><strong><code><a href="tokens.php#constant.t-if">T_IF</a></code></strong></td>
     <td>if</td>
     <td><a href="control-structures.if.php" class="link">if</a></td>
    </tr>

    <tr id="constant.t-implements">
     <td><strong><code><a href="tokens.php#constant.t-implements">T_IMPLEMENTS</a></code></strong></td>
     <td>implements</td>
     <td><a href="language.oop5.interfaces.php" class="xref">Object Interfaces</a></td>
    </tr>

    <tr id="constant.t-inc">
     <td><strong><code><a href="tokens.php#constant.t-inc">T_INC</a></code></strong></td>
     <td>++</td>
     <td><a href="language.operators.increment.php" class="link">incrementing/decrementing
     operators</a></td>
    </tr>

    <tr id="constant.t-include">
     <td><strong><code><a href="tokens.php#constant.t-include">T_INCLUDE</a></code></strong></td>
     <td>include</td>
     <td><span class="function"><a href="function.include.php" class="function">include</a></span></td>
    </tr>

    <tr id="constant.t-include-once">
     <td><strong><code><a href="tokens.php#constant.t-include-once">T_INCLUDE_ONCE</a></code></strong></td>
     <td>include_once</td>
     <td><span class="function"><a href="function.include-once.php" class="function">include_once</a></span></td>
    </tr>

    <tr id="constant.t-inline-html">
     <td><strong><code><a href="tokens.php#constant.t-inline-html">T_INLINE_HTML</a></code></strong></td>
     <td class="empty">&nbsp;</td>
     <td><a href="language.basic-syntax.phpmode.php" class="link">text outside PHP</a></td>
    </tr>

    <tr id="constant.t-instanceof">
     <td><strong><code><a href="tokens.php#constant.t-instanceof">T_INSTANCEOF</a></code></strong></td>
     <td>instanceof</td>
     <td>
      <a href="language.operators.type.php" class="link">type operators</a>
     </td>
    </tr>

    <tr id="constant.t-insteadof">
     <td><strong><code><a href="tokens.php#constant.t-insteadof">T_INSTEADOF</a></code></strong></td>
     <td>insteadof</td>
     <td><a href="language.oop5.traits.php" class="xref">Traits</a></td>
    </tr>

    <tr id="constant.t-interface">
     <td><strong><code><a href="tokens.php#constant.t-interface">T_INTERFACE</a></code></strong></td>
     <td>interface</td>
     <td><a href="language.oop5.interfaces.php" class="xref">Object Interfaces</a></td>
    </tr>

    <tr id="constant.t-int-cast">
     <td><strong><code><a href="tokens.php#constant.t-int-cast">T_INT_CAST</a></code></strong></td>
     <td>(int) or (integer)</td>
     <td><a href="language.types.type-juggling.php#language.types.typecasting" class="link">type-casting</a></td>
    </tr>

    <tr id="constant.t-isset">
     <td><strong><code><a href="tokens.php#constant.t-isset">T_ISSET</a></code></strong></td>
     <td>isset()</td>
     <td><span class="function"><a href="function.isset.php" class="function">isset()</a></span></td>
    </tr>

    <tr id="constant.t-is-equal">
     <td><strong><code><a href="tokens.php#constant.t-is-equal">T_IS_EQUAL</a></code></strong></td>
     <td>==</td>
     <td><a href="language.operators.comparison.php" class="link">comparison operators</a></td>
    </tr>

    <tr id="constant.t-is-greater-or-equal">
     <td><strong><code><a href="tokens.php#constant.t-is-greater-or-equal">T_IS_GREATER_OR_EQUAL</a></code></strong></td>
     <td>&gt;=</td>
     <td><a href="language.operators.comparison.php" class="link">comparison operators</a></td>
    </tr>

    <tr id="constant.t-is-identical">
     <td><strong><code><a href="tokens.php#constant.t-is-identical">T_IS_IDENTICAL</a></code></strong></td>
     <td>===</td>
     <td><a href="language.operators.comparison.php" class="link">comparison operators</a></td>
    </tr>

    <tr id="constant.t-is-not-equal">
     <td><strong><code><a href="tokens.php#constant.t-is-not-equal">T_IS_NOT_EQUAL</a></code></strong></td>
     <td>!= or &lt;&gt;</td>
     <td><a href="language.operators.comparison.php" class="link">comparison operators</a></td>
    </tr>

    <tr id="constant.t-is-not-identical">
     <td><strong><code><a href="tokens.php#constant.t-is-not-identical">T_IS_NOT_IDENTICAL</a></code></strong></td>
     <td>!==</td>
     <td><a href="language.operators.comparison.php" class="link">comparison operators</a></td>
    </tr>

    <tr id="constant.t-is-smaller-or-equal">
     <td><strong><code><a href="tokens.php#constant.t-is-smaller-or-equal">T_IS_SMALLER_OR_EQUAL</a></code></strong></td>
     <td>&lt;=</td>
     <td><a href="language.operators.comparison.php" class="link">comparison operators</a></td>
    </tr>

    <tr id="constant.t-line">
     <td><strong><code><a href="tokens.php#constant.t-line">T_LINE</a></code></strong></td>
     <td>__LINE__</td>
     <td><a href="language.constants.magic.php" class="link">magic constants</a></td>
    </tr>

    <tr id="constant.t-list">
     <td><strong><code><a href="tokens.php#constant.t-list">T_LIST</a></code></strong></td>
     <td>list()</td>
     <td><span class="function"><a href="function.list.php" class="function">list()</a></span></td>
    </tr>

    <tr id="constant.t-lnumber">
     <td><strong><code><a href="tokens.php#constant.t-lnumber">T_LNUMBER</a></code></strong></td>
     <td>123, 012, 0x1ac, etc.</td>
     <td><a href="language.types.integer.php" class="link">integers</a></td>
    </tr>

    <tr id="constant.t-logical-and">
     <td><strong><code><a href="tokens.php#constant.t-logical-and">T_LOGICAL_AND</a></code></strong></td>
     <td>and</td>
     <td><a href="language.operators.logical.php" class="link">logical operators</a></td>
    </tr>

    <tr id="constant.t-logical-or">
     <td><strong><code><a href="tokens.php#constant.t-logical-or">T_LOGICAL_OR</a></code></strong></td>
     <td>or</td>
     <td><a href="language.operators.logical.php" class="link">logical operators</a></td>
    </tr>

    <tr id="constant.t-logical-xor">
     <td><strong><code><a href="tokens.php#constant.t-logical-xor">T_LOGICAL_XOR</a></code></strong></td>
     <td>xor</td>
     <td><a href="language.operators.logical.php" class="link">logical operators</a></td>
    </tr>

    <tr id="constant.t-match">
     <td><strong><code><a href="tokens.php#constant.t-match">T_MATCH</a></code></strong></td>
     <td>match</td>
     <td>
      <a href="control-structures.match.php" class="link">match</a> (available as of PHP 8.0.0)
     </td>
    </tr>

    <tr id="constant.t-method-c">
     <td><strong><code><a href="tokens.php#constant.t-method-c">T_METHOD_C</a></code></strong></td>
     <td>__METHOD__</td>
     <td>
      <a href="language.constants.magic.php" class="link">magic constants</a>
     </td>
    </tr>

    <tr id="constant.t-minus-equal">
     <td><strong><code><a href="tokens.php#constant.t-minus-equal">T_MINUS_EQUAL</a></code></strong></td>
     <td>-=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-mod-equal">
     <td><strong><code><a href="tokens.php#constant.t-mod-equal">T_MOD_EQUAL</a></code></strong></td>
     <td>%=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-mul-equal">
     <td><strong><code><a href="tokens.php#constant.t-mul-equal">T_MUL_EQUAL</a></code></strong></td>
     <td>*=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-namespace">
     <td><strong><code><a href="tokens.php#constant.t-namespace">T_NAMESPACE</a></code></strong></td>
     <td>namespace</td>
     <td>
      <a href="language.namespaces.php" class="link">namespaces</a>
     </td>
    </tr>

    <tr id="constant.t-name-fully-qualified">
     <td><strong><code><a href="tokens.php#constant.t-name-fully-qualified">T_NAME_FULLY_QUALIFIED</a></code></strong></td>
     <td>\App\Namespace</td>
     <td>
      <a href="language.namespaces.php" class="link">namespaces</a> (available as of PHP 8.0.0)
     </td>
    </tr>

    <tr id="constant.t-name-qualified">
     <td><strong><code><a href="tokens.php#constant.t-name-qualified">T_NAME_QUALIFIED</a></code></strong></td>
     <td>App\Namespace</td>
     <td>
      <a href="language.namespaces.php" class="link">namespaces</a> (available as of PHP 8.0.0)
     </td>
    </tr>

    <tr id="constant.t-name-relative">
     <td><strong><code><a href="tokens.php#constant.t-name-relative">T_NAME_RELATIVE</a></code></strong></td>
     <td>namespace\Namespace</td>
     <td>
      <a href="language.namespaces.php" class="link">namespaces</a> (available as of PHP 8.0.0)
     </td>
    </tr>

    <tr id="constant.t-new">
     <td><strong><code><a href="tokens.php#constant.t-new">T_NEW</a></code></strong></td>
     <td>new</td>
     <td><a href="language.oop5.php" class="link">classes and objects</a></td>
    </tr>

    <tr id="constant.t-ns-c">
     <td><strong><code><a href="tokens.php#constant.t-ns-c">T_NS_C</a></code></strong></td>
     <td>__NAMESPACE__</td>
     <td>
      <a href="language.namespaces.php" class="link">namespaces</a>
     </td>
    </tr>

    <tr id="constant.t-ns-separator">
     <td><strong><code><a href="tokens.php#constant.t-ns-separator">T_NS_SEPARATOR</a></code></strong></td>
     <td>\</td>
     <td>
      <a href="language.namespaces.php" class="link">namespaces</a>
     </td>
    </tr>

    <tr id="constant.t-num-string">
     <td><strong><code><a href="tokens.php#constant.t-num-string">T_NUM_STRING</a></code></strong></td>
     <td>&quot;$a[0]&quot;</td>
     <td><a href="language.types.string.php#language.types.string.parsing" class="link">numeric array index
     inside string</a></td>
    </tr>

    <tr id="constant.t-object-cast">
     <td><strong><code><a href="tokens.php#constant.t-object-cast">T_OBJECT_CAST</a></code></strong></td>
     <td>(object)</td>
     <td><a href="language.types.type-juggling.php#language.types.typecasting" class="link">type-casting</a></td>
    </tr>

    <tr id="constant.t-object-operator">
     <td><strong><code><a href="tokens.php#constant.t-object-operator">T_OBJECT_OPERATOR</a></code></strong></td>
     <td>-&gt;</td>
     <td><a href="language.oop5.php" class="link">classes and objects</a></td>
    </tr>

    <tr id="constant.t-nullsafe-object-operator">
     <td><strong><code><a href="tokens.php#constant.t-nullsafe-object-operator">T_NULLSAFE_OBJECT_OPERATOR</a></code></strong></td>
     <td>?-&gt;</td>
     <td><a href="language.oop5.php" class="link">classes and objects</a></td>
    </tr>

    <tr id="constant.t-open-tag">
     <td><strong><code><a href="tokens.php#constant.t-open-tag">T_OPEN_TAG</a></code></strong></td>
     <td>&lt;?php, &lt;? or &lt;%</td>
     <td><a href="language.basic-syntax.phpmode.php" class="link">escaping
     from HTML</a></td>
    </tr>

    <tr id="constant.t-open-tag-with-echo">
     <td><strong><code><a href="tokens.php#constant.t-open-tag-with-echo">T_OPEN_TAG_WITH_ECHO</a></code></strong></td>
     <td>&lt;?= or &lt;%=</td>
     <td><a href="language.basic-syntax.phpmode.php" class="link">escaping
     from HTML</a></td>
    </tr>

    <tr id="constant.t-or-equal">
     <td><strong><code><a href="tokens.php#constant.t-or-equal">T_OR_EQUAL</a></code></strong></td>
     <td>|=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-paamayim-nekudotayim">
     <td><strong><code><a href="tokens.php#constant.t-paamayim-nekudotayim">T_PAAMAYIM_NEKUDOTAYIM</a></code></strong></td>
     <td>::</td>
     <td><a href="language.oop5.paamayim-nekudotayim.php" class="link">scope resolution</a>. Also defined as
      <strong><code><a href="tokens.php#constant.t-double-colon">T_DOUBLE_COLON</a></code></strong>.</td>
    </tr>

    <tr id="constant.t-plus-equal">
     <td><strong><code><a href="tokens.php#constant.t-plus-equal">T_PLUS_EQUAL</a></code></strong></td>
     <td>+=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-pow">
     <td><strong><code><a href="tokens.php#constant.t-pow">T_POW</a></code></strong></td>
     <td>**</td>
     <td>
      <a href="language.operators.arithmetic.php" class="link">arithmetic operators</a>
     </td>
    </tr>

    <tr id="constant.t-pow-equal">
     <td><strong><code><a href="tokens.php#constant.t-pow-equal">T_POW_EQUAL</a></code></strong></td>
     <td>**=</td>
     <td>
      <a href="language.operators.assignment.php" class="link">assignment operators</a>
     </td>
    </tr>

    <tr id="constant.t-print">
     <td><strong><code><a href="tokens.php#constant.t-print">T_PRINT</a></code></strong></td>
     <td>print</td>
     <td><span class="function"><a href="function.print.php" class="function">print</a></span></td>
    </tr>

    <tr id="constant.t-private">
     <td><strong><code><a href="tokens.php#constant.t-private">T_PRIVATE</a></code></strong></td>
     <td>private</td>
     <td>
      <a href="language.oop5.php" class="link">classes and objects</a>
     </td>
    </tr>

    <tr id="constant.t-private-set">
     <td><strong><code><a href="tokens.php#constant.t-private-set">T_PRIVATE_SET</a></code></strong></td>
     <td>private(set)</td>
     <td>
      property hooks (available as of PHP 8.4.0)
     </td>
    </tr>

    <tr id="constant.t-property-c">
     <td><strong><code><a href="tokens.php#constant.t-property-c">T_PROPERTY_C</a></code></strong></td>
     <td>__PROPERTY__</td>
     <td>
      <a href="language.constants.magic.php" class="link">magic constants</a>
     </td>
    </tr>

    <tr id="constant.t-protected">
     <td><strong><code><a href="tokens.php#constant.t-protected">T_PROTECTED</a></code></strong></td>
     <td>protected</td>
     <td>
      <a href="language.oop5.php" class="link">classes and objects</a>
     </td>
    </tr>

    <tr id="constant.t-protected-set">
     <td><strong><code><a href="tokens.php#constant.t-protected-set">T_PROTECTED_SET</a></code></strong></td>
     <td>protected(set)</td>
     <td>
      property hooks (available as of PHP 8.4.0)
     </td>
    </tr>

    <tr id="constant.t-public">
     <td><strong><code><a href="tokens.php#constant.t-public">T_PUBLIC</a></code></strong></td>
     <td>public</td>
     <td>
      <a href="language.oop5.php" class="link">classes and objects</a>
     </td>
    </tr>

    <tr id="constant.t-public-set">
     <td><strong><code><a href="tokens.php#constant.t-public-set">T_PUBLIC_SET</a></code></strong></td>
     <td>public(set)</td>
     <td>
      property hooks (available as of PHP 8.4.0)
     </td>
    </tr>

    <tr id="constant.t-readonly">
     <td><strong><code><a href="tokens.php#constant.t-readonly">T_READONLY</a></code></strong></td>
     <td>readonly</td>
     <td>
      <a href="language.oop5.php" class="link">classes and objects</a> (available as of PHP 8.1.0)
     </td>
    </tr>

    <tr id="constant.t-require">
     <td><strong><code><a href="tokens.php#constant.t-require">T_REQUIRE</a></code></strong></td>
     <td>require</td>
     <td><span class="function"><a href="function.require.php" class="function">require</a></span></td>
    </tr>

    <tr id="constant.t-require-once">
     <td><strong><code><a href="tokens.php#constant.t-require-once">T_REQUIRE_ONCE</a></code></strong></td>
     <td>require_once</td>
     <td><span class="function"><a href="function.require-once.php" class="function">require_once</a></span></td>
    </tr>

    <tr id="constant.t-return">
     <td><strong><code><a href="tokens.php#constant.t-return">T_RETURN</a></code></strong></td>
     <td>return</td>
     <td><a href="functions.returning-values.php" class="link">returning values</a></td>
    </tr>

    <tr id="constant.t-sl">
     <td><strong><code><a href="tokens.php#constant.t-sl">T_SL</a></code></strong></td>
     <td>&lt;&lt;</td>
     <td><a href="language.operators.bitwise.php" class="link">bitwise
     operators</a></td>
    </tr>

    <tr id="constant.t-sl-equal">
     <td><strong><code><a href="tokens.php#constant.t-sl-equal">T_SL_EQUAL</a></code></strong></td>
     <td>&lt;&lt;=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-spaceship">
     <td><strong><code><a href="tokens.php#constant.t-spaceship">T_SPACESHIP</a></code></strong></td>
     <td>&lt;=&gt;</td>
     <td>
      <a href="language.operators.comparison.php" class="link">comparison operators</a>
     </td>
    </tr>

    <tr id="constant.t-sr">
     <td><strong><code><a href="tokens.php#constant.t-sr">T_SR</a></code></strong></td>
     <td>&gt;&gt;</td>
     <td><a href="language.operators.bitwise.php" class="link">bitwise
     operators</a></td>
    </tr>

    <tr id="constant.t-sr-equal">
     <td><strong><code><a href="tokens.php#constant.t-sr-equal">T_SR_EQUAL</a></code></strong></td>
     <td>&gt;&gt;=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-start-heredoc">
     <td><strong><code><a href="tokens.php#constant.t-start-heredoc">T_START_HEREDOC</a></code></strong></td>
     <td>&lt;&lt;&lt;</td>
     <td><a href="language.types.string.php#language.types.string.syntax.heredoc" class="link">heredoc
     syntax</a></td>
    </tr>

    <tr id="constant.t-static">
     <td><strong><code><a href="tokens.php#constant.t-static">T_STATIC</a></code></strong></td>
     <td>static</td>
     <td><a href="language.variables.scope.php" class="link">variable scope</a></td>
    </tr>

    <tr id="constant.t-string">
     <td><strong><code><a href="tokens.php#constant.t-string">T_STRING</a></code></strong></td>
     <td>parent, self, etc.</td>
     <td>
      identifiers, e.g. keywords like <code class="literal">parent</code> and <code class="literal">self</code>,
      function names, class names and more are matched.
      See also <strong><code><a href="tokens.php#constant.t-constant-encapsed-string">T_CONSTANT_ENCAPSED_STRING</a></code></strong>.
     </td>
    </tr>

    <tr id="constant.t-string-cast">
     <td><strong><code><a href="tokens.php#constant.t-string-cast">T_STRING_CAST</a></code></strong></td>
     <td>(string)</td>
     <td><a href="language.types.type-juggling.php#language.types.typecasting" class="link">type-casting</a></td>
    </tr>

    <tr id="constant.t-string-varname">
     <td><strong><code><a href="tokens.php#constant.t-string-varname">T_STRING_VARNAME</a></code></strong></td>
     <td>&quot;${a</td>
     <td>
      <a href="language.variables.variable.php" class="link">variable variables</a>
      to interpolate in a string
     </td>
    </tr>

    <tr id="constant.t-switch">
     <td><strong><code><a href="tokens.php#constant.t-switch">T_SWITCH</a></code></strong></td>
     <td>switch</td>
     <td><a href="control-structures.switch.php" class="link">switch</a></td>
    </tr>

    <tr id="constant.t-throw">
     <td><strong><code><a href="tokens.php#constant.t-throw">T_THROW</a></code></strong></td>
     <td>throw</td>
     <td><a href="language.exceptions.php" class="xref">Exceptions</a></td>
    </tr>

    <tr id="constant.t-trait">
     <td><strong><code><a href="tokens.php#constant.t-trait">T_TRAIT</a></code></strong></td>
     <td>trait</td>
     <td><a href="language.oop5.traits.php" class="xref">Traits</a></td>
    </tr>

    <tr id="constant.t-trait-c">
     <td><strong><code><a href="tokens.php#constant.t-trait-c">T_TRAIT_C</a></code></strong></td>
     <td>__TRAIT__</td>
     <td><strong><code><a href="language.constants.magic.php#constant.trait">__TRAIT__</a></code></strong></td>
    </tr>

    <tr id="constant.t-try">
     <td><strong><code><a href="tokens.php#constant.t-try">T_TRY</a></code></strong></td>
     <td>try</td>
     <td><a href="language.exceptions.php" class="xref">Exceptions</a></td>
    </tr>

    <tr id="constant.t-unset">
     <td><strong><code><a href="tokens.php#constant.t-unset">T_UNSET</a></code></strong></td>
     <td>unset()</td>
     <td><span class="function"><a href="function.unset.php" class="function">unset()</a></span></td>
    </tr>

    <tr id="constant.t-unset-cast">
     <td><strong><code><a href="tokens.php#constant.t-unset-cast">T_UNSET_CAST</a></code></strong></td>
     <td>(unset)</td>
     <td><a href="language.types.type-juggling.php#language.types.typecasting" class="link">type-casting</a></td>
    </tr>

    <tr id="constant.t-use">
     <td><strong><code><a href="tokens.php#constant.t-use">T_USE</a></code></strong></td>
     <td>use</td>
     <td><a href="language.namespaces.php" class="link">namespaces</a></td>
    </tr>

    <tr id="constant.t-var">
     <td><strong><code><a href="tokens.php#constant.t-var">T_VAR</a></code></strong></td>
     <td>var</td>
     <td><a href="language.oop5.php" class="link">classes and objects</a></td>
    </tr>

    <tr id="constant.t-variable">
     <td><strong><code><a href="tokens.php#constant.t-variable">T_VARIABLE</a></code></strong></td>
     <td>$foo</td>
     <td><a href="language.variables.php" class="link">variables</a></td>
    </tr>

    <tr id="constant.t-while">
     <td><strong><code><a href="tokens.php#constant.t-while">T_WHILE</a></code></strong></td>
     <td>while</td>
     <td><a href="control-structures.while.php" class="link">while</a>, <a href="control-structures.do.while.php" class="link">do..while</a></td>
    </tr>

    <tr id="constant.t-whitespace">
     <td><strong><code><a href="tokens.php#constant.t-whitespace">T_WHITESPACE</a></code></strong></td>
     <td>\t \r\n</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.t-xor-equal">
     <td><strong><code><a href="tokens.php#constant.t-xor-equal">T_XOR_EQUAL</a></code></strong></td>
     <td>^=</td>
     <td><a href="language.operators.assignment.php" class="link">assignment
     operators</a></td>
    </tr>

    <tr id="constant.t-yield">
     <td><strong><code><a href="tokens.php#constant.t-yield">T_YIELD</a></code></strong></td>
     <td>yield</td>
     <td><a href="language.generators.syntax.php#control-structures.yield" class="link">generators</a></td>
    </tr>

    <tr id="constant.t-yield-from">
     <td><strong><code><a href="tokens.php#constant.t-yield-from">T_YIELD_FROM</a></code></strong></td>
     <td>yield from</td>
     <td><a href="language.generators.syntax.php#control-structures.yield.from" class="link">generators</a></td>
    </tr>

   </tbody>
  
 </table>

 <p class="para">
  See also <span class="function"><a href="function.token-name.php" class="function">token_name()</a></span>.
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/tokens.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ftokens%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=tokens&amp;repo=en&amp;redirect=https://www.php.net/manual/en/tokens.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129361">  <div class="votes">
    <div id="Vu129361">
    <a href="/manual/vote-note.php?id=129361&amp;page=tokens&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129361">
    <a href="/manual/vote-note.php?id=129361&amp;page=tokens&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129361" title="75% like this...">
    2
    </div>
  </div>
  <a href="#129361" class="name">
  <strong class="user"><em>daniel_rhodes at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#129361"> &para;</a><div class="date" title="2024-03-28 08:41"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129361">
<div class="phpcode"><code><span class="html">In the above table of Tokens, it's worth noting that the bracketed text of "available as of PHP x.y.z" can mean one of two things:<br /><br />[] This *parser token* is available as of PHP x.y.z<br />    {eg. T_BAD_CHARACTER, T_NAME_QUALIFIED}<br /><br />[] This *language feature* is available as of PHP x.y.z<br />    {eg. T_ATTRIBUTE, T_COALESCE_EQUAL}</span></code></div>
  </div>
 </div>
  <div class="note" id="85872">  <div class="votes">
    <div id="Vu85872">
    <a href="/manual/vote-note.php?id=85872&amp;page=tokens&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85872">
    <a href="/manual/vote-note.php?id=85872&amp;page=tokens&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85872" title="56% like this...">
    7
    </div>
  </div>
  <a href="#85872" class="name">
  <strong class="user"><em>nathan at unfinitydesign dot com</em></strong></a><a class="genanchor" href="#85872"> &para;</a><div class="date" title="2008-09-22 05:52"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85872">
<div class="phpcode"><code><span class="html">T_ENCAPSED_AND_WHITESPACE is whitespace which intersects a group of tokens. For example, an "unexpected T_ENCAPSED_AND_WHITESPACE" error is produced by the following code:
<br />
<br /><span class="default">&lt;?php
<br />$main_output_world </span><span class="keyword">= </span><span class="string">'snakes!'</span><span class="keyword">;
<br />echo(</span><span class="string">'There are' </span><span class="default">10 $main_output_world</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note the missing concatenation operator between the two strings leads to the whitespace error that is so named above. The concatenation operator instructs PHP to ignore the whitespace between the two code tokens (the so named "encapsed" data"), rather than parse it as a token itself.
<br />
<br />The correct code would be:
<br />
<br /><span class="default">&lt;?php
<br />$main_output_world </span><span class="keyword">= </span><span class="string">'snakes!'</span><span class="keyword">;
<br />echo(</span><span class="string">'There are' </span><span class="keyword">. </span><span class="default">10 </span><span class="keyword">. </span><span class="default">$main_output_world</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note the addition of the concatenation operator between each token.</span></code></div>
  </div>
 </div>
  <div class="note" id="85882">  <div class="votes">
    <div id="Vu85882">
    <a href="/manual/vote-note.php?id=85882&amp;page=tokens&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85882">
    <a href="/manual/vote-note.php?id=85882&amp;page=tokens&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85882" title="47% like this...">
    -3
    </div>
  </div>
  <a href="#85882" class="name">
  <strong class="user"><em>fgm at osinet dot fr</em></strong></a><a class="genanchor" href="#85882"> &para;</a><div class="date" title="2008-09-22 01:08"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85882">
<div class="phpcode"><code><span class="html">T_ENCAPSED_AND_WHITESPACED is returned when parsing strings with evaluated content, like "some $value" or this example from the Strings reference page:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo &lt;&lt;&lt;EOT<br /></span><span class="string">My name is "</span><span class="default">$name</span><span class="string">". I am printing some </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="string">.<br />Now, I am printing some </span><span class="keyword">{</span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]}</span><span class="string">.<br />This should print a capital 'A': \x41<br /></span><span class="keyword">EOT;<br /></span><span class="default">?&gt;<br /></span><br />This last example is tokenized as:<br />T_ECHO <br />  echo<br />T_WHITESPACE <br />  %20 (a space character)<br />T_START_HEREDOC <br />  &lt;&lt; <br />T_ENCAPSED_AND_WHITESPACE <br />  My name is "<br />T_VARIABLE<br />  $name<br />T_ENCAPSED_AND_WHITESPACE    <br />  ". I am printing some <br />T_VARIABLE    <br />  $foo<br />T_OBJECT_OPERATOR    <br />  -&gt;<br />T_STRING    <br />  foo<br />T_ENCAPSED_AND_WHITESPACE    <br />  . Now, I am printing some <br />T_CURLY_OPEN    <br />  {<br />T_VARIABLE    <br />  $foo<br />T_OBJECT_OPERATOR    <br />  -&gt;<br />T_STRING    <br />  bar<br />(terminal)<br />  [<br />T_LNUMBER    <br />  1<br />(terminal)<br />  ]<br />(terminal)<br />  }<br />T_ENCAPSED_AND_WHITESPACE    <br />  . This should print a capital 'A': \x41<br />T_END_HEREDOC<br />  EOT<br />(terminal)<br />  ;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=tokens&amp;repo=en&amp;redirect=https://www.php.net/manual/en/tokens.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="appendices.php">Appendices</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="history.php" title="History of PHP and Related Projects">History of PHP and Related Projects</a>
                        </li>
                                                <li class="">
                            <a href="examples.php" title="About manual examples">About manual examples</a>
                        </li>
                                                <li class="">
                            <a href="migration84.php" title="Migrating from PHP 8.3.x to PHP 8.4.x">Migrating from PHP 8.3.x to PHP 8.4.x</a>
                        </li>
                                                <li class="">
                            <a href="migration83.php" title="Migrating from PHP 8.2.x to PHP 8.3.x">Migrating from PHP 8.2.x to PHP 8.3.x</a>
                        </li>
                                                <li class="">
                            <a href="migration82.php" title="Migrating from PHP 8.1.x to PHP 8.2.x">Migrating from PHP 8.1.x to PHP 8.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration81.php" title="Migrating from PHP 8.0.x to PHP 8.1.x">Migrating from PHP 8.0.x to PHP 8.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration80.php" title="Migrating from PHP 7.4.x to PHP 8.0.x">Migrating from PHP 7.4.x to PHP 8.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration74.php" title="Migrating from PHP 7.3.x to PHP 7.4.x">Migrating from PHP 7.3.x to PHP 7.4.x</a>
                        </li>
                                                <li class="">
                            <a href="migration73.php" title="Migrating from PHP 7.2.x to PHP 7.3.x">Migrating from PHP 7.2.x to PHP 7.3.x</a>
                        </li>
                                                <li class="">
                            <a href="migration72.php" title="Migrating from PHP 7.1.x to PHP 7.2.x">Migrating from PHP 7.1.x to PHP 7.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration71.php" title="Migrating from PHP 7.0.x to PHP 7.1.x">Migrating from PHP 7.0.x to PHP 7.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration70.php" title="Migrating from PHP 5.6.x to PHP 7.0.x">Migrating from PHP 5.6.x to PHP 7.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration56.php" title="Migrating from PHP 5.5.x to PHP 5.6.x">Migrating from PHP 5.5.x to PHP 5.6.x</a>
                        </li>
                                                <li class="">
                            <a href="debugger.php" title="Debugging in PHP">Debugging in PHP</a>
                        </li>
                                                <li class="">
                            <a href="configure.php" title="Configure options">Configure options</a>
                        </li>
                                                <li class="">
                            <a href="ini.php" title="php.ini directives">php.ini directives</a>
                        </li>
                                                <li class="">
                            <a href="extensions.php" title="Extension List/Categorization">Extension List/Categorization</a>
                        </li>
                                                <li class="">
                            <a href="aliases.php" title="List of Function Aliases">List of Function Aliases</a>
                        </li>
                                                <li class="">
                            <a href="reserved.php" title="List of Reserved Words">List of Reserved Words</a>
                        </li>
                                                <li class="">
                            <a href="resource.php" title="List of Resource Types">List of Resource Types</a>
                        </li>
                                                <li class="">
                            <a href="filters.php" title="List of Available Filters">List of Available Filters</a>
                        </li>
                                                <li class="">
                            <a href="transports.php" title="List of Supported Socket Transports">List of Supported Socket Transports</a>
                        </li>
                                                <li class="">
                            <a href="types.comparisons.php" title="PHP type comparison tables">PHP type comparison tables</a>
                        </li>
                                                <li class="current">
                            <a href="tokens.php" title="List of Parser Tokens">List of Parser Tokens</a>
                        </li>
                                                <li class="">
                            <a href="userlandnaming.php" title="Userland Naming Guide">Userland Naming Guide</a>
                        </li>
                                                <li class="">
                            <a href="about.php" title="About the manual">About the manual</a>
                        </li>
                                                <li class="">
                            <a href="cc.license.php" title="Creative Commons Attribution 3.0">Creative Commons Attribution 3.0</a>
                        </li>
                                                <li class="">
                            <a href="indexes.php" title="Index listing">Index listing</a>
                        </li>
                                                <li class="">
                            <a href="doc.changelog.php" title="Changelog">Changelog</a>
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
