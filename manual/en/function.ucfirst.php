<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ucfirst - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ucfirst.php">
 <link rel="shorturl" href="https://www.php.net/ucfirst">
 <link rel="alternate" href="https://www.php.net/ucfirst" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.trim.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ucwords.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ucfirst.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ucfirst.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ucfirst.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ucfirst.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ucfirst.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ucfirst.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ucfirst.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ucfirst.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ucfirst.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ucfirst.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ucfirst.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Make a string's first character uppercase" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ucfirst - Manual" />
<meta name="twitter:description" content="Make a string's first character uppercase" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ucfirst - Manual" />
<meta itemprop="description" content="Make a string's first character uppercase" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Make a string's first character uppercase" />

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
        <a href="function.ucwords.php">
          ucwords &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.trim.php">
          &laquo; trim        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.ucfirst.php' selected="selected">English</option>
            <option value='de/function.ucfirst.php'>German</option>
            <option value='es/function.ucfirst.php'>Spanish</option>
            <option value='fr/function.ucfirst.php'>French</option>
            <option value='it/function.ucfirst.php'>Italian</option>
            <option value='ja/function.ucfirst.php'>Japanese</option>
            <option value='pt_BR/function.ucfirst.php'>Brazilian Portuguese</option>
            <option value='ru/function.ucfirst.php'>Russian</option>
            <option value='tr/function.ucfirst.php'>Turkish</option>
            <option value='uk/function.ucfirst.php'>Ukrainian</option>
            <option value='zh/function.ucfirst.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ucfirst" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ucfirst</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ucfirst</span> &mdash; <span class="dc-title">Make a string&#039;s first character uppercase</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ucfirst-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ucfirst</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns a string with the first character of
   <code class="parameter">string</code> capitalized, if that character is
   an ASCII character in the range from <code class="literal">&quot;a&quot;</code> (0x61) to
   <code class="literal">&quot;z&quot;</code> (0x7a).
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ucfirst-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ucfirst-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the resulting string.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ucfirst-changelog">
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
  <td>8.2.0</td>
  <td>
   Case conversion no longer depends on the locale set with
   <span class="function"><a href="function.setlocale.php" class="function">setlocale()</a></span>. Only ASCII characters will be converted.
  </td>
 </tr>


    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.ucfirst-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5192">
    <p><strong>Example #1 <span class="function"><strong>ucfirst()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'hello world!'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;             </span><span style="color: #FF8000">// Hello world!<br /><br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'HELLO WORLD!'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;             </span><span style="color: #FF8000">// HELLO WORLD!<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// Hello world!<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>   
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ucfirst-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.lcfirst.php" class="function" rel="rdfs-seeAlso">lcfirst()</a> - Make a string's first character lowercase</span></li>
    <li><span class="function"><a href="function.strtolower.php" class="function" rel="rdfs-seeAlso">strtolower()</a> - Make a string lowercase</span></li>
    <li><span class="function"><a href="function.strtoupper.php" class="function" rel="rdfs-seeAlso">strtoupper()</a> - Make a string uppercase</span></li>
    <li><span class="function"><a href="function.ucwords.php" class="function" rel="rdfs-seeAlso">ucwords()</a> - Uppercase the first character of each word in a string</span></li>
    <li><span class="function"><a href="function.mb-convert-case.php" class="function" rel="rdfs-seeAlso">mb_convert_case()</a> - Perform case folding on a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/ucfirst.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ucfirst%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ucfirst&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ucfirst.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">34 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="57298">  <div class="votes">
    <div id="Vu57298">
    <a href="/manual/vote-note.php?id=57298&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57298">
    <a href="/manual/vote-note.php?id=57298&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57298" title="61% like this...">
    77
    </div>
  </div>
  <a href="#57298" class="name">
  <strong class="user"><em>plemieux</em></strong></a><a class="genanchor" href="#57298"> &para;</a><div class="date" title="2005-09-29 11:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57298">
<div class="phpcode"><code><span class="html">Simple multi-bytes ucfirst():<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">my_mb_ucfirst</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$fc </span><span class="keyword">= </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));<br />    return </span><span class="default">$fc</span><span class="keyword">.</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84122">  <div class="votes">
    <div id="Vu84122">
    <a href="/manual/vote-note.php?id=84122&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84122">
    <a href="/manual/vote-note.php?id=84122&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84122" title="69% like this...">
    33
    </div>
  </div>
  <a href="#84122" class="name">
  <strong class="user"><em>prokur.net - there is my email</em></strong></a><a class="genanchor" href="#84122"> &para;</a><div class="date" title="2008-06-29 03:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84122">
<div class="phpcode"><code><span class="html">I believe that mb_ucfirst will be soon added in PHP, but for now this could be useful<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_ucfirst'</span><span class="keyword">) &amp;&amp; </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_substr'</span><span class="keyword">)) {<br />    function </span><span class="default">mb_ucfirst</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)) . </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        return </span><span class="default">$string</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />it also check is mb support enabled or not</span></code></div>
  </div>
 </div>
  <div class="note" id="125312">  <div class="votes">
    <div id="Vu125312">
    <a href="/manual/vote-note.php?id=125312&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125312">
    <a href="/manual/vote-note.php?id=125312&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125312" title="75% like this...">
    4
    </div>
  </div>
  <a href="#125312" class="name">
  <strong class="user"><em>Ekin</em></strong></a><a class="genanchor" href="#125312"> &para;</a><div class="date" title="2020-08-31 10:39"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125312">
<div class="phpcode"><code><span class="html">Using this function for Turkish language is won't work because of multi-byte characters. But you can use some tricks:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ucfirst_tr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$trMap </span><span class="keyword">= [</span><span class="string">'Ğ'</span><span class="keyword">=&gt;</span><span class="string">'ğ'</span><span class="keyword">,</span><span class="string">'Ü'</span><span class="keyword">=&gt;</span><span class="string">'ü'</span><span class="keyword">,</span><span class="string">'Ş'</span><span class="keyword">=&gt;</span><span class="string">'ş'</span><span class="keyword">,</span><span class="string">'İ'</span><span class="keyword">=&gt;</span><span class="string">'i'</span><span class="keyword">,</span><span class="string">'Ö'</span><span class="keyword">=&gt;</span><span class="string">'ö'</span><span class="keyword">,</span><span class="string">'Ç'</span><span class="keyword">=&gt;</span><span class="string">'ç'</span><span class="keyword">,</span><span class="string">'I'</span><span class="keyword">=&gt;</span><span class="string">'ı'</span><span class="keyword">];<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$trMap</span><span class="keyword">));<br />    </span><span class="default">$first </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$first </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$first</span><span class="keyword">, </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$trMap</span><span class="keyword">));<br />    </span><span class="default">$first </span><span class="keyword">= </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">$first</span><span class="keyword">);<br />    return </span><span class="default">$first </span><span class="keyword">. </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86902">  <div class="votes">
    <div id="Vu86902">
    <a href="/manual/vote-note.php?id=86902&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86902">
    <a href="/manual/vote-note.php?id=86902&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86902" title="60% like this...">
    22
    </div>
  </div>
  <a href="#86902" class="name">
  <strong class="user"><em>mattalexxpub at gmail dot com</em></strong></a><a class="genanchor" href="#86902"> &para;</a><div class="date" title="2008-11-09 05:10"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86902">
