<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Logic - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.operators.logical.php">
 <link rel="shorturl" href="https://www.php.net/operators.logical">
 <link rel="alternate" href="https://www.php.net/operators.logical" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.operators.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.operators.execution.php">
 <link rel="next" href="https://www.php.net/manual/en/language.operators.string.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.operators.logical.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.operators.logical.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.operators.logical.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.operators.logical.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.operators.logical.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.operators.logical.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.operators.logical.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.operators.logical.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.operators.logical.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.operators.logical.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.operators.logical.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Logical Operators" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Logic - Manual" />
<meta name="twitter:description" content="Logical Operators" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Logic - Manual" />
<meta itemprop="description" content="Logical Operators" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Logical Operators" />

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
        <a href="language.operators.string.php">
          String &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.operators.execution.php">
          &laquo; Execution        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.operators.php'>Operators</a></li>      </ul>
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
            <option value='en/language.operators.logical.php' selected="selected">English</option>
            <option value='de/language.operators.logical.php'>German</option>
            <option value='es/language.operators.logical.php'>Spanish</option>
            <option value='fr/language.operators.logical.php'>French</option>
            <option value='it/language.operators.logical.php'>Italian</option>
            <option value='ja/language.operators.logical.php'>Japanese</option>
            <option value='pt_BR/language.operators.logical.php'>Brazilian Portuguese</option>
            <option value='ru/language.operators.logical.php'>Russian</option>
            <option value='tr/language.operators.logical.php'>Turkish</option>
            <option value='uk/language.operators.logical.php'>Ukrainian</option>
            <option value='zh/language.operators.logical.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.operators.logical" class="sect1">
 <h2 class="title">Logical Operators</h2>
 

 <table class="doctable table">
  <caption><strong>Logical Operators</strong></caption>
  
   <thead>
    <tr>
     <th>Example</th>
     <th>Name</th>
     <th>Result</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr>
     <td>$a and $b</td>
     <td>And</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if both <var class="varname">$a</var> and <var class="varname">$b</var> are <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.</td>
    </tr>

    <tr>
     <td>$a or $b</td>
     <td>Or</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if either <var class="varname">$a</var> or <var class="varname">$b</var> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.</td>
    </tr>

    <tr>
     <td>$a xor $b</td>
     <td>Xor</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if either <var class="varname">$a</var> or <var class="varname">$b</var> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, but not both.</td>
    </tr>

    <tr>
     <td>! $a</td>
     <td>Not</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is not <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.</td>
    </tr>

    <tr>
     <td>$a &amp;&amp; $b</td>
     <td>And</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if both <var class="varname">$a</var> and <var class="varname">$b</var> are <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.</td>
    </tr>

    <tr>
     <td>$a || $b</td>
     <td>Or</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if either <var class="varname">$a</var> or <var class="varname">$b</var> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.</td>
    </tr>

   </tbody>
  
 </table>

 <p class="simpara">
  The reason for the two different variations of &quot;and&quot; and &quot;or&quot;
  operators is that they operate at different precedences. (See
  <a href="language.operators.precedence.php" class="link">Operator
   Precedence</a>.)
 </p>
 <div class="example" id="example-177">
  <p><strong>Example #1 Logical operators illustrated</strong></p>
  <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// --------------------<br />// foo() will never get called as those operators are short-circuit<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= (</span><span style="color: #0000BB">false </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">foo</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= (</span><span style="color: #0000BB">true  </span><span style="color: #007700">|| </span><span style="color: #0000BB">foo</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= (</span><span style="color: #0000BB">false </span><span style="color: #007700">and </span><span style="color: #0000BB">foo</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">$d </span><span style="color: #007700">= (</span><span style="color: #0000BB">true  </span><span style="color: #007700">or  </span><span style="color: #0000BB">foo</span><span style="color: #007700">());<br /><br /></span><span style="color: #FF8000">// --------------------<br />// "||" has a greater precedence than "or"<br /><br />// The result of the expression (false || true) is assigned to $e<br />// Acts like: ($e = (false || true))<br /></span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">false </span><span style="color: #007700">|| </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// The constant false is assigned to $f before the "or" operation occurs<br />// Acts like: (($f = false) or true)<br /></span><span style="color: #0000BB">$f </span><span style="color: #007700">= </span><span style="color: #0000BB">false </span><span style="color: #007700">or </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">, </span><span style="color: #0000BB">$f</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// --------------------<br />// "&amp;&amp;" has a greater precedence than "and"<br /><br />// The result of the expression (true &amp;&amp; false) is assigned to $g<br />// Acts like: ($g = (true &amp;&amp; false))<br /></span><span style="color: #0000BB">$g </span><span style="color: #007700">= </span><span style="color: #0000BB">true </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// The constant true is assigned to $h before the "and" operation occurs<br />// Acts like: (($h = true) and false)<br /></span><span style="color: #0000BB">$h </span><span style="color: #007700">= </span><span style="color: #0000BB">true </span><span style="color: #007700">and </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$g</span><span style="color: #007700">, </span><span style="color: #0000BB">$h</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
