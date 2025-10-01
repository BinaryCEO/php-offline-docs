<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: chr - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.chr.php">
 <link rel="shorturl" href="https://www.php.net/chr">
 <link rel="alternate" href="https://www.php.net/chr" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.chop.php">
 <link rel="next" href="https://www.php.net/manual/en/function.chunk-split.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.chr.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.chr.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.chr.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.chr.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.chr.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.chr.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.chr.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.chr.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.chr.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.chr.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.chr.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generate a single-byte string from a number" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: chr - Manual" />
<meta name="twitter:description" content="Generate a single-byte string from a number" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: chr - Manual" />
<meta itemprop="description" content="Generate a single-byte string from a number" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generate a single-byte string from a number" />

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
        <a href="function.chunk-split.php">
          chunk_split &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.chop.php">
          &laquo; chop        </a>
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
            <option value='en/function.chr.php' selected="selected">English</option>
            <option value='de/function.chr.php'>German</option>
            <option value='es/function.chr.php'>Spanish</option>
            <option value='fr/function.chr.php'>French</option>
            <option value='it/function.chr.php'>Italian</option>
            <option value='ja/function.chr.php'>Japanese</option>
            <option value='pt_BR/function.chr.php'>Brazilian Portuguese</option>
            <option value='ru/function.chr.php'>Russian</option>
            <option value='tr/function.chr.php'>Turkish</option>
            <option value='uk/function.chr.php'>Ukrainian</option>
            <option value='zh/function.chr.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.chr" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">chr</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">chr</span> &mdash; <span class="dc-title">Generate a single-byte string from a number</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.chr-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>chr</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$codepoint</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns a one-character string containing the character specified
   by interpreting <code class="parameter">codepoint</code> as an unsigned integer.
  </p>
  <p class="para">
   This can be used to create a one-character string in a single-byte encoding such as ASCII, ISO-8859, or Windows 1252, by passing the position of a desired character in the encoding&#039;s mapping table. However, note that this function is not aware of any string encoding, and in particular cannot be passed a Unicode code point value to generate a string in a multibyte encoding like UTF-8 or UTF-16.
  </p>
  <p class="para">
   This function complements <span class="function"><a href="function.ord.php" class="function">ord()</a></span>. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.chr-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">codepoint</code></dt>
     <dd>
      <p class="para">
       An integer between 0 and 255.
      </p>
      <p class="para">
       Values outside the valid range (0..255) will be bitwise and&#039;ed with 255,
       which is equivalent to the following algorithm:
       <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000">while ($bytevalue &lt; 0) {<br />    $bytevalue += 256;<br />}<br />$bytevalue %= 256;</span></code></div>
       </div>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.chr-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A single-character string containing the specified byte.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.chr-changelog">
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
      <td>7.4.0</td>
      <td>
       The function no longer silently accepts unsupported <code class="parameter">codepoint</code>s,
       and casts these to <code class="literal">0</code>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.chr-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5055">
    <p><strong>Example #1 <span class="function"><strong>chr()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Assumes the string will be used as ASCII or an ASCII-compatible encoding<br /><br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"The string ends in escape: "</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">.= </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">27</span><span style="color: #007700">); </span><span style="color: #FF8000">/* add an escape character at the end of $str */<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Often this is more useful */<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"The string ends in escape: %c"</span><span style="color: #007700">, </span><span style="color: #0000BB">27</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5056">
    <p><strong>Example #2 Overflow behavior</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">chr</span><span style="color: #007700">(-</span><span style="color: #0000BB">159</span><span style="color: #007700">), </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">833</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">aA</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para"> 
   <div class="example" id="example-5057">
    <p><strong>Example #3 Building a UTF-8 string from individual bytes</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">240</span><span style="color: #007700">) . </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">159</span><span style="color: #007700">) . </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">144</span><span style="color: #007700">) . </span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">152</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen"><br />
🐘<br />
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.chr-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.sprintf.php" class="function" rel="rdfs-seeAlso">sprintf()</a> - Return a formatted string</span> with a format string of <code class="literal">%c</code></li>
    <li><span class="function"><a href="function.ord.php" class="function" rel="rdfs-seeAlso">ord()</a> - Convert the first byte of a string to a value between 0 and 255</span></li>
    <li>An <a href="https://www.man7.org/linux/man-pages/man7/ascii.7.html" class="link external">&raquo;&nbsp;ASCII-table</a></li>
    <li><span class="function"><a href="function.mb-chr.php" class="function" rel="rdfs-seeAlso">mb_chr()</a> - Return character by Unicode code point value</span></li>
    <li><span class="function"><a href="intlchar.chr.php" class="function" rel="rdfs-seeAlso">IntlChar::chr()</a> - Return Unicode character by code point value</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/chr.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.chr%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.chr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.chr.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">23 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="41471">  <div class="votes">
    <div id="Vu41471">
    <a href="/manual/vote-note.php?id=41471&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41471">
    <a href="/manual/vote-note.php?id=41471&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41471" title="59% like this...">
    22
    </div>
  </div>
  <a href="#41471" class="name">
  <strong class="user"><em>perrodin at laposte dot net</em></strong></a><a class="genanchor" href="#41471"> &para;</a><div class="date" title="2004-04-11 04:20"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41471">