<div class="phpcode"><code><span class="html">This is what I use for converting strings to sentence case:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">sentence_case</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {
<br />    </span><span class="default">$sentences </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/([.?!]+)/'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">|</span><span class="default">PREG_SPLIT_DELIM_CAPTURE</span><span class="keyword">);
<br />    </span><span class="default">$new_string </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    foreach (</span><span class="default">$sentences </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$sentence</span><span class="keyword">) {
<br />        </span><span class="default">$new_string </span><span class="keyword">.= (</span><span class="default">$key </span><span class="keyword">&amp; </span><span class="default">1</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">?
<br />            </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sentence</span><span class="keyword">))) :
<br />            </span><span class="default">$sentence</span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">;
<br />    }
<br />    return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$new_string</span><span class="keyword">);
<br />}
<br />
<br />print </span><span class="default">sentence_case</span><span class="keyword">(</span><span class="string">'HMM. WOW! WHAT?'</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Outputs: "Hmm. Wow! What?"
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113806">  <div class="votes">
    <div id="Vu113806">
    <a href="/manual/vote-note.php?id=113806&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113806">
    <a href="/manual/vote-note.php?id=113806&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113806" title="66% like this...">
    7
    </div>
  </div>
  <a href="#113806" class="name">
  <strong class="user"><em>mingalevme at gmail dot com</em></strong></a><a class="genanchor" href="#113806"> &para;</a><div class="date" title="2013-12-05 10:32"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113806">
<div class="phpcode"><code><span class="html">Implementation of multi-bytes ucfirst for "multiword"-strings (module mbstring is required):<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public static function </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)<br />{<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$words </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/\b/u'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">);<br />    foreach (</span><span class="default">$words </span><span class="keyword">as </span><span class="default">$word</span><span class="keyword">) {<br />        </span><span class="default">$ucword </span><span class="keyword">= </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)) . </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="default">$ucword</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$str</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107700">  <div class="votes">
    <div id="Vu107700">
    <a href="/manual/vote-note.php?id=107700&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107700">
    <a href="/manual/vote-note.php?id=107700&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107700" title="60% like this...">
    14
    </div>
  </div>
  <a href="#107700" class="name">
  <strong class="user"><em>qeremy [atta] gmail [dotta] com</em></strong></a><a class="genanchor" href="#107700"> &para;</a><div class="date" title="2012-02-27 04:41"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107700">
<div class="phpcode"><code><span class="html">A proper Turkish solution;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ucfirst_turkish</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"//u"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">);<br />    return </span><span class="default">mb_convert_case</span><span class="keyword">(<br />        </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"i"</span><span class="keyword">, </span><span class="string">"İ"</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]), </span><span class="default">MB_CASE_TITLE</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">).<br />        </span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />}<br /><br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">"iyilik güzelLİK"</span><span class="keyword">;<br />echo </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;   </span><span class="comment">// Iyilik güzelLİK<br /></span><span class="keyword">echo </span><span class="default">ucfirst_turkish</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// İyilik güzelLİK<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81258">  <div class="votes">
    <div id="Vu81258">
    <a href="/manual/vote-note.php?id=81258&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81258">
    <a href="/manual/vote-note.php?id=81258&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81258" title="62% like this...">
    10
    </div>
  </div>
  <a href="#81258" class="name">
  <strong class="user"><em>charliefortune</em></strong></a><a class="genanchor" href="#81258"> &para;</a><div class="date" title="2008-02-20 03:48"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81258">
