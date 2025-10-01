<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strtoupper - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strtoupper.php">
 <link rel="shorturl" href="https://www.php.net/strtoupper">
 <link rel="alternate" href="https://www.php.net/strtoupper" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strtolower.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strtr.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strtoupper.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strtoupper.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strtoupper.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strtoupper.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strtoupper.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strtoupper.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strtoupper.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strtoupper.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strtoupper.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strtoupper.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strtoupper.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Make a string uppercase" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strtoupper - Manual" />
<meta name="twitter:description" content="Make a string uppercase" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strtoupper - Manual" />
<meta itemprop="description" content="Make a string uppercase" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Make a string uppercase" />

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
        <a href="function.strtr.php">
          strtr &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strtolower.php">
          &laquo; strtolower        </a>
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
            <option value='en/function.strtoupper.php' selected="selected">English</option>
            <option value='de/function.strtoupper.php'>German</option>
            <option value='es/function.strtoupper.php'>Spanish</option>
            <option value='fr/function.strtoupper.php'>French</option>
            <option value='it/function.strtoupper.php'>Italian</option>
            <option value='ja/function.strtoupper.php'>Japanese</option>
            <option value='pt_BR/function.strtoupper.php'>Brazilian Portuguese</option>
            <option value='ru/function.strtoupper.php'>Russian</option>
            <option value='tr/function.strtoupper.php'>Turkish</option>
            <option value='uk/function.strtoupper.php'>Ukrainian</option>
            <option value='zh/function.strtoupper.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strtoupper" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strtoupper</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strtoupper</span> &mdash; <span class="dc-title">Make a string uppercase</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.strtoupper-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strtoupper</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns <code class="parameter">string</code> with all ASCII alphabetic characters
   converted to uppercase.
  </p>
  <p class="para">
   Bytes in the range <code class="literal">&quot;a&quot;</code> (0x61) to <code class="literal">&quot;z&quot;</code>
   (0x7a) will be converted to the corresponding uppercase letter by subtracting
   32 from each byte value.
  </p>
  <p class="para">
   This can be used to convert ASCII characters within strings encoded with
   UTF-8, since multibyte UTF-8 characters will be ignored. To convert multibyte
   non-ASCII characters, use <span class="function"><a href="function.mb-strtoupper.php" class="function">mb_strtoupper()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strtoupper-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-function.strtoupper-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the uppercased string.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.strtoupper-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.strtoupper-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5177">
    <p><strong>Example #1 <span class="function"><strong>strtoupper()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"Mary Had A Little Lamb and She LOVED It So"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">; </span><span style="color: #FF8000">// Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>   
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.strtoupper-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is
binary-safe.</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strtoupper-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.strtolower.php" class="function" rel="rdfs-seeAlso">strtolower()</a> - Make a string lowercase</span></li>
    <li><span class="function"><a href="function.ucfirst.php" class="function" rel="rdfs-seeAlso">ucfirst()</a> - Make a string's first character uppercase</span></li>
    <li><span class="function"><a href="function.ucwords.php" class="function" rel="rdfs-seeAlso">ucwords()</a> - Uppercase the first character of each word in a string</span></li>
    <li><span class="function"><a href="function.mb-strtoupper.php" class="function" rel="rdfs-seeAlso">mb_strtoupper()</a> - Make a string uppercase</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/strtoupper.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strtoupper%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strtoupper&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strtoupper.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112383">  <div class="votes">
    <div id="Vu112383">
    <a href="/manual/vote-note.php?id=112383&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112383">
    <a href="/manual/vote-note.php?id=112383&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112383" title="64% like this...">
    53
    </div>
  </div>
  <a href="#112383" class="name">
  <strong class="user"><em>andre at koethur dot de</em></strong></a><a class="genanchor" href="#112383"> &para;</a><div class="date" title="2013-06-10 08:28"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112383">