<div class="phpcode"><code><span class="html">Note that if the number is higher than 256, it will return the number mod 256.<br />For example :<br />chr(321)=A because A=65(256)</span></code></div>
  </div>
 </div>
  <div class="note" id="88611">  <div class="votes">
    <div id="Vu88611">
    <a href="/manual/vote-note.php?id=88611&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88611">
    <a href="/manual/vote-note.php?id=88611&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88611" title="57% like this...">
    16
    </div>
  </div>
  <a href="#88611" class="name">
  <strong class="user"><em>voromax</em></strong></a><a class="genanchor" href="#88611"> &para;</a><div class="date" title="2009-01-31 07:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88611">
<div class="phpcode"><code><span class="html">Another quick and short function to get unicode char by its code.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Return unicode char by its code<br /> *<br /> * @param int $u<br /> * @return char<br /> */<br /></span><span class="keyword">function </span><span class="default">unichr</span><span class="keyword">(</span><span class="default">$u</span><span class="keyword">) {<br />    return </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="string">'&amp;#' </span><span class="keyword">. </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$u</span><span class="keyword">) . </span><span class="string">';'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="string">'HTML-ENTITIES'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102263">  <div class="votes">
    <div id="Vu102263">
    <a href="/manual/vote-note.php?id=102263&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102263">
    <a href="/manual/vote-note.php?id=102263&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102263" title="60% like this...">
    6
    </div>
  </div>
  <a href="#102263" class="name">
  <strong class="user"><em>mailderemi at gmail dot com</em></strong></a><a class="genanchor" href="#102263"> &para;</a><div class="date" title="2011-02-04 08:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102263">