<div class="phpcode"><code><span class="html">Here's a function to capitalize segments of a name, and put the rest into lower case. You can pass the characters you want to use as delimiters.<br /><br />i.e. <span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">nameize</span><span class="keyword">(</span><span class="string">"john o'grady-smith"</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />returns John O'Grady-Smith<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">nameize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$a_char </span><span class="keyword">= array(</span><span class="string">"'"</span><span class="keyword">,</span><span class="string">"-"</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">)){    <br />    </span><span class="comment">//$str contains the complete raw name string<br />    //$a_char is an array containing the characters we use as separators for capitalization. If you don't pass anything, there are three in there as default.<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    foreach (</span><span class="default">$a_char </span><span class="keyword">as </span><span class="default">$temp</span><span class="keyword">){<br />        </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$temp</span><span class="keyword">);<br />        if (</span><span class="default">$pos</span><span class="keyword">){<br />            </span><span class="comment">//we are in the loop because we found one of the special characters in the array, so lets split it up into chunks and capitalize each one.<br />            </span><span class="default">$mend </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />            </span><span class="default">$a_split </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$temp</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">);<br />            foreach (</span><span class="default">$a_split </span><span class="keyword">as </span><span class="default">$temp2</span><span class="keyword">){<br />                </span><span class="comment">//capitalize each portion of the string which was separated at a special character<br />                </span><span class="default">$mend </span><span class="keyword">.= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$temp2</span><span class="keyword">).</span><span class="default">$temp</span><span class="keyword">;<br />                }<br />            </span><span class="default">$string </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$mend</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">);<br />            }    <br />        }<br />    return </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120689">  <div class="votes">
    <div id="Vu120689">
    <a href="/manual/vote-note.php?id=120689&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120689">
    <a href="/manual/vote-note.php?id=120689&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120689" title="61% like this...">
    5
    </div>
  </div>
  <a href="#120689" class="name">
  <strong class="user"><em>nospam at nospam dot com</em></strong></a><a class="genanchor" href="#120689"> &para;</a><div class="date" title="2017-02-22 07:46"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120689">
<div class="phpcode"><code><span class="html">Improved method of capitalizing first characters of sentences.<br />The first two manipulations (double spaces &amp; all caps) are optional so can be removed without harm.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// return string with first letters of sentences capitalized<br /></span><span class="keyword">function </span><span class="default">ucsentence</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />  if (</span><span class="default">$str</span><span class="keyword">) { </span><span class="comment">// input<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">32</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">32</span><span class="keyword">).</span><span class="string">'+/'</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">32</span><span class="keyword">), </span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// recursively replaces all double spaces with a space<br />    </span><span class="keyword">if ((</span><span class="default">$x </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">)) &amp;&amp; (</span><span class="default">$x </span><span class="keyword">== </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">))) </span><span class="default">$str </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// sample of first 10 chars is ALLCAPS so convert $str to lowercase; if always done then any proper capitals would be lost<br />    </span><span class="default">$na </span><span class="keyword">= array(</span><span class="string">'. '</span><span class="keyword">, </span><span class="string">'! '</span><span class="keyword">, </span><span class="string">'? '</span><span class="keyword">); </span><span class="comment">// punctuation needles<br />    </span><span class="keyword">foreach (</span><span class="default">$na </span><span class="keyword">as </span><span class="default">$n</span><span class="keyword">) { </span><span class="comment">// each punctuation needle<br />      </span><span class="keyword">if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) { </span><span class="comment">// punctuation needle found<br />        </span><span class="default">$sa </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// split<br />        </span><span class="keyword">foreach (</span><span class="default">$sa </span><span class="keyword">as </span><span class="default">$s</span><span class="keyword">) </span><span class="default">$ca</span><span class="keyword">[] = </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">); </span><span class="comment">// capitalize<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$ca</span><span class="keyword">); </span><span class="comment">// replace $str with rebuilt version<br />        </span><span class="keyword">unset(</span><span class="default">$ca</span><span class="keyword">); </span><span class="comment">//  clear for next loop<br />      </span><span class="keyword">}<br />    }<br />    return </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)); </span><span class="comment">// capitalize first letter in case no punctuation needles found<br />  </span><span class="keyword">}<br />}<br /></span><span class="default">?&gt;<br /></span><br />"heLLo EarthLing!" &gt;&gt; "HeLLo EarthLing!"<br />"I'M MOSTLY. caps!  " &gt;&gt; "I'm mostly. Caps!"<br />"ALLCAPS" &gt;&gt; "Allcaps"<br />"i haVe neST.ed punct,u.ation!  sp    A  c es.  and CAPs..  " &gt;&gt; "I haVe neST.ed punct,u.ation! Sp A c es. And CAPs.."</span></code></div>
  </div>
 </div>
  <div class="note" id="121552">  <div class="votes">
    <div id="Vu121552">
    <a href="/manual/vote-note.php?id=121552&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121552">
    <a href="/manual/vote-note.php?id=121552&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121552" title="62% like this...">
    2
    </div>
  </div>
  <a href="#121552" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#121552"> &para;</a><div class="date" title="2017-08-23 12:48"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121552">
<div class="phpcode"><code><span class="html">Format the input string:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">ucsentences</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">){<br />    </span><span class="default">$parts </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/([^\.\!\?;]+[\.\!\?;"]+)/'</span><span class="keyword">, </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">), (-</span><span class="default">1</span><span class="keyword">), </span><span class="default">PREG_SPLIT_DELIM_CAPTURE</span><span class="keyword">|</span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">); <br />    </span><span class="default">$r </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    foreach(</span><span class="default">$parts </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$sentence</span><span class="keyword">){<br />        </span><span class="default">$r </span><span class="keyword">.= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sentence</span><span class="keyword">)) . </span><span class="string">' '</span><span class="keyword">;<br />    }<br />    </span><span class="default">$r </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\bi\b/'</span><span class="keyword">, </span><span class="string">'I'</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">);<br />    </span><span class="default">$r </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">'/("[a-z])/'</span><span class="keyword">, function(</span><span class="default">$m</span><span class="keyword">){ return </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);}, </span><span class="default">$r</span><span class="keyword">);<br />    return </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">'i\'m not sure. if this is good enough, but i thought: "hey, who know\'s. maybe i am right."'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span>Outputs:<br />I'm not sure. If this is good enough, but I thought: "Hey, who know's. Maybe I am right."</span></code></div>
  </div>
 </div>
  <div class="note" id="72185">  <div class="votes">
    <div id="Vu72185">
    <a href="/manual/vote-note.php?id=72185&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72185">
    <a href="/manual/vote-note.php?id=72185&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72185" title="63% like this...">
    3
    </div>
  </div>
  <a href="#72185" class="name">
  <strong class="user"><em>Carel at divers information with dotcom</em></strong></a><a class="genanchor" href="#72185"> &para;</a><div class="date" title="2007-01-06 02:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72185">
<div class="phpcode"><code><span class="html">I made a small change. Now it takes care of points in numbers<br /><br />function ucsentence ($string){<br />   $string = explode ('.', $string);<br />   $count = count ($string);<br />   for ($i = 0; $i &lt; $count; $i++){<br />       $string[$i]  = ucfirst (trim ($string[$i]));<br />       if ($i &gt; 0){<br />           if ((ord($string[$i]{0})&lt;48) || (ord($string[$i]{0})&gt;57)) {<br />              $string[$i] = ' ' . $string[$i];<br />           }   <br />       }<br />   }<br />   $string = implode ('.', $string);<br />   return $string;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="62371">  <div class="votes">
    <div id="Vu62371">
    <a href="/manual/vote-note.php?id=62371&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62371">
    <a href="/manual/vote-note.php?id=62371&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62371" title="63% like this...">
    3
    </div>
  </div>
  <a href="#62371" class="name">
  <strong class="user"><em>Bartuc</em></strong></a><a class="genanchor" href="#62371"> &para;</a><div class="date" title="2006-02-26 05:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62371">
<div class="phpcode"><code><span class="html">Here is the fixed function for Turkish alphabet..<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">uc_first</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){<br />   </span><span class="default">$str</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, <br />   </span><span class="string">"abcdefgh?ijklmnopqrstuvwxyz"</span><span class="keyword">.<br />   </span><span class="string">"\x9C\x9A\xE0\xE1\xE2\xE3"</span><span class="keyword">.<br />   </span><span class="string">"\xE4\xE5\xE6\xE7\xE8\xE9"</span><span class="keyword">.<br />   </span><span class="string">"\xEA\xEB\xEC\xED\xEE\xEF"</span><span class="keyword">.<br />   </span><span class="string">"\xF0\xF1\xF2\xF3\xF4\xF5"</span><span class="keyword">.<br />   </span><span class="string">"\xF6\xF8\xF9\xFA\xFB\xFC"</span><span class="keyword">.<br />   </span><span class="string">"\xFE\xFF"</span><span class="keyword">, <br />   </span><span class="string">"ABCDEFGHI?JKLMNOPQRSTUVWXYZ"</span><span class="keyword">.<br />   </span><span class="string">"\x8C\x8A\xC0\xC1\xC2\xC3\xC4"</span><span class="keyword">.<br />   </span><span class="string">"\xC5\xC6\xC7\xC8\xC9\xCA\xCB"</span><span class="keyword">.<br />   </span><span class="string">"\xCC\xCD\xCE\xCF\xD0\xD1\xD2"</span><span class="keyword">.<br />   </span><span class="string">"\xD3\xD4\xD5\xD6\xD8\xD9\xDA"</span><span class="keyword">.<br />   </span><span class="string">"\xDB\xDC\xDE\x9F"</span><span class="keyword">);<br />   return </span><span class="default">$str</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103907">  <div class="votes">
    <div id="Vu103907">
    <a href="/manual/vote-note.php?id=103907&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103907">
    <a href="/manual/vote-note.php?id=103907&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103907" title="57% like this...">
    4
    </div>
  </div>
  <a href="#103907" class="name">
  <strong class="user"><em>Quicker</em></strong></a><a class="genanchor" href="#103907"> &para;</a><div class="date" title="2011-05-10 01:53"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103907">
<div class="phpcode"><code><span class="html">if you want to ucfirst for utf8 try this one:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ucfirst_utf8</span><span class="keyword">(</span><span class="default">$stri</span><span class="keyword">){
<br /> if(</span><span class="default">$stri</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}&gt;=</span><span class="string">"\xc3"</span><span class="keyword">)
<br />     return ((</span><span class="default">$stri</span><span class="keyword">{</span><span class="default">1</span><span class="keyword">}&gt;=</span><span class="string">"\xa0"</span><span class="keyword">)?
<br />     (</span><span class="default">$stri</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$stri</span><span class="keyword">{</span><span class="default">1</span><span class="keyword">})-</span><span class="default">32</span><span class="keyword">)):
<br />     (</span><span class="default">$stri</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}.</span><span class="default">$stri</span><span class="keyword">{</span><span class="default">1</span><span class="keyword">})).</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$stri</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);
<br /> else return </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$stri</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />It is quick, not language (but utf8) dependend and does not use any mb-functions such as mb_ucfirst.</span></code></div>
  </div>
 </div>
  <div class="note" id="97277">  <div class="votes">
    <div id="Vu97277">
    <a href="/manual/vote-note.php?id=97277&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97277">
    <a href="/manual/vote-note.php?id=97277&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97277" title="57% like this...">
    3
    </div>
  </div>
  <a href="#97277" class="name">
  <strong class="user"><em>pete at namecube dot net</em></strong></a><a class="genanchor" href="#97277"> &para;</a><div class="date" title="2010-04-11 07:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97277">
