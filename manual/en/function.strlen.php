<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strlen - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strlen.php">
 <link rel="shorturl" href="https://www.php.net/strlen">
 <link rel="alternate" href="https://www.php.net/strlen" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.stristr.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strnatcasecmp.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strlen.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strlen.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strlen.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strlen.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strlen.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strlen.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strlen.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strlen.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strlen.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strlen.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strlen.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get string length" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strlen - Manual" />
<meta name="twitter:description" content="Get string length" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strlen - Manual" />
<meta itemprop="description" content="Get string length" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get string length" />

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
        <a href="function.strnatcasecmp.php">
          strnatcasecmp &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.stristr.php">
          &laquo; stristr        </a>
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
            <option value='en/function.strlen.php' selected="selected">English</option>
            <option value='de/function.strlen.php'>German</option>
            <option value='es/function.strlen.php'>Spanish</option>
            <option value='fr/function.strlen.php'>French</option>
            <option value='it/function.strlen.php'>Italian</option>
            <option value='ja/function.strlen.php'>Japanese</option>
            <option value='pt_BR/function.strlen.php'>Brazilian Portuguese</option>
            <option value='ru/function.strlen.php'>Russian</option>
            <option value='tr/function.strlen.php'>Turkish</option>
            <option value='uk/function.strlen.php'>Ukrainian</option>
            <option value='zh/function.strlen.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strlen" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strlen</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strlen</span> &mdash; <span class="dc-title">Get string length</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.strlen-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strlen</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Returns the length of the given <code class="parameter">string</code>. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strlen-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being measured for length.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.strlen-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The length of the <code class="parameter">string</code> in bytes.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.strlen-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5157">
    <p><strong>Example #1 A <span class="function"><strong>strlen()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'abcdef'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 6<br /><br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #DD0000">' ab cd '</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 7<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.strlen-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>strlen()</strong></span> returns the number of bytes rather than the number 
    of characters in a string.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strlen-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.count.php" class="function" rel="rdfs-seeAlso">count()</a> - Counts all elements in an array or in a Countable object</span></li>
    <li><span class="function"><a href="function.grapheme-strlen.php" class="function" rel="rdfs-seeAlso">grapheme_strlen()</a> - Get string length in grapheme units</span></li>
    <li><span class="function"><a href="function.iconv-strlen.php" class="function" rel="rdfs-seeAlso">iconv_strlen()</a> - Returns the character count of string</span></li>
    <li><span class="function"><a href="function.mb-strlen.php" class="function" rel="rdfs-seeAlso">mb_strlen()</a> - Get string length</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/strlen.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strlen%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strlen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strlen.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118484">  <div class="votes">
    <div id="Vu118484">
    <a href="/manual/vote-note.php?id=118484&amp;page=function.strlen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118484">
    <a href="/manual/vote-note.php?id=118484&amp;page=function.strlen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118484" title="75% like this...">
    232
    </div>
  </div>
  <a href="#118484" class="name">
  <strong class="user"><em>rm dot nasir at hotmail dot com</em></strong></a><a class="genanchor" href="#118484"> &para;</a><div class="date" title="2015-12-14 09:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118484">
<div class="phpcode"><code><span class="html">I want to share something seriously important for newbies or beginners of PHP who plays with strings of UTF8 encoded characters or the languages like: Arabic, Persian, Pashto, Dari, Chinese (simplified), Chinese (traditional), Japanese, Vietnamese, Urdu, Macedonian, Lithuanian, and etc.<br />As the manual says: "strlen() returns the number of bytes rather than the number of characters in a string.", so if you want to get the number of characters in a string of UTF8 so use mb_strlen() instead of strlen().<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// the Arabic (Hello) string below is: 59 bytes and 32 characters<br /></span><span class="default">$utf8 </span><span class="keyword">= </span><span class="string">"السلام علیکم ورحمة الله وبرکاته!"</span><span class="keyword">;<br /><br /></span><span class="default">var_export</span><span class="keyword">( </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$utf8</span><span class="keyword">) ); </span><span class="comment">// 59<br /></span><span class="keyword">echo </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br /></span><span class="default">var_export</span><span class="keyword">( </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$utf8</span><span class="keyword">, </span><span class="string">'utf8'</span><span class="keyword">) ); </span><span class="comment">// 32<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112411">  <div class="votes">
    <div id="Vu112411">
    <a href="/manual/vote-note.php?id=112411&amp;page=function.strlen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112411">
    <a href="/manual/vote-note.php?id=112411&amp;page=function.strlen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112411" title="63% like this...">
    33
    </div>
  </div>
  <a href="#112411" class="name">
  <strong class="user"><em>jasonrohrer at fastmail dot fm</em></strong></a><a class="genanchor" href="#112411"> &para;</a><div class="date" title="2013-06-13 10:48"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112411">