<div class="phpcode"><code><span class="html">Here is a sample of encoding and decoding using "chr" and "ord".<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">Encode</span><span class="keyword">(</span><span class="default">$txtData</span><span class="keyword">,</span><span class="default">$Level</span><span class="keyword">){<br />        for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">$Level</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">++){<br />            </span><span class="default">$tmpStr </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$txtData</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)<br />                </span><span class="default">$tmpStr </span><span class="keyword">.= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$txtData</span><span class="keyword">), </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));<br />            </span><span class="default">$txtData </span><span class="keyword">= </span><span class="default">$tmpStr</span><span class="keyword">;<br />        }<br />        return (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Level</span><span class="keyword">)).</span><span class="default">$Level</span><span class="keyword">.</span><span class="default">$txtData</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">Decode</span><span class="keyword">(</span><span class="default">$txtData</span><span class="keyword">){<br />        </span><span class="default">$intLevel </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$txtData</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$txtData</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));<br />        </span><span class="default">$startStr </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$txtData</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$txtData</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$txtData</span><span class="keyword">));<br />        for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">$intLevel</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">++){<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$startStr</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">+=</span><span class="default">2</span><span class="keyword">)<br />                </span><span class="default">$tmpStr </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$startStr</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)));<br />            </span><span class="default">$startStr </span><span class="keyword">= </span><span class="default">$tmpStr</span><span class="keyword">;<br />        <br />            </span><span class="default">$tmpStr </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$startStr</span><span class="keyword">;<br />    }<br /><br />echo </span><span class="default">Encode</span><span class="keyword">(</span><span class="string">'123'</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="default">Decode</span><span class="keyword">(</span><span class="default">Encode</span><span class="keyword">(</span><span class="string">'123'</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55978">  <div class="votes">
    <div id="Vu55978">
    <a href="/manual/vote-note.php?id=55978&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55978">
    <a href="/manual/vote-note.php?id=55978&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55978" title="56% like this...">
    7
    </div>
  </div>
  <a href="#55978" class="name">
  <strong class="user"><em>grey - greywyvern - com</em></strong></a><a class="genanchor" href="#55978"> &para;</a><div class="date" title="2005-08-19 07:55"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55978">
<div class="phpcode"><code><span class="html">I spent hours looking for a function which would take a numeric HTML entity value and output the appropriate UTF-8 bytes.  I found this at another site and only had to modify it slightly; so I don't take credit for this.<br /><br /><span class="default">&lt;?php </span><span class="keyword">function </span><span class="default">unichr</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">) { <br />  if (</span><span class="default">$dec </span><span class="keyword">&lt; </span><span class="default">128</span><span class="keyword">) { <br />    </span><span class="default">$utf </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">); <br />  } else if (</span><span class="default">$dec </span><span class="keyword">&lt; </span><span class="default">2048</span><span class="keyword">) { <br />    </span><span class="default">$utf </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">192 </span><span class="keyword">+ ((</span><span class="default">$dec </span><span class="keyword">- (</span><span class="default">$dec </span><span class="keyword">% </span><span class="default">64</span><span class="keyword">)) / </span><span class="default">64</span><span class="keyword">)); <br />    </span><span class="default">$utf </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">128 </span><span class="keyword">+ (</span><span class="default">$dec </span><span class="keyword">% </span><span class="default">64</span><span class="keyword">)); <br />  } else { <br />    </span><span class="default">$utf </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">224 </span><span class="keyword">+ ((</span><span class="default">$dec </span><span class="keyword">- (</span><span class="default">$dec </span><span class="keyword">% </span><span class="default">4096</span><span class="keyword">)) / </span><span class="default">4096</span><span class="keyword">)); <br />    </span><span class="default">$utf </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">128 </span><span class="keyword">+ (((</span><span class="default">$dec </span><span class="keyword">% </span><span class="default">4096</span><span class="keyword">) - (</span><span class="default">$dec </span><span class="keyword">% </span><span class="default">64</span><span class="keyword">)) / </span><span class="default">64</span><span class="keyword">)); <br />    </span><span class="default">$utf </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">128 </span><span class="keyword">+ (</span><span class="default">$dec </span><span class="keyword">% </span><span class="default">64</span><span class="keyword">)); <br />  } <br />  return </span><span class="default">$utf</span><span class="keyword">;<br />} </span><span class="default">?&gt;<br /></span><br />So for example:<br /><br /><span class="default">&lt;?php<br /><br />  $str </span><span class="keyword">= </span><span class="string">"Chinese: &amp;#20013;&amp;#25991;"</span><span class="keyword">;<br />  </span><span class="default">$str </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/&amp;#(\d{2,5});/e"</span><span class="keyword">, </span><span class="string">"unichr($1);"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126792">  <div class="votes">
    <div id="Vu126792">
    <a href="/manual/vote-note.php?id=126792&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126792">
    <a href="/manual/vote-note.php?id=126792&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126792" title="56% like this...">
    3
    </div>
  </div>
  <a href="#126792" class="name">
  <strong class="user"><em>Noname</em></strong></a><a class="genanchor" href="#126792"> &para;</a><div class="date" title="2022-01-22 03:53"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126792">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">128</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">191</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">240</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">159</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">144</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />    echo </span><span class="default">$str</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="27661">  <div class="votes">
    <div id="Vu27661">
    <a href="/manual/vote-note.php?id=27661&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27661">
    <a href="/manual/vote-note.php?id=27661&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27661" title="54% like this...">
    5
    </div>
  </div>
  <a href="#27661" class="name">
  <strong class="user"><em>joeldegan AT yahoo.com</em></strong></a><a class="genanchor" href="#27661"> &para;</a><div class="date" title="2002-12-14 02:53"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27661">
<div class="phpcode"><code><span class="html">Want terminal colors in command line php scripts?
<br />
<br />This should take care of that.
<br />&lt;?
<br />
<br />$_colors = array(
<br />        'LIGHT_RED'      =&gt; "[1;31m",
<br />        'LIGHT_GREEN'     =&gt; "[1;32m",
<br />        'YELLOW'     =&gt; "[1;33m",
<br />        'LIGHT_BLUE'     =&gt; "[1;34m",
<br />        'MAGENTA'     =&gt; "[1;35m",
<br />        'LIGHT_CYAN'     =&gt; "[1;36m",
<br />        'WHITE'     =&gt; "[1;37m",
<br />        'NORMAL'     =&gt; "[0m",
<br />        'BLACK'     =&gt; "[0;30m",
<br />        'RED'         =&gt; "[0;31m",
<br />        'GREEN'     =&gt; "[0;32m",
<br />        'BROWN'     =&gt; "[0;33m",
<br />        'BLUE'         =&gt; "[0;34m",
<br />        'CYAN'         =&gt; "[0;36m",
<br />        'BOLD'         =&gt; "[1m",
<br />        'UNDERSCORE'     =&gt; "[4m",
<br />        'REVERSE'     =&gt; "[7m",
<br />
<br />);
<br />
<br />function termcolored($text, $color="NORMAL", $back=1){
<br />    global $_colors;
<br />    $out = $_colors["$color"];
<br />    if($out == ""){ $out = "[0m"; }
<br />    if($back){
<br />        return chr(27)."$out$text".chr(27).chr(27)."[0m".chr(27);
<br />    }else{
<br />        echo chr(27)."$out$text".chr(27).chr(27)."[0m".chr(27);
<br />    }//fi
<br />}// end function
<br />
<br />echo termcolored("test\n", "BLUE");
<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="107742">  <div class="votes">
    <div id="Vu107742">
    <a href="/manual/vote-note.php?id=107742&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107742">
    <a href="/manual/vote-note.php?id=107742&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107742" title="53% like this...">
    2
    </div>
  </div>
  <a href="#107742" class="name">
  <strong class="user"><em>gjarrige at six-axe dot fr</em></strong></a><a class="genanchor" href="#107742"> &para;</a><div class="date" title="2012-03-01 09:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107742">
<div class="phpcode"><code><span class="html">to remove the ASCII control characters (except "line feed" and "tab") :<br /><br />$tab_chr = array() ;<br />for($control = 0; $control &lt; 32; $control++) {<br />    if ($control != 9 &amp;&amp; $control != 10) {<br />        $tab_chr[]= chr($control) ;<br />    }<br />}<br />$tab_chr[]= chr(127) ;    <br />$string = str_replace($tab_chr, '', $string);</span></code></div>
  </div>
 </div>
  <div class="note" id="117972">  <div class="votes">
    <div id="Vu117972">
    <a href="/manual/vote-note.php?id=117972&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117972">
    <a href="/manual/vote-note.php?id=117972&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117972" title="52% like this...">
    1
    </div>
  </div>
  <a href="#117972" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#117972"> &para;</a><div class="date" title="2015-09-10 08:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117972">
<div class="phpcode"><code><span class="html">// rivencodec 1.0<br />// encode riverse ascii 1 simple function can encode/decode <br />// can use it for secure source with speed encode text<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">rivencodec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) {<br />        while((@</span><span class="default">$b </span><span class="keyword">= </span><span class="default">$ch</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">++])) { </span><span class="default">$ch</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">] = </span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">-</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)); }<br />        return </span><span class="default">$ch</span><span class="keyword">;<br />    }<br />        <br />    <br /></span><span class="default">$zz </span><span class="keyword">= </span><span class="default">rivencodec</span><span class="keyword">(</span><span class="string">"abcdefghijklmn"</span><span class="keyword">);<br />echo </span><span class="string">'encode: '</span><span class="keyword">,</span><span class="default">$zz</span><span class="keyword">,</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">,</span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">$yy </span><span class="keyword">= </span><span class="default">rivencodec</span><span class="keyword">(</span><span class="default">$zz</span><span class="keyword">);<br />echo </span><span class="string">'decode: '</span><span class="keyword">,</span><span class="default">$yy</span><span class="keyword">,</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">,</span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85050">  <div class="votes">
    <div id="Vu85050">
    <a href="/manual/vote-note.php?id=85050&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85050">
    <a href="/manual/vote-note.php?id=85050&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85050" title="51% like this...">
    1
    </div>
  </div>
  <a href="#85050" class="name">
  <strong class="user"><em>Josh B.</em></strong></a><a class="genanchor" href="#85050"> &para;</a><div class="date" title="2008-08-12 02:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85050">
<div class="phpcode"><code><span class="html">In addition to replacing Microsoft Windows smart quotes, as sgaston demonstrated on 2006-02-13, I replace all other Microsoft Windows characters using suggestions[1] published by character code specialist[2] Jukka Korpela.<br /><br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">130</span><span class="keyword">), </span><span class="string">','</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// baseline single quote<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">131</span><span class="keyword">), </span><span class="string">'NLG'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);  </span><span class="comment">// florin<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">132</span><span class="keyword">), </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// baseline double quote<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">133</span><span class="keyword">), </span><span class="string">'...'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);  </span><span class="comment">// ellipsis<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">134</span><span class="keyword">), </span><span class="string">'**'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);   </span><span class="comment">// dagger (a second footnote)<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">135</span><span class="keyword">), </span><span class="string">'***'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);  </span><span class="comment">// double dagger (a third footnote)<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">136</span><span class="keyword">), </span><span class="string">'^'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// circumflex accent<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">137</span><span class="keyword">), </span><span class="string">'o/oo'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// permile<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">138</span><span class="keyword">), </span><span class="string">'Sh'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);   </span><span class="comment">// S Hacek<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">139</span><span class="keyword">), </span><span class="string">'&lt;'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// left single guillemet<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">140</span><span class="keyword">), </span><span class="string">'OE'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);   </span><span class="comment">// OE ligature<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">145</span><span class="keyword">), </span><span class="string">"'"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// left single quote<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">146</span><span class="keyword">), </span><span class="string">"'"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// right single quote<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">147</span><span class="keyword">), </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// left double quote<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">148</span><span class="keyword">), </span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// right double quote<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">149</span><span class="keyword">), </span><span class="string">'-'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// bullet<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">150</span><span class="keyword">), </span><span class="string">'-'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// endash<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">151</span><span class="keyword">), </span><span class="string">'--'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);   </span><span class="comment">// emdash<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">152</span><span class="keyword">), </span><span class="string">'~'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// tilde accent<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">153</span><span class="keyword">), </span><span class="string">'(TM)'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// trademark ligature<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">154</span><span class="keyword">), </span><span class="string">'sh'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);   </span><span class="comment">// s Hacek<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">155</span><span class="keyword">), </span><span class="string">'&gt;'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// right single guillemet<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">156</span><span class="keyword">), </span><span class="string">'oe'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);   </span><span class="comment">// oe ligature<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">159</span><span class="keyword">), </span><span class="string">'Y'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// Y Dieresis<br /></span><span class="default">?&gt;<br /></span><br />[1] On the use of some MS Windows characters in HTML<br /><a href="http://www.cs.tut.fi/~jkorpela/www/windows-chars.html" rel="nofollow" target="_blank">http://www.cs.tut.fi/~jkorpela/www/windows-chars.html</a><br /><br />[2] Unicode Explained by Jukka Korpela <br /><a href="http://www.amazon.com/dp/059610121X/" rel="nofollow" target="_blank">http://www.amazon.com/dp/059610121X/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="44095">  <div class="votes">
    <div id="Vu44095">
    <a href="/manual/vote-note.php?id=44095&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44095">
    <a href="/manual/vote-note.php?id=44095&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44095" title="52% like this...">
    1
    </div>
  </div>
  <a href="#44095" class="name">
  <strong class="user"><em>tenyou at gmail dot com</em></strong></a><a class="genanchor" href="#44095"> &para;</a><div class="date" title="2004-07-14 11:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44095">
