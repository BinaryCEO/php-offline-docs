<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Array - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.operators.array.php">
 <link rel="shorturl" href="https://www.php.net/operators.array">
 <link rel="alternate" href="https://www.php.net/operators.array" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.operators.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.operators.string.php">
 <link rel="next" href="https://www.php.net/manual/en/language.operators.type.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.operators.array.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.operators.array.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.operators.array.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.operators.array.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.operators.array.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.operators.array.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.operators.array.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.operators.array.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.operators.array.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.operators.array.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.operators.array.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Array Operators" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Array - Manual" />
<meta name="twitter:description" content="Array Operators" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Array - Manual" />
<meta itemprop="description" content="Array Operators" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Array Operators" />

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
        <a href="language.operators.type.php">
          Type &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.operators.string.php">
          &laquo; String        </a>
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
            <option value='en/language.operators.array.php' selected="selected">English</option>
            <option value='de/language.operators.array.php'>German</option>
            <option value='es/language.operators.array.php'>Spanish</option>
            <option value='fr/language.operators.array.php'>French</option>
            <option value='it/language.operators.array.php'>Italian</option>
            <option value='ja/language.operators.array.php'>Japanese</option>
            <option value='pt_BR/language.operators.array.php'>Brazilian Portuguese</option>
            <option value='ru/language.operators.array.php'>Russian</option>
            <option value='tr/language.operators.array.php'>Turkish</option>
            <option value='uk/language.operators.array.php'>Ukrainian</option>
            <option value='zh/language.operators.array.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.operators.array" class="sect1">
 <h2 class="title">Array Operators</h2>
 
 <table class="doctable table">
  <caption><strong>Array Operators</strong></caption>
  
   <thead>
    <tr>
     <th>Example</th>
     <th>Name</th>
     <th>Result</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr>
     <td>$a + $b</td>
     <td>Union</td>
     <td>Union of <var class="varname">$a</var> and <var class="varname">$b</var>.</td>
    </tr>

    <tr>
     <td>$a == $b</td>
     <td>Equality</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> and <var class="varname">$b</var> have the same key/value pairs.</td>
    </tr>

    <tr>
     <td>$a === $b</td>
     <td>Identity</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> and <var class="varname">$b</var> have the same key/value pairs in the same
      order and of the same types.</td>
    </tr>

    <tr>
     <td>$a != $b</td>
     <td>Inequality</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is not equal to <var class="varname">$b</var>.</td>
    </tr>

    <tr>
     <td>$a &lt;&gt; $b</td>
     <td>Inequality</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is not equal to <var class="varname">$b</var>.</td>
    </tr>

    <tr>
     <td>$a !== $b</td>
     <td>Non-identity</td>
     <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <var class="varname">$a</var> is not identical to <var class="varname">$b</var>.</td>
    </tr>

   </tbody>
  
 </table>

 <p class="para">
  The <code class="literal">+</code> operator returns the right-hand array appended
  to the left-hand array; for keys that exist in both arrays, the elements
  from the left-hand array will be used, and the matching elements from the
  right-hand array will be ignored.
 </p>
 <p class="para">
  <div class="example" id="example-179">
   <p><strong>Example #1 Array Append Operator</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"apple"</span><span style="color: #007700">, </span><span style="color: #DD0000">"b" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"banana"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"pear"</span><span style="color: #007700">, </span><span style="color: #DD0000">"b" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"strawberry"</span><span style="color: #007700">, </span><span style="color: #DD0000">"c" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"cherry"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b</span><span style="color: #007700">; </span><span style="color: #FF8000">// Union of $a and $b<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Union of \$a and \$b: \n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">$b </span><span style="color: #007700">+ </span><span style="color: #0000BB">$a</span><span style="color: #007700">; </span><span style="color: #FF8000">// Union of $b and $a<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Union of \$b and \$a: \n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">+= </span><span style="color: #0000BB">$b</span><span style="color: #007700">; </span><span style="color: #FF8000">// Union of $a += $b is $a and $b<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Union of \$a += \$b: \n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Union of $a and $b:
