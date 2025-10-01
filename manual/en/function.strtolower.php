<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strtolower - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strtolower.php">
 <link rel="shorturl" href="https://www.php.net/strtolower">
 <link rel="alternate" href="https://www.php.net/strtolower" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strtok.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strtoupper.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strtolower.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strtolower.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strtolower.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strtolower.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strtolower.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strtolower.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strtolower.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strtolower.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strtolower.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strtolower.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strtolower.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Make a string lowercase" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strtolower - Manual" />
<meta name="twitter:description" content="Make a string lowercase" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strtolower - Manual" />
<meta itemprop="description" content="Make a string lowercase" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Make a string lowercase" />

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
        <a href="function.strtoupper.php">
          strtoupper &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strtok.php">
          &laquo; strtok        </a>
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
            <option value='en/function.strtolower.php' selected="selected">English</option>
            <option value='de/function.strtolower.php'>German</option>
            <option value='es/function.strtolower.php'>Spanish</option>
            <option value='fr/function.strtolower.php'>French</option>
            <option value='it/function.strtolower.php'>Italian</option>
            <option value='ja/function.strtolower.php'>Japanese</option>
            <option value='pt_BR/function.strtolower.php'>Brazilian Portuguese</option>
            <option value='ru/function.strtolower.php'>Russian</option>
            <option value='tr/function.strtolower.php'>Turkish</option>
            <option value='uk/function.strtolower.php'>Ukrainian</option>
            <option value='zh/function.strtolower.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strtolower" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strtolower</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strtolower</span> &mdash; <span class="dc-title">Make a string lowercase</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.strtolower-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strtolower</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns <code class="parameter">string</code> with all ASCII alphabetic characters
   converted to lowercase.
  </p>
  <p class="para">
   Bytes in the range <code class="literal">&quot;A&quot;</code> (0x41) to <code class="literal">&quot;Z&quot;</code>
   (0x5a) will be converted to the corresponding lowercase letter by adding 32
   to each byte value.
  </p>
  <p class="para">
   This can be used to convert ASCII characters within strings encoded with
   UTF-8, since multibyte UTF-8 characters will be ignored. To convert multibyte
   non-ASCII characters, use <span class="function"><a href="function.mb-strtolower.php" class="function">mb_strtolower()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strtolower-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-function.strtolower-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the lowercased string.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.strtolower-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.strtolower-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5176">
    <p><strong>Example #1 <span class="function"><strong>strtolower()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"Mary Had A Little Lamb and She LOVED It So"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">; </span><span style="color: #FF8000">// Prints mary had a little lamb and she loved it so<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>   
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.strtolower-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is
binary-safe.</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strtolower-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.strtoupper.php" class="function" rel="rdfs-seeAlso">strtoupper()</a> - Make a string uppercase</span></li>
    <li><span class="function"><a href="function.ucfirst.php" class="function" rel="rdfs-seeAlso">ucfirst()</a> - Make a string's first character uppercase</span></li>
    <li><span class="function"><a href="function.ucwords.php" class="function" rel="rdfs-seeAlso">ucwords()</a> - Uppercase the first character of each word in a string</span></li>
    <li><span class="function"><a href="function.mb-strtolower.php" class="function" rel="rdfs-seeAlso">mb_strtolower()</a> - Make a string lowercase</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/strtolower.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strtolower%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strtolower&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strtolower.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="98551">  <div class="votes">
    <div id="Vu98551">
    <a href="/manual/vote-note.php?id=98551&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98551">
    <a href="/manual/vote-note.php?id=98551&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98551" title="68% like this...">
    114
    </div>
  </div>
  <a href="#98551" class="name">
  <strong class="user"><em>marcin at maydesign dot pl</em></strong></a><a class="genanchor" href="#98551"> &para;</a><div class="date" title="2010-06-22 03:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98551">