<div class="phpcode"><code><span class="html">When having to deal with parsing an IIS4 or IIS5 metabase dump I wrote a simple function for converting those MS hexidecimal values into their ascii counter parts. Hopefully someone will find use for it.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">hex_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)  {
<br />        for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">)  {
<br />        </span><span class="default">$decoded </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)));
<br />        </span><span class="default">$i </span><span class="keyword">= (float)(</span><span class="default">$i</span><span class="keyword">)+</span><span class="default">2</span><span class="keyword">;
<br />        }
<br />return </span><span class="default">$decoded</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86469">  <div class="votes">
    <div id="Vu86469">
    <a href="/manual/vote-note.php?id=86469&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86469">
    <a href="/manual/vote-note.php?id=86469&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86469" title="51% like this...">
    1
    </div>
  </div>
  <a href="#86469" class="name">
  <strong class="user"><em>scott at quinlan dot co dot nz</em></strong></a><a class="genanchor" href="#86469"> &para;</a><div class="date" title="2008-10-20 09:51"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86469">
<div class="phpcode"><code><span class="html">Secure password generator with a variable maximum amount of symbols.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">passwdGen</span><span class="keyword">(</span><span class="default">$minLength </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">, </span><span class="default">$maxLength </span><span class="keyword">= </span><span class="default">12</span><span class="keyword">, </span><span class="default">$maxSymbols </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">)<br />{<br />    </span><span class="default">$symbolCount </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    </span><span class="default">srand</span><span class="keyword">((double)</span><span class="default">microtime</span><span class="keyword">() * </span><span class="default">1000003</span><span class="keyword">);<br /><br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">rand</span><span class="keyword">(</span><span class="default">$minLength</span><span class="keyword">, </span><span class="default">$maxLength</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)<br />    {<br />        do<br />        {<br />            </span><span class="default">$char </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">33</span><span class="keyword">, </span><span class="default">126</span><span class="keyword">);<br /><br />            </span><span class="default">$symbolCount </span><span class="keyword">+= </span><span class="default">$isSymbol </span><span class="keyword">= (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">, </span><span class="default">range</span><span class="keyword">(</span><span class="default">48</span><span class="keyword">, </span><span class="default">57</span><span class="keyword">)) &amp;&amp; !</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">, </span><span class="default">range</span><span class="keyword">(</span><span class="default">65</span><span class="keyword">, </span><span class="default">90</span><span class="keyword">)) &amp;&amp; !</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">, </span><span class="default">range</span><span class="keyword">(</span><span class="default">97</span><span class="keyword">, </span><span class="default">122</span><span class="keyword">)));<br /><br />            if (</span><span class="default">$symbolCount </span><span class="keyword">&lt;= </span><span class="default">$maxSymbols </span><span class="keyword">|| !</span><span class="default">$isSymbol</span><span class="keyword">)<br />            {<br />                break;<br />            }<br />        }<br />        while (</span><span class="default">true</span><span class="keyword">);<br /><br />        </span><span class="default">$passwd </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%s%c'</span><span class="keyword">, isset(</span><span class="default">$passwd</span><span class="keyword">) ? </span><span class="default">$passwd </span><span class="keyword">: </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$char</span><span class="keyword">);<br />    }<br /><br />    return </span><span class="default">$passwd</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="12171">  <div class="votes">
    <div id="Vu12171">
    <a href="/manual/vote-note.php?id=12171&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12171">
    <a href="/manual/vote-note.php?id=12171&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12171" title="52% like this...">
    1
    </div>
  </div>
  <a href="#12171" class="name">
  <strong class="user"><em>happyevil(at)1218.org</em></strong></a><a class="genanchor" href="#12171"> &para;</a><div class="date" title="2001-03-26 07:31"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12171">