<div class="phpcode"><code><span class="html">for anyone wanting to ucfirst each word in a sentence this works for me:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ucfirst_sentence</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)
<br />{
<br />    return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\b(\w)/e'</span><span class="keyword">, </span><span class="string">'strtoupper("$1")'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93763">  <div class="votes">
    <div id="Vu93763">
    <a href="/manual/vote-note.php?id=93763&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93763">
    <a href="/manual/vote-note.php?id=93763&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93763" title="57% like this...">
    3
    </div>
  </div>
  <a href="#93763" class="name">
  <strong class="user"><em>octavius</em></strong></a><a class="genanchor" href="#93763"> &para;</a><div class="date" title="2009-09-26 05:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93763">
<div class="phpcode"><code><span class="html">For lithuanian text with utf-8 encoding I use two functions (thanks [mattalexxpub at gmail dot com] and Svetoslav Marinov)
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">my_ucfirst</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$e </span><span class="keyword">=</span><span class="string">'utf-8'</span><span class="keyword">) {
<br />    if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_strtoupper'</span><span class="keyword">) &amp;&amp; </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_substr'</span><span class="keyword">) &amp;&amp; !empty(</span><span class="default">$string</span><span class="keyword">)) {
<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">);
<br />        </span><span class="default">$upper </span><span class="keyword">= </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">);
<br />            </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#(.)#us'</span><span class="keyword">, </span><span class="default">$upper</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);
<br />            </span><span class="default">$string </span><span class="keyword">= </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">), </span><span class="default">$e</span><span class="keyword">);
<br />    }
<br />    else {
<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />    }
<br />    return </span><span class="default">$string</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">sentence_case</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {
<br />    </span><span class="default">$sentences </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/([.?!]+)/'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">|</span><span class="default">PREG_SPLIT_DELIM_CAPTURE</span><span class="keyword">);
<br />    </span><span class="default">$new_string </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    foreach (</span><span class="default">$sentences </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$sentence</span><span class="keyword">) {
<br />        </span><span class="default">$new_string </span><span class="keyword">.= (</span><span class="default">$key </span><span class="keyword">&amp; </span><span class="default">1</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">?
<br />            </span><span class="default">my_ucfirst</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sentence</span><span class="keyword">))) :
<br />            </span><span class="default">$sentence</span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">;  
<br />    }
<br />    return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$new_string</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105435">  <div class="votes">
    <div id="Vu105435">
    <a href="/manual/vote-note.php?id=105435&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105435">
    <a href="/manual/vote-note.php?id=105435&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105435" title="56% like this...">
    2
    </div>
  </div>
  <a href="#105435" class="name">
  <strong class="user"><em>vlknmtn at gmail dot com</em></strong></a><a class="genanchor" href="#105435"> &para;</a><div class="date" title="2011-08-17 04:31"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105435">