bool(true)
bool(false)
bool(false)
bool(true)
</pre></div>
  </div>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/operators/logical.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.operators.logical%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.operators.logical&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.logical.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="77411">  <div class="votes">
    <div id="Vu77411">
    <a href="/manual/vote-note.php?id=77411&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77411">
    <a href="/manual/vote-note.php?id=77411&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77411" title="71% like this...">
    320
    </div>
  </div>
  <a href="#77411" class="name">
  <strong class="user"><em>Lawrence</em></strong></a><a class="genanchor" href="#77411"> &para;</a><div class="date" title="2007-08-28 12:04"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77411">
<div class="phpcode"><code><span class="html">Note that PHP's boolean operators *always* return a boolean value... as opposed to other languages that return the value of the last evaluated expression.<br /><br />For example:<br /><br />$a = 0 || 'avacado';<br />print "A: $a\n";<br /><br />will print:<br /><br />A: 1<br /><br />in PHP -- as opposed to printing "A: avacado" as it would in a language like Perl or JavaScript.<br /><br />This means you can't use the '||' operator to set a default value:<br /><br />$a = $fruit || 'apple';<br /><br />instead, you have to use the '?:' operator:<br /><br />$a = ($fruit ? $fruit : 'apple');</span></code></div>
  </div>
 </div>
  <div class="note" id="120961">  <div class="votes">
    <div id="Vu120961">
    <a href="/manual/vote-note.php?id=120961&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120961">
    <a href="/manual/vote-note.php?id=120961&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120961" title="66% like this...">
    75
    </div>
  </div>
  <a href="#120961" class="name">
  <strong class="user"><em>dumitru at floringabriel dot com</em></strong></a><a class="genanchor" href="#120961"> &para;</a><div class="date" title="2017-04-10 10:54"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120961">
<div class="phpcode"><code><span class="html">In addition to what Lawrence said about assigning a default value, one can now use the Null Coalescing Operator (PHP 7). Hence when we want to assign a default value we can write:<br /><br />$a = ($fruit ?? 'apple'); <br />//assigns the $fruit variable content to $a if the $fruit variable exists or has a value that is not NULL, or assigns the value 'apple' to $a if the $fruit variable doesn't exists or it contains the NULL value</span></code></div>
  </div>
 </div>
  <div class="note" id="120433">  <div class="votes">
    <div id="Vu120433">
    <a href="/manual/vote-note.php?id=120433&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120433">
    <a href="/manual/vote-note.php?id=120433&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120433" title="63% like this...">
    25
    </div>
  </div>
  <a href="#120433" class="name">
  <strong class="user"><em>thisleenobleNOSPAMPLEASE at mac dot com</em></strong></a><a class="genanchor" href="#120433"> &para;</a><div class="date" title="2017-01-09 11:05"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120433">