<div class="phpcode"><code><span class="html">strtolower(); doesn't work for polish chars
<br />
<br /><span class="default">&lt;?php strtolower</span><span class="keyword">(</span><span class="string">"mĄkA"</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>will return: mĄka;
<br />
<br />the best solution - use mb_strtolower()
<br />
<br /><span class="default">&lt;?php mb_strtolower</span><span class="keyword">(</span><span class="string">"mĄkA"</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>will return: mąka</span></code></div>
  </div>
 </div>
  <div class="note" id="90061">  <div class="votes">
    <div id="Vu90061">
    <a href="/manual/vote-note.php?id=90061&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90061">
    <a href="/manual/vote-note.php?id=90061&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90061" title="61% like this...">
    37
    </div>
  </div>
  <a href="#90061" class="name">
  <strong class="user"><em>coder at bulgaria dot bg</em></strong></a><a class="genanchor" href="#90061"> &para;</a><div class="date" title="2009-04-03 04:08"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90061">
<div class="phpcode"><code><span class="html">for cyrillic and UTF 8 use  mb_convert_case
<br />
<br />exampel
<br />
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= </span><span class="string">"Австралия"</span><span class="keyword">;
<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">mb_convert_case</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">MB_CASE_LOWER</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);
<br />echo </span><span class="default">$string</span><span class="keyword">;
<br />
<br /></span><span class="comment">//output is: австралия
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116230">  <div class="votes">
    <div id="Vu116230">
    <a href="/manual/vote-note.php?id=116230&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116230">
    <a href="/manual/vote-note.php?id=116230&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116230" title="61% like this...">
    23
    </div>
  </div>
  <a href="#116230" class="name">
  <strong class="user"><em>helvete at bahno dot net</em></strong></a><a class="genanchor" href="#116230"> &para;</a><div class="date" title="2014-11-26 01:05"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116230">
<div class="phpcode"><code><span class="html">It is worth noting that <br /><span class="default">&lt;?php <br />var_dump</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">))<br /></span><span class="default">?&gt;<br /></span>returns: <br />string(0) ""</span></code></div>
  </div>
 </div>
  <div class="note" id="88049">  <div class="votes">
    <div id="Vu88049">
    <a href="/manual/vote-note.php?id=88049&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88049">
    <a href="/manual/vote-note.php?id=88049&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88049" title="56% like this...">
    8
    </div>
  </div>
  <a href="#88049" class="name">
  <strong class="user"><em>dbers26 at gmail dot com</em></strong></a><a class="genanchor" href="#88049"> &para;</a><div class="date" title="2009-01-07 01:34"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88049">
<div class="phpcode"><code><span class="html">the function  arraytolower will create duplicate entries since keys are case sensitive.  
<br />
<br /><span class="default">&lt;?php
<br />$array </span><span class="keyword">= array(</span><span class="string">'test1' </span><span class="keyword">=&gt; </span><span class="string">'asgAFasDAAd'</span><span class="keyword">, </span><span class="string">'TEST2' </span><span class="keyword">=&gt; </span><span class="string">'ASddhshsDGb'</span><span class="keyword">, </span><span class="string">'TeSt3 '</span><span class="keyword">=&gt; </span><span class="string">'asdasda@asdadadASDASDgh'</span><span class="keyword">);
<br />
<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">arraytolower</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>/*
<br />Array
<br />(
<br />    [test1] =&gt; asgafasdaad
<br />    [TEST2] =&gt; ASddhshsDGb
<br />    [TeSt3] =&gt; asdasda@asdadadASDASDgh
<br />    [test2] =&gt; asddhshsdgb
<br />    [test3] =&gt; asdasda@asdadadasdasdgh
<br />)
<br />*/
<br />
<br />I prefer this method
<br />
<br /><span class="default">&lt;?php
<br />  </span><span class="keyword">function </span><span class="default">arraytolower</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$include_leys</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {
<br />    
<br />    if(</span><span class="default">$include_leys</span><span class="keyword">) {
<br />      foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {
<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))
<br />          </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)] = </span><span class="default">arraytolower</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$include_leys</span><span class="keyword">);
<br />        else
<br />          </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)] = </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);
<br />      }
<br />      </span><span class="default">$array </span><span class="keyword">= </span><span class="default">$array2</span><span class="keyword">;
<br />    }
<br />    else {
<br />      foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {
<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))
<br />          </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">arraytolower</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$include_leys</span><span class="keyword">);
<br />        else
<br />          </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);   
<br />      }
<br />    }
<br />    
<br />    return </span><span class="default">$array</span><span class="keyword">;
<br />  } 
<br /></span><span class="default">?&gt;
<br /></span>
<br />which when used like this
<br />
<br /><span class="default">&lt;?php
<br />$array </span><span class="keyword">= </span><span class="default">$array </span><span class="keyword">= array(</span><span class="string">'test1' </span><span class="keyword">=&gt; </span><span class="string">'asgAFasDAAd'</span><span class="keyword">, </span><span class="string">'TEST2' </span><span class="keyword">=&gt; </span><span class="string">'ASddhshsDGb'</span><span class="keyword">, </span><span class="string">'TeSt3 '</span><span class="keyword">=&gt; </span><span class="string">'asdasda@asdadadASDASDgh'</span><span class="keyword">);
<br />
<br /></span><span class="default">$array1 </span><span class="keyword">= </span><span class="default">arraytolower</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br /></span><span class="default">$array2 </span><span class="keyword">= </span><span class="default">arraytolower</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br />
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />will give output of 
<br />
<br />Array
<br />(
<br />    [test1] =&gt; asgafasdaad
<br />    [TEST2] =&gt; asddhshsdgb
<br />    [TeSt3] =&gt; asdasda@asdadadasdasdgh
<br />)
<br />Array
<br />(
<br />    [test1] =&gt; asgafasdaad
<br />    [test2] =&gt; asddhshsdgb
<br />    [test3] =&gt; asdasda@asdadadasdasdgh
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="78560">  <div class="votes">
    <div id="Vu78560">
    <a href="/manual/vote-note.php?id=78560&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78560">
    <a href="/manual/vote-note.php?id=78560&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78560" title="55% like this...">
    4
    </div>
  </div>
  <a href="#78560" class="name">
  <strong class="user"><em>patricia at steuerungb dot de</em></strong></a><a class="genanchor" href="#78560"> &para;</a><div class="date" title="2007-10-17 06:29"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78560">
<div class="phpcode"><code><span class="html">When you're not sure, how the current locale is set, you might find the following function useful. It's strtolower for utf8-formatted text:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">strtolower_utf8</span><span class="keyword">(</span><span class="default">$inputString</span><span class="keyword">) {<br />    </span><span class="default">$outputString    </span><span class="keyword">= </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$inputString</span><span class="keyword">);<br />    </span><span class="default">$outputString    </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$outputString</span><span class="keyword">);<br />    </span><span class="default">$outputString    </span><span class="keyword">= </span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$outputString</span><span class="keyword">);<br />    return </span><span class="default">$outputString</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />It's not suitable for every occasion, but it surely gets in handy. I use it for lowering German 'Umlauts' like ä and ö.</span></code></div>
  </div>
 </div>
  <div class="note" id="54931">  <div class="votes">
    <div id="Vu54931">
    <a href="/manual/vote-note.php?id=54931&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54931">
    <a href="/manual/vote-note.php?id=54931&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54931" title="54% like this...">
    2
    </div>
  </div>
  <a href="#54931" class="name">
  <strong class="user"><em>mhuggins57 at yahoo dot com</em></strong></a><a class="genanchor" href="#54931"> &para;</a><div class="date" title="2005-07-19 04:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54931">
<div class="phpcode"><code><span class="html">There's a ucfirst "function" to make the first character uppercase, but there's no "lcfirst" function to make the first character lowercase.  Here's my own code to accomplish this.<br /><br />&lt;?<br />function lcfirst($str) {<br />    return strtolower(substr($str, 0, 1)) . substr($str, 1);<br />}<br />?&gt;<br /><br />I found this particularly useful for generating XML nodes with the Reflection class.</span></code></div>
  </div>
 </div>
  <div class="note" id="85640">  <div class="votes">
    <div id="Vu85640">
    <a href="/manual/vote-note.php?id=85640&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85640">
    <a href="/manual/vote-note.php?id=85640&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85640" title="53% like this...">
    3
    </div>
  </div>
  <a href="#85640" class="name">
  <strong class="user"><em>rodrigoATsistemasparainternetDOTcomDOTbr</em></strong></a><a class="genanchor" href="#85640"> &para;</a><div class="date" title="2008-09-09 06:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85640">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fullLower</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){<br />   </span><span class="comment">// convert to entities<br />   </span><span class="default">$subject </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">ENT_QUOTES</span><span class="keyword">);<br />   </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">'/&amp;([a-z])(uml|acute|circ'</span><span class="keyword">;<br />   </span><span class="default">$pattern</span><span class="keyword">.= </span><span class="string">'|tilde|ring|elig|grave|slash|horn|cedil|th);/e'</span><span class="keyword">;<br />   </span><span class="default">$replace </span><span class="keyword">= </span><span class="string">"'&amp;'.strtolower('\\1').'\\2'.';'"</span><span class="keyword">;<br />   </span><span class="default">$result </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$subject</span><span class="keyword">);<br />   </span><span class="comment">// convert from entities back to characters<br />   </span><span class="default">$htmltable </span><span class="keyword">= </span><span class="default">get_html_translation_table</span><span class="keyword">(</span><span class="default">HTML_ENTITIES</span><span class="keyword">);<br />   foreach(</span><span class="default">$htmltable </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />      </span><span class="default">$result </span><span class="keyword">= </span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">),</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$result</span><span class="keyword">);<br />   }<br />   return(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">));<br />}<br /><br />echo </span><span class="default">fullLower</span><span class="keyword">(</span><span class="string">"Ã É Ò Õ ÚÙÛ"</span><span class="keyword">);<br /><br /></span><span class="comment">//results ã é ò õ úùû<br />//adapted from fullUpper on strtoupper manual<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75537">  <div class="votes">
    <div id="Vu75537">
    <a href="/manual/vote-note.php?id=75537&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75537">
    <a href="/manual/vote-note.php?id=75537&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75537" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75537" class="name">
  <strong class="user"><em>rok dot kralj at gmail dot com</em></strong></a><a class="genanchor" href="#75537"> &para;</a><div class="date" title="2007-06-04 11:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75537">
<div class="phpcode"><code><span class="html">Slovenian characters<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">strtolower_slovenian</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)<br />    {<br />        </span><span class="default">$low</span><span class="keyword">=array(</span><span class="string">"Č" </span><span class="keyword">=&gt; </span><span class="string">"č"</span><span class="keyword">, </span><span class="string">"Ž" </span><span class="keyword">=&gt; </span><span class="string">"ž"</span><span class="keyword">, </span><span class="string">"Š" </span><span class="keyword">=&gt; </span><span class="string">"š"</span><span class="keyword">);<br />        return </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$low</span><span class="keyword">));<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60897">  <div class="votes">
    <div id="Vu60897">
    <a href="/manual/vote-note.php?id=60897&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60897">
    <a href="/manual/vote-note.php?id=60897&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60897" title="50% like this...">
    0
    </div>
  </div>
  <a href="#60897" class="name">
  <strong class="user"><em>Patrick</em></strong></a><a class="genanchor" href="#60897"> &para;</a><div class="date" title="2006-01-19 10:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60897">
<div class="phpcode"><code><span class="html">If you're considering using the below unhtmlentities function from phpContrib, I would suggest this one as an alternative:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">unhtmlentities</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)<br />{<br />   </span><span class="comment">// replace numeric entities<br />   </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'~&amp;#x([0-9a-f]+);~ei'</span><span class="keyword">, </span><span class="string">'chr(hexdec("\\1"))'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />   </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'~&amp;#([0-9]+);~e'</span><span class="keyword">, </span><span class="string">'chr(\\1)'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />   </span><span class="comment">// replace literal entities<br />   </span><span class="default">$trans_tbl </span><span class="keyword">= </span><span class="default">get_html_translation_table</span><span class="keyword">(</span><span class="default">HTML_ENTITIES</span><span class="keyword">);<br />   </span><span class="default">$trans_tbl </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$trans_tbl</span><span class="keyword">);<br />   return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$trans_tbl</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />That was copied exactly from the html_entity_decode manual page.  It'll handle numeric entities correctly, the below function won't.</span></code></div>
  </div>
 </div>
  <div class="note" id="75279">  <div class="votes">
    <div id="Vu75279">
    <a href="/manual/vote-note.php?id=75279&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75279">
    <a href="/manual/vote-note.php?id=75279&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75279" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#75279" class="name">
  <strong class="user"><em>marco at recchiuti dot it</em></strong></a><a class="genanchor" href="#75279"> &para;</a><div class="date" title="2007-05-22 12:43"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75279">
<div class="phpcode"><code><span class="html">Maybe it is not so elegant, but it Works.<br />It's just a fast Idea and it is what I need.<br />Any hacks for other characters (link !, ? etc etc) should help.<br /><br />function RemoveShouting($string)<br />{<br />     $frase = "";    <br />     $astri = explode(".", $string);<br />     foreach ($astri as $elem)<br />    $frase .= " ".ucfirst(trim(strtolower($elem))).". ";<br />       <br />    return trim($frase);<br />}<br /><br />Cheers!<br />M</span></code></div>
  </div>
 </div>
  <div class="note" id="28660">  <div class="votes">
    <div id="Vu28660">
    <a href="/manual/vote-note.php?id=28660&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28660">
    <a href="/manual/vote-note.php?id=28660&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28660" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#28660" class="name">
  <strong class="user"><em>bkimble at ebaseweb dot com</em></strong></a><a class="genanchor" href="#28660"> &para;</a><div class="date" title="2003-01-19 10:39"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28660">
<div class="phpcode"><code><span class="html">Heres a small function I wrote to stop people from submitting data that is ALL IN CAPS SO THEY CAN GET MORE ATTENTION THAT THE REST OF THE USER SUBMITTED DATA on my website :) If you can make it better, by all means do so. This function splits up words delimited by a space, and makes only the first letter of each word capitalized. You can easily modify it so it's only the very first word of the string. I've also added some exceptions so you don't make things like roman numerals look like "Iii" or "Xcmii" or something.<br /><br />function RemoveShouting($string)<br />{<br /> $lower_exceptions = array( <br />        "to" =&gt; "1", "a" =&gt; "1", "the" =&gt; "1", "of" =&gt; "1"<br /> ); <br /> <br /> $higher_exceptions = array(  <br />        "I" =&gt; "1", "II" =&gt; "1", "III" =&gt; "1", "IV" =&gt; "1",  <br />        "V" =&gt; "1", "VI" =&gt; "1", "VII" =&gt; "1", "VIII" =&gt; "1",<br />        "XI" =&gt; "1", "X" =&gt; "1"<br /> ); <br /> <br /> $words = split(" ", $string); <br /> $newwords = array(); <br /> foreach ($words as $word)<br /> {<br />  if (!$higher_exceptions[$word]) $word = strtolower($word);<br />  if (!$lower_exceptions[$word]) $word[0] = strtoupper($word[0]);<br />  array_push($newwords, $word);<br /> }<br /> return join(" ", $newwords);<br />}<br /><br />BK</span></code></div>
  </div>
 </div>
  <div class="note" id="103212">  <div class="votes">
    <div id="Vu103212">
    <a href="/manual/vote-note.php?id=103212&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103212">
    <a href="/manual/vote-note.php?id=103212&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103212" title="41% like this...">
    -4
    </div>
  </div>
  <a href="#103212" class="name">
  <strong class="user"><em>RCube</em></strong></a><a class="genanchor" href="#103212"> &para;</a><div class="date" title="2011-03-31 04:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103212">
<div class="phpcode"><code><span class="html">To convert an entire array to lower, I prefer this method;
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">arraytolower</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">, </span><span class="default">$round </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">){
<br />  return </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)));
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />3 lines of code seem a lot less overhead than 10-40.
<br />If there's any intrinsic problem with this method, please post it.</span></code></div>
  </div>
 </div>
  <div class="note" id="48003">  <div class="votes">
    <div id="Vu48003">
    <a href="/manual/vote-note.php?id=48003&amp;page=function.strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48003">
    <a href="/manual/vote-note.php?id=48003&amp;page=function.strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48003" title="43% like this...">
    -4
    </div>
  </div>
  <a href="#48003" class="name">
  <strong class="user"><em>kmcdermott at perimeterinstitute dot ca</em></strong></a><a class="genanchor" href="#48003"> &para;</a><div class="date" title="2004-12-08 01:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48003">
<div class="phpcode"><code><span class="html">To do case insensitive comparisons in a database, strtolower() can be a quick and dirty solution:<br /><br />$Sql = "SELECT * FROM tablename WHERE LOWER(column_name) = '".strtolower($my_var)."'";</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strtolower&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strtolower.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