<div class="phpcode"><code><span class="html">Turkish solution:<br /><br /><span class="default">&lt;?php<br />mb_internal_encoding</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">);<br /></span><span class="default">mb_regex_encoding</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">);<br /><br />function </span><span class="default">tr_ilkbuyuk</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)<br />{<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"I"</span><span class="keyword">,</span><span class="string">"ı"</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br />    <br />    if(</span><span class="default">$text</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"i"</span><span class="keyword">)<br />        </span><span class="default">$tr_text </span><span class="keyword">= </span><span class="string">"İ"</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    else<br />        </span><span class="default">$tr_text </span><span class="keyword">= </span><span class="default">mb_convert_case</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">MB_CASE_TITLE</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br />    <br />    return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$tr_text</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">tr_ucwords</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)<br />{<br />    </span><span class="default">$p </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">))<br />    {<br />        </span><span class="default">$tr_text </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />        foreach(</span><span class="default">$p </span><span class="keyword">AS </span><span class="default">$item</span><span class="keyword">)<br />            </span><span class="default">$tr_text </span><span class="keyword">.= </span><span class="string">" "</span><span class="keyword">.</span><span class="default">tr_ilkbuyuk</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">);<br />            <br />        return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$tr_text</span><span class="keyword">);<br />    }<br />    else<br />        return </span><span class="default">tr_ilkbuyuk</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$deger </span><span class="keyword">= </span><span class="string">"ıişllşlsdg"</span><span class="keyword">;<br /><br />echo </span><span class="default">tr_ucwords</span><span class="keyword">(</span><span class="default">$deger</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60620">  <div class="votes">
    <div id="Vu60620">
    <a href="/manual/vote-note.php?id=60620&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60620">
    <a href="/manual/vote-note.php?id=60620&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60620" title="57% like this...">
    2
    </div>
  </div>
  <a href="#60620" class="name">
  <strong class="user"><em>Markus Ernst</em></strong></a><a class="genanchor" href="#60620"> &para;</a><div class="date" title="2006-01-12 06:39"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60620">
<div class="phpcode"><code><span class="html">plemieux' function did not work for me without passing the encoding to every single mb function (despite ini_set('default_charset', 'utf-8') at the top of the script). This is the example that works in my application (PHP 4.3):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">my_mb_ucfirst</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">=</span><span class="string">'utf-8'</span><span class="keyword">) {<br />    </span><span class="default">$fc </span><span class="keyword">= </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">), </span><span class="default">$e</span><span class="keyword">); <br />    return </span><span class="default">$fc</span><span class="keyword">.</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">), </span><span class="default">$e</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87133">  <div class="votes">
    <div id="Vu87133">
    <a href="/manual/vote-note.php?id=87133&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87133">
    <a href="/manual/vote-note.php?id=87133&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87133" title="53% like this...">
    4
    </div>
  </div>
  <a href="#87133" class="name">
  <strong class="user"><em>svetoslavm at gmail dot com</em></strong></a><a class="genanchor" href="#87133"> &para;</a><div class="date" title="2008-11-20 07:40"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87133">
<div class="phpcode"><code><span class="html">For some reason this worked for me.
<br />
<br />Mac OS 10.5.1 
<br />PHP 5.2.6
<br />
<br /><span class="default">&lt;?php
<br />   </span><span class="comment">/**
<br />     * ucfirst UTF-8 aware function
<br />     *
<br />     * @param string $string
<br />     * @return string
<br />     * @see <a href="http://ca.php.net/ucfirst" rel="nofollow" target="_blank">http://ca.php.net/ucfirst</a>
<br />     */
<br />    </span><span class="keyword">function </span><span class="default">my_ucfirst</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$e </span><span class="keyword">=</span><span class="string">'utf-8'</span><span class="keyword">) {
<br />        if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_strtoupper'</span><span class="keyword">) &amp;&amp; </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_substr'</span><span class="keyword">) &amp;&amp; !empty(</span><span class="default">$string</span><span class="keyword">)) {
<br />            </span><span class="default">$string </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">);
<br />            </span><span class="default">$upper </span><span class="keyword">= </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">);
<br />            </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#(.)#us'</span><span class="keyword">, </span><span class="default">$upper</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);
<br />            </span><span class="default">$string </span><span class="keyword">= </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] . </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">), </span><span class="default">$e</span><span class="keyword">);
<br />        } else {
<br />            </span><span class="default">$string </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />        }
<br />        return </span><span class="default">$string</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />Svetoslav Marinov
<br /><a href="http://slavi.biz" rel="nofollow" target="_blank">http://slavi.biz</a></span></code></div>
  </div>
 </div>
  <div class="note" id="92584">  <div class="votes">
    <div id="Vu92584">
    <a href="/manual/vote-note.php?id=92584&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92584">
    <a href="/manual/vote-note.php?id=92584&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92584" title="53% like this...">
    1
    </div>
  </div>
  <a href="#92584" class="name">
  <strong class="user"><em>bgschool</em></strong></a><a class="genanchor" href="#92584"> &para;</a><div class="date" title="2009-07-30 04:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92584">
<div class="phpcode"><code><span class="html">Simple function for use ucfirst with utf-8 encoded cyrylic text
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">public function </span><span class="default">capitalize_first</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {
<br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">, </span><span class="string">"Windows-1251"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// convert to windows-1251
<br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">);
<br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">"Windows-1251"</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">); </span><span class="comment">// convert back to utf-8
<br />        
<br />        </span><span class="keyword">return </span><span class="default">$line</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95796">  <div class="votes">
    <div id="Vu95796">
    <a href="/manual/vote-note.php?id=95796&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95796">
    <a href="/manual/vote-note.php?id=95796&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95796" title="52% like this...">
    1
    </div>
  </div>
  <a href="#95796" class="name">
  <strong class="user"><em>wilfried dot loche at fr dot adp dot com</em></strong></a><a class="genanchor" href="#95796"> &para;</a><div class="date" title="2010-01-22 02:22"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95796">
<div class="phpcode"><code><span class="html">If someone looks for the equivalent on Oracle DB, here it is: INITCAP. Hope this helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="115039">  <div class="votes">
    <div id="Vu115039">
    <a href="/manual/vote-note.php?id=115039&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115039">
    <a href="/manual/vote-note.php?id=115039&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115039" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115039" class="name">
  <strong class="user"><em>kiprasbal at gmail dot com</em></strong></a><a class="genanchor" href="#115039"> &para;</a><div class="date" title="2014-05-16 06:34"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115039">