<div class="phpcode"><code><span class="html">Here is a function that's help me find what chr(number) outputs what character quicker than typing out 256 echo tags.
<br />
<br /><span class="default">&lt;?php
<br /> </span><span class="keyword">function </span><span class="default">listChr</span><span class="keyword">(){
<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">256</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {
<br />  static </span><span class="default">$genNum</span><span class="keyword">;
<br />  </span><span class="default">$genNum</span><span class="keyword">++;
<br />  echo </span><span class="string">"chr(</span><span class="default">$genNum</span><span class="string">) will output '"</span><span class="keyword">;
<br />  echo (</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$genNum</span><span class="keyword">));
<br />  echo </span><span class="string">"'&lt; br&gt;\n"</span><span class="keyword">;
<br />  }
<br />}
<br /></span><span class="default">listChr</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />Another helpful chr is #9, being a tab.  Quite using when making error logs.
<br />
<br /> $tab = (chr(9));
<br /> echo "&lt;pre&gt;error{$tab}date{$tab}time&lt;/pre&gt;";
<br />
<br /> -- HappyEvil</span></code></div>
  </div>
 </div>
  <div class="note" id="123557">  <div class="votes">
    <div id="Vu123557">
    <a href="/manual/vote-note.php?id=123557&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123557">
    <a href="/manual/vote-note.php?id=123557&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123557" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123557" class="name">
  <strong class="user"><em>Ray.Paseur sometimes uses Gmail</em></strong></a><a class="genanchor" href="#123557"> &para;</a><div class="date" title="2019-01-28 08:47"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123557">
