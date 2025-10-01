<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_pop - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-pop.php">
 <link rel="shorturl" href="https://www.php.net/array-pop">
 <link rel="alternate" href="https://www.php.net/array-pop" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-pad.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-product.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-pop.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-pop.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-pop.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-pop.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-pop.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-pop.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-pop.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-pop.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-pop.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-pop.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-pop.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Pop the element off the end of array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_pop - Manual" />
<meta name="twitter:description" content="Pop the element off the end of array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_pop - Manual" />
<meta itemprop="description" content="Pop the element off the end of array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Pop the element off the end of array" />

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
        <a href="function.array-product.php">
          array_product &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-pad.php">
          &laquo; array_pad        </a>
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
            <option value='en/function.array-pop.php' selected="selected">English</option>
            <option value='de/function.array-pop.php'>German</option>
            <option value='es/function.array-pop.php'>Spanish</option>
            <option value='fr/function.array-pop.php'>French</option>
            <option value='it/function.array-pop.php'>Italian</option>
            <option value='ja/function.array-pop.php'>Japanese</option>
            <option value='pt_BR/function.array-pop.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-pop.php'>Russian</option>
            <option value='tr/function.array-pop.php'>Turkish</option>
            <option value='uk/function.array-pop.php'>Ukrainian</option>
            <option value='zh/function.array-pop.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-pop" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_pop</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_pop</span> &mdash; <span class="dc-title">Pop the element off the end of array</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.array-pop-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_pop</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_pop()</strong></span> pops and returns the value of
   the last element of <code class="parameter">array</code>, shortening the
   <code class="parameter">array</code> by one element.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function will
<span class="function"><a href="function.reset.php" class="function">reset()</a></span> the <span class="type"><a href="language.types.array.php" class="type array">array</a></span> pointer of the input array after
use.</span></p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-pop-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The array to get the value from.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-pop-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the value of the last element of <code class="parameter">array</code>.
   If <code class="parameter">array</code> is empty,
   <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> will be returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.array-pop-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5261">
    <p><strong>Example #1 <span class="function"><strong>array_pop()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stack </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"orange"</span><span style="color: #007700">, </span><span style="color: #DD0000">"banana"</span><span style="color: #007700">, </span><span style="color: #DD0000">"apple"</span><span style="color: #007700">, </span><span style="color: #DD0000">"raspberry"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$fruit </span><span style="color: #007700">= </span><span style="color: #0000BB">array_pop</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     After this, <var class="varname">$stack</var> will have only 3 elements:
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; orange
    [1] =&gt; banana
    [2] =&gt; apple
)</pre>
</div>
    </div>
    <div class="example-contents"><p>
     and <code class="literal">raspberry</code> will be assigned to
     <var class="varname">$fruit</var>.
    </p></div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-pop-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-push.php" class="function" rel="rdfs-seeAlso">array_push()</a> - Push one or more elements onto the end of array</span></li>
    <li><span class="function"><a href="function.array-shift.php" class="function" rel="rdfs-seeAlso">array_shift()</a> - Shift an element off the beginning of array</span></li>
    <li><span class="function"><a href="function.array-unshift.php" class="function" rel="rdfs-seeAlso">array_unshift()</a> - Prepend one or more elements to the beginning of an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-pop.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-pop%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-pop&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-pop.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112946">  <div class="votes">
    <div id="Vu112946">
    <a href="/manual/vote-note.php?id=112946&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112946">
    <a href="/manual/vote-note.php?id=112946&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112946" title="76% like this...">
    83
    </div>
  </div>
  <a href="#112946" class="name">
  <strong class="user"><em>elad dot yosifon at gmail dot com</em></strong></a><a class="genanchor" href="#112946"> &para;</a><div class="date" title="2013-08-10 06:45"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112946">
<div class="phpcode"><code><span class="html">Notice:<br />the complexity of array_pop() is O(1). <br />the complexity of array_shift() is O(n).<br />array_shift() requires a re-index process on the array, so it has to run over all the elements and index them.</span></code></div>
  </div>
 </div>
  <div class="note" id="126063">  <div class="votes">
    <div id="Vu126063">
    <a href="/manual/vote-note.php?id=126063&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126063">
    <a href="/manual/vote-note.php?id=126063&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126063" title="63% like this...">
    6
    </div>
  </div>
  <a href="#126063" class="name">
  <strong class="user"><em>noreply at i-asm dot com</em></strong></a><a class="genanchor" href="#126063"> &para;</a><div class="date" title="2021-05-09 11:18"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126063">