<div class="phpcode"><code><span class="html">My version, converst first letter of the first word in the string to uppercase<br /><br />public function mb_ucfirst($str) {<br />        $aParts = explode(" ",$str);<br />        $firstWord = mb_convert_case($aParts[0],MB_CASE_TITLE,"UTF-8");<br />        unset($aParts[0]);<br /><br />        return $firstWord." ".implode(" ",$aParts);<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="81018">  <div class="votes">
    <div id="Vu81018">
    <a href="/manual/vote-note.php?id=81018&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81018">
    <a href="/manual/vote-note.php?id=81018&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81018" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81018" class="name">
  <strong class="user"><em>webmaster at onmyway dot cz</em></strong></a><a class="genanchor" href="#81018"> &para;</a><div class="date" title="2008-02-11 03:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81018">
<div class="phpcode"><code><span class="html">Inspired by the lcfirst function a simple mb_lcfirst to cope with multibyte strings:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mb_lcfirst</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />{<br />  if(</span><span class="default">$enc </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">mb_internal_encoding</span><span class="keyword">();<br />  return </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$enc</span><span class="keyword">), </span><span class="default">$enc</span><span class="keyword">).</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$enc</span><span class="keyword">), </span><span class="default">$enc</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76384">  <div class="votes">
    <div id="Vu76384">
    <a href="/manual/vote-note.php?id=76384&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76384">
    <a href="/manual/vote-note.php?id=76384&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76384" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76384" class="name">
  <strong class="user"><em>adefoor at gmail dot com</em></strong></a><a class="genanchor" href="#76384"> &para;</a><div class="date" title="2007-07-12 11:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76384">
<div class="phpcode"><code><span class="html">Ken and zee<br /><br />One thing I would do to make this more unviersally work would be to add strtolower() around your $sentence.  Doing this will allow you to convert an all caps text block as well as an all lowercase text block.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">sentence_cap</span><span class="keyword">(</span><span class="default">$impexp</span><span class="keyword">, </span><span class="default">$sentence_split</span><span class="keyword">) {<br />    </span><span class="default">$textbad</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="default">$impexp</span><span class="keyword">, </span><span class="default">$sentence_split</span><span class="keyword">);<br />    </span><span class="default">$newtext </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$textbad </span><span class="keyword">as </span><span class="default">$sentence</span><span class="keyword">) {<br />        </span><span class="default">$sentencegood</span><span class="keyword">=</span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$sentence</span><span class="keyword">));<br />        </span><span class="default">$newtext</span><span class="keyword">[] = </span><span class="default">$sentencegood</span><span class="keyword">;<br />    }<br />    </span><span class="default">$textgood </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$impexp</span><span class="keyword">, </span><span class="default">$newtext</span><span class="keyword">);<br />    return </span><span class="default">$textgood</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$text </span><span class="keyword">= </span><span class="string">"this is a sentence. this is another sentence! this is the fourth sentence? no, this is the fourth sentence."</span><span class="keyword">;<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">sentence_cap</span><span class="keyword">(</span><span class="string">". "</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">sentence_cap</span><span class="keyword">(</span><span class="string">"! "</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">sentence_cap</span><span class="keyword">(</span><span class="string">"? "</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br /><br />echo </span><span class="default">$text</span><span class="keyword">; </span><span class="comment">// This is a sentence. This is another sentence! This is the fourth sentence? No, this is the fourth sentence.<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63799">  <div class="votes">
    <div id="Vu63799">
    <a href="/manual/vote-note.php?id=63799&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63799">
    <a href="/manual/vote-note.php?id=63799&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63799" title="50% like this...">
    0
    </div>
  </div>
  <a href="#63799" class="name">
  <strong class="user"><em>Markus Ernst</em></strong></a><a class="genanchor" href="#63799"> &para;</a><div class="date" title="2006-03-31 12:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63799">
<div class="phpcode"><code><span class="html">A combination of the below functions to enable ucfirst for multibyte strings in a shared hosting environment (where you can not always count on mbstring to be installed):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">my_mb_ucfirst</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">=</span><span class="string">'utf-8'</span><span class="keyword">) {<br />    if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'mb_strtoupper'</span><span class="keyword">)) {<br />        </span><span class="default">$fc </span><span class="keyword">= </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">), </span><span class="default">$e</span><span class="keyword">); <br />        return </span><span class="default">$fc</span><span class="keyword">.</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">), </span><span class="default">$e</span><span class="keyword">);<br />    }<br />    else { <br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />        </span><span class="default">$str</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],<br />            </span><span class="string">"abcdefghýijklmnopqrstuvwxyz"</span><span class="keyword">.<br />            </span><span class="string">"\x9C\x9A\xE0\xE1\xE2\xE3"</span><span class="keyword">.<br />            </span><span class="string">"\xE4\xE5\xE6\xE7\xE8\xE9"</span><span class="keyword">.<br />            </span><span class="string">"\xEA\xEB\xEC\xED\xEE\xEF"</span><span class="keyword">.<br />            </span><span class="string">"\xF0\xF1\xF2\xF3\xF4\xF5"</span><span class="keyword">.<br />            </span><span class="string">"\xF6\xF8\xF9\xFA\xFB\xFC"</span><span class="keyword">.<br />            </span><span class="string">"\xFE\xFF"</span><span class="keyword">,<br />            </span><span class="string">"ABCDEFGHÝIJKLMNOPQRSTUVWXYZ"</span><span class="keyword">.<br />            </span><span class="string">"\x8C\x8A\xC0\xC1\xC2\xC3\xC4"</span><span class="keyword">.<br />            </span><span class="string">"\xC5\xC6\xC7\xC8\xC9\xCA\xCB"</span><span class="keyword">.<br />            </span><span class="string">"\xCC\xCD\xCE\xCF\xD0\xD1\xD2"</span><span class="keyword">.<br />            </span><span class="string">"\xD3\xD4\xD5\xD6\xD8\xD9\xDA"</span><span class="keyword">.<br />            </span><span class="string">"\xDB\xDC\xDE\x9F"</span><span class="keyword">);<br />        return </span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54076">  <div class="votes">
    <div id="Vu54076">
    <a href="/manual/vote-note.php?id=54076&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54076">
    <a href="/manual/vote-note.php?id=54076&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54076" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54076" class="name">
  <strong class="user"><em>info [at] spwdesign [dot] com</em></strong></a><a class="genanchor" href="#54076"> &para;</a><div class="date" title="2005-06-23 12:48"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54076">
<div class="phpcode"><code><span class="html">This is a simple code to get all the 'bad words', stored in a database, out of the text. You could use str_ireplace but since that's installed on PHP5 only, this works as well. It strtolowers the text first then places capitals with ucfirst() where it thinks a capital should be placed, at a new sentence. The previous sentence is ended by '. ' then.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">filter</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">){<br />    </span><span class="default">$filters</span><span class="keyword">=</span><span class="default">mysql_query</span><span class="keyword">(</span><span class="string">"SELECT word,result FROM filter"</span><span class="keyword">);<br />    while(</span><span class="default">$filter</span><span class="keyword">=</span><span class="default">mysql_fetch_array</span><span class="keyword">(</span><span class="default">$filters</span><span class="keyword">)){<br />        </span><span class="default">$text</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">[</span><span class="default">word</span><span class="keyword">],</span><span class="default">$filter</span><span class="keyword">[</span><span class="default">result</span><span class="keyword">],</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">));<br />        </span><span class="default">$parts</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">". "</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++){<br />            </span><span class="default">$parts</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]=</span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />        }<br />        </span><span class="default">$text</span><span class="keyword">=</span><span class="default">implode</span><span class="keyword">(</span><span class="string">". "</span><span class="keyword">,</span><span class="default">$parts</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$text</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50884">  <div class="votes">
    <div id="Vu50884">
    <a href="/manual/vote-note.php?id=50884&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50884">
    <a href="/manual/vote-note.php?id=50884&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50884" title="50% like this...">
    0
    </div>
  </div>
  <a href="#50884" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#50884"> &para;</a><div class="date" title="2005-03-12 05:11"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50884">