<div class="phpcode"><code><span class="html">I needed to generate an invalid UTF-8 character for testing with JSON.  This did the trick:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'Bogus UTF-8 character at end' </span><span class="keyword">. </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xC6</span><span class="keyword">) ;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118804">  <div class="votes">
    <div id="Vu118804">
    <a href="/manual/vote-note.php?id=118804&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118804">
    <a href="/manual/vote-note.php?id=118804&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118804" title="50% like this...">
    0
    </div>
  </div>
  <a href="#118804" class="name">
  <strong class="user"><em>vitkorob</em></strong></a><a class="genanchor" href="#118804"> &para;</a><div class="date" title="2016-02-09 01:01"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118804">
<div class="phpcode"><code><span class="html">Another quick function to get unicode char by its code.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">unichr</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">)<br />{<br />  if (</span><span class="default">$dec </span><span class="keyword">&lt; </span><span class="default">0x80</span><span class="keyword">)<br />  {<br />    </span><span class="default">$utf </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">);<br />  }<br />  else if (</span><span class="default">$dec </span><span class="keyword">&lt; </span><span class="default">0x0800</span><span class="keyword">)<br />  {<br />    </span><span class="default">$utf </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xC0 </span><span class="keyword">+ (</span><span class="default">$dec </span><span class="keyword">&gt;&gt; </span><span class="default">6</span><span class="keyword">));<br />    </span><span class="default">$utf </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x80 </span><span class="keyword">+ (</span><span class="default">$dec </span><span class="keyword">&amp; </span><span class="default">0x3f</span><span class="keyword">));<br />  }<br />  else if (</span><span class="default">$dec </span><span class="keyword">&lt; </span><span class="default">0x010000</span><span class="keyword">)<br />  {<br />    </span><span class="default">$utf </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xE0 </span><span class="keyword">+ (</span><span class="default">$dec </span><span class="keyword">&gt;&gt; </span><span class="default">12</span><span class="keyword">));<br />    </span><span class="default">$utf </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x80 </span><span class="keyword">+ ((</span><span class="default">$dec </span><span class="keyword">&gt;&gt; </span><span class="default">6</span><span class="keyword">) &amp; </span><span class="default">0x3f</span><span class="keyword">));<br />    </span><span class="default">$utf </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x80 </span><span class="keyword">+ (</span><span class="default">$dec </span><span class="keyword">&amp; </span><span class="default">0x3f</span><span class="keyword">));<br />  }<br />  else if (</span><span class="default">$dec </span><span class="keyword">&lt; </span><span class="default">0x200000</span><span class="keyword">)<br />  {<br />    </span><span class="default">$utf </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xF0 </span><span class="keyword">+ (</span><span class="default">$dec </span><span class="keyword">&gt;&gt; </span><span class="default">18</span><span class="keyword">));<br />    </span><span class="default">$utf </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x80 </span><span class="keyword">+ ((</span><span class="default">$dec </span><span class="keyword">&gt;&gt; </span><span class="default">12</span><span class="keyword">) &amp; </span><span class="default">0x3f</span><span class="keyword">));<br />    </span><span class="default">$utf </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x80 </span><span class="keyword">+ ((</span><span class="default">$dec </span><span class="keyword">&gt;&gt; </span><span class="default">6</span><span class="keyword">) &amp; </span><span class="default">0x3f</span><span class="keyword">));<br />    </span><span class="default">$utf </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x80 </span><span class="keyword">+ (</span><span class="default">$dec </span><span class="keyword">&amp; </span><span class="default">0x3f</span><span class="keyword">));<br />  }<br />  else<br />  {<br />    die(</span><span class="string">"UTF-8 character size is more than 4 bytes"</span><span class="keyword">);<br />  }<br /><br />  return </span><span class="default">$utf</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">unichr</span><span class="keyword">(</span><span class="default">0x263A</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111597">  <div class="votes">
    <div id="Vu111597">
    <a href="/manual/vote-note.php?id=111597&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111597">
    <a href="/manual/vote-note.php?id=111597&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111597" title="50% like this...">
    0
    </div>
  </div>
  <a href="#111597" class="name">
  <strong class="user"><em>darek at module17 dot com</em></strong></a><a class="genanchor" href="#111597"> &para;</a><div class="date" title="2013-03-07 07:45"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111597">
<div class="phpcode"><code><span class="html">Simple password generation function using sprintf and the %c type specifier; which is the same as chr().<br /><br />function genPass($len = 8) {<br />    for ($i=0;$i&lt;=$len;$i++) {<br />        $passwd = sprintf('%s%c', isset($passwd) ? $passwd : NULL, rand(48, 122));<br />    }<br />    return $passwd;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="30125">  <div class="votes">
    <div id="Vu30125">
    <a href="/manual/vote-note.php?id=30125&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30125">
    <a href="/manual/vote-note.php?id=30125&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30125" title="50% like this...">
    0
    </div>
  </div>
  <a href="#30125" class="name">
  <strong class="user"><em>Kristin</em></strong></a><a class="genanchor" href="#30125"> &para;</a><div class="date" title="2003-03-06 08:19"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30125">
<div class="phpcode"><code><span class="html">Note that chr(10) is a 'line feed' and chr(13) is a 'carriage return' and they are not the same thing! I found this out while attempting to parse text from forms and text files for inclusion as HTML by replacing all the carriage returns with &lt;BR&gt;'s only to find after many head-scratchings that I should have been looking for line feeds. If anyone can shed some light on what the difference is, please do.
<br />
<br />If you're planning on saving text from a form into a database for later display, you'll need to apply the following function so that it gets saved with the proper HTML tags.
<br />
<br /><span class="default">&lt;?php
<br />$text </span><span class="keyword">= </span><span class="default">str_replace </span><span class="keyword">( </span><span class="default">chr</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">), </span><span class="string">"&lt;BR&gt;"</span><span class="keyword">, </span><span class="default">$text </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />When you want to plug it back into that form for editing you need to convert it back.
<br />
<br /><span class="default">&lt;?php
<br />$text </span><span class="keyword">= </span><span class="default">str_replace </span><span class="keyword">( </span><span class="string">"&lt;BR&gt;"</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">), </span><span class="default">$text</span><span class="keyword">)
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hope this saves somebody some trouble. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="5665">  <div class="votes">
    <div id="Vu5665">
    <a href="/manual/vote-note.php?id=5665&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd5665">
    <a href="/manual/vote-note.php?id=5665&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V5665" title="50% like this...">
    0
    </div>
  </div>
  <a href="#5665" class="name">
  <strong class="user"><em>ddawsonNOSPAM at execpc dot com</em></strong></a><a class="genanchor" href="#5665"> &para;</a><div class="date" title="2000-05-09 04:59"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom5665">
<div class="phpcode"><code><span class="html">[Editor's note:
<br />
<br />%c is defined as: "Print the character belonging to the ascii code given"
<br />
<br />chr() just gives a string, so you need to use %s, even if the string consists of only one character. This is consistent with other languages.
<br />--Jeroen@php.net]
<br />
<br />
<br />Learn from my mistake:
<br />Do not expect this to work!
<br />
<br /><span class="default">&lt;?php
<br />$c_question </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">63</span><span class="keyword">);
<br /></span><span class="default">$v_out </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"&lt;%cphp\n"</span><span class="keyword">, </span><span class="default">$c_question</span><span class="keyword">);
<br /></span><span class="comment">//... more stuff being sprintf'd into v_out here ...
<br /></span><span class="default">$v_out </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%s%c&gt;\n"</span><span class="keyword">, </span><span class="default">$v_out</span><span class="keyword">, </span><span class="default">$c_question</span><span class="keyword">);
<br /></span><span class="default">$v_fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"foofile"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);
<br />if (</span><span class="default">$v_fp</span><span class="keyword">)
<br />{
<br />     </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$v_fp</span><span class="keyword">, </span><span class="default">$v_out</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$v_out</span><span class="keyword">));
<br />     </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$v_fp</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />When I did this, foofile contained &lt;NUL NUL NUL NUL NUL&gt;.
<br />I spun my wheels quite awhile looking at fputs, fwrite to verify I was calling those functions correctly.
<br />My mistake was using $c_question = chr(63) instead of
<br />$c_question = 63 (correct).  Then everything worked fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="114742">  <div class="votes">
    <div id="Vu114742">
    <a href="/manual/vote-note.php?id=114742&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114742">
    <a href="/manual/vote-note.php?id=114742&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114742" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#114742" class="name">
  <strong class="user"><em>v14t at gmx dot com</em></strong></a><a class="genanchor" href="#114742"> &para;</a><div class="date" title="2014-04-01 05:58"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114742">
<div class="phpcode"><code><span class="html">argument is automatically converted to integer, so chr('65') and chr(65) would both output the letter A</span></code></div>
  </div>
 </div>
  <div class="note" id="74784">  <div class="votes">
    <div id="Vu74784">
    <a href="/manual/vote-note.php?id=74784&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74784">
    <a href="/manual/vote-note.php?id=74784&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74784" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#74784" class="name">
  <strong class="user"><em>darkodemon at gmail dot com</em></strong></a><a class="genanchor" href="#74784"> &para;</a><div class="date" title="2007-04-27 04:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74784">
<div class="phpcode"><code><span class="html">chr() with unicode support<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">uchr </span><span class="keyword">(</span><span class="default">$codes</span><span class="keyword">) {<br />    if (</span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$codes</span><span class="keyword">)) </span><span class="default">$codes</span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />    </span><span class="default">$str</span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    foreach (</span><span class="default">$codes </span><span class="keyword">as </span><span class="default">$code</span><span class="keyword">) </span><span class="default">$str</span><span class="keyword">.= </span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="string">'&amp;#'</span><span class="keyword">.</span><span class="default">$code</span><span class="keyword">.</span><span class="string">';'</span><span class="keyword">,</span><span class="default">ENT_NOQUOTES</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);<br />    return </span><span class="default">$str</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">uchr</span><span class="keyword">(</span><span class="default">23383</span><span class="keyword">); echo </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br />echo </span><span class="default">uchr</span><span class="keyword">(</span><span class="default">23383</span><span class="keyword">,</span><span class="default">215</span><span class="keyword">,</span><span class="default">23383</span><span class="keyword">); echo </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br />echo </span><span class="default">uchr</span><span class="keyword">(array(</span><span class="default">23383</span><span class="keyword">,</span><span class="default">215</span><span class="keyword">,</span><span class="default">23383</span><span class="keyword">,</span><span class="default">215</span><span class="keyword">,</span><span class="default">23383</span><span class="keyword">)); echo </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122555">  <div class="votes">
    <div id="Vu122555">
    <a href="/manual/vote-note.php?id=122555&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122555">
    <a href="/manual/vote-note.php?id=122555&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122555" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#122555" class="name">
  <strong class="user"><em>ibaid at mail dot ru</em></strong></a><a class="genanchor" href="#122555"> &para;</a><div class="date" title="2018-03-28 05:20"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122555">
<div class="phpcode"><code><span class="html">string mb_chr ( int $cp [, string $encoding ] )<br />Parameter List:<br />cp - character code (in decimal notation)<br />encoding - encoding (UTF-8, ASCII and so on)<br /><br />We get the letter 'Ж'  from the encoding UTF-8:<br /><br />$sim = mb_chr(0x0416, 'UTF-8');<br />echo $sim; // Ж<br /><br />Get the character '}' from the encoding ASCII:<br /><br />$sim = mb_chr(125, 'ASCII');<br />echo $sim ; // }</span></code></div>
  </div>
 </div>
  <div class="note" id="117464">  <div class="votes">
    <div id="Vu117464">
    <a href="/manual/vote-note.php?id=117464&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117464">
    <a href="/manual/vote-note.php?id=117464&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117464" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#117464" class="name">
  <strong class="user"><em>lingtalfi - at - somewhere</em></strong></a><a class="genanchor" href="#117464"> &para;</a><div class="date" title="2015-06-13 06:09"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117464">
<div class="phpcode"><code><span class="html">It seems that php uses the table from here: <a href="http://ascii-code.com/" rel="nofollow" target="_blank">http://ascii-code.com/</a> <br />(and not from here: <a href="http://www.asciitable.com/" rel="nofollow" target="_blank">http://www.asciitable.com/</a> as suggested in the documentation) for codes from 128 to 255.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">32</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">255</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    echo </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124107">  <div class="votes">
    <div id="Vu124107">
    <a href="/manual/vote-note.php?id=124107&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124107">
    <a href="/manual/vote-note.php?id=124107&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124107" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#124107" class="name">
  <strong class="user"><em>gfour</em></strong></a><a class="genanchor" href="#124107"> &para;</a><div class="date" title="2019-08-11 05:29"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124107">
<div class="phpcode"><code><span class="html">I was looking for a simple method to construct excel like column identifiers e.g: A B .... AA AB AC etc, using chr() and modulo, but there is magic...<br /><a href="https://www.php.net/manual/en/language.operators.increment.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/language.operators.increment.php</a><br /><br />So, this also works<br /><span class="default">&lt;?php<br />$p </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">65</span><span class="keyword">);      </span><span class="comment">// or simply $p = 'A';<br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">53</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />    echo </span><span class="default">$p</span><span class="keyword">++ . </span><span class="string">" - "</span><span class="keyword">;<br />    if (</span><span class="default">$i </span><span class="keyword">% </span><span class="default">10 </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) echo </span><span class="string">'&lt;/br&gt;'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Gives<br />A - B - C - D - E - F - G - H - I - J -<br />K - L - M - N - O - P - Q - R - S - T -<br />U - V - W - X - Y - Z - AA - AB - AC - AD -<br />AE - AF - AG - AH - AI - AJ - AK - AL - AM - AN -<br />AO - AP - AQ - AR - AS - AT - AU - AV - AW - AX -<br />AY - AZ -</span></code></div>
  </div>
 </div>
  <div class="note" id="91868">  <div class="votes">
    <div id="Vu91868">
    <a href="/manual/vote-note.php?id=91868&amp;page=function.chr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91868">
    <a href="/manual/vote-note.php?id=91868&amp;page=function.chr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91868" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#91868" class="name">
  <strong class="user"><em>sinfocol at sinfocol dot org</em></strong></a><a class="genanchor" href="#91868"> &para;</a><div class="date" title="2009-06-30 02:38"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91868">
<div class="phpcode"><code><span class="html">The function chr() also accepts negative numbers as an ascii code, so chr(-number) is equal to chr((number%256)+256).
<br />And for ascii code higher than 255 is chr(number%256)
<br />
<br />We can test with a little script
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=-</span><span class="default">300</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">300</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){
<br />        echo </span><span class="string">"Ascii </span><span class="default">$i</span><span class="string">\t" </span><span class="keyword">. </span><span class="default">ord</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.chr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.chr.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
