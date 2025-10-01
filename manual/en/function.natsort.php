<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: natsort - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.natsort.php">
 <link rel="shorturl" href="https://www.php.net/natsort">
 <link rel="alternate" href="https://www.php.net/natsort" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.natcasesort.php">
 <link rel="next" href="https://www.php.net/manual/en/function.next.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.natsort.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.natsort.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.natsort.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.natsort.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.natsort.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.natsort.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.natsort.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.natsort.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.natsort.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.natsort.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.natsort.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sort an array using a &quot;natural order&quot; algorithm" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: natsort - Manual" />
<meta name="twitter:description" content="Sort an array using a &quot;natural order&quot; algorithm" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: natsort - Manual" />
<meta itemprop="description" content="Sort an array using a &quot;natural order&quot; algorithm" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sort an array using a &quot;natural order&quot; algorithm" />

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
        <a href="function.next.php">
          next &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.natcasesort.php">
          &laquo; natcasesort        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.array.php'>Arrays</a></li>      <li><a href='ref.array.php'>Array Functions</a></li>      </ul>
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
            <option value='en/function.natsort.php' selected="selected">English</option>
            <option value='de/function.natsort.php'>German</option>
            <option value='es/function.natsort.php'>Spanish</option>
            <option value='fr/function.natsort.php'>French</option>
            <option value='it/function.natsort.php'>Italian</option>
            <option value='ja/function.natsort.php'>Japanese</option>
            <option value='pt_BR/function.natsort.php'>Brazilian Portuguese</option>
            <option value='ru/function.natsort.php'>Russian</option>
            <option value='tr/function.natsort.php'>Turkish</option>
            <option value='uk/function.natsort.php'>Ukrainian</option>
            <option value='zh/function.natsort.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.natsort" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">natsort</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">natsort</span> &mdash; <span class="dc-title">Sort an array using a &quot;natural order&quot; algorithm</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.natsort-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>natsort</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   This function implements a sort algorithm that orders alphanumeric strings
   in the way a human being would while maintaining key/value associations.
   This is described as a &quot;natural ordering&quot;.  An example of the difference
   between this algorithm and the regular computer string sorting algorithms
   (used in <span class="function"><a href="function.sort.php" class="function">sort()</a></span>) can be seen in the example below.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
 <p class="para">
  If two members compare as equal, they retain their original order.
  Prior to PHP 8.0.0, their relative order in the sorted array was undefined.
 </p>
</p></blockquote>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
 <p class="para">
    Resets array&#039;s internal pointer to the first element.
 </p>
</p></blockquote>

 </div>

 <div class="refsect1 parameters" id="refsect1-function.natsort-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.natsort-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.natsort-changelog">
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
 <td>8.2.0</td>
 <td>
  The return type is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> now; previously, it was <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
 </td>
</tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.natsort-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5319">
    <p><strong>Example #1 <span class="function"><strong>natsort()</strong></span> examples demonstrating basic usage</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array1 </span><span style="color: #007700">= </span><span style="color: #0000BB">$array2 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"img12.png"</span><span style="color: #007700">, </span><span style="color: #DD0000">"img10.png"</span><span style="color: #007700">, </span><span style="color: #DD0000">"img2.png"</span><span style="color: #007700">, </span><span style="color: #DD0000">"img1.png"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">asort</span><span style="color: #007700">(</span><span style="color: #0000BB">$array1</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Standard sorting\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$array1</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">natsort</span><span style="color: #007700">(</span><span style="color: #0000BB">$array2</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"\nNatural order sorting\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$array2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Standard sorting
Array
(
    [3] =&gt; img1.png
    [1] =&gt; img10.png
    [0] =&gt; img12.png
    [2] =&gt; img2.png
)

Natural order sorting
Array
(
    [3] =&gt; img1.png
    [2] =&gt; img2.png
    [1] =&gt; img10.png
    [0] =&gt; img12.png
)</pre>
</div>
    </div>
    <div class="example-contents"><p>
     For more information see: Martin Pool&#039;s <a href="https://github.com/sourcefrog/natsort" class="link external">&raquo;&nbsp;Natural Order String Comparison</a>
     page.
    </p></div>
   </div>
   <div class="example" id="example-5320">
    <p><strong>Example #2 <span class="function"><strong>natsort()</strong></span> examples demonstrating potential gotchas</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Negative numbers\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$negative </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'-5'</span><span style="color: #007700">,</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,</span><span style="color: #DD0000">'-2'</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #DD0000">'-1000'</span><span style="color: #007700">,</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,</span><span style="color: #DD0000">'1'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$negative</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">natsort</span><span style="color: #007700">(</span><span style="color: #0000BB">$negative</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$negative</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"Zero padding\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$zeros </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'09'</span><span style="color: #007700">, </span><span style="color: #DD0000">'8'</span><span style="color: #007700">, </span><span style="color: #DD0000">'10'</span><span style="color: #007700">, </span><span style="color: #DD0000">'009'</span><span style="color: #007700">, </span><span style="color: #DD0000">'011'</span><span style="color: #007700">, </span><span style="color: #DD0000">'0'</span><span style="color: #007700">); <br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$zeros</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">natsort</span><span style="color: #007700">(</span><span style="color: #0000BB">$zeros</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$zeros</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Negative numbers