<div class="phpcode"><code><span class="html">Ah, the last code were spoiled, here is the fixed one:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">uc_first</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){<br />    </span><span class="default">$str</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, <br />    </span><span class="string">"abcdefghijklmnopqrstuvwxyz"</span><span class="keyword">.<br />    </span><span class="string">"\x9C\x9A\xE0\xE1\xE2\xE3"</span><span class="keyword">.<br />    </span><span class="string">"\xE4\xE5\xE6\xE7\xE8\xE9"</span><span class="keyword">.<br />    </span><span class="string">"\xEA\xEB\xEC\xED\xEE\xEF"</span><span class="keyword">.<br />    </span><span class="string">"\xF0\xF1\xF2\xF3\xF4\xF5"</span><span class="keyword">.<br />    </span><span class="string">"\xF6\xF8\xF9\xFA\xFB\xFC"</span><span class="keyword">.<br />    </span><span class="string">"\xFD\xFE\xFF"</span><span class="keyword">, <br />    </span><span class="string">"ABCDEFGHIJKLMNOPQRSTUVWXYZ"</span><span class="keyword">.<br />    </span><span class="string">"\x8C\x8A\xC0\xC1\xC2\xC3\xC4"</span><span class="keyword">.<br />    </span><span class="string">"\xC5\xC6\xC7\xC8\xC9\xCA\xCB"</span><span class="keyword">.<br />    </span><span class="string">"\xCC\xCD\xCE\xCF\xD0\xD1\xD2"</span><span class="keyword">.<br />    </span><span class="string">"\xD3\xD4\xD5\xD6\xD8\xD9\xDA"</span><span class="keyword">.<br />    </span><span class="string">"\xDB\xDC\xDD\xDE\x9F"</span><span class="keyword">);<br />    return </span><span class="default">$str</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />So, this function changes also other letters into uppercase, ucfirst() does only change: a-z to: A-Z.</span></code></div>
  </div>
 </div>
  <div class="note" id="43435">  <div class="votes">
    <div id="Vu43435">
    <a href="/manual/vote-note.php?id=43435&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43435">
    <a href="/manual/vote-note.php?id=43435&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43435" title="50% like this...">
    0
    </div>
  </div>
  <a href="#43435" class="name">
  <strong class="user"><em>steven at tux dot appstate dot edu</em></strong></a><a class="genanchor" href="#43435"> &para;</a><div class="date" title="2004-06-21 12:14"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43435">
<div class="phpcode"><code><span class="html">Note: the return for this function changed in versions 4.3 when a string is passed of length 0.  In &lt;4.2 false is returned and in &gt;4.3 a string of length 0 is returned.<br /><br />Example:<br /><br />$name = ucfirst("");<br />var_dump($name);<br /><br />$name = ucfirst("owen");<br />var_dump($name);<br /><br />Results for &lt;4.2:<br />bool(false) string(4) "Owen" <br /><br />Results for &gt;4.3:<br />string(0) "" string(4) "Owen"</span></code></div>
  </div>
 </div>
  <div class="note" id="41376">  <div class="votes">
    <div id="Vu41376">
    <a href="/manual/vote-note.php?id=41376&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41376">
    <a href="/manual/vote-note.php?id=41376&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41376" title="50% like this...">
    0
    </div>
  </div>
  <a href="#41376" class="name">
  <strong class="user"><em>Ami Hughes (ami at mistress dot name)</em></strong></a><a class="genanchor" href="#41376"> &para;</a><div class="date" title="2004-04-07 08:34"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41376">
<div class="phpcode"><code><span class="html">In the event you sort of need multiple delimiters to apply the same action to, you can preg_replace this "second delimiter" enveloping it with your actual delimiter.<br /> <br />A for instance, would be if you wanted to use something like Lee's FormatName function in an input box designed for their full name as this script was only designed to check the last name as if it were the entire string.  The problem is that you still want support for double-barreled names and you still want to be able to support the possibility that if the second part of the double-barreled name starts with "mc", that it will still be formatted correctly.<br /><br />This example does a preg_replace that surrounds the separator with your actual delimiter.  This is just a really quick alternative to writing some bigger fancier blah-blah function.  If there's a shorter, simpler way to do it, feel free to inform me.  (Emphasis on shorter and simpler because that was the whole point of this.) :D<br /><br />Here's the example.  I've removed Lee's comments as not to confuse them with my own.<br /><br /><span class="default">&lt;?php<br /><br />   </span><span class="keyword">function </span><span class="default">FormatName</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">)<br />   {<br />       if (empty(</span><span class="default">$name</span><span class="keyword">))<br />           return </span><span class="default">false</span><span class="keyword">;<br /><br />       </span><span class="default">$name </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />       </span><span class="default">$name </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"[\-]"</span><span class="keyword">, </span><span class="string">" - "</span><span class="keyword">,</span><span class="default">$name</span><span class="keyword">); </span><span class="comment">// Surround hyphens with our delimiter so our strncmp is accurate<br />       </span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^[a-z]{2,}$/i"</span><span class="keyword">,</span><span class="default">$name</span><span class="keyword">))  </span><span class="comment">// Simple preg_match if statement<br />       </span><span class="keyword">{<br />           <br />           </span><span class="default">$names_array </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">$name</span><span class="keyword">);  </span><span class="comment">// Set the delimiter as a space.<br />    <br />           </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$names_array</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)<br />           {<br />               if (</span><span class="default">strncmp</span><span class="keyword">(</span><span class="default">$names_array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">],</span><span class="string">'mc'</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">) == </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">ereg</span><span class="keyword">(</span><span class="string">'^[oO]\'[a-zA-Z]'</span><span class="keyword">,</span><span class="default">$names_array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]))<br />               {<br />                   </span><span class="default">$names_array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">] = </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$names_array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">]);<br />               }<br />               </span><span class="default">$names_array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$names_array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />               <br />           }<br />    <br />           </span><span class="default">$name </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">$names_array</span><span class="keyword">);<br />           </span><span class="default">$name </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"[ \- ]"</span><span class="keyword">, </span><span class="string">"-"</span><span class="keyword">,</span><span class="default">$name</span><span class="keyword">); </span><span class="comment">//  Remove the extra instances of our delimiter<br />           </span><span class="keyword">return </span><span class="default">ucwords</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />           <br />       }<br />   }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="32844">  <div class="votes">
    <div id="Vu32844">
    <a href="/manual/vote-note.php?id=32844&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32844">
    <a href="/manual/vote-note.php?id=32844&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32844" title="50% like this...">
    0
    </div>
  </div>
  <a href="#32844" class="name">
  <strong class="user"><em>bkimble at ebaseweb dot com</em></strong></a><a class="genanchor" href="#32844"> &para;</a><div class="date" title="2003-06-08 05:02"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32844">