<div class="phpcode"><code><span class="html">Note that array_pop doesn't issue ANY warning or error if the array is already empty when you try to pop something from it. This is bizarre! And it will cause cascades of errors that are hard to resolve without knowing the real cause.<br /><br />Rather than an error, it silently returns a NULL object, it appears, so in my case I ended up with warnings elsewhere about accessing elements of arrays with invalid indexes, as I was expecting to have popped an array. This behaviour (and the lack of any warning, when many trivial things are complained about verbosely) is NOT noted in the manual above. Popping an already empty stack should definitely trigger some sort of notice, to help debugging.<br /><br />Sure, it's probably good practice to wrap the pop in an if (count($array)) but that should be suggested in the manual, if there's no error returned for trying something that should fail and obviously isn't expected to return a meaningful result.</span></code></div>
  </div>
 </div>
  <div class="note" id="86559">  <div class="votes">
    <div id="Vu86559">
    <a href="/manual/vote-note.php?id=86559&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86559">
    <a href="/manual/vote-note.php?id=86559&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86559" title="56% like this...">
    8
    </div>
  </div>
  <a href="#86559" class="name">
  <strong class="user"><em>mcgroovin at gmail dot com</em></strong></a><a class="genanchor" href="#86559"> &para;</a><div class="date" title="2008-10-23 12:13"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86559">
<div class="phpcode"><code><span class="html">I wrote a simple function to perform an intersect on multiple (unlimited) arrays.
<br />
<br />Pass an array containing all the arrays you want to compare, along with what key to match by.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">multipleArrayIntersect</span><span class="keyword">(</span><span class="default">$arrayOfArrays</span><span class="keyword">, </span><span class="default">$matchKey</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$compareArray </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$arrayOfArrays</span><span class="keyword">);
<br />    
<br />    foreach(</span><span class="default">$compareArray </span><span class="keyword">AS </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$valueArray</span><span class="keyword">){
<br />        foreach(</span><span class="default">$arrayOfArrays </span><span class="keyword">AS </span><span class="default">$subArray </span><span class="keyword">=&gt; </span><span class="default">$contents</span><span class="keyword">){
<br />            if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$compareArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">$matchKey</span><span class="keyword">], </span><span class="default">$contents</span><span class="keyword">)){
<br />                unset(</span><span class="default">$compareArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);
<br />            }
<br />        }
<br />    }
<br />
<br />    return </span><span class="default">$compareArray</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114501">  <div class="votes">
    <div id="Vu114501">
    <a href="/manual/vote-note.php?id=114501&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114501">
    <a href="/manual/vote-note.php?id=114501&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114501" title="52% like this...">
    2
    </div>
  </div>
  <a href="#114501" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#114501"> &para;</a><div class="date" title="2014-02-28 08:21"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114501">
<div class="phpcode"><code><span class="html">Strict Standards will be thrown out if you put exploded array in array_pop:<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="string">"a,b,c"</span><span class="keyword">));<br />echo </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />You will see:<br />PHP Strict Standards:  Only variables should be passed by reference in - on line 2<br /><br />Strict Standards: Only variables should be passed by reference in - on line 2<br />c<br /><br />Notice that, you should assign a variable for function explode, then pass the variable reference into array_pop to avoid the Strict Standard warning.</span></code></div>
  </div>
 </div>
  <div class="note" id="53635">  <div class="votes">
    <div id="Vu53635">
    <a href="/manual/vote-note.php?id=53635&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53635">
    <a href="/manual/vote-note.php?id=53635&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53635" title="52% like this...">
    2
    </div>
  </div>
  <a href="#53635" class="name">
  <strong class="user"><em>rmondragon at gmail dot com</em></strong></a><a class="genanchor" href="#53635"> &para;</a><div class="date" title="2005-06-07 02:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53635">