<div class="phpcode"><code><span class="html">In order to kind of emulate the way javascript assigns the first non-false value in an expression such as this:<br /><br />var v = a || b || c || d;<br /><br />I wrote a little helper method that I put in a function dump library (here presented as a bare function):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">either</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">){<br />        </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$a </span><span class="keyword">? </span><span class="default">$a </span><span class="keyword">: </span><span class="default">$b</span><span class="keyword">;<br />        </span><span class="comment">/*<br />             Yes, I know the fixed parameters in the function <br />             are redundant since I could just use func_get_args, <br />             but in most instances I'll be using this a replacement <br />             for the ternary operator and only passing two values. <br />             I don't want to invoke the additional process below <br />             unless I REALLY have to. <br />        */<br />        </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />        if(</span><span class="default">$val </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">&amp;&amp; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">) &gt; </span><span class="default">2</span><span class="keyword">){<br />            </span><span class="default">$args </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /><br />            foreach(</span><span class="default">$args </span><span class="keyword">as </span><span class="default">$arg</span><span class="keyword">){<br />                if(</span><span class="default">$arg </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">){<br />                    </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$arg</span><span class="keyword">;<br />                    break;<br />                }<br />            }<br />        }<br />        return </span><span class="default">$val</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Now instead of:<br /><br />$v = $a ? $a : $b;<br /><br />I write:<br /><br />$v = either($a, $b);<br /><br />but more importantly, instead of writing:<br /><br />$v = $a ? $a : ($b ? $b : $c);<br /><br />I write:<br /><br />$v = either($a, $b, $c);<br /><br />or indeed:<br /><br />$v = either($a, $b, $c, $d, $e, $f, $g, $h);</span></code></div>
  </div>
 </div>
  <div class="note" id="127992">  <div class="votes">
    <div id="Vu127992">
    <a href="/manual/vote-note.php?id=127992&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127992">
    <a href="/manual/vote-note.php?id=127992&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127992" title="62% like this...">
    4
    </div>
  </div>
  <a href="#127992" class="name">
  <strong class="user"><em>martinholtcbi at gmail dot com</em></strong></a><a class="genanchor" href="#127992"> &para;</a><div class="date" title="2022-12-08 01:39"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127992">
<div class="phpcode"><code><span class="html">In PHP, the || operator only ever returns a boolean. For a chainable assignment operator, use the ?: "Elvis" operator.<br /><br />JavaScript:<br />let a = false;<br />let b = false;<br />let c = true;<br />let d = false;<br />let e = a || b || c || d;<br />// e === c<br /><br /><span class="default">&lt;?PHP<br />$a </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /></span><span class="default">$d </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$e </span><span class="keyword">= </span><span class="default">$a </span><span class="keyword">?: </span><span class="default">$b </span><span class="keyword">?: </span><span class="default">$c </span><span class="keyword">?: </span><span class="default">$d</span><span class="keyword">;<br /></span><span class="comment">// $e === $c<br /></span><span class="default">?&gt;<br /></span><br />Credit to @egst and others for the insight. This is merely a rewording for (formerly) lost JavaScript devs like myself.</span></code></div>
  </div>
 </div>
  <div class="note" id="80005">  <div class="votes">
    <div id="Vu80005">
    <a href="/manual/vote-note.php?id=80005&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80005">
    <a href="/manual/vote-note.php?id=80005&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80005" title="59% like this...">
    50
    </div>
  </div>
  <a href="#80005" class="name">
  <strong class="user"><em>pepesantillan at gmail dot com</em></strong></a><a class="genanchor" href="#80005"> &para;</a><div class="date" title="2007-12-23 03:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80005">
<div class="phpcode"><code><span class="html">worth reading for people learning about php and programming: (adding extras <span class="default">&lt;?php ?&gt;</span> to get highlighted code)<br /><br />about the following example in this page manual: <br />Example#1 Logical operators illustrated<br /><br />...<br /><span class="default">&lt;?php<br /></span><span class="comment">// "||" has a greater precedence than "or"<br /></span><span class="default">$e </span><span class="keyword">= </span><span class="default">false </span><span class="keyword">|| </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// $e will be assigned to (false || true) which is true<br /></span><span class="default">$f </span><span class="keyword">= </span><span class="default">false </span><span class="keyword">or </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// $f will be assigned to false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">, </span><span class="default">$f</span><span class="keyword">);<br /><br /></span><span class="comment">// "&amp;&amp;" has a greater precedence than "and"<br /></span><span class="default">$g </span><span class="keyword">= </span><span class="default">true </span><span class="keyword">&amp;&amp; </span><span class="default">false</span><span class="keyword">; </span><span class="comment">// $g will be assigned to (true &amp;&amp; false) which is false<br /></span><span class="default">$h </span><span class="keyword">= </span><span class="default">true </span><span class="keyword">and </span><span class="default">false</span><span class="keyword">; </span><span class="comment">// $h will be assigned to true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$g</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">); <br /></span><span class="default">?&gt;<br /></span>_______________________________________________end of my quote...<br /><br />If necessary, I wanted to give further explanation on this and say that when we write:<br />$f = false or true; // $f will be assigned to false<br />the explanation: <br /><br />"||" has a greater precedence than "or" <br /><br />its true. But a more acurate one would be<br /><br />"||" has greater precedence than "or" and than "=", whereas "or" doesnt have greater precedence than "=", so<br /><br /><span class="default">&lt;?php<br />$f </span><span class="keyword">= </span><span class="default">false </span><span class="keyword">or </span><span class="default">true</span><span class="keyword">;<br /><br /></span><span class="comment">//is like writting<br /><br /></span><span class="keyword">(</span><span class="default">$f </span><span class="keyword">= </span><span class="default">false </span><span class="keyword">) or </span><span class="default">true</span><span class="keyword">;<br /><br /></span><span class="comment">//and<br /><br /></span><span class="default">$e </span><span class="keyword">= </span><span class="default">false </span><span class="keyword">|| </span><span class="default">true</span><span class="keyword">;<br /><br /></span><span class="default">is the same </span><span class="keyword">as<br /><br /></span><span class="default">$e </span><span class="keyword">= (</span><span class="default">false </span><span class="keyword">|| </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span> <br /><br />same goes for "&amp;&amp;" and "AND". <br /><br />If you find it hard to remember operators precedence you can always use parenthesys - "(" and ")". And even if you get to learn it remember that being a good programmer is not showing you can do code with fewer words. The point of being a good programmer is writting code that is easy to understand (comment your code when necessary!), easy to maintain and with high efficiency, among other things.</span></code></div>
  </div>
 </div>
  <div class="note" id="125830">  <div class="votes">
    <div id="Vu125830">
    <a href="/manual/vote-note.php?id=125830&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125830">
    <a href="/manual/vote-note.php?id=125830&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125830" title="59% like this...">
    12
    </div>
  </div>
  <a href="#125830" class="name">
  <strong class="user"><em>egst</em></strong></a><a class="genanchor" href="#125830"> &para;</a><div class="date" title="2021-02-16 11:23"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125830">
<div class="phpcode"><code><span class="html">In response to Lawrence about || always returning a boolean:<br /><br />Instead of<br /><br />$x ? $x : 'fallback'<br /><br />you can also use the "elvis operator":<br /><br />$x ?: 'fallback'<br /><br />which is useful in cases, where the left-hand side of the ternary operator is too long type, is too complex to calculate twice, or has side-effects.<br /><br />It also combines nicely with the ?? operator, which is equivalent to an empty() check (both isset() and `!= false`):<br /><br />$x-&gt;y ?? null ?: 'fallback';<br /><br />instead of:<br /><br />empty($x-&gt;y) ? $x-&gt;y : 'fallback'</span></code></div>
  </div>
 </div>
  <div class="note" id="90386">  <div class="votes">
    <div id="Vu90386">
    <a href="/manual/vote-note.php?id=90386&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90386">
    <a href="/manual/vote-note.php?id=90386&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90386" title="59% like this...">
    22
    </div>
  </div>
  <a href="#90386" class="name">
  <strong class="user"><em>momrom at freenet dot de</em></strong></a><a class="genanchor" href="#90386"> &para;</a><div class="date" title="2009-04-19 08:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90386">
<div class="phpcode"><code><span class="html">Evaluation of logical expressions is stopped as soon as the result is known.<br />If you don't want this, you can replace the and-operator by min() and the or-operator by max().<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">a</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) { echo </span><span class="string">'Expression '</span><span class="keyword">; return </span><span class="default">$x</span><span class="keyword">; }<br />function </span><span class="default">b</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) { echo </span><span class="string">'is '</span><span class="keyword">; return </span><span class="default">$x</span><span class="keyword">; }<br />function </span><span class="default">c</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) { echo </span><span class="default">$x </span><span class="keyword">? </span><span class="string">'true.' </span><span class="keyword">: </span><span class="string">'false.' </span><span class="keyword">;}<br /><br /></span><span class="default">c</span><span class="keyword">( </span><span class="default">a</span><span class="keyword">( </span><span class="default">false </span><span class="keyword">) and </span><span class="default">b</span><span class="keyword">( </span><span class="default">true </span><span class="keyword">) ); </span><span class="comment">// Output: Expression false.<br /></span><span class="default">c</span><span class="keyword">( </span><span class="default">min</span><span class="keyword">( </span><span class="default">a</span><span class="keyword">( </span><span class="default">false </span><span class="keyword">), </span><span class="default">b</span><span class="keyword">( </span><span class="default">true </span><span class="keyword">) ) ); </span><span class="comment">// Output: Expression is false.<br /><br /></span><span class="default">c</span><span class="keyword">( </span><span class="default">a</span><span class="keyword">( </span><span class="default">true </span><span class="keyword">) or </span><span class="default">b</span><span class="keyword">( </span><span class="default">true </span><span class="keyword">) ); </span><span class="comment">// Output: Expression true.<br /></span><span class="default">c</span><span class="keyword">( </span><span class="default">max</span><span class="keyword">( </span><span class="default">a</span><span class="keyword">( </span><span class="default">true </span><span class="keyword">), </span><span class="default">b</span><span class="keyword">( </span><span class="default">true </span><span class="keyword">) ) ); </span><span class="comment">// Output: Expression is true.<br /></span><span class="default">?&gt;<br /></span><br />This way, values aren't automaticaly converted to boolean like it would be done when using and or or. Therefore, if you aren't sure the values are already boolean, you have to convert them 'by hand':<br /><br /><span class="default">&lt;?php<br />c</span><span class="keyword">( </span><span class="default">min</span><span class="keyword">( (bool) </span><span class="default">a</span><span class="keyword">( </span><span class="default">false </span><span class="keyword">), (bool) </span><span class="default">b</span><span class="keyword">( </span><span class="default">true </span><span class="keyword">) ) );<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110785">  <div class="votes">
    <div id="Vu110785">
    <a href="/manual/vote-note.php?id=110785&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110785">
    <a href="/manual/vote-note.php?id=110785&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110785" title="57% like this...">
    20
    </div>
  </div>
  <a href="#110785" class="name">
  <strong class="user"><em>phpnet at zc dot webhop dot net</em></strong></a><a class="genanchor" href="#110785"> &para;</a><div class="date" title="2012-12-07 03:07"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110785">
<div class="phpcode"><code><span class="html">This works similar to javascripts short-curcuit assignments and setting defaults. (e.g.  var a = getParm() || 'a default';)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">(</span><span class="default">$a </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'var'</span><span class="keyword">]) || (</span><span class="default">$a </span><span class="keyword">= </span><span class="string">'a default'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />$a gets assigned $_GET['var'] if there's anything in it or it will fallback to 'a default'<br />Parentheses are required, otherwise you'll end up with $a being a boolean.</span></code></div>
  </div>
 </div>
  <div class="note" id="77061">  <div class="votes">
    <div id="Vu77061">
    <a href="/manual/vote-note.php?id=77061&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77061">
    <a href="/manual/vote-note.php?id=77061&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77061" title="56% like this...">
    14
    </div>
  </div>
  <a href="#77061" class="name">
  <strong class="user"><em>Andrew</em></strong></a><a class="genanchor" href="#77061"> &para;</a><div class="date" title="2007-08-13 08:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77061">
<div class="phpcode"><code><span class="html">&gt; <span class="default">&lt;?php<br /></span><span class="keyword">&gt; </span><span class="default">your_function</span><span class="keyword">() or return </span><span class="string">"whatever"</span><span class="keyword">;<br />&gt; </span><span class="default">?&gt;<br /></span><br />doesn't work because return is not an expression, it's a statement. if return was a function it'd work fine. :/</span></code></div>
  </div>
 </div>
  <div class="note" id="116785">  <div class="votes">
    <div id="Vu116785">
    <a href="/manual/vote-note.php?id=116785&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116785">
    <a href="/manual/vote-note.php?id=116785&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116785" title="52% like this...">
    4
    </div>
  </div>
  <a href="#116785" class="name">
  <strong class="user"><em>samantha at adrichem dot nu</em></strong></a><a class="genanchor" href="#116785"> &para;</a><div class="date" title="2015-02-27 03:28"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116785">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    $res </span><span class="keyword">|= </span><span class="default">true</span><span class="keyword">;<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />does not/no longer returns a boolean (php 5.6) instead it returns int 0 or 1</span></code></div>
  </div>
 </div>
  <div class="note" id="115208">  <div class="votes">
    <div id="Vu115208">
    <a href="/manual/vote-note.php?id=115208&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115208">
    <a href="/manual/vote-note.php?id=115208&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115208" title="52% like this...">
    3
    </div>
  </div>
  <a href="#115208" class="name">
  <strong class="user"><em>anatoliy at ukhvanovy dot name</em></strong></a><a class="genanchor" href="#115208"> &para;</a><div class="date" title="2014-06-12 01:41"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115208">
<div class="phpcode"><code><span class="html">If you want to use the '||' operator to set a default value, like this:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">$fruit </span><span class="keyword">|| </span><span class="string">'apple'</span><span class="keyword">; </span><span class="comment">//if $fruit evaluates to FALSE, then $a will be set to TRUE (because (bool)'apple' == TRUE)<br /></span><span class="default">?&gt;<br /></span><br />instead, you have to use the '?:' operator:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= (</span><span class="default">$fruit </span><span class="keyword">? </span><span class="default">$fruit </span><span class="keyword">: </span><span class="string">'apple'</span><span class="keyword">);</span><span class="comment">//if $fruit evaluates to FALSE, then $a will be set to 'apple'<br /></span><span class="default">?&gt;<br /></span><br />But $fruit will be evaluated twice, which is not desirable. For example fruit() will be called twice:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fruit</span><span class="keyword">(</span><span class="default">$confirm</span><span class="keyword">) {<br />    if(</span><span class="default">$confirm</span><span class="keyword">)<br />        return </span><span class="string">'banana'</span><span class="keyword">;<br />}<br /></span><span class="default">$a </span><span class="keyword">= (</span><span class="default">fruit</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) ? </span><span class="default">fruit</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) : </span><span class="string">'apple'</span><span class="keyword">);</span><span class="comment">//fruit() will be called twice!<br /></span><span class="default">?&gt;<br /></span><br />But since «since PHP 5.3, it is possible to leave out the middle part of the ternary operator» (<a href="http://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary" rel="nofollow" target="_blank">http://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary</a>), now you can code like this:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= (</span><span class="default">$fruit </span><span class="keyword">? : </span><span class="string">'apple'</span><span class="keyword">); </span><span class="comment">//this will evaluate $fruit only once, and if it evaluates to FALSE, then $a will be set to 'apple'<br /></span><span class="default">?&gt;<br /></span><br />But remember that a non-empty string '0' evaluates to FALSE!<br /><br /><span class="default">&lt;?php<br />$fruit </span><span class="keyword">= </span><span class="string">'1'</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">= (</span><span class="default">$fruit </span><span class="keyword">? : </span><span class="string">'apple'</span><span class="keyword">); </span><span class="comment">//this line will set $a to '1'<br /></span><span class="default">$fruit </span><span class="keyword">= </span><span class="string">'0'</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">= (</span><span class="default">$fruit </span><span class="keyword">? : </span><span class="string">'apple'</span><span class="keyword">); </span><span class="comment">//this line will set $a to 'apple', not '0'!<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78166">  <div class="votes">
    <div id="Vu78166">
    <a href="/manual/vote-note.php?id=78166&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78166">
    <a href="/manual/vote-note.php?id=78166&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78166" title="52% like this...">
    6
    </div>
  </div>
  <a href="#78166" class="name">
  <strong class="user"><em>peter dot kutak at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#78166"> &para;</a><div class="date" title="2007-10-01 12:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78166">
<div class="phpcode"><code><span class="html">$test = true and false;     ---&gt; $test === true
<br />$test = (true and false);  ---&gt; $test === false
<br />$test = true &amp;&amp; false;      ---&gt; $test === false
<br />
<br />NOTE: this is due to the first line actually being
<br />
<br />($test = true) and false;
<br />
<br />due to "&amp;&amp;" having a higher precedence than "=" while "and" has a lower one</span></code></div>
  </div>
 </div>
  <div class="note" id="114866">  <div class="votes">
    <div id="Vu114866">
    <a href="/manual/vote-note.php?id=114866&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114866">
    <a href="/manual/vote-note.php?id=114866&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114866" title="51% like this...">
    2
    </div>
  </div>
  <a href="#114866" class="name">
  <strong class="user"><em>void at informance dot info</em></strong></a><a class="genanchor" href="#114866"> &para;</a><div class="date" title="2014-04-16 10:53"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114866">
<div class="phpcode"><code><span class="html">To assign default value in variable assignation, the simpliest solution to me is:<br /><br /><span class="default">&lt;?php<br />$v </span><span class="keyword">= </span><span class="default">my_function</span><span class="keyword">() or </span><span class="default">$v </span><span class="keyword">= </span><span class="string">"default"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />It works because, first, $v is assigned the return value from my_function(), then this value is evaluated as a part of a logical operation:<br />* if the left side is false, null, 0, or an empty string, the right side must be evaluated and, again, because 'or' has low precedence, $v is assigned the string "default"<br />* if the left side is none of the previously mentioned values, the logical operation ends and $v keeps the return value from my_function()<br /><br />This is almost the same as the solution from [phpnet at zc dot webhop dot net], except that his solution (parenthesis and double pipe) doesn't take advantage of the "or" low precedence.<br /><br />NOTE: "" (the empty string) is evaluated as a FALSE logical operand, so make sure that the empty string is not an acceptable value from my_function(). If you need to consider the empty string as an acceptable return value, you must go the classical "if" way.</span></code></div>
  </div>
 </div>
  <div class="note" id="112752">  <div class="votes">
    <div id="Vu112752">
    <a href="/manual/vote-note.php?id=112752&amp;page=language.operators.logical&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112752">
    <a href="/manual/vote-note.php?id=112752&amp;page=language.operators.logical&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112752" title="51% like this...">
    2
    </div>
  </div>
  <a href="#112752" class="name">
  <strong class="user"><em>brian at zickzickzick dot com</em></strong></a><a class="genanchor" href="#112752"> &para;</a><div class="date" title="2013-07-19 03:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112752">
<div class="phpcode"><code><span class="html">This has been mentioned before, but just in case you missed it:<br /><br /><span class="default">&lt;?php <br />    </span><span class="comment">// Defaults --<br /><br />    //If you're trying to gat 'Jack' from:<br />    </span><span class="default">$jack </span><span class="keyword">= </span><span class="default">false </span><span class="keyword">or </span><span class="string">'Jack'</span><span class="keyword">; <br /><br />    </span><span class="comment">// Try:<br />    </span><span class="default">$jack </span><span class="keyword">= </span><span class="default">false </span><span class="keyword">or </span><span class="default">$jack </span><span class="keyword">= </span><span class="string">'Jack'</span><span class="keyword">;<br /><br />    </span><span class="comment">//The other option is:<br />    </span><span class="default">$jack </span><span class="keyword">= </span><span class="default">false </span><span class="keyword">? </span><span class="default">false </span><span class="keyword">: </span><span class="string">'Jack'</span><span class="keyword">; <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.operators.logical&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.logical.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.operators.php">Operators</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.operators.precedence.php" title="Operator Precedence">Operator Precedence</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.arithmetic.php" title="Arithmetic">Arithmetic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.increment.php" title="Increment and Decrement">Increment and Decrement</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.assignment.php" title="Assignment">Assignment</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.bitwise.php" title="Bitwise">Bitwise</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.comparison.php" title="Comparison">Comparison</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.errorcontrol.php" title="Error Control">Error Control</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.execution.php" title="Execution">Execution</a>
                        </li>
                                                <li class="current">
                            <a href="language.operators.logical.php" title="Logic">Logic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.string.php" title="String">String</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.array.php" title="Array">Array</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.type.php" title="Type">Type</a>
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