<div class="phpcode"><code><span class="html">Here is a handy function that makes the first letter of everything in a sentence upercase. I used it to deal with titles of events posted on my website ... I've added exceptions for uppercase words and lowercase words so roman numeral "IV" doesn't get printed as "iv" and words like "a" and "the" and "of" stay lowercase.<br /><br />function RemoveShouting($string)<br />{<br /> $lower_exceptions = array(<br />        "to" =&gt; "1", "a" =&gt; "1", "the" =&gt; "1", "of" =&gt; "1"<br /> );<br />                                      <br /> $higher_exceptions = array(<br />        "I" =&gt; "1", "II" =&gt; "1", "III" =&gt; "1", "IV" =&gt; "1",<br />        "V" =&gt; "1", "VI" =&gt; "1", "VII" =&gt; "1", "VIII" =&gt; "1",<br />        "XI" =&gt; "1", "X" =&gt; "1"<br /> );<br /><br /> $words = split(" ", $string);<br /> $newwords = array(); <br /> <br /> foreach ($words as $word)<br /> {<br />        if (!$higher_exceptions[$word])<br />                $word = strtolower($word);<br />        if (!$lower_exceptions[$word])<br />                $word = ucfirst($word);<br />         array_push($newwords, $word);<br /> <br /> }<br />        <br /> return join(" ", $newwords);  <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="110261">  <div class="votes">
    <div id="Vu110261">
    <a href="/manual/vote-note.php?id=110261&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110261">
    <a href="/manual/vote-note.php?id=110261&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110261" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#110261" class="name">
  <strong class="user"><em>Nethor</em></strong></a><a class="genanchor" href="#110261"> &para;</a><div class="date" title="2012-10-05 04:14"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110261">
<div class="phpcode"><code><span class="html">Simple but workable solution:
<br />
<br /><span class="default">&lt;?php
<br />mb_internal_encoding</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">);  </span><span class="comment">// before calling the function 
<br />
<br /></span><span class="keyword">function </span><span class="default">utf8_ucfirst</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){ 
<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"~^(.)(.*)$~u"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">);
<br />    return </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]).</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73895">  <div class="votes">
    <div id="Vu73895">
    <a href="/manual/vote-note.php?id=73895&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73895">
    <a href="/manual/vote-note.php?id=73895&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73895" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#73895" class="name">
  <strong class="user"><em>Ken Kehler</em></strong></a><a class="genanchor" href="#73895"> &para;</a><div class="date" title="2007-03-14 12:03"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73895">
<div class="phpcode"><code><span class="html">@ zee: this should solve your !, ?, and any punctuations you want to add. It can probably be cleaned up a bit.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">sentence_cap</span><span class="keyword">(</span><span class="default">$impexp</span><span class="keyword">, </span><span class="default">$sentence_split</span><span class="keyword">) {<br />    </span><span class="default">$textbad</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="default">$impexp</span><span class="keyword">, </span><span class="default">$sentence_split</span><span class="keyword">);<br />    </span><span class="default">$newtext </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$textbad </span><span class="keyword">as </span><span class="default">$sentence</span><span class="keyword">) {<br />        </span><span class="default">$sentencegood</span><span class="keyword">=</span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$sentence</span><span class="keyword">);<br />        </span><span class="default">$newtext</span><span class="keyword">[] = </span><span class="default">$sentencegood</span><span class="keyword">;<br />    }<br />    </span><span class="default">$textgood </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$impexp</span><span class="keyword">, </span><span class="default">$newtext</span><span class="keyword">);<br />    return </span><span class="default">$textgood</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$text </span><span class="keyword">= </span><span class="string">"this is a sentence. this is another sentence! this is the fourth sentence? no, this is the fourth sentence."</span><span class="keyword">;<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">sentence_cap</span><span class="keyword">(</span><span class="string">". "</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">sentence_cap</span><span class="keyword">(</span><span class="string">"! "</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">sentence_cap</span><span class="keyword">(</span><span class="string">"? "</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);<br /><br />echo </span><span class="default">$text</span><span class="keyword">; </span><span class="comment">// This is a sentence. This is another sentence! This is the fourth sentence? No, this is the fourth sentence.<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76694">  <div class="votes">
    <div id="Vu76694">
    <a href="/manual/vote-note.php?id=76694&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76694">
    <a href="/manual/vote-note.php?id=76694&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76694" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#76694" class="name">
  <strong class="user"><em>Uwe</em></strong></a><a class="genanchor" href="#76694"> &para;</a><div class="date" title="2007-07-26 08:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76694">
<div class="phpcode"><code><span class="html">@adefoor, Ken and Zee<br /><br />Changing the case can only be done by understanding the text. Take for example "USA", "Sunday", "March", "I am ...", abbreviations like "prob." and so on.</span></code></div>
  </div>
 </div>
  <div class="note" id="70752">  <div class="votes">
    <div id="Vu70752">
    <a href="/manual/vote-note.php?id=70752&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70752">
    <a href="/manual/vote-note.php?id=70752&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70752" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#70752" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#70752"> &para;</a><div class="date" title="2006-10-26 07:45"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70752">
<div class="phpcode"><code><span class="html">Some simple function for cyrillic and latin letters both:<br /><br />function rucfirst($str) {<br />    if(ord(substr($str,0,1))&lt;192) return ucfirst($str);<br />    else<br />    return chr(ord(substr($str,0,1))-32).substr($str,1);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="69602">  <div class="votes">
    <div id="Vu69602">
    <a href="/manual/vote-note.php?id=69602&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69602">
    <a href="/manual/vote-note.php?id=69602&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69602" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#69602" class="name">
  <strong class="user"><em>Michael</em></strong></a><a class="genanchor" href="#69602"> &para;</a><div class="date" title="2006-09-12 06:01"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69602">
<div class="phpcode"><code><span class="html">This is what you would expect php to deliver if there was a built-in function named ucsentence.<br /><br />function ucsentence ($string){<br />    $string = explode ('.', $string);<br />    $count = count ($string);<br />    for ($i = 0; $i &lt; $count; $i++){<br />        $string[$i]  = ucfirst (trim ($string[$i]));<br />        if ($i &gt; 0){<br />            $string[$i] = '&amp;nbsp;&amp;nbsp;' . $string[$i];<br />        }<br />    }<br />    $string = implode ('.', $string);<br />    return $string;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="124408">  <div class="votes">
    <div id="Vu124408">
    <a href="/manual/vote-note.php?id=124408&amp;page=function.ucfirst&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124408">
    <a href="/manual/vote-note.php?id=124408&amp;page=function.ucfirst&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124408" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#124408" class="name">
  <strong class="user"><em>divinity76 at gmail dot com</em></strong></a><a class="genanchor" href="#124408"> &para;</a><div class="date" title="2019-11-18 12:59"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124408">
<div class="phpcode"><code><span class="html">here is how mb_ucfirst should be implemented in userland<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">mb_ucfirst</span><span class="keyword">(</span><span class="default">string $str</span><span class="keyword">, </span><span class="default">string $encoding </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">): </span><span class="default">string<br /></span><span class="keyword">{<br />    if (</span><span class="default">$encoding </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">$encoding </span><span class="keyword">= </span><span class="default">mb_internal_encoding</span><span class="keyword">();<br />    }<br />    return </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">), </span><span class="default">$encoding</span><span class="keyword">) . </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />(when i wrote this comment, everybody else's attempt got it wrong for one reason or another, for example: some don't allow you to specify encoding, and some defaulted to utf-8 instead of defaulting to mb_internal_encoding() )</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ucfirst&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ucfirst.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="current">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