<div class="phpcode"><code><span class="html">One might think that setting the correct locale would do the trick with for example german umlauts, but this is not the case. You have to use mb_strtoupper() instead:<br /><br /><span class="default">&lt;?php<br /><br />setlocale</span><span class="keyword">(</span><span class="default">LC_CTYPE</span><span class="keyword">, </span><span class="string">'de_DE.UTF8'</span><span class="keyword">);<br /><br />echo </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="string">'Umlaute äöü in uppercase'</span><span class="keyword">); </span><span class="comment">// outputs "UMLAUTE äöü IN UPPERCASE"<br /></span><span class="keyword">echo </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="string">'Umlaute äöü in uppercase'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">); </span><span class="comment">// outputs "UMLAUTE ÄÖÜ IN UPPERCASE"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="27328">  <div class="votes">
    <div id="Vu27328">
    <a href="/manual/vote-note.php?id=27328&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27328">
    <a href="/manual/vote-note.php?id=27328&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27328" title="52% like this...">
    3
    </div>
  </div>
  <a href="#27328" class="name">
  <strong class="user"><em>mec at stadeleck dot org</em></strong></a><a class="genanchor" href="#27328"> &para;</a><div class="date" title="2002-12-02 06:54"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27328">
<div class="phpcode"><code><span class="html">something I myself first not thought about:<br />if there are any html entities (named entities) in your string, strtoupper will turn all letters within this entities to upper case, too. So if you want to manipulate a string with strtoupper it should contain only unicode entities (if ever).</span></code></div>
  </div>
 </div>
  <div class="note" id="47020">  <div class="votes">
    <div id="Vu47020">
    <a href="/manual/vote-note.php?id=47020&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47020">
    <a href="/manual/vote-note.php?id=47020&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47020" title="52% like this...">
    2
    </div>
  </div>
  <a href="#47020" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#47020"> &para;</a><div class="date" title="2004-10-30 03:23"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47020">
<div class="phpcode"><code><span class="html">If you only need to extend the conversion by the characters of a certain language, it's possible to control this using an environment variable to change the locale:<br /><br />setlocale(LC_CTYPE, "de_DE");</span></code></div>
  </div>
 </div>
  <div class="note" id="106453">  <div class="votes">
    <div id="Vu106453">
    <a href="/manual/vote-note.php?id=106453&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106453">
    <a href="/manual/vote-note.php?id=106453&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106453" title="50% like this...">
    0
    </div>
  </div>
  <a href="#106453" class="name">
  <strong class="user"><em>james at snasta dot ie</em></strong></a><a class="genanchor" href="#106453"> &para;</a><div class="date" title="2011-11-10 06:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106453">
<div class="phpcode"><code><span class="html">In the Irish language certain initial mutations can never be capitalized — the following simple function can be used to capitalize text in Irish.<br /><br />i.e. Muintir na hÉireann -&gt; MUINTIR NA hÉIREANN<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">strtoupper_ga</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) {<br />    return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="string">"utf-8"</span><span class="keyword">), array(<br />      </span><span class="string">" MB" </span><span class="keyword">=&gt; </span><span class="string">" mB"</span><span class="keyword">, <br />      </span><span class="string">" GC" </span><span class="keyword">=&gt; </span><span class="string">" gC"</span><span class="keyword">, <br />      </span><span class="string">" ND" </span><span class="keyword">=&gt; </span><span class="string">" nD"</span><span class="keyword">, <br />      </span><span class="string">" BHF" </span><span class="keyword">=&gt; </span><span class="string">" bhF"</span><span class="keyword">, <br />      </span><span class="string">" NG" </span><span class="keyword">=&gt; </span><span class="string">" nG"</span><span class="keyword">, <br />      </span><span class="string">" BP" </span><span class="keyword">=&gt; </span><span class="string">" bP"</span><span class="keyword">, <br />      </span><span class="string">" DT" </span><span class="keyword">=&gt; </span><span class="string">" dT"</span><span class="keyword">, <br />      </span><span class="string">" HA" </span><span class="keyword">=&gt; </span><span class="string">" hA"</span><span class="keyword">,<br />      </span><span class="string">" HE" </span><span class="keyword">=&gt; </span><span class="string">" hE"</span><span class="keyword">,<br />      </span><span class="string">" HI" </span><span class="keyword">=&gt; </span><span class="string">" hI"</span><span class="keyword">,<br />      </span><span class="string">" HO" </span><span class="keyword">=&gt; </span><span class="string">" hO"</span><span class="keyword">,<br />      </span><span class="string">" HU" </span><span class="keyword">=&gt; </span><span class="string">" hU"</span><span class="keyword">,<br />      </span><span class="string">" HÁ" </span><span class="keyword">=&gt; </span><span class="string">" hÁ"</span><span class="keyword">,<br />      </span><span class="string">" HÉ" </span><span class="keyword">=&gt; </span><span class="string">" hÉ"</span><span class="keyword">,<br />      </span><span class="string">" HÍ" </span><span class="keyword">=&gt; </span><span class="string">" hÍ"</span><span class="keyword">,<br />      </span><span class="string">" HÓ" </span><span class="keyword">=&gt; </span><span class="string">" hÓ"</span><span class="keyword">,<br />      </span><span class="string">" HÚ" </span><span class="keyword">=&gt; </span><span class="string">" hÚ"<br />    </span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82592">  <div class="votes">
    <div id="Vu82592">
    <a href="/manual/vote-note.php?id=82592&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82592">
    <a href="/manual/vote-note.php?id=82592&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82592" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82592" class="name">
  <strong class="user"><em>spaceman at foo dot at</em></strong></a><a class="genanchor" href="#82592"> &para;</a><div class="date" title="2008-04-17 09:59"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82592">