<div class="phpcode"><code><span class="html">PHP's strlen function behaves differently than the C strlen function in terms of its handling of null bytes ('\0').  <br /><br />In PHP, a null byte in a string does NOT count as the end of the string, and any null bytes are included in the length of the string.<br /><br />For example, in PHP:<br /><br />strlen( "te\0st" ) = 5<br /><br />In C, the same call would return 2.<br /><br />Thus, PHP's strlen function can be used to find the number of bytes in a binary string (for example, binary data returned by base64_decode).</span></code></div>
  </div>
 </div>
  <div class="note" id="119650">  <div class="votes">
    <div id="Vu119650">
    <a href="/manual/vote-note.php?id=119650&amp;page=function.strlen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119650">
    <a href="/manual/vote-note.php?id=119650&amp;page=function.strlen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119650" title="62% like this...">
    18
    </div>
  </div>
  <a href="#119650" class="name">
  <strong class="user"><em>joeri at sebrechts dot net</em></strong></a><a class="genanchor" href="#119650"> &para;</a><div class="date" title="2016-07-26 08:26"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119650">
<div class="phpcode"><code><span class="html">When checking for length to make sure a value will fit in a database field, be mindful of using the right function.<br /><br />There are three possible situations:<br /><br />1. Most likely case: the database column is UTF-8 with a length defined in unicode code points (e.g. mysql varchar(200) for a utf-8 database).<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// ok if php.ini default_charset set to UTF-8 (= default value)<br /></span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br /></span><span class="default">iconv_strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br /></span><span class="comment">// always ok <br /></span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br /></span><span class="default">iconv_strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br /><br /></span><span class="comment">// BAD, do not use:<br /></span><span class="default">strlen</span><span class="keyword">(</span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)); </span><span class="comment">// breaks for some multi-byte characters<br /></span><span class="default">grapheme_strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">); </span><span class="comment">// counts graphemes, not code points <br /></span><span class="default">?&gt;<br /></span><br />2. The database column has a length defined in bytes (e.g. oracle's VARCHAR2(200 BYTE))<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// ok, but assumes mbstring.func_overload is 0 in php.ini (= default value)<br /></span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br /></span><span class="comment">// ok, forces count in bytes<br /></span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="string">"8bit"</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />3. The database column is in another character set (UTF-16, ISO-8859-1, etc...) with a length defined in characters / code points.<br /><br />Find the character set used, and pass it explicitly to the length function.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// ok, supported charsets: <a href="http://php.net/manual/en/mbstring.supported-encodings.php" rel="nofollow" target="_blank">http://php.net/manual/en/mbstring.supported-encodings.php</a><br /></span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$charset</span><span class="keyword">);<br /></span><span class="comment">// ok, supported charsets: <a href="https://www.gnu.org/software/libiconv/" rel="nofollow" target="_blank">https://www.gnu.org/software/libiconv/</a><br /></span><span class="default">iconv_strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$charset</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127814">  <div class="votes">
    <div id="Vu127814">
    <a href="/manual/vote-note.php?id=127814&amp;page=function.strlen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127814">
    <a href="/manual/vote-note.php?id=127814&amp;page=function.strlen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127814" title="57% like this...">
    5
    </div>
  </div>
  <a href="#127814" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#127814"> &para;</a><div class="date" title="2022-10-22 12:13"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127814">
<div class="phpcode"><code><span class="html">Since PHP 8.0, passing null to strlen() is deprecated. To check for a blank string (not including '0'):<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// PHP &lt; 8.0<br /></span><span class="keyword">if (!</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)) {<br />  echo </span><span class="string">'Blank'</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// PHP &gt;= 8.0<br /></span><span class="keyword">if (</span><span class="default">$text </span><span class="keyword">=== </span><span class="default">null </span><span class="keyword">|| </span><span class="default">$text </span><span class="keyword">=== </span><span class="string">''</span><span class="keyword">)) {<br />  echo </span><span class="string">'empty'</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98315">  <div class="votes">
    <div id="Vu98315">
    <a href="/manual/vote-note.php?id=98315&amp;page=function.strlen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98315">
    <a href="/manual/vote-note.php?id=98315&amp;page=function.strlen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98315" title="56% like this...">
    20
    </div>
  </div>
  <a href="#98315" class="name">
  <strong class="user"><em>basil at gohar dot us</em></strong></a><a class="genanchor" href="#98315"> &para;</a><div class="date" title="2010-06-08 02:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98315">