Array
(
    [0] =&gt; -5
    [1] =&gt; 3
    [2] =&gt; -2
    [3] =&gt; 0
    [4] =&gt; -1000
    [5] =&gt; 9
    [6] =&gt; 1
)
Array
(
    [2] =&gt; -2
    [0] =&gt; -5
    [4] =&gt; -1000
    [3] =&gt; 0
    [6] =&gt; 1
    [1] =&gt; 3
    [5] =&gt; 9
)

Zero padding
Array
(
    [0] =&gt; 09
    [1] =&gt; 8
    [2] =&gt; 10
    [3] =&gt; 009
    [4] =&gt; 011
    [5] =&gt; 0
)
Array
(
    [5] =&gt; 0
    [1] =&gt; 8
    [3] =&gt; 009
    [0] =&gt; 09
    [2] =&gt; 10
    [4] =&gt; 011
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.natsort-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.natcasesort.php" class="function" rel="rdfs-seeAlso">natcasesort()</a> - Sort an array using a case insensitive &quot;natural order&quot; algorithm</span></li>
    <li>The <a href="array.sorting.php" class="link">comparison of array sorting functions</a></li>
    <li><span class="function"><a href="function.strnatcmp.php" class="function" rel="rdfs-seeAlso">strnatcmp()</a> - String comparisons using a &quot;natural order&quot; algorithm</span></li>
    <li><span class="function"><a href="function.strnatcasecmp.php" class="function" rel="rdfs-seeAlso">strnatcasecmp()</a> - Case insensitive string comparisons using a &quot;natural order&quot; algorithm</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/natsort.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.natsort%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.natsort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.natsort.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="87706">  <div class="votes">
    <div id="Vu87706">
    <a href="/manual/vote-note.php?id=87706&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87706">
    <a href="/manual/vote-note.php?id=87706&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87706" title="78% like this...">
    38
    </div>
  </div>
  <a href="#87706" class="name">
  <strong class="user"><em>wyvern at greywyvern dot com</em></strong></a><a class="genanchor" href="#87706"> &para;</a><div class="date" title="2008-12-17 10:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87706">
<div class="phpcode"><code><span class="html">There's no need to include your own API code to natsort an associative array by key.  PHP's in-built functions (other than natsort) can do the job just fine:<br /><br /><span class="default">&lt;?php<br />  uksort</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">, </span><span class="string">"strnatcmp"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101073">  <div class="votes">
    <div id="Vu101073">
    <a href="/manual/vote-note.php?id=101073&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101073">
    <a href="/manual/vote-note.php?id=101073&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101073" title="73% like this...">
    14
    </div>
  </div>
  <a href="#101073" class="name">
  <strong class="user"><em>Johan GENNESSON (php at genjo dot fr)</em></strong></a><a class="genanchor" href="#101073"> &para;</a><div class="date" title="2010-11-24 07:18"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101073">
<div class="phpcode"><code><span class="html">Be careful of the new behaviour in 5.2.10 version.<br />See the following sample:<br /><br /><span class="default">&lt;?php<br /><br />$array </span><span class="keyword">= array(</span><span class="string">'1 bis'</span><span class="keyword">, </span><span class="string">'10 ter'</span><span class="keyword">, </span><span class="string">'0 PHP'</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">, </span><span class="string">'01'</span><span class="keyword">, </span><span class="string">'01 Ver'</span><span class="keyword">, </span><span class="string">'0 '</span><span class="keyword">, </span><span class="string">'1 '</span><span class="keyword">, </span><span class="string">'1'</span><span class="keyword">);<br /><br /></span><span class="default">natsort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />5.2.6-1 will output:<br />Array<br />(<br />    [3] =&gt; 0<br />    [6] =&gt; 0 <br />    [2] =&gt; 0 OP<br />    [4] =&gt; 01<br />    [5] =&gt; 01 Ver<br />    [8] =&gt; 1<br />    [7] =&gt; 1 <br />    [0] =&gt; 1 bis<br />    [1] =&gt; 10 ter<br />)<br /><br />5.2.10 will output:<br />Array<br />(<br />    [6] =&gt; 0 <br />    [3] =&gt; 0<br />    [8] =&gt; 1<br />    [4] =&gt; 01<br />    [7] =&gt; 1 <br />    [5] =&gt; 01 Ver<br />    [0] =&gt; 1 bis<br />    [1] =&gt; 10 ter<br />    [2] =&gt; 0 OP<br />)<br /><br />Greetings</span></code></div>
  </div>
 </div>
  <div class="note" id="34937">  <div class="votes">
    <div id="Vu34937">
    <a href="/manual/vote-note.php?id=34937&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34937">
    <a href="/manual/vote-note.php?id=34937&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34937" title="77% like this...">
    10
    </div>
  </div>
  <a href="#34937" class="name">
  <strong class="user"><em>flash at minet dot net</em></strong></a><a class="genanchor" href="#34937"> &para;</a><div class="date" title="2003-08-12 10:27"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34937">
<div class="phpcode"><code><span class="html">About the reverse natsort.. Maybe simpler to do :<br /><br />function strrnatcmp ($a, $b) {<br />    return strnatcmp ($b, $a);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="32560">  <div class="votes">
    <div id="Vu32560">
    <a href="/manual/vote-note.php?id=32560&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32560">
    <a href="/manual/vote-note.php?id=32560&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32560" title="77% like this...">
    5
    </div>
  </div>
  <a href="#32560" class="name">
  <strong class="user"><em>anonymous at coward dot net</em></strong></a><a class="genanchor" href="#32560"> &para;</a><div class="date" title="2003-05-31 01:46"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32560">
<div class="phpcode"><code><span class="html">Reverse Natsort:<br /><br />  function rnatsort($a, $b) {<br />    return -1 * strnatcmp($a, $b);<br />  }<br /><br />  usort($arr, "rnatsort");</span></code></div>
  </div>
 </div>
  <div class="note" id="55507">  <div class="votes">
    <div id="Vu55507">
    <a href="/manual/vote-note.php?id=55507&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55507">
    <a href="/manual/vote-note.php?id=55507&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55507" title="75% like this...">
    4
    </div>
  </div>
  <a href="#55507" class="name">
  <strong class="user"><em>natcasesort.too</em></strong></a><a class="genanchor" href="#55507"> &para;</a><div class="date" title="2005-08-05 03:17"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55507">
<div class="phpcode"><code><span class="html">I got caught out through naive use of this feature - attempting to sort a list of image filenames from a digital camera, where the filenames are leading zero padded (e.g. DSCF0120.jpg) , will not sort correctly.<br />Maybe the example could be modified to exhibit this behaviour <br />(e.g. set array to -img0120.jpg','IMG0.png', 'img0012.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png)<br />If the example hadn't used images I would have coded it correctly first time around!</span></code></div>
  </div>
 </div>
  <div class="note" id="39060">  <div class="votes">
    <div id="Vu39060">
    <a href="/manual/vote-note.php?id=39060&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39060">
    <a href="/manual/vote-note.php?id=39060&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39060" title="70% like this...">
    8
    </div>
  </div>
  <a href="#39060" class="name">
  <strong class="user"><em>xlab AT adaptiveNOSPAMarts DOT net</em></strong></a><a class="genanchor" href="#39060"> &para;</a><div class="date" title="2004-01-15 12:51"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39060">
<div class="phpcode"><code><span class="html">Under limited testing, natsort() appears to work well for IP addresses. For my needs, it is far less code than the ip2long()/long2ip() conversion I was using before.</span></code></div>
  </div>
 </div>
  <div class="note" id="38275">  <div class="votes">
    <div id="Vu38275">
    <a href="/manual/vote-note.php?id=38275&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38275">
    <a href="/manual/vote-note.php?id=38275&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38275" title="72% like this...">
    5
    </div>
  </div>
  <a href="#38275" class="name">
  <strong class="user"><em>rasmus at flajm dot com</em></strong></a><a class="genanchor" href="#38275"> &para;</a><div class="date" title="2003-12-14 09:30"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38275">
<div class="phpcode"><code><span class="html">To make a reverse function, you can simply:<br /><br />function rnatsort(&amp;$a){<br />    natsort($a);<br />    $a = array_reverse($a, true);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="89614">  <div class="votes">
    <div id="Vu89614">
    <a href="/manual/vote-note.php?id=89614&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89614">
    <a href="/manual/vote-note.php?id=89614&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89614" title="66% like this...">
    3
    </div>
  </div>
  <a href="#89614" class="name">
  <strong class="user"><em>ale152</em></strong></a><a class="genanchor" href="#89614"> &para;</a><div class="date" title="2009-03-16 02:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89614">
<div class="phpcode"><code><span class="html">Note: negatives number.<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array(-</span><span class="default">5</span><span class="keyword">,-</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">);<br /></span><span class="default">natsort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Will output:<br />Array ( [1] =&gt; -2 [0] =&gt; -5 [2] =&gt; 3 [3] =&gt; 9 )</span></code></div>
  </div>
 </div>
  <div class="note" id="38876">  <div class="votes">
    <div id="Vu38876">
    <a href="/manual/vote-note.php?id=38876&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38876">
    <a href="/manual/vote-note.php?id=38876&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38876" title="66% like this...">
    3
    </div>
  </div>
  <a href="#38876" class="name">
  <strong class="user"><em>mbirth at webwriters dot de</em></strong></a><a class="genanchor" href="#38876"> &para;</a><div class="date" title="2004-01-09 12:31"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38876">
<div class="phpcode"><code><span class="html">For those who want to natsort a 2d-array on the first element of each sub-array, the following few lines should do the job.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">natsort2d</span><span class="keyword">(&amp;</span><span class="default">$aryInput</span><span class="keyword">) {<br />  </span><span class="default">$aryTemp </span><span class="keyword">= </span><span class="default">$aryOut </span><span class="keyword">= array();<br />  foreach (</span><span class="default">$aryInput </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />    </span><span class="default">$aryTemp</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]=</span><span class="default">current</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />  }<br />  </span><span class="default">natsort</span><span class="keyword">(</span><span class="default">$aryTemp</span><span class="keyword">);<br />  foreach (</span><span class="default">$aryTemp </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">$aryOut</span><span class="keyword">[] = </span><span class="default">$aryInput</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />  }<br />  </span><span class="default">$aryInput </span><span class="keyword">= </span><span class="default">$aryOut</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118638">  <div class="votes">
    <div id="Vu118638">
    <a href="/manual/vote-note.php?id=118638&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118638">
    <a href="/manual/vote-note.php?id=118638&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118638" title="60% like this...">
    2
    </div>
  </div>
  <a href="#118638" class="name">
  <strong class="user"><em>bb7b5b9 at gmail dot com</em></strong></a><a class="genanchor" href="#118638"> &para;</a><div class="date" title="2016-01-14 08:07"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118638">
<div class="phpcode"><code><span class="html">This made me waste a lot of my precious youth ... natsort() is buggy if all numbers don't have the same number of decimal places.<br /><br />(php 5.6.4-4ubuntu6.2)<br /><br /><span class="default">&lt;?php <br />$different_decimal_places_in_values </span><span class="keyword">= array(</span><span class="string">'D'</span><span class="keyword">=&gt;</span><span class="string">'13.59'</span><span class="keyword">, </span><span class="string">'14.6' </span><span class="keyword">=&gt; </span><span class="string">'14.6'</span><span class="keyword">, </span><span class="string">'C-' </span><span class="keyword">=&gt; </span><span class="string">'14.19'</span><span class="keyword">); <br /></span><span class="default">natsort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); <br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="comment">/*echoes<br />array(3) {<br />  'D' =&gt;<br />  string(5) "13.59"<br />  '14.6' =&gt;<br />  string(4) "14.6" &lt;----------- badly ordered<br />  'C-' =&gt;<br />  string(5) "14.19"<br />}*/<br /></span><span class="default">?&gt;<br /></span><br />While this <br /><br /><span class="default">&lt;?php <br />$same_num_decimal_places_in_values </span><span class="keyword">= array(</span><span class="string">'D'</span><span class="keyword">=&gt;</span><span class="string">'13.59'</span><span class="keyword">, </span><span class="string">'14.6' </span><span class="keyword">=&gt; </span><span class="string">'14.60'</span><span class="keyword">, </span><span class="string">'C-' </span><span class="keyword">=&gt; </span><span class="string">'14.19'</span><span class="keyword">); </span><span class="default">natsort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="comment">/*echoes <br />array(3) {<br />  'D' =&gt;<br />  string(5) "13.59"<br />  'C-' =&gt;<br />  string(5) "14.19"<br />  '14.6' =&gt;<br />  string(5) "14.60" &lt;--------- that is the correct position<br />}<br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72372">  <div class="votes">
    <div id="Vu72372">
    <a href="/manual/vote-note.php?id=72372&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72372">
    <a href="/manual/vote-note.php?id=72372&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72372" title="57% like this...">
    1
    </div>
  </div>
  <a href="#72372" class="name">
  <strong class="user"><em>lacent at gmail dot com</em></strong></a><a class="genanchor" href="#72372"> &para;</a><div class="date" title="2007-01-16 09:42"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72372">
<div class="phpcode"><code><span class="html">there is another rnatsort function lower on the page, but it didn't work in the context i needed it in. <br /><br />reasoning for this:<br />sorting naturally via the keys of an array, but needing to reverse the order.<br /><br />    function rnatsort ( &amp;$array = array() ) <br />    {<br />        $keys    = array_keys($array);<br />        natsort($keys);<br />        $total    = count($keys) - 1;<br />        $temp1    = array();<br />        $temp2     = array();<br /><br />        // assigning original keys to an array with a backwards set of keys, to use in krsort();<br />        foreach ( $keys as $key )<br />        {<br />            $temp1[$total] = $key;<br />            --$total;<br />        }<br />        <br />        ksort($temp1);<br /><br />        // setting the new array, with the order from the krsort() and the values of original array.<br />        foreach ( $temp1 as $key ) <br />        {<br />            $temp2[$key] = $array[$key];<br />        }<br /><br />        $array = $temp2;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="62219">  <div class="votes">
    <div id="Vu62219">
    <a href="/manual/vote-note.php?id=62219&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62219">
    <a href="/manual/vote-note.php?id=62219&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62219" title="54% like this...">
    1
    </div>
  </div>
  <a href="#62219" class="name">
  <strong class="user"><em>h3</em></strong></a><a class="genanchor" href="#62219"> &para;</a><div class="date" title="2006-02-22 08:59"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62219">
<div class="phpcode"><code><span class="html">This function can be very usefull, but in some cases, like if you want to sort a MySQL query result, it's important to keep in mind that MySQL as built'in sorting functions which are way faster than resorting the result using a complex php algorythm, especially with large arrays.<br /><br />ex; 'SELECT * FROM `table` ORDER BY columnName ASC, columnName2 DESC'</span></code></div>
  </div>
 </div>
  <div class="note" id="45346">  <div class="votes">
    <div id="Vu45346">
    <a href="/manual/vote-note.php?id=45346&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45346">
    <a href="/manual/vote-note.php?id=45346&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45346" title="54% like this...">
    1
    </div>
  </div>
  <a href="#45346" class="name">
  <strong class="user"><em>phpnet at moritz-abraham dot de</em></strong></a><a class="genanchor" href="#45346"> &para;</a><div class="date" title="2004-09-02 02:09"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45346">
<div class="phpcode"><code><span class="html">additional to the code posted by justin at redwiredesign dot com (which I found very usefull) here is a function that sorts complex arrays like this:<br />&lt;?<br />$array['test0'] = array('main' =&gt;  'a', 'sub' =&gt; 'a');<br />$array['test2'] = array('main' =&gt;  'a', 'sub' =&gt; 'b');<br />$array['test3'] = array('main' =&gt;  'b', 'sub' =&gt; 'c');<br />$array['test1'] = array('main' =&gt;  'a', 'sub' =&gt; 'c');<br />$array['test4'] = array('main' =&gt;  'b', 'sub' =&gt; 'a');<br />$array['test5'] = array('main' =&gt;  'b', 'sub' =&gt; 'b');<br />?&gt;<br />or<br />&lt;?<br />$array[0] = array('main' =&gt;  1, 'sub' =&gt; 1);<br />$array[2] = array('main' =&gt;  1, 'sub' =&gt; 2);<br />$array[3] = array('main' =&gt;  2, 'sub' =&gt; 3);<br />$array[1] = array('main' =&gt;  1, 'sub' =&gt; 3);<br />$array[4] = array('main' =&gt;  2, 'sub' =&gt; 1);<br />$array[5] = array('main' =&gt;  2, 'sub' =&gt; 2);<br />?&gt;<br />on one or more columns.<br /><br />the code<br />&lt;? $array = array_natsort_list($array,'main','sub'); ?&gt;<br />will result in $array being sortet like this:<br />test0,test2,test1,test4,test5,test3<br />or<br />0,2,1,4,5,3.<br /><br />you may even submit more values to the function as it uses a variable parameter list. the function starts sorting on the last and the goes on until the first sorting column is reached.<br /><br />to me it was very usefull for sorting a menu having submenus and even sub-submenus.<br /><br />i hope it might help you too.<br /><br />here is the function:<br />&lt;?<br />function array_natsort_list($array) {<br />    // for all arguments without the first starting at end of list<br />    for ($i=func_num_args();$i&gt;1;$i--) {<br />        // get column to sort by<br />        $sort_by = func_get_arg($i-1);<br />        // clear arrays<br />        $new_array = array();<br />        $temporary_array = array();<br />        // walk through original array<br />        foreach($array as $original_key =&gt; $original_value) {<br />            // and save only values<br />            $temporary_array[] = $original_value[$sort_by];<br />        }<br />        // sort array on values<br />        natsort($temporary_array);<br />        // delete double values<br />        $temporary_array = array_unique($temporary_array);<br />        // walk through temporary array<br />        foreach($temporary_array as $temporary_value) {<br />            // walk through original array<br />            foreach($array as $original_key =&gt; $original_value) {<br />                // and search for entries having the right value<br />                if($temporary_value == $original_value[$sort_by]) {<br />                    // save in new array<br />                    $new_array[$original_key] = $original_value;<br />                }<br />            }<br />        }<br />        // update original array<br />        $array = $new_array;<br />    }<br />    return $array;<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="122877">  <div class="votes">
    <div id="Vu122877">
    <a href="/manual/vote-note.php?id=122877&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122877">
    <a href="/manual/vote-note.php?id=122877&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122877" title="100% like this...">
    1
    </div>
  </div>
  <a href="#122877" class="name">
  <strong class="user"><em>Malek Mohamed</em></strong></a><a class="genanchor" href="#122877"> &para;</a><div class="date" title="2018-06-24 06:21"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122877">
<div class="phpcode"><code><span class="html">$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');<br /><br />natsort($array1);<br />echo "\n natsort(); \n";<br />print_r($array1);<br /><br />sort($array2, SORT_NATURAL);<br />echo "\n sort() with  SORT_NATURAL Option\n";<br />print_r($array2);<br /><br />Ouput:<br /><br />natsort();<br />Array<br />(<br />    [0] =&gt; IMG0.png<br />    [5] =&gt; IMG3.png<br />    [4] =&gt; img1.png<br />    [3] =&gt; img2.png<br />    [2] =&gt; img10.png<br />    [1] =&gt; img12.png<br />)<br /><br />sort() with  SORT_NATURAL Option<br />Array<br />(<br />    [0] =&gt; IMG0.png<br />    [1] =&gt; IMG3.png<br />    [2] =&gt; img1.png<br />    [3] =&gt; img2.png<br />    [4] =&gt; img10.png<br />    [5] =&gt; img12.png<br />)<br /><br />as we can see it's  the same values but not the same keys, and also it's same for sort($array1, SORT_NATURAL | SORT_FLAG_CASE); and natcasesort($array2)</span></code></div>
  </div>
 </div>
  <div class="note" id="117315">  <div class="votes">
    <div id="Vu117315">
    <a href="/manual/vote-note.php?id=117315&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117315">
    <a href="/manual/vote-note.php?id=117315&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117315" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117315" class="name">
  <strong class="user"><em>mvs dot php at gmail dot com</em></strong></a><a class="genanchor" href="#117315"> &para;</a><div class="date" title="2015-05-20 10:12"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117315">
<div class="phpcode"><code><span class="html">To naturally sort by array key, the uksort function can be used.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="string">"Sort by keys\n"</span><span class="keyword">;<br /></span><span class="default">$smoothie </span><span class="keyword">= array(</span><span class="string">'orange' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'apple' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'yogurt' </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">, </span><span class="string">'banana' </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$smoothie</span><span class="keyword">);<br /></span><span class="default">uksort</span><span class="keyword">( </span><span class="default">$smoothie</span><span class="keyword">, </span><span class="string">'strnatcmp'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$smoothie</span><span class="keyword">)<br /><br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />Sort by keys<br />Array<br />(<br />    [orange] =&gt; 1<br />    [apple]  =&gt; 1<br />    [yogurt] =&gt; 4<br />    [banana] =&gt; 4<br />)<br />Array<br />(<br />    [apple]  =&gt; 1<br />    [banana] =&gt; 4<br />    [orange] =&gt; 1<br />    [yogurt] =&gt; 4<br />)<br /><br />See <a href="http://php.net/manual/en/function.uksort.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.uksort.php</a> for more information about uksort and <a href="http://php.net/strnatcmp" rel="nofollow" target="_blank">http://php.net/strnatcmp</a> for usage of strnatcmp.</span></code></div>
  </div>
 </div>
  <div class="note" id="69346">  <div class="votes">
    <div id="Vu69346">
    <a href="/manual/vote-note.php?id=69346&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69346">
    <a href="/manual/vote-note.php?id=69346&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69346" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69346" class="name">
  <strong class="user"><em>@gmail bereikme</em></strong></a><a class="genanchor" href="#69346"> &para;</a><div class="date" title="2006-09-01 08:06"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69346">
<div class="phpcode"><code><span class="html">Here's a handy function to sort an array on 1 or more columns using natural sort:<br /><span class="default">&lt;?php<br /></span><span class="comment">// Example: $records = columnSort($records, array('name', 'asc', 'addres', 'desc', 'city', 'asc'));<br /><br /></span><span class="default">$globalMultisortVar </span><span class="keyword">= array();<br />function </span><span class="default">columnSort</span><span class="keyword">(</span><span class="default">$recs</span><span class="keyword">, </span><span class="default">$cols</span><span class="keyword">) {<br />    global </span><span class="default">$globalMultisortVar</span><span class="keyword">;<br />    </span><span class="default">$globalMultisortVar </span><span class="keyword">= </span><span class="default">$cols</span><span class="keyword">;<br />    </span><span class="default">usort</span><span class="keyword">(</span><span class="default">$recs</span><span class="keyword">, </span><span class="string">'multiStrnatcmp'</span><span class="keyword">);<br />    return(</span><span class="default">$recs</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">multiStrnatcmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />    global </span><span class="default">$globalMultisortVar</span><span class="keyword">;<br />    </span><span class="default">$cols </span><span class="keyword">= </span><span class="default">$globalMultisortVar</span><span class="keyword">;<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    while (</span><span class="default">$result </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$cols</span><span class="keyword">)) {<br />        </span><span class="default">$result </span><span class="keyword">= (</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">] == </span><span class="string">'desc' </span><span class="keyword">? </span><span class="default">strnatcmp</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]], </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]]) : </span><span class="default">$result </span><span class="keyword">= </span><span class="default">strnatcmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">[</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]], </span><span class="default">$b</span><span class="keyword">[</span><span class="default">$cols</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]]));<br />        </span><span class="default">$i</span><span class="keyword">+=</span><span class="default">2</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Greetings,<br /><br />  - John</span></code></div>
  </div>
 </div>
  <div class="note" id="88220">  <div class="votes">
    <div id="Vu88220">
    <a href="/manual/vote-note.php?id=88220&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88220">
    <a href="/manual/vote-note.php?id=88220&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88220" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#88220" class="name">
  <strong class="user"><em>AJenbo</em></strong></a><a class="genanchor" href="#88220"> &para;</a><div class="date" title="2009-01-15 01:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88220">
<div class="phpcode"><code><span class="html">natsort might not act like you would expect with zero padding, heres a quick sample.
<br />
<br /><span class="default">&lt;?php
<br />$array </span><span class="keyword">= array(</span><span class="string">'09'</span><span class="keyword">, </span><span class="string">'8'</span><span class="keyword">, </span><span class="string">'10'</span><span class="keyword">, </span><span class="string">'009'</span><span class="keyword">, </span><span class="string">'011'</span><span class="keyword">);
<br /></span><span class="default">natsort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>/*
<br />Array
<br />(
<br />    [3] =&gt; 009
<br />    [4] =&gt; 011
<br />    [0] =&gt; 09
<br />    [1] =&gt; 8
<br />    [2] =&gt; 10
<br />)
<br />*/</span></code></div>
  </div>
 </div>
  <div class="note" id="61321">  <div class="votes">
    <div id="Vu61321">
    <a href="/manual/vote-note.php?id=61321&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61321">
    <a href="/manual/vote-note.php?id=61321&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61321" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#61321" class="name">
  <strong class="user"><em>lil at thedreamersmaze dot spam-me-not dot org</em></strong></a><a class="genanchor" href="#61321"> &para;</a><div class="date" title="2006-01-31 08:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61321">
<div class="phpcode"><code><span class="html">There's one little thing missing in this useful bit of code posted by mbirth at webwriters dot de:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">natsort2d</span><span class="keyword">(&amp;</span><span class="default">$aryInput</span><span class="keyword">) {<br />  </span><span class="default">$aryTemp </span><span class="keyword">= </span><span class="default">$aryOut </span><span class="keyword">= array();<br />  foreach (</span><span class="default">$aryInput </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {<br />   </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />   </span><span class="default">$aryTemp</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]=</span><span class="default">current</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />  }<br />  </span><span class="default">natsort</span><span class="keyword">(</span><span class="default">$aryTemp</span><span class="keyword">);<br />  foreach (</span><span class="default">$aryTemp </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {<br />   </span><span class="default">$aryOut</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$aryInput</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]; <br /></span><span class="comment">// --------^^^^ add this if you want your keys preserved!<br />  </span><span class="keyword">}<br />  </span><span class="default">$aryInput </span><span class="keyword">= </span><span class="default">$aryOut</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121155">  <div class="votes">
    <div id="Vu121155">
    <a href="/manual/vote-note.php?id=121155&amp;page=function.natsort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121155">
    <a href="/manual/vote-note.php?id=121155&amp;page=function.natsort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121155" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#121155" class="name">
  <strong class="user"><em>dotancohen splat gmail spot com</em></strong></a><a class="genanchor" href="#121155"> &para;</a><div class="date" title="2017-05-30 06:59"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121155">
<div class="phpcode"><code><span class="html">As noted in other notes, natsort() does _not_ always return the expected sort order. It seems especially buggy when decimals or 0 padding is used. I've filed this bug report on the issue:<br /><a href="https://bugs.php.net/bug.php?id=74672" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=74672</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.natsort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.natsort.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.array.php">Array Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.array.php" title="array">array</a>
                        </li>
                                                <li class="">
                            <a href="function.array-all.php" title="array_&#8203;all">array_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.array-any.php" title="array_&#8203;any">array_&#8203;any</a>
                        </li>
                                                <li class="">
                            <a href="function.array-change-key-case.php" title="array_&#8203;change_&#8203;key_&#8203;case">array_&#8203;change_&#8203;key_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.array-chunk.php" title="array_&#8203;chunk">array_&#8203;chunk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-column.php" title="array_&#8203;column">array_&#8203;column</a>
                        </li>
                                                <li class="">
                            <a href="function.array-combine.php" title="array_&#8203;combine">array_&#8203;combine</a>
                        </li>
                                                <li class="">
                            <a href="function.array-count-values.php" title="array_&#8203;count_&#8203;values">array_&#8203;count_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff.php" title="array_&#8203;diff">array_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-assoc.php" title="array_&#8203;diff_&#8203;assoc">array_&#8203;diff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-key.php" title="array_&#8203;diff_&#8203;key">array_&#8203;diff_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-uassoc.php" title="array_&#8203;diff_&#8203;uassoc">array_&#8203;diff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-ukey.php" title="array_&#8203;diff_&#8203;ukey">array_&#8203;diff_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill.php" title="array_&#8203;fill">array_&#8203;fill</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill-keys.php" title="array_&#8203;fill_&#8203;keys">array_&#8203;fill_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-filter.php" title="array_&#8203;filter">array_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find.php" title="array_&#8203;find">array_&#8203;find</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find-key.php" title="array_&#8203;find_&#8203;key">array_&#8203;find_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-flip.php" title="array_&#8203;flip">array_&#8203;flip</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect.php" title="array_&#8203;intersect">array_&#8203;intersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-assoc.php" title="array_&#8203;intersect_&#8203;assoc">array_&#8203;intersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-key.php" title="array_&#8203;intersect_&#8203;key">array_&#8203;intersect_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-uassoc.php" title="array_&#8203;intersect_&#8203;uassoc">array_&#8203;intersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-ukey.php" title="array_&#8203;intersect_&#8203;ukey">array_&#8203;intersect_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-is-list.php" title="array_&#8203;is_&#8203;list">array_&#8203;is_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-exists.php" title="array_&#8203;key_&#8203;exists">array_&#8203;key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-first.php" title="array_&#8203;key_&#8203;first">array_&#8203;key_&#8203;first</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-last.php" title="array_&#8203;key_&#8203;last">array_&#8203;key_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.array-keys.php" title="array_&#8203;keys">array_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-map.php" title="array_&#8203;map">array_&#8203;map</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge.php" title="array_&#8203;merge">array_&#8203;merge</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge-recursive.php" title="array_&#8203;merge_&#8203;recursive">array_&#8203;merge_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-multisort.php" title="array_&#8203;multisort">array_&#8203;multisort</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pad.php" title="array_&#8203;pad">array_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pop.php" title="array_&#8203;pop">array_&#8203;pop</a>
                        </li>
                                                <li class="">
                            <a href="function.array-product.php" title="array_&#8203;product">array_&#8203;product</a>
                        </li>
                                                <li class="">
                            <a href="function.array-push.php" title="array_&#8203;push">array_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.array-rand.php" title="array_&#8203;rand">array_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reduce.php" title="array_&#8203;reduce">array_&#8203;reduce</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace.php" title="array_&#8203;replace">array_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace-recursive.php" title="array_&#8203;replace_&#8203;recursive">array_&#8203;replace_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reverse.php" title="array_&#8203;reverse">array_&#8203;reverse</a>
                        </li>
                                                <li class="">
                            <a href="function.array-search.php" title="array_&#8203;search">array_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.array-shift.php" title="array_&#8203;shift">array_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-slice.php" title="array_&#8203;slice">array_&#8203;slice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-splice.php" title="array_&#8203;splice">array_&#8203;splice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-sum.php" title="array_&#8203;sum">array_&#8203;sum</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff.php" title="array_&#8203;udiff">array_&#8203;udiff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-assoc.php" title="array_&#8203;udiff_&#8203;assoc">array_&#8203;udiff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-uassoc.php" title="array_&#8203;udiff_&#8203;uassoc">array_&#8203;udiff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect.php" title="array_&#8203;uintersect">array_&#8203;uintersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-assoc.php" title="array_&#8203;uintersect_&#8203;assoc">array_&#8203;uintersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-uassoc.php" title="array_&#8203;uintersect_&#8203;uassoc">array_&#8203;uintersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unique.php" title="array_&#8203;unique">array_&#8203;unique</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unshift.php" title="array_&#8203;unshift">array_&#8203;unshift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-values.php" title="array_&#8203;values">array_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk.php" title="array_&#8203;walk">array_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk-recursive.php" title="array_&#8203;walk_&#8203;recursive">array_&#8203;walk_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.arsort.php" title="arsort">arsort</a>
                        </li>
                                                <li class="">
                            <a href="function.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="function.compact.php" title="compact">compact</a>
                        </li>
                                                <li class="">
                            <a href="function.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="function.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="function.end.php" title="end">end</a>
                        </li>
                                                <li class="">
                            <a href="function.extract.php" title="extract">extract</a>
                        </li>
                                                <li class="">
                            <a href="function.in-array.php" title="in_&#8203;array">in_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="function.key-exists.php" title="key_&#8203;exists">key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.krsort.php" title="krsort">krsort</a>
                        </li>
                                                <li class="">
                            <a href="function.ksort.php" title="ksort">ksort</a>
                        </li>
                                                <li class="">
                            <a href="function.list.php" title="list">list</a>
                        </li>
                                                <li class="">
                            <a href="function.natcasesort.php" title="natcasesort">natcasesort</a>
                        </li>
                                                <li class="current">
                            <a href="function.natsort.php" title="natsort">natsort</a>
                        </li>
                                                <li class="">
                            <a href="function.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="function.pos.php" title="pos">pos</a>
                        </li>
                                                <li class="">
                            <a href="function.prev.php" title="prev">prev</a>
                        </li>
                                                <li class="">
                            <a href="function.range.php" title="range">range</a>
                        </li>
                                                <li class="">
                            <a href="function.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="function.rsort.php" title="rsort">rsort</a>
                        </li>
                                                <li class="">
                            <a href="function.shuffle.php" title="shuffle">shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.sizeof.php" title="sizeof">sizeof</a>
                        </li>
                                                <li class="">
                            <a href="function.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="function.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="">
                            <a href="function.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="">
                            <a href="function.usort.php" title="usort">usort</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.each.php" title="each">each</a>
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