<div class="phpcode"><code><span class="html">It has been mentioned in a previous comment that all you need to do to let PHP's strtoupper() do the conversion - instead of writing more or less complicated functions yourself - is to specify the locale in which you're doing the case conversion:<br /><br /><span class="default">&lt;?php setlocale</span><span class="keyword">(</span><span class="default">LC_CTYPE</span><span class="keyword">, </span><span class="string">"de_AT"</span><span class="keyword">) </span><span class="default">?&gt;<br /></span><br />It is important to note that setlocale() will silently fail if it can't find the specified locale on your system, so *always* check its return value. Try different spellings: using "de_AT" as an example, there are various combinations that may or may not work for you: "de", "de_AT.utf8", "de_AT.iso-8859-1", "de_AT.latin1", "de_AT@euro", etc).<br /><br />If you can't find an appropriate locale setting, check your system configuration (locales are a system-wide setting, PHP gets them from the OS). On Windows, locales can be set from the Control Panel; on Linux it depends on your distribution. You can try "sudo dpkg-reconfigure locales" on Debian-based distros, or configure them manually. On Ubuntu Dapper, I had to copy entries over from /usr/share/i18n/SUPPORTED to /var/lib/locales/supported.d/local, then do the dpkg-reconfigure.<br /><br />After you're done, restart the web server.<br /><br />That said, there are special cases where you want to do the conversion manually. In German, for example, the letter 'ß' (szlig) only exists as a lower-case character, and so doesn't get converted by strtoupper. The convential way to express a 'ß' in an uppercase string is "SS". This function will take care of this exception (for Latin1 and most of Latin9, at least):<br /><br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">(</span><span class="string">"LATIN1_UC_CHARS"</span><span class="keyword">, </span><span class="string">"ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝ"</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"LATIN1_LC_CHARS"</span><span class="keyword">, </span><span class="string">"àáâãäåæçèéêëìíîïðñòóôõöøùúûüý"</span><span class="keyword">);<br /><br />function </span><span class="default">uc_latin1 </span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">LATIN1_LC_CHARS</span><span class="keyword">, </span><span class="default">LATIN1_UC_CHARS</span><span class="keyword">));<br />    return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, array(</span><span class="string">"ß" </span><span class="keyword">=&gt; </span><span class="string">"SS"</span><span class="keyword">));<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119572">  <div class="votes">
    <div id="Vu119572">
    <a href="/manual/vote-note.php?id=119572&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119572">
    <a href="/manual/vote-note.php?id=119572&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119572" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#119572" class="name">
  <strong class="user"><em>uilmind at favor.com.ua</em></strong></a><a class="genanchor" href="#119572"> &para;</a><div class="date" title="2016-07-09 10:36"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119572">