<div class="phpcode"><code><span class="html">We just ran into what we thought was a bug but turned out to be a documented difference in behavior between PHP 5.2 &amp; 5.3.  Take the following code example:<br /><br /><span class="default">&lt;?php<br /><br />$attributes </span><span class="keyword">= array(</span><span class="string">'one'</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">, </span><span class="string">'three'</span><span class="keyword">);<br /><br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$attributes</span><span class="keyword">) == </span><span class="default">0 </span><span class="keyword">&amp;&amp; !</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$attributes</span><span class="keyword">)) {<br />    echo </span><span class="string">"We are in the 'if'\n"</span><span class="keyword">;  </span><span class="comment">//  PHP 5.3<br /></span><span class="keyword">} else {<br />    echo </span><span class="string">"We are in the 'else'\n"</span><span class="keyword">;  </span><span class="comment">//  PHP 5.2<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;<br /></span><br />This is because in 5.2 strlen will automatically cast anything passed to it as a string, and casting an array to a string yields the string "Array".  In 5.3, this changed, as noted in the following point in the backward incompatible changes in 5.3 (<a href="http://www.php.net/manual/en/migration53.incompatible.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/migration53.incompatible.php</a>):<br /><br />"The newer internal parameter parsing API has been applied across all the extensions bundled with PHP 5.3.x. This parameter parsing API causes functions to return NULL when passed incompatible parameters. There are some exceptions to this rule, such as the get_class() function, which will continue to return FALSE on error."<br /><br />So, in PHP 5.3, strlen($attributes) returns NULL, while in PHP 5.2, strlen($attributes) returns the integer 5.  This likely affects other functions, so if you are getting different behaviors or new bugs suddenly, check if you have upgraded to 5.3 (which we did recently), and then check for some warnings in your logs like this:<br /><br />strlen() expects parameter 1 to be string, array given in /var/www/sis/lib/functions/advanced_search_lib.php on line 1028<br /><br />If so, then you are likely experiencing this changed behavior.</span></code></div>
  </div>
 </div>
  <div class="note" id="120632">  <div class="votes">
    <div id="Vu120632">
    <a href="/manual/vote-note.php?id=120632&amp;page=function.strlen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120632">
    <a href="/manual/vote-note.php?id=120632&amp;page=function.strlen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120632" title="56% like this...">
    10
    </div>
  </div>
  <a href="#120632" class="name">
  <strong class="user"><em>John</em></strong></a><a class="genanchor" href="#120632"> &para;</a><div class="date" title="2017-02-12 04:08"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120632">
<div class="phpcode"><code><span class="html">There's a LOT of misinformation here, which I want to correct! Many people have warned against using strlen(), because it is "super slow". Well, that was probably true in old versions of PHP. But as of PHP7 that's definitely no longer true. It's now SUPER fast!<br /><br />I created a 20,00,000 byte string (~20 megabytes), and iterated ONE HUNDRED MILLION TIMES in a loop. Every loop iteration did a new strlen() on that very, very long string.<br /><br />The result: 100 million strlen() calls on a 20 megabyte string only took a total of 488 milliseconds. And the strlen() calls didn't get slower/faster even if I made the string smaller or bigger. The strlen() was pretty much a constant-time, super-fast operation<br /><br />So either PHP7 stores the length of every string as a field that it can simply always look up without having to count characters. Or it caches the result of strlen() until the string contents actually change. Either way, you should now never, EVER worry about strlen() performance again. As of PHP7, it is super fast!<br /><br />Here is the complete benchmark code if you want to reproduce it on your machine:<br /><br /><span class="default">&lt;?php<br /><br />$iterations </span><span class="keyword">= </span><span class="default">100000000</span><span class="keyword">; </span><span class="comment">// 100 million<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">( </span><span class="string">'0'</span><span class="keyword">, </span><span class="default">20000000 </span><span class="keyword">);<br /><br /></span><span class="comment">// benchmark loop and variable assignment to calculate loop overhead<br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$iterations</span><span class="keyword">; ++</span><span class="default">$i </span><span class="keyword">) {<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />}<br /></span><span class="default">$end </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$loop_elapsed </span><span class="keyword">= </span><span class="default">1000 </span><span class="keyword">* (</span><span class="default">$end </span><span class="keyword">- </span><span class="default">$start</span><span class="keyword">);<br /><br /></span><span class="comment">// benchmark strlen in a loop<br /></span><span class="default">$len </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$iterations</span><span class="keyword">; ++</span><span class="default">$i </span><span class="keyword">) {<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$str </span><span class="keyword">);<br />}<br /></span><span class="default">$end </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$strlen_elapsed </span><span class="keyword">= </span><span class="default">1000 </span><span class="keyword">* (</span><span class="default">$end </span><span class="keyword">- </span><span class="default">$start</span><span class="keyword">);<br /><br /></span><span class="comment">// subtract loop overhead from strlen() speed calculation<br /></span><span class="default">$strlen_elapsed </span><span class="keyword">-= </span><span class="default">$loop_elapsed</span><span class="keyword">;<br /><br />echo </span><span class="string">"\nstring length: </span><span class="keyword">{</span><span class="default">$len</span><span class="keyword">}</span><span class="string">\ntest took: </span><span class="keyword">{</span><span class="default">$strlen_elapsed</span><span class="keyword">}</span><span class="string"> milliseconds\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109715">  <div class="votes">
    <div id="Vu109715">
    <a href="/manual/vote-note.php?id=109715&amp;page=function.strlen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109715">
    <a href="/manual/vote-note.php?id=109715&amp;page=function.strlen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109715" title="54% like this...">
    19
    </div>
  </div>
  <a href="#109715" class="name">
  <strong class="user"><em>vcardillo at gmail dot com</em></strong></a><a class="genanchor" href="#109715"> &para;</a><div class="date" title="2012-08-14 03:59"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109715">
<div class="phpcode"><code><span class="html">I would like to demonstrate that you need more than just this function in order to truly test for an empty string. The reason being that <span class="default">&lt;?php strlen</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">); </span><span class="default">?&gt;</span> will return 0. So how do you know if the value was null, or truly an empty string?<br /><br /><span class="default">&lt;?php<br />$foo </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">);<br /></span><span class="default">$bar </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />echo </span><span class="string">"Length: " </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"Length: </span><span class="default">$len</span><span class="string"> &lt;br&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"Length: " </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br /><br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) echo </span><span class="string">'Null length is Zero &lt;br&gt;'</span><span class="keyword">;<br />if (</span><span class="default">$len </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">) echo </span><span class="string">'Null length is still Zero &lt;br&gt;'</span><span class="keyword">;<br /><br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">) == </span><span class="default">0 </span><span class="keyword">&amp;&amp; !</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">)) echo </span><span class="string">'!is_null(): $foo is truly an empty string &lt;br&gt;'</span><span class="keyword">;<br />else echo </span><span class="string">'!is_null(): $foo is probably null &lt;br&gt;'</span><span class="keyword">;<br /><br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">) == </span><span class="default">0 </span><span class="keyword">&amp;&amp; isset(</span><span class="default">$foo</span><span class="keyword">)) echo </span><span class="string">'isset(): $foo is truly an empty string &lt;br&gt;'</span><span class="keyword">;<br />else echo </span><span class="string">'isset(): $foo is probably null &lt;br&gt;'</span><span class="keyword">;<br /><br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">) == </span><span class="default">0 </span><span class="keyword">&amp;&amp; !</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">)) echo </span><span class="string">'!is_null(): $bar is truly an empty string &lt;br&gt;'</span><span class="keyword">;<br />else echo </span><span class="string">'!is_null(): $foo is probably null &lt;br&gt;'</span><span class="keyword">;<br /><br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">) == </span><span class="default">0 </span><span class="keyword">&amp;&amp; isset(</span><span class="default">$bar</span><span class="keyword">)) echo </span><span class="string">'isset(): $bar is truly an empty string &lt;br&gt;'</span><span class="keyword">;<br />else echo </span><span class="string">'isset(): $foo is probably null &lt;br&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />// Begin Output:<br />Length: 0<br />Length: 0 <br />Length: 0<br /><br />Null length is Zero <br />Null length is still Zero <br /><br />!is_null(): $foo is probably null <br />isset(): $foo is probably null <br /><br />!is_null(): $bar is truly an empty string <br />isset(): $bar is truly an empty string <br />// End Output<br /><br />So it would seem you need either is_null() or isset() in addition to strlen() if you care whether or not the original value was null.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strlen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strlen.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