array(3) {
  [&quot;a&quot;]=&gt;
  string(5) &quot;apple&quot;
  [&quot;b&quot;]=&gt;
  string(6) &quot;banana&quot;
  [&quot;c&quot;]=&gt;
  string(6) &quot;cherry&quot;
}
Union of $b and $a:
array(3) {
  [&quot;a&quot;]=&gt;
  string(4) &quot;pear&quot;
  [&quot;b&quot;]=&gt;
  string(10) &quot;strawberry&quot;
  [&quot;c&quot;]=&gt;
  string(6) &quot;cherry&quot;
}
Union of $a += $b:
array(3) {
  [&quot;a&quot;]=&gt;
  string(5) &quot;apple&quot;
  [&quot;b&quot;]=&gt;
  string(6) &quot;banana&quot;
  [&quot;c&quot;]=&gt;
  string(6) &quot;cherry&quot;
}
</pre></div>
   </div>
  </div>
 </p>
 <p class="para">
  Elements of arrays are equal for the comparison if they have the
  same key and value.
 </p>
 <p class="para">
  <div class="example" id="example-180">
   <p><strong>Example #2 Comparing arrays</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"apple"</span><span style="color: #007700">, </span><span style="color: #DD0000">"banana"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"banana"</span><span style="color: #007700">, </span><span style="color: #DD0000">"0" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"apple"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">== </span><span style="color: #0000BB">$b</span><span style="color: #007700">); </span><span style="color: #FF8000">// bool(true)<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">=== </span><span style="color: #0000BB">$b</span><span style="color: #007700">); </span><span style="color: #FF8000">// bool(false)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>

 <div class="sect2">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="language.types.array.php" class="link">Array type</a></li>
    <li><a href="ref.array.php" class="link">Array functions</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/operators/array.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.operators.array%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.operators.array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.array.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86379">  <div class="votes">
    <div id="Vu86379">
    <a href="/manual/vote-note.php?id=86379&amp;page=language.operators.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86379">
    <a href="/manual/vote-note.php?id=86379&amp;page=language.operators.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86379" title="79% like this...">
    241
    </div>
  </div>
  <a href="#86379" class="name">
  <strong class="user"><em>cb at netalyst dot com</em></strong></a><a class="genanchor" href="#86379"> &para;</a><div class="date" title="2008-10-15 11:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86379">