<div class="phpcode"><code><span class="html">Here is how to make the character in upper case, except HTML-entities:<br /><br />$s = substr(preg_replace('/(?&lt;=^|;)(.+?)(?=&amp;[0-9A-Za-z]+;|$)/e', "strtoupper('$1')", ' '.$s), 1);<br /><br />There is small kludge, however. Unfortunately I tired to find out the way how to exclude HTML-entity at the start of the line, so I have added 1 dummy character at the start of the text and removing it after the conversion.</span></code></div>
  </div>
 </div>
  <div class="note" id="65943">  <div class="votes">
    <div id="Vu65943">
    <a href="/manual/vote-note.php?id=65943&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65943">
    <a href="/manual/vote-note.php?id=65943&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65943" title="50% like this...">
    0
    </div>
  </div>
  <a href="#65943" class="name">
  <strong class="user"><em>bart at insane dot at</em></strong></a><a class="genanchor" href="#65943"> &para;</a><div class="date" title="2006-05-10 04:31"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65943">
<div class="phpcode"><code><span class="html">When using UTF-8 and need to convert to uppercase with <br />special characters like the german ä,ö,ü (didn't test for french,polish,russian but think it should work, too) try this:<br /><br />function strtoupper_utf8($string){<br />    $string=utf8_decode($string);<br />    $string=strtoupper($string);<br />    $string=utf8_encode($string);<br />    return $string;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="53371">  <div class="votes">
    <div id="Vu53371">
    <a href="/manual/vote-note.php?id=53371&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53371">
    <a href="/manual/vote-note.php?id=53371&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53371" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#53371" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#53371"> &para;</a><div class="date" title="2005-05-30 06:11"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53371">
<div class="phpcode"><code><span class="html">// 2005/5/30 Justin<br />    // Chinese_Traditional toupper<br />    function CT_to_upper($string)<br />    {        <br />        $isChineseStart = false;<br />        <br />          $new_string = "";<br />         $i = 0;<br />          while($i &lt; strlen($string))<br />          {                   <br />               if (ord(substr($string,$i,1)) &lt;128)<br />               {<br />                   if( $isChineseStart == false )<br />                       $new_string .= strtoupper(mb_substr($string,$i,1));<br />                   else       <br />                       $new_string .= substr($string,$i,1);<br />               }<br />               else<br />               {<br />                   if( $isChineseStart == false )<br />                       $isChineseStart = true;<br />                   else<br />                       $isChineseStart = false;                       <br />                     <br />                     $new_string .= substr($string,$i,1);<br />               }<br />               $i++;<br />          }<br />          return $new_string;          <br />    } <br />    //</span></code></div>
  </div>
 </div>
  <div class="note" id="97667">  <div class="votes">
    <div id="Vu97667">
    <a href="/manual/vote-note.php?id=97667&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97667">
    <a href="/manual/vote-note.php?id=97667&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97667" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#97667" class="name">
  <strong class="user"><em>smieat</em></strong></a><a class="genanchor" href="#97667"> &para;</a><div class="date" title="2010-05-01 04:39"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97667">
<div class="phpcode"><code><span class="html">perfect solutions for turkish utf-8 (including i I conversations):
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">strtolowertr</span><span class="keyword">(</span><span class="default">$metin</span><span class="keyword">){
<br />    return </span><span class="default">mb_convert_case</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'I'</span><span class="keyword">,</span><span class="string">'ı'</span><span class="keyword">,</span><span class="default">$metin</span><span class="keyword">), </span><span class="default">MB_CASE_LOWER</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);
<br />}
<br />
<br />function </span><span class="default">strtouppertr</span><span class="keyword">(</span><span class="default">$metin</span><span class="keyword">){
<br />    return </span><span class="default">mb_convert_case</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'i'</span><span class="keyword">,</span><span class="string">'İ'</span><span class="keyword">,</span><span class="default">$metin</span><span class="keyword">), </span><span class="default">MB_CASE_UPPER</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);
<br />}
<br />
<br />function </span><span class="default">ucwordstr</span><span class="keyword">(</span><span class="default">$metin</span><span class="keyword">) {
<br />    return </span><span class="default">ltrim</span><span class="keyword">(</span><span class="default">mb_convert_case</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">' I'</span><span class="keyword">,</span><span class="string">' ı'</span><span class="keyword">, </span><span class="string">' İ'</span><span class="keyword">, </span><span class="string">' i'</span><span class="keyword">),array(</span><span class="string">' I'</span><span class="keyword">,</span><span class="string">' I'</span><span class="keyword">,</span><span class="string">' İ'</span><span class="keyword">,</span><span class="string">' İ'</span><span class="keyword">),</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$metin</span><span class="keyword">), </span><span class="default">MB_CASE_TITLE</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">));
<br />}
<br />
<br />function </span><span class="default">ucfirsttr</span><span class="keyword">(</span><span class="default">$metin</span><span class="keyword">) {
<br />    </span><span class="default">$metin </span><span class="keyword">= </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">crc32</span><span class="keyword">(</span><span class="default">$metin</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]),array(</span><span class="default">1309403428</span><span class="keyword">, -</span><span class="default">797999993</span><span class="keyword">, </span><span class="default">957143474</span><span class="keyword">)) ? array(</span><span class="default">strtouppertr</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$metin</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)),</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$metin</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)) : array(</span><span class="default">strtouppertr</span><span class="keyword">(</span><span class="default">$metin</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]),</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$metin</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));
<br />return </span><span class="default">$metin</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">].</span><span class="default">$metin</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88292">  <div class="votes">
    <div id="Vu88292">
    <a href="/manual/vote-note.php?id=88292&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88292">
    <a href="/manual/vote-note.php?id=88292&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88292" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#88292" class="name">
  <strong class="user"><em>chris at table4 dot com</em></strong></a><a class="genanchor" href="#88292"> &para;</a><div class="date" title="2009-01-19 07:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88292">
<div class="phpcode"><code><span class="html">Simple function to change the case of your string and any accented html characters contained within it. <br /><br />Inspired by fullUpper(), by silent at gmx dot li... just a little bit more atomic.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">convertCase</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$case </span><span class="keyword">= </span><span class="string">'upper'</span><span class="keyword">)<br />{ </span><span class="comment">//yours, courtesy of table4.com  :)<br />  </span><span class="keyword">switch(</span><span class="default">$case</span><span class="keyword">)<br />  {<br />    case </span><span class="string">"upper" </span><span class="keyword">:<br />    default:<br />      </span><span class="default">$str </span><span class="keyword">= </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />      </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">'/&amp;([A-Z])(UML|ACUTE|CIRC|TILDE|RING|'</span><span class="keyword">;<br />      </span><span class="default">$pattern </span><span class="keyword">.= </span><span class="string">'ELIG|GRAVE|SLASH|HORN|CEDIL|TH);/e'</span><span class="keyword">;<br />      </span><span class="default">$replace </span><span class="keyword">= </span><span class="string">"'&amp;'.'\\1'.strtolower('\\2').';'"</span><span class="keyword">; </span><span class="comment">//convert the important bit back to lower<br />    </span><span class="keyword">break;<br />    <br />    case </span><span class="string">"lower" </span><span class="keyword">:<br />      </span><span class="default">$str </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    break;<br />  }<br />  <br />  </span><span class="default">$str </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />  return </span><span class="default">$str</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Depending on what you are trying to achieve you would call like this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//with entities...<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">convertCase</span><span class="keyword">(</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">"ISO-8859-1"</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124078">  <div class="votes">
    <div id="Vu124078">
    <a href="/manual/vote-note.php?id=124078&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124078">
    <a href="/manual/vote-note.php?id=124078&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124078" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#124078" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#124078"> &para;</a><div class="date" title="2019-07-28 01:08"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124078">
<div class="phpcode"><code><span class="html">This function has a real challenge when it comes to Turkish. In Turkish the ASCII letter 'i' uppercases to a non-ASCII character. This means that PHP cannot upper case it.<br /><br />i.e. for the Turkish locale, strtoupper('i')=='i'<br /><br />This can mess with basic program logic.<br /><br />There's no simple solution. The core problem is discussed more here:<br /><a href="http://www.i18nguy.com/unicode/turkish-i18n.html" rel="nofollow" target="_blank">http://www.i18nguy.com/unicode/turkish-i18n.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="74574">  <div class="votes">
    <div id="Vu74574">
    <a href="/manual/vote-note.php?id=74574&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74574">
    <a href="/manual/vote-note.php?id=74574&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74574" title="43% like this...">
    -5
    </div>
  </div>
  <a href="#74574" class="name">
  <strong class="user"><em>RUNET</em></strong></a><a class="genanchor" href="#74574"> &para;</a><div class="date" title="2007-04-17 05:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74574">
<div class="phpcode"><code><span class="html">Russian<br /><br />function str_to_upper($str){<br />    return strtr($str, <br />    "abcdefghijklmnopqrstuvwxyz".<br />    "\xE0\xE1\xE2\xE3\xE4\xE5".<br />    "\xb8\xe6\xe7\xe8\xe9\xea".<br />    "\xeb\xeC\xeD\xeE\xeF\xf0".<br />    "\xf1\xf2\xf3\xf4\xf5\xf6".<br />    "\xf7\xf8\xf9\xfA\xfB\xfC".<br />    "\xfD\xfE\xfF",<br />    "ABCDEFGHIJKLMNOPQRSTUVWXYZ".<br />    "\xC0\xC1\xC2\xC3\xC4\xC5".<br />    "\xA8\xC6\xC7\xC8\xC9\xCA".<br />    "\xCB\xCC\xCD\xCE\xCF\xD0".<br />    "\xD1\xD2\xD3\xD4\xD5\xD6".<br />    "\xD7\xD8\xD9\xDA\xDB\xDC".<br />    "\xDD\xDE\xDF");<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="117720">  <div class="votes">
    <div id="Vu117720">
    <a href="/manual/vote-note.php?id=117720&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117720">
    <a href="/manual/vote-note.php?id=117720&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117720" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#117720" class="name">
  <strong class="user"><em>adriaanse06 at hotmail dot com</em></strong></a><a class="genanchor" href="#117720"> &para;</a><div class="date" title="2015-07-28 11:51"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117720">
<div class="phpcode"><code><span class="html">$ther=''.THEREISALREADYA.' '.CONCEPT.' '.SAVED.' ';<br />or<br />$ther="There Is all ready A concept SAVED";<br /><br />$fupper=substr("$ther",0,1);<br />pick the first char<br /><br />$theru = strtoupper($fupper);<br />make it upper <br /><br />$flower=substr("$ther",1,100);<br />pick the rest<br /><br />$therl = strtolower($flower);<br />make them lower<br /><br />Result:<br />There is all ready a concept saved</span></code></div>
  </div>
 </div>
  <div class="note" id="53165">  <div class="votes">
    <div id="Vu53165">
    <a href="/manual/vote-note.php?id=53165&amp;page=function.strtoupper&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53165">
    <a href="/manual/vote-note.php?id=53165&amp;page=function.strtoupper&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53165" title="39% like this...">
    -5
    </div>
  </div>
  <a href="#53165" class="name">
  <strong class="user"><em>willyann at gmail dot com</em></strong></a><a class="genanchor" href="#53165"> &para;</a><div class="date" title="2005-05-24 09:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53165">
<div class="phpcode"><code><span class="html">chinese<br /><br />function to_upper($string) {<br />  $new_string = "";<br />  $i = 0;<br />  while($i &lt; strlen($string)) {<br />   if (ord(substr($string,$i,1)) &lt;128)<br />   {<br />     $new_string .= strtoupper(substr($string,$i,1));<br />     $i++;<br />   } else {<br />     $new_string .= substr($string,$i,2);<br />     $i=$i+2;<br />   }<br />  }<br />  return $new_string;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strtoupper&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strtoupper.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