<div class="phpcode"><code><span class="html">In a previous example ...<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_trim </span><span class="keyword">( </span><span class="default">$array</span><span class="keyword">, </span><span class="default">$index </span><span class="keyword">) {<br />   if ( </span><span class="default">is_array </span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">) ) {<br />     unset ( </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">] );<br />     </span><span class="default">array_unshift </span><span class="keyword">( </span><span class="default">$array</span><span class="keyword">, </span><span class="default">array_shift </span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">) );<br />     return </span><span class="default">$array</span><span class="keyword">;<br />     }<br />   else {<br />     return </span><span class="default">false</span><span class="keyword">;<br />     }<br />   }<br /></span><span class="default">?&gt;<br /></span><br />This have a problem. if u unset the last value and then use<br />&lt;?<br />array_unshift ( $array, array_shift ( $array ) );<br />?&gt;<br /><br />will return a :  Array ( [0] =&gt; ) <br />so u can fix it using...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">array_unshift </span><span class="keyword">( </span><span class="default">$values</span><span class="keyword">, </span><span class="default">array_shift </span><span class="keyword">( </span><span class="default">$values </span><span class="keyword">) );            <br /></span><span class="default">?&gt;<br /></span><br />good luck ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="107810">  <div class="votes">
    <div id="Vu107810">
    <a href="/manual/vote-note.php?id=107810&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107810">
    <a href="/manual/vote-note.php?id=107810&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107810" title="50% like this...">
    0
    </div>
  </div>
  <a href="#107810" class="name">
  <strong class="user"><em>qeremy</em></strong></a><a class="genanchor" href="#107810"> &para;</a><div class="date" title="2012-03-07 11:26"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107810">
<div class="phpcode"><code><span class="html">For the sake of array_unshift()<br />:)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_unpop</span><span class="keyword">(&amp;</span><span class="default">$arr</span><span class="keyword">) {<br />    </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">(); unset(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    </span><span class="default">$tarr </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$args </span><span class="keyword">as </span><span class="default">$arg</span><span class="keyword">) {<br />        </span><span class="default">$tarr</span><span class="keyword">[] = </span><span class="default">$arg</span><span class="keyword">;<br />    }<br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$tarr</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$queue </span><span class="keyword">= array(</span><span class="string">"orange"</span><span class="keyword">, </span><span class="string">"banana"</span><span class="keyword">);<br /></span><span class="default">array_unpop</span><span class="keyword">(</span><span class="default">$queue</span><span class="keyword">, </span><span class="string">"apple"</span><span class="keyword">, </span><span class="string">"raspberry"</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$queue</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Array<br />(<br />    [0] =&gt; orange<br />    [1] =&gt; banana<br />    [2] =&gt; apple<br />    [3] =&gt; raspberry<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="80872">  <div class="votes">
    <div id="Vu80872">
    <a href="/manual/vote-note.php?id=80872&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80872">
    <a href="/manual/vote-note.php?id=80872&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80872" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80872" class="name">
  <strong class="user"><em>sonetti at hotmail dot com</em></strong></a><a class="genanchor" href="#80872"> &para;</a><div class="date" title="2008-02-05 01:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80872">
<div class="phpcode"><code><span class="html">@smp_info <br />I think you are still tired. What would be wrong with:<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array(</span><span class="string">'one'</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">, </span><span class="string">'three'</span><span class="keyword">, </span><span class="string">'four'</span><span class="keyword">);<br /><br /></span><span class="comment">//pop the last element off<br /></span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /><br /></span><span class="comment">//$array == array('one', 'two', 'three'); <br /></span><span class="default">?&gt;<br /></span><br />As the documentation clearly notes, array_pop() not only returns the last element, but actually removes it from the array wich is passed by reference. Calling array_diff is a waste of resources.</span></code></div>
  </div>
 </div>
  <div class="note" id="78873">  <div class="votes">
    <div id="Vu78873">
    <a href="/manual/vote-note.php?id=78873&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78873">
    <a href="/manual/vote-note.php?id=78873&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78873" title="50% like this...">
    0
    </div>
  </div>
  <a href="#78873" class="name">
  <strong class="user"><em>doyley3731 at gmail dot com</em></strong></a><a class="genanchor" href="#78873"> &para;</a><div class="date" title="2007-10-31 04:37"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78873">
<div class="phpcode"><code><span class="html">I had a problem when using this function because my array was made up entirley of numbers, so I have made my own function.  Hopefully it will be useful to somebody.<br /><br />function array_trim_end($array){<br /><br />$num=count($array);<br />$num=$num-1;<br />unset($array[$num]);<br /><br />return $array;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="48216">  <div class="votes">
    <div id="Vu48216">
    <a href="/manual/vote-note.php?id=48216&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48216">
    <a href="/manual/vote-note.php?id=48216&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48216" title="50% like this...">
    0
    </div>
  </div>
  <a href="#48216" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#48216"> &para;</a><div class="date" title="2004-12-15 08:29"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48216">
<div class="phpcode"><code><span class="html">strrchr is a lot more useful than the other example using array_pop for finding the extension of a file. For example:<br /><br /><span class="default">&lt;?php<br />$ext </span><span class="keyword">= </span><span class="default">strrchr</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />$ext will contain the extension of the file, including a ".", if the file has an extension, and FALSE if the file has no extension. If the file has multiple extensions, such as "filename.tar.gz", then this construction will just return the last extension.</span></code></div>
  </div>
 </div>
  <div class="note" id="29926">  <div class="votes">
    <div id="Vu29926">
    <a href="/manual/vote-note.php?id=29926&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29926">
    <a href="/manual/vote-note.php?id=29926&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29926" title="50% like this...">
    0
    </div>
  </div>
  <a href="#29926" class="name">
  <strong class="user"><em>Alex Chac?n</em></strong></a><a class="genanchor" href="#29926"> &para;</a><div class="date" title="2003-02-28 05:16"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29926">
<div class="phpcode"><code><span class="html">alex.chacon@terra.com
<br />Hi
<br />Here there is a function that delete a elemente from a array and re calculate indexes
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">eliminarElementoArreglo </span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$indice</span><span class="keyword">)
<br />{
<br />    if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$indice</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">)) 
<br />    {
<br />        </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />        </span><span class="default">$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$indice</span><span class="keyword">];
<br />        </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$indice</span><span class="keyword">] = </span><span class="default">$temp</span><span class="keyword">;
<br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br />
<br />        </span><span class="comment">//reacomodamos ?ndices
<br />        </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$indice </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)
<br />        {
<br />            </span><span class="default">$dummy </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />            </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$temp</span><span class="keyword">;
<br />            </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">$dummy</span><span class="keyword">;
<br />        }
<br />    }
<br />    return </span><span class="default">$array</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80327">  <div class="votes">
    <div id="Vu80327">
    <a href="/manual/vote-note.php?id=80327&amp;page=function.array-pop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80327">
    <a href="/manual/vote-note.php?id=80327&amp;page=function.array-pop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80327" title="48% like this...">
    -2
    </div>
  </div>
  <a href="#80327" class="name">
  <strong class="user"><em>Orsi</em></strong></a><a class="genanchor" href="#80327"> &para;</a><div class="date" title="2008-01-10 07:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80327">
<div class="phpcode"><code><span class="html">Hi,<br /><br />Here is a simple function which delete one element from the array (with value):<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />* This function deletes the given element from a one-dimension array<br />* Parameters: $array:    the array (in/out)<br />*             $deleteIt: the value which we would like to delete<br />*             $useOldKeys: if it is false then the function will re-index the array (from 0, 1, ...)<br />*                          if it is true: the function will keep the old keys<br />* Returns true, if this value was in the array, otherwise false (in this case the array is same as before)<br />*/<br /></span><span class="keyword">function </span><span class="default">deleteFromArray</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$deleteIt</span><span class="keyword">, </span><span class="default">$useOldKeys </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">)<br />{<br />    </span><span class="default">$tmpArray </span><span class="keyword">= array();<br />    </span><span class="default">$found </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br />    foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">$value </span><span class="keyword">!== </span><span class="default">$deleteIt</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">FALSE </span><span class="keyword">=== </span><span class="default">$useOldKeys</span><span class="keyword">)<br />            {<br />                </span><span class="default">$tmpArray</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />            else<br />            {<br />                </span><span class="default">$tmpArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />        }<br />        else<br />        {<br />            </span><span class="default">$found </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;<br />        }<br />    }<br />   <br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">$tmpArray</span><span class="keyword">;<br />   <br />    return </span><span class="default">$found</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Maybe it will help somebody...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-pop&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-pop.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