<div class="phpcode"><code><span class="html">The union operator did not behave as I thought it would on first glance. It implements a union (of sorts) based on the keys of the array, not on the values.<br /><br />For instance:<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array(</span><span class="string">'one'</span><span class="keyword">,</span><span class="string">'two'</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">=array(</span><span class="string">'three'</span><span class="keyword">,</span><span class="string">'four'</span><span class="keyword">,</span><span class="string">'five'</span><span class="keyword">);<br /><br /></span><span class="comment">//not a union of arrays' values<br /></span><span class="keyword">echo </span><span class="string">'$a + $b : '</span><span class="keyword">;<br /></span><span class="default">print_r </span><span class="keyword">(</span><span class="default">$a </span><span class="keyword">+ </span><span class="default">$b</span><span class="keyword">);<br /><br /></span><span class="comment">//a union of arrays' values<br /></span><span class="keyword">echo </span><span class="string">"array_unique(array_merge(</span><span class="default">$a</span><span class="string">,</span><span class="default">$b</span><span class="string">)):"</span><span class="keyword">;<br /></span><span class="comment">// cribbed from <a href="http://oreilly.com/catalog/progphp/chapter/ch05.html" rel="nofollow" target="_blank">http://oreilly.com/catalog/progphp/chapter/ch05.html</a><br /></span><span class="default">print_r </span><span class="keyword">(</span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">)));<br /></span><span class="default">?&gt;<br /></span><br />//output<br /><br />$a + $b : Array<br />(<br />    [0] =&gt; one<br />    [1] =&gt; two<br />    [2] =&gt; five<br />)<br />array_unique(array_merge(Array,Array)):Array<br />(<br />    [0] =&gt; one<br />    [1] =&gt; two<br />    [2] =&gt; three<br />    [3] =&gt; four<br />    [4] =&gt; five<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="74635">  <div class="votes">
    <div id="Vu74635">
    <a href="/manual/vote-note.php?id=74635&amp;page=language.operators.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74635">
    <a href="/manual/vote-note.php?id=74635&amp;page=language.operators.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74635" title="66% like this...">
    45
    </div>
  </div>
  <a href="#74635" class="name">
  <strong class="user"><em>Q1712 at online dot ms</em></strong></a><a class="genanchor" href="#74635"> &para;</a><div class="date" title="2007-04-20 05:54"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74635">
<div class="phpcode"><code><span class="html">The example may get u into thinking that the identical operator returns true because the key of apple is a string but that is not the case, cause if a string array key is the standart representation of a integer it's gets a numeral key automaticly. <br /><br />The identical operator just requires that the keys are in the same order in both arrays:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array (</span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">"apple"</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">"banana"</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= array (</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">"banana"</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">"apple"</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a </span><span class="keyword">=== </span><span class="default">$b</span><span class="keyword">); </span><span class="comment">// prints bool(false) as well<br /><br /></span><span class="default">$b </span><span class="keyword">= array (</span><span class="string">"0" </span><span class="keyword">=&gt; </span><span class="string">"apple"</span><span class="keyword">, </span><span class="string">"1" </span><span class="keyword">=&gt; </span><span class="string">"banana"</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a </span><span class="keyword">=== </span><span class="default">$b</span><span class="keyword">); </span><span class="comment">// prints bool(true)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="41811">  <div class="votes">
    <div id="Vu41811">
    <a href="/manual/vote-note.php?id=41811&amp;page=language.operators.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41811">
    <a href="/manual/vote-note.php?id=41811&amp;page=language.operators.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41811" title="64% like this...">
    27
    </div>
  </div>
  <a href="#41811" class="name">
  <strong class="user"><em>dfranklin at fen dot com</em></strong></a><a class="genanchor" href="#41811"> &para;</a><div class="date" title="2004-04-22 01:40"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41811">
<div class="phpcode"><code><span class="html">Note that + will not renumber numeric array keys.  If you have two numeric arrays, and their indices overlap, + will use the first array's values for each numeric key, adding the 2nd array's values only where the first doesn't already have a value for that index.  Example:<br /><br />$a = array('red', 'orange');<br />$b = array('yellow', 'green', 'blue');<br />$both = $a + $b;<br />var_dump($both);<br /><br />Produces the output:<br /><br />array(3) { [0]=&gt;  string(3) "red" [1]=&gt;  string(6) "orange" [2]=&gt;  string(4) "blue" }<br /><br />To get a 5-element array, use array_merge.<br /><br />    Dan</span></code></div>
  </div>
 </div>
  <div class="note" id="121665">  <div class="votes">
    <div id="Vu121665">
    <a href="/manual/vote-note.php?id=121665&amp;page=language.operators.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121665">
    <a href="/manual/vote-note.php?id=121665&amp;page=language.operators.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121665" title="61% like this...">
    11
    </div>
  </div>
  <a href="#121665" class="name">
  <strong class="user"><em>xtpeqii at Hotmail dot com</em></strong></a><a class="genanchor" href="#121665"> &para;</a><div class="date" title="2017-09-21 08:02"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121665">
<div class="phpcode"><code><span class="html">$a=[ 3, 2, 1];<br />$b=[ 6, 5, 4];<br />var_dump( $a + $b );<br /><br />output:<br />array(3) {<br />  [0]=&gt;<br />  int(3)<br />  [1]=&gt;<br />  int(2)<br />  [2]=&gt;<br />  int(1)<br />}<br /><br />The reason for the above output is that EVERY array in PHP is an associative one.  <br />Since the 3 elements in $b have the same keys( or numeric indices ) as those in $a, those elements in $b are ignored by the union operator.</span></code></div>
  </div>
 </div>
  <div class="note" id="27536">  <div class="votes">
    <div id="Vu27536">
    <a href="/manual/vote-note.php?id=27536&amp;page=language.operators.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27536">
    <a href="/manual/vote-note.php?id=27536&amp;page=language.operators.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27536" title="58% like this...">
    19
    </div>
  </div>
  <a href="#27536" class="name">
  <strong class="user"><em>amirlaher AT yahoo DOT co SPOT uk</em></strong></a><a class="genanchor" href="#27536"> &para;</a><div class="date" title="2002-12-09 10:41"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27536">
<div class="phpcode"><code><span class="html">[]= could be considered an Array Operator (in the same way that .= is a String Operator). <br />[]= pushes an element onto the end of an array, similar to array_push:<br />&lt;? <br />  $array= array(0=&gt;"Amir",1=&gt;"needs");<br />  $array[]= "job";<br />  print_r($array);<br />?&gt;<br />Prints: Array ( [0] =&gt; Amir [1] =&gt; needs [2] =&gt; job )</span></code></div>
  </div>
 </div>
  <div class="note" id="107784">  <div class="votes">
    <div id="Vu107784">
    <a href="/manual/vote-note.php?id=107784&amp;page=language.operators.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107784">
    <a href="/manual/vote-note.php?id=107784&amp;page=language.operators.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107784" title="57% like this...">
    14
    </div>
  </div>
  <a href="#107784" class="name">
  <strong class="user"><em>Dan Patrick</em></strong></a><a class="genanchor" href="#107784"> &para;</a><div class="date" title="2012-03-04 06:39"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107784">
<div class="phpcode"><code><span class="html">It should be mentioned that the array union operator functions almost identically to array_replace with the exception that precedence of arguments is reversed.</span></code></div>
  </div>
 </div>
  <div class="note" id="127761">  <div class="votes">
    <div id="Vu127761">
    <a href="/manual/vote-note.php?id=127761&amp;page=language.operators.array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127761">
    <a href="/manual/vote-note.php?id=127761&amp;page=language.operators.array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127761" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127761" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#127761"> &para;</a><div class="date" title="2022-10-19 09:32"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127761">
<div class="phpcode"><code><span class="html">Merge two arrays and retain only unique values.<br />Append values from second array.<br />Do not care about keys.<br /><br /><span class="default">&lt;?php<br />$array1 </span><span class="keyword">= [<br />    </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'apple'</span><span class="keyword">,<br />    </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'orange'</span><span class="keyword">,<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'pear'</span><span class="keyword">,<br />];<br /><br /></span><span class="default">$array2 </span><span class="keyword">= [<br />    </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'melon'</span><span class="keyword">,<br />    </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'orange'</span><span class="keyword">,<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'banana'</span><span class="keyword">,<br />];<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(<br />    </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">) + </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">)<br />);<br /></span><span class="default">?&gt;<br /></span><br />Result:<br />[<br />  [0] =&gt; "apple",<br />  [1] =&gt; "orange",<br />  [2] =&gt; "pear",<br />  [3] =&gt; "melon",<br />  [4] =&gt; "banana",<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.operators.array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.array.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="language.operators.logical.php" title="Logic">Logic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.string.php" title="String">String</a>
                        </li>
                                                <li class="current">
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
