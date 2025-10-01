<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: var_dump - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.var-dump.php">
 <link rel="shorturl" href="https://www.php.net/var-dump">
 <link rel="alternate" href="https://www.php.net/var-dump" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.unset.php">
 <link rel="next" href="https://www.php.net/manual/en/function.var-export.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.var-dump.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.var-dump.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.var-dump.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.var-dump.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.var-dump.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.var-dump.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.var-dump.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.var-dump.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.var-dump.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.var-dump.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.var-dump.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Dumps information about a variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: var_dump - Manual" />
<meta name="twitter:description" content="Dumps information about a variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: var_dump - Manual" />
<meta itemprop="description" content="Dumps information about a variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Dumps information about a variable" />

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
        <a href="function.var-export.php">
          var_export &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.unset.php">
          &laquo; unset        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.var.php'>Variable handling</a></li>      <li><a href='ref.var.php'>Variable handling Functions</a></li>      </ul>
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
            <option value='en/function.var-dump.php' selected="selected">English</option>
            <option value='de/function.var-dump.php'>German</option>
            <option value='es/function.var-dump.php'>Spanish</option>
            <option value='fr/function.var-dump.php'>French</option>
            <option value='it/function.var-dump.php'>Italian</option>
            <option value='ja/function.var-dump.php'>Japanese</option>
            <option value='pt_BR/function.var-dump.php'>Brazilian Portuguese</option>
            <option value='ru/function.var-dump.php'>Russian</option>
            <option value='tr/function.var-dump.php'>Turkish</option>
            <option value='uk/function.var-dump.php'>Ukrainian</option>
            <option value='zh/function.var-dump.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.var-dump" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">var_dump</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">var_dump</span> &mdash; <span class="dc-title">Dumps information about a variable</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.var-dump-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>var_dump</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$values</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="simpara">
   This function displays structured information about one or more
   expressions that includes its type and value. Arrays and objects are
   explored recursively with values indented to show structure.
  </p>
  <p class="simpara">
   All public, private and protected properties of objects will be returned in
   the output unless the object implements a
   <a href="language.oop5.magic.php#language.oop5.magic.debuginfo" class="link">__debugInfo()</a> method.
  </p>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">As with anything that outputs
its result directly to the browser, the <a href="book.outcontrol.php" class="link">output-control functions</a> can be used to capture
the output of this function, and save it in a
<span class="type"><a href="language.types.string.php" class="type string">string</a></span> (for example).</p></div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.var-dump-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The expression to dump.
      </p>
     </dd>
    
    
     <dt><code class="parameter">values</code></dt>
     <dd>
      <p class="para">
       Further expressions to dump.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.var-dump-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.var-dump-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5677">
    <p><strong>Example #1 <span class="function"><strong>var_dump()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, array(</span><span style="color: #DD0000">"a"</span><span style="color: #007700">, </span><span style="color: #DD0000">"b"</span><span style="color: #007700">, </span><span style="color: #DD0000">"c"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(3) {
  [0]=&gt;
  int(1)
  [1]=&gt;
  int(2)
  [2]=&gt;
  array(3) {
    [0]=&gt;
    string(1) &quot;a&quot;
    [1]=&gt;
    string(1) &quot;b&quot;
    [2]=&gt;
    string(1) &quot;c&quot;
  }
}</pre>
</div>
    </div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$b </span><span style="color: #007700">= </span><span style="color: #0000BB">3.1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">float(3.1)
bool(true)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.var-dump-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.print-r.php" class="function" rel="rdfs-seeAlso">print_r()</a> - Prints human-readable information about a variable</span></li>
    <li><span class="function"><a href="function.debug-zval-dump.php" class="function" rel="rdfs-seeAlso">debug_zval_dump()</a> - Dumps a string representation of an internal zval structure to output</span></li>
    <li><span class="function"><a href="function.var-export.php" class="function" rel="rdfs-seeAlso">var_export()</a> - Outputs or returns a parsable string representation of a variable</span></li>
    <li><a href="language.oop5.magic.php#language.oop5.magic.debuginfo" class="link">__debugInfo()</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/var-dump.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.var-dump%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.var-dump&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.var-dump.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="51119">  <div class="votes">
    <div id="Vu51119">
    <a href="/manual/vote-note.php?id=51119&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51119">
    <a href="/manual/vote-note.php?id=51119&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51119" title="74% like this...">
    139
    </div>
  </div>
  <a href="#51119" class="name">
  <strong class="user"><em>edwardzyang at thewritingpot dot com</em></strong></a><a class="genanchor" href="#51119"> &para;</a><div class="date" title="2005-03-20 02:06"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51119">
<div class="phpcode"><code><span class="html">If you're like me and uses var_dump whenever you're debugging, you might find these two "wrapper" functions helpful.<br /><br />This one automatically adds the PRE tags around the var_dump output so you get nice formatted arrays.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">var_dump_pre</span><span class="keyword">(</span><span class="default">$mixed </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />  echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$mixed</span><span class="keyword">);<br />  echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />  return </span><span class="default">null</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This one returns the value of var_dump instead of outputting it.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">var_dump_ret</span><span class="keyword">(</span><span class="default">$mixed </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />  </span><span class="default">ob_start</span><span class="keyword">();<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$mixed</span><span class="keyword">);<br />  </span><span class="default">$content </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />  </span><span class="default">ob_end_clean</span><span class="keyword">();<br />  return </span><span class="default">$content</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Fairly simple functions, but they're infinitely helpful (I use var_dump_pre() almost exclusively now).</span></code></div>
  </div>
 </div>
  <div class="note" id="82419">  <div class="votes">
    <div id="Vu82419">
    <a href="/manual/vote-note.php?id=82419&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82419">
    <a href="/manual/vote-note.php?id=82419&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82419" title="68% like this...">
    157
    </div>
  </div>
  <a href="#82419" class="name">
  <strong class="user"><em>rich dot schu at gmail dot com</em></strong></a><a class="genanchor" href="#82419"> &para;</a><div class="date" title="2008-04-09 05:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82419">
<div class="phpcode"><code><span class="html">Keep in mind if you have xdebug installed it will limit the var_dump() output of array elements and object properties to 3 levels deep.<br /><br />To change the default, edit your xdebug.ini file and add the folllowing line:<br />xdebug.var_display_max_depth=n<br /><br />More information here:<br /><a href="http://www.xdebug.org/docs/display" rel="nofollow" target="_blank">http://www.xdebug.org/docs/display</a></span></code></div>
  </div>
 </div>
  <div class="note" id="116041">  <div class="votes">
    <div id="Vu116041">
    <a href="/manual/vote-note.php?id=116041&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116041">
    <a href="/manual/vote-note.php?id=116041&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116041" title="60% like this...">
    37
    </div>
  </div>
  <a href="#116041" class="name">
  <strong class="user"><em>b dot bergloev at gmail dot com</em></strong></a><a class="genanchor" href="#116041"> &para;</a><div class="date" title="2014-10-31 11:45"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116041">
<div class="phpcode"><code><span class="html">I post a new var_dump function with colors and collapse features. It can also adapt to terminal output if you execute it from there. No need to wrap it in a pre tag to get it to work in browsers. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">dump_debug</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$collapse</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {<br />    </span><span class="default">$recursive </span><span class="keyword">= function(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) use (&amp;</span><span class="default">$recursive</span><span class="keyword">, </span><span class="default">$collapse</span><span class="keyword">) {<br />        global </span><span class="default">$argv</span><span class="keyword">;<br /><br />        </span><span class="default">$isTerminal </span><span class="keyword">= isset(</span><span class="default">$argv</span><span class="keyword">);<br /><br />        if (!</span><span class="default">$isTerminal </span><span class="keyword">&amp;&amp; </span><span class="default">$level </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">&amp;&amp; !</span><span class="default">defined</span><span class="keyword">(</span><span class="string">"DUMP_DEBUG_SCRIPT"</span><span class="keyword">)) {<br />            </span><span class="default">define</span><span class="keyword">(</span><span class="string">"DUMP_DEBUG_SCRIPT"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br />            echo </span><span class="string">'&lt;script language="Javascript"&gt;function toggleDisplay(id) {'</span><span class="keyword">;<br />            echo </span><span class="string">'var state = document.getElementById("container"+id).style.display;'</span><span class="keyword">;<br />            echo </span><span class="string">'document.getElementById("container"+id).style.display = state == "inline" ? "none" : "inline";'</span><span class="keyword">;<br />            echo </span><span class="string">'document.getElementById("plus"+id).style.display = state == "inline" ? "inline" : "none";'</span><span class="keyword">;<br />            echo </span><span class="string">'}&lt;/script&gt;'</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$type </span><span class="keyword">= !</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) &amp;&amp; </span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) ? </span><span class="string">"Callable" </span><span class="keyword">: </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));<br />        </span><span class="default">$type_data </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$type_color </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$type_length </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />        switch (</span><span class="default">$type</span><span class="keyword">) {<br />            case </span><span class="string">"String"</span><span class="keyword">: <br />                </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"green"</span><span class="keyword">;<br />                </span><span class="default">$type_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />                </span><span class="default">$type_data </span><span class="keyword">= </span><span class="string">"\"" </span><span class="keyword">. </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) . </span><span class="string">"\""</span><span class="keyword">; break;<br /><br />            case </span><span class="string">"Double"</span><span class="keyword">: <br />            case </span><span class="string">"Float"</span><span class="keyword">: <br />                </span><span class="default">$type </span><span class="keyword">= </span><span class="string">"Float"</span><span class="keyword">;<br />                </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"#0099c5"</span><span class="keyword">;<br />                </span><span class="default">$type_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />                </span><span class="default">$type_data </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">); break;<br /><br />            case </span><span class="string">"Integer"</span><span class="keyword">: <br />                </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"red"</span><span class="keyword">;<br />                </span><span class="default">$type_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />                </span><span class="default">$type_data </span><span class="keyword">= </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">); break;<br /><br />            case </span><span class="string">"Boolean"</span><span class="keyword">: <br />                </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"#92008d"</span><span class="keyword">;<br />                </span><span class="default">$type_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />                </span><span class="default">$type_data </span><span class="keyword">= </span><span class="default">$data </span><span class="keyword">? </span><span class="string">"TRUE" </span><span class="keyword">: </span><span class="string">"FALSE"</span><span class="keyword">; break;<br /><br />            case </span><span class="string">"NULL"</span><span class="keyword">: <br />                </span><span class="default">$type_length </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; break;<br /><br />            case </span><span class="string">"Array"</span><span class="keyword">: <br />                </span><span class="default">$type_length </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />        }<br /><br />        if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, array(</span><span class="string">"Object"</span><span class="keyword">, </span><span class="string">"Array"</span><span class="keyword">))) {<br />            </span><span class="default">$notEmpty </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br />            foreach(</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                if (!</span><span class="default">$notEmpty</span><span class="keyword">) {<br />                    </span><span class="default">$notEmpty </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /><br />                    if (</span><span class="default">$isTerminal</span><span class="keyword">) {<br />                        echo </span><span class="default">$type </span><span class="keyword">. (</span><span class="default">$type_length </span><span class="keyword">!== </span><span class="default">null </span><span class="keyword">? </span><span class="string">"(" </span><span class="keyword">. </span><span class="default">$type_length </span><span class="keyword">. </span><span class="string">")" </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /><br />                    } else {<br />                        </span><span class="default">$id </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">md5</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">().</span><span class="string">":"</span><span class="keyword">.</span><span class="default">$key</span><span class="keyword">.</span><span class="string">":"</span><span class="keyword">.</span><span class="default">$level</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">);<br /><br />                        echo </span><span class="string">"&lt;a href=\"javascript:toggleDisplay('"</span><span class="keyword">. </span><span class="default">$id </span><span class="keyword">.</span><span class="string">"');\" style=\"text-decoration:none\"&gt;"</span><span class="keyword">;<br />                        echo </span><span class="string">"&lt;span style='color:#666666'&gt;" </span><span class="keyword">. </span><span class="default">$type </span><span class="keyword">. (</span><span class="default">$type_length </span><span class="keyword">!== </span><span class="default">null </span><span class="keyword">? </span><span class="string">"(" </span><span class="keyword">. </span><span class="default">$type_length </span><span class="keyword">. </span><span class="string">")" </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">) . </span><span class="string">"&lt;/span&gt;"</span><span class="keyword">;<br />                        echo </span><span class="string">"&lt;/a&gt;"</span><span class="keyword">;<br />                        echo </span><span class="string">"&lt;span id=\"plus"</span><span class="keyword">. </span><span class="default">$id </span><span class="keyword">.</span><span class="string">"\" style=\"display: " </span><span class="keyword">. (</span><span class="default">$collapse </span><span class="keyword">? </span><span class="string">"inline" </span><span class="keyword">: </span><span class="string">"none"</span><span class="keyword">) . </span><span class="string">";\"&gt;&amp;nbsp;&amp;#10549;&lt;/span&gt;"</span><span class="keyword">;<br />                        echo </span><span class="string">"&lt;div id=\"container"</span><span class="keyword">. </span><span class="default">$id </span><span class="keyword">.</span><span class="string">"\" style=\"display: " </span><span class="keyword">. (</span><span class="default">$collapse </span><span class="keyword">? </span><span class="string">"" </span><span class="keyword">: </span><span class="string">"inline"</span><span class="keyword">) . </span><span class="string">";\"&gt;"</span><span class="keyword">;<br />                        echo </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />                    }<br /><br />                    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$level</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                        echo </span><span class="default">$isTerminal </span><span class="keyword">? </span><span class="string">"|    " </span><span class="keyword">: </span><span class="string">"&lt;span style='color:black'&gt;|&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;"</span><span class="keyword">;<br />                    }<br /><br />                    echo </span><span class="default">$isTerminal </span><span class="keyword">? </span><span class="string">"\n" </span><span class="keyword">: </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />                }<br /><br />                for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$level</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                    echo </span><span class="default">$isTerminal </span><span class="keyword">? </span><span class="string">"|    " </span><span class="keyword">: </span><span class="string">"&lt;span style='color:black'&gt;|&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;"</span><span class="keyword">;<br />                }<br /><br />                echo </span><span class="default">$isTerminal </span><span class="keyword">? </span><span class="string">"[" </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">"] =&gt; " </span><span class="keyword">: </span><span class="string">"&lt;span style='color:black'&gt;[" </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">"]&amp;nbsp;=&gt;&amp;nbsp;&lt;/span&gt;"</span><span class="keyword">;<br /><br />                </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$recursive</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);<br />            }<br /><br />            if (</span><span class="default">$notEmpty</span><span class="keyword">) {<br />                for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$level</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                    echo </span><span class="default">$isTerminal </span><span class="keyword">? </span><span class="string">"|    " </span><span class="keyword">: </span><span class="string">"&lt;span style='color:black'&gt;|&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;"</span><span class="keyword">;<br />                }<br /><br />                if (!</span><span class="default">$isTerminal</span><span class="keyword">) {<br />                    echo </span><span class="string">"&lt;/div&gt;"</span><span class="keyword">;<br />                }<br /><br />            } else {<br />                echo </span><span class="default">$isTerminal </span><span class="keyword">? <br />                        </span><span class="default">$type </span><span class="keyword">. (</span><span class="default">$type_length </span><span class="keyword">!== </span><span class="default">null </span><span class="keyword">? </span><span class="string">"(" </span><span class="keyword">. </span><span class="default">$type_length </span><span class="keyword">. </span><span class="string">")" </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">) . </span><span class="string">"  " </span><span class="keyword">: <br />                        </span><span class="string">"&lt;span style='color:#666666'&gt;" </span><span class="keyword">. </span><span class="default">$type </span><span class="keyword">. (</span><span class="default">$type_length </span><span class="keyword">!== </span><span class="default">null </span><span class="keyword">? </span><span class="string">"(" </span><span class="keyword">. </span><span class="default">$type_length </span><span class="keyword">. </span><span class="string">")" </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">) . </span><span class="string">"&lt;/span&gt;&amp;nbsp;&amp;nbsp;"</span><span class="keyword">;<br />            }<br /><br />        } else {<br />            echo </span><span class="default">$isTerminal </span><span class="keyword">? <br />                    </span><span class="default">$type </span><span class="keyword">. (</span><span class="default">$type_length </span><span class="keyword">!== </span><span class="default">null </span><span class="keyword">? </span><span class="string">"(" </span><span class="keyword">. </span><span class="default">$type_length </span><span class="keyword">. </span><span class="string">")" </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">) . </span><span class="string">"  " </span><span class="keyword">: <br />                    </span><span class="string">"&lt;span style='color:#666666'&gt;" </span><span class="keyword">. </span><span class="default">$type </span><span class="keyword">. (</span><span class="default">$type_length </span><span class="keyword">!== </span><span class="default">null </span><span class="keyword">? </span><span class="string">"(" </span><span class="keyword">. </span><span class="default">$type_length </span><span class="keyword">. </span><span class="string">")" </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">) . </span><span class="string">"&lt;/span&gt;&amp;nbsp;&amp;nbsp;"</span><span class="keyword">;<br /><br />            if (</span><span class="default">$type_data </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">) {<br />                echo </span><span class="default">$isTerminal </span><span class="keyword">? </span><span class="default">$type_data </span><span class="keyword">: </span><span class="string">"&lt;span style='color:" </span><span class="keyword">. </span><span class="default">$type_color </span><span class="keyword">. </span><span class="string">"'&gt;" </span><span class="keyword">. </span><span class="default">$type_data </span><span class="keyword">. </span><span class="string">"&lt;/span&gt;"</span><span class="keyword">;<br />            }<br />        }<br /><br />        echo </span><span class="default">$isTerminal </span><span class="keyword">? </span><span class="string">"\n" </span><span class="keyword">: </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />    };<br /><br />    </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$recursive</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105343">  <div class="votes">
    <div id="Vu105343">
    <a href="/manual/vote-note.php?id=105343&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105343">
    <a href="/manual/vote-note.php?id=105343&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105343" title="55% like this...">
    6
    </div>
  </div>
  <a href="#105343" class="name">
  <strong class="user"><em>stlawson *AT* joyfulearthtech *DOT* com</em></strong></a><a class="genanchor" href="#105343"> &para;</a><div class="date" title="2011-08-10 09:31"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105343">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Better GI than print_r or var_dump -- but, unlike var_dump, you can only dump one variable.  <br /> * Added htmlentities on the var content before echo, so you see what is really there, and not the mark-up.<br /> * <br /> * Also, now the output is encased within a div block that sets the background color, font style, and left-justifies it<br /> * so it is not at the mercy of ambient styles.<br /> *<br /> * Inspired from:     PHP.net Contributions<br /> * Stolen from:       [highstrike at gmail dot com]<br /> * Modified by:       stlawson *AT* JoyfulEarthTech *DOT* com <br /> *<br /> * @param mixed $var  -- variable to dump<br /> * @param string $var_name  -- name of variable (optional) -- displayed in printout making it easier to sort out what variable is what in a complex output<br /> * @param string $indent -- used by internal recursive call (no known external value)<br /> * @param unknown_type $reference -- used by internal recursive call (no known external value)<br /> */<br /></span><span class="keyword">function </span><span class="default">do_dump</span><span class="keyword">(&amp;</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$var_name </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$indent </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$reference </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">)<br />{<br />    </span><span class="default">$do_dump_indent </span><span class="keyword">= </span><span class="string">"&lt;span style='color:#666666;'&gt;|&lt;/span&gt; &amp;nbsp;&amp;nbsp; "</span><span class="keyword">;<br />    </span><span class="default">$reference </span><span class="keyword">= </span><span class="default">$reference</span><span class="keyword">.</span><span class="default">$var_name</span><span class="keyword">;<br />    </span><span class="default">$keyvar </span><span class="keyword">= </span><span class="string">'the_do_dump_recursion_protection_scheme'</span><span class="keyword">; </span><span class="default">$keyname </span><span class="keyword">= </span><span class="string">'referenced_object_name'</span><span class="keyword">;<br />    <br />    </span><span class="comment">// So this is always visible and always left justified and readable<br />    </span><span class="keyword">echo </span><span class="string">"&lt;div style='text-align:left; background-color:white; font: 100% monospace; color:black;'&gt;"</span><span class="keyword">;<br /><br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">) &amp;&amp; isset(</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$keyvar</span><span class="keyword">]))<br />    {<br />        </span><span class="default">$real_var </span><span class="keyword">= &amp;</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$keyvar</span><span class="keyword">];<br />        </span><span class="default">$real_name </span><span class="keyword">= &amp;</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$keyname</span><span class="keyword">];<br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$real_var</span><span class="keyword">));<br />        echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> &lt;span style='color:#666666'&gt;</span><span class="default">$type</span><span class="string">&lt;/span&gt; = &lt;span style='color:#e87800;'&gt;&amp;amp;</span><span class="default">$real_name</span><span class="string">&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />    }<br />    else<br />    {<br />        </span><span class="default">$var </span><span class="keyword">= array(</span><span class="default">$keyvar </span><span class="keyword">=&gt; </span><span class="default">$var</span><span class="keyword">, </span><span class="default">$keyname </span><span class="keyword">=&gt; </span><span class="default">$reference</span><span class="keyword">);<br />        </span><span class="default">$avar </span><span class="keyword">= &amp;</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$keyvar</span><span class="keyword">];<br /><br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">));<br />        if(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"String"</span><span class="keyword">) </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"&lt;span style='color:green'&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"Integer"</span><span class="keyword">) </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"&lt;span style='color:red'&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"Double"</span><span class="keyword">){ </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"&lt;span style='color:#0099c5'&gt;"</span><span class="keyword">; </span><span class="default">$type </span><span class="keyword">= </span><span class="string">"Float"</span><span class="keyword">; }<br />        elseif(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"Boolean"</span><span class="keyword">) </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"&lt;span style='color:#92008d'&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"NULL"</span><span class="keyword">) </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"&lt;span style='color:black'&gt;"</span><span class="keyword">;<br /><br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">))<br />        {<br />            </span><span class="default">$count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">);<br />            echo </span><span class="string">"</span><span class="default">$indent</span><span class="string">" </span><span class="keyword">. (</span><span class="default">$var_name </span><span class="keyword">? </span><span class="string">"</span><span class="default">$var_name</span><span class="string"> =&gt; "</span><span class="keyword">:</span><span class="string">""</span><span class="keyword">) . </span><span class="string">"&lt;span style='color:#666666'&gt;</span><span class="default">$type</span><span class="string"> (</span><span class="default">$count</span><span class="string">)&lt;/span&gt;&lt;br&gt;</span><span class="default">$indent</span><span class="string">(&lt;br&gt;"</span><span class="keyword">;<br />            </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">);<br />            foreach(</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$name</span><span class="keyword">)<br />            {<br />                </span><span class="default">$value </span><span class="keyword">= &amp;</span><span class="default">$avar</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">];<br />                </span><span class="default">do_dump</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="string">"['</span><span class="default">$name</span><span class="string">']"</span><span class="keyword">, </span><span class="default">$indent</span><span class="keyword">.</span><span class="default">$do_dump_indent</span><span class="keyword">, </span><span class="default">$reference</span><span class="keyword">);<br />            }<br />            echo </span><span class="string">"</span><span class="default">$indent</span><span class="string">)&lt;br&gt;"</span><span class="keyword">;<br />        }<br />        elseif(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">))<br />        {<br />            echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> &lt;span style='color:#666666'&gt;</span><span class="default">$type</span><span class="string">&lt;/span&gt;&lt;br&gt;</span><span class="default">$indent</span><span class="string">(&lt;br&gt;"</span><span class="keyword">;<br />            foreach(</span><span class="default">$avar </span><span class="keyword">as </span><span class="default">$name</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) </span><span class="default">do_dump</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="string">"</span><span class="default">$name</span><span class="string">"</span><span class="keyword">, </span><span class="default">$indent</span><span class="keyword">.</span><span class="default">$do_dump_indent</span><span class="keyword">, </span><span class="default">$reference</span><span class="keyword">);<br />            echo </span><span class="string">"</span><span class="default">$indent</span><span class="string">)&lt;br&gt;"</span><span class="keyword">;<br />        }<br />        elseif(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">)) echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#666666'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="default">$type_color</span><span class="string">"</span><span class="keyword">.</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">"&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">)) echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#666666'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="default">$type_color</span><span class="string">\""</span><span class="keyword">.</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">"\"&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">)) echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#666666'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="default">$type_color</span><span class="string">"</span><span class="keyword">.</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">"&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">)) echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#666666'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="default">$type_color</span><span class="string">"</span><span class="keyword">.(</span><span class="default">$avar </span><span class="keyword">== </span><span class="default">1 </span><span class="keyword">? </span><span class="string">"TRUE"</span><span class="keyword">:</span><span class="string">"FALSE"</span><span class="keyword">).</span><span class="string">"&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">)) echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#666666'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="keyword">{</span><span class="default">$type_color</span><span class="keyword">}</span><span class="string">NULL&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />        else echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#666666'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; "</span><span class="keyword">.</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br /><br />        </span><span class="default">$var </span><span class="keyword">= </span><span class="default">$var</span><span class="keyword">[</span><span class="default">$keyvar</span><span class="keyword">];<br />    }<br />    <br />    echo </span><span class="string">"&lt;/div&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49455">  <div class="votes">
    <div id="Vu49455">
    <a href="/manual/vote-note.php?id=49455&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49455">
    <a href="/manual/vote-note.php?id=49455&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49455" title="54% like this...">
    11
    </div>
  </div>
  <a href="#49455" class="name">
  <strong class="user"><em>anon</em></strong></a><a class="genanchor" href="#49455"> &para;</a><div class="date" title="2005-01-28 06:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49455">
<div class="phpcode"><code><span class="html">var_dump(get_defined_vars());<br />will dump all defined variables to the browser.</span></code></div>
  </div>
 </div>
  <div class="note" id="119618">  <div class="votes">
    <div id="Vu119618">
    <a href="/manual/vote-note.php?id=119618&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119618">
    <a href="/manual/vote-note.php?id=119618&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119618" title="52% like this...">
    3
    </div>
  </div>
  <a href="#119618" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#119618"> &para;</a><div class="date" title="2016-07-18 06:27"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119618">
<div class="phpcode"><code><span class="html">Be careful this outputs to stdout stream (1) instead of the proper stderr stream (2).</span></code></div>
  </div>
 </div>
  <div class="note" id="76072">  <div class="votes">
    <div id="Vu76072">
    <a href="/manual/vote-note.php?id=76072&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76072">
    <a href="/manual/vote-note.php?id=76072&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76072" title="53% like this...">
    5
    </div>
  </div>
  <a href="#76072" class="name">
  <strong class="user"><em>php at mikeboers dot com</em></strong></a><a class="genanchor" href="#76072"> &para;</a><div class="date" title="2007-06-28 01:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76072">
<div class="phpcode"><code><span class="html">Howdy!<br /><br />I am working on a pretty large project where I needed to dump a human readable form of whatever into the log files... and I thought var_export was too difficult to read. BigueNique at yahoo dot ca has a nice solution, although I needed to NOT modify whatever was being passed to dump.<br /><br />So borrowing heavily from BigueNique's (just reworked his function) and someone's idea over in the object cloning page, I came up with the following function.<br /><br />It makes a complete copy of whatever object you initially pass it, including all recursive definitions and outside objects references, then does the same thing as BigueNique's function. I also heavily reworked what it output, to suit my needs.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">var_log</span><span class="keyword">(&amp;</span><span class="default">$varInput</span><span class="keyword">, </span><span class="default">$var_name</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">, </span><span class="default">$reference</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">, </span><span class="default">$method </span><span class="keyword">= </span><span class="string">'='</span><span class="keyword">, </span><span class="default">$sub </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br /><br />    static </span><span class="default">$output </span><span class="keyword">;<br />    static </span><span class="default">$depth </span><span class="keyword">;<br /><br />    if ( </span><span class="default">$sub </span><span class="keyword">== </span><span class="default">false </span><span class="keyword">) {<br />        </span><span class="default">$output </span><span class="keyword">= </span><span class="string">'' </span><span class="keyword">;<br />        </span><span class="default">$depth </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">;<br />        </span><span class="default">$reference </span><span class="keyword">= </span><span class="default">$var_name </span><span class="keyword">;<br />        </span><span class="default">$var </span><span class="keyword">= </span><span class="default">serialize</span><span class="keyword">( </span><span class="default">$varInput </span><span class="keyword">) ;<br />        </span><span class="default">$var </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">( </span><span class="default">$var </span><span class="keyword">) ;<br />    } else {<br />        ++</span><span class="default">$depth </span><span class="keyword">;<br />        </span><span class="default">$var </span><span class="keyword">=&amp; </span><span class="default">$varInput </span><span class="keyword">;<br />        <br />    }<br />        <br />    </span><span class="comment">// constants<br />    </span><span class="default">$nl </span><span class="keyword">= </span><span class="string">"\n" </span><span class="keyword">;<br />    </span><span class="default">$block </span><span class="keyword">= </span><span class="string">'a_big_recursion_protection_block'</span><span class="keyword">;<br />    <br />    </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$depth </span><span class="keyword">;<br />    </span><span class="default">$indent </span><span class="keyword">= </span><span class="string">'' </span><span class="keyword">;<br />    while( </span><span class="default">$c </span><span class="keyword">-- &gt; </span><span class="default">0 </span><span class="keyword">) {<br />        </span><span class="default">$indent </span><span class="keyword">.= </span><span class="string">'|  ' </span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// if this has been parsed before<br />    </span><span class="keyword">if ( </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">) &amp;&amp; isset(</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$block</span><span class="keyword">])) {<br />    <br />        </span><span class="default">$real </span><span class="keyword">=&amp; </span><span class="default">$var</span><span class="keyword">[ </span><span class="default">$block </span><span class="keyword">] ;<br />        </span><span class="default">$name </span><span class="keyword">=&amp; </span><span class="default">$var</span><span class="keyword">[ </span><span class="string">'name' </span><span class="keyword">] ;<br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="default">gettype</span><span class="keyword">( </span><span class="default">$real </span><span class="keyword">) ;<br />        </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$indent</span><span class="keyword">.</span><span class="default">$var_name</span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$method</span><span class="keyword">.</span><span class="string">'&amp; '</span><span class="keyword">.(</span><span class="default">$type</span><span class="keyword">==</span><span class="string">'array'</span><span class="keyword">?</span><span class="string">'Array'</span><span class="keyword">:</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$real</span><span class="keyword">)).</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />    <br />    </span><span class="comment">// havent parsed this before<br />    </span><span class="keyword">} else {<br /><br />        </span><span class="comment">// insert recursion blocker<br />        </span><span class="default">$var </span><span class="keyword">= Array( </span><span class="default">$block </span><span class="keyword">=&gt; </span><span class="default">$var</span><span class="keyword">, </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">$reference </span><span class="keyword">);<br />        </span><span class="default">$theVar </span><span class="keyword">=&amp; </span><span class="default">$var</span><span class="keyword">[ </span><span class="default">$block </span><span class="keyword">] ;<br /><br />        </span><span class="comment">// print it out<br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="default">gettype</span><span class="keyword">( </span><span class="default">$theVar </span><span class="keyword">) ;<br />        switch( </span><span class="default">$type </span><span class="keyword">) {<br />        <br />            case </span><span class="string">'array' </span><span class="keyword">:<br />                </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$indent </span><span class="keyword">. </span><span class="default">$var_name </span><span class="keyword">. </span><span class="string">' '</span><span class="keyword">.</span><span class="default">$method</span><span class="keyword">.</span><span class="string">' Array ('</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />                </span><span class="default">$keys</span><span class="keyword">=</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$theVar</span><span class="keyword">);<br />                foreach(</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$name</span><span class="keyword">) {<br />                    </span><span class="default">$value</span><span class="keyword">=&amp;</span><span class="default">$theVar</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">];<br />                    </span><span class="default">var_log</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$reference</span><span class="keyword">.</span><span class="string">'["'</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">.</span><span class="string">'"]'</span><span class="keyword">, </span><span class="string">'='</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />                }<br />                </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$indent</span><span class="keyword">.</span><span class="string">')'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />                break ;<br />            <br />            case </span><span class="string">'object' </span><span class="keyword">:<br />                </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$indent</span><span class="keyword">.</span><span class="default">$var_name</span><span class="keyword">.</span><span class="string">' = '</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$theVar</span><span class="keyword">).</span><span class="string">' {'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />                foreach(</span><span class="default">$theVar </span><span class="keyword">as </span><span class="default">$name</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {<br />                    </span><span class="default">var_log</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$reference</span><span class="keyword">.</span><span class="string">'-&gt;'</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">, </span><span class="string">'-&gt;'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />                }<br />                </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$indent</span><span class="keyword">.</span><span class="string">'}'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />                break ;<br />            <br />            case </span><span class="string">'string' </span><span class="keyword">:<br />                </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$indent </span><span class="keyword">. </span><span class="default">$var_name </span><span class="keyword">. </span><span class="string">' '</span><span class="keyword">.</span><span class="default">$method</span><span class="keyword">.</span><span class="string">' "'</span><span class="keyword">.</span><span class="default">$theVar</span><span class="keyword">.</span><span class="string">'"'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />                break ;<br />                <br />            default :<br />                </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$indent </span><span class="keyword">. </span><span class="default">$var_name </span><span class="keyword">. </span><span class="string">' '</span><span class="keyword">.</span><span class="default">$method</span><span class="keyword">.</span><span class="string">' ('</span><span class="keyword">.</span><span class="default">$type</span><span class="keyword">.</span><span class="string">') '</span><span class="keyword">.</span><span class="default">$theVar</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />                break ;<br />                <br />        }<br />        <br />        </span><span class="comment">// $var=$var[$block];<br />        <br />    </span><span class="keyword">}<br />    <br />    -- </span><span class="default">$depth </span><span class="keyword">;<br />    <br />    if( </span><span class="default">$sub </span><span class="keyword">== </span><span class="default">false </span><span class="keyword">)<br />        return </span><span class="default">$output </span><span class="keyword">;<br />        <br />}<br /><br /></span><span class="comment">// var_log( $var, '$name' ) ;<br /><br /></span><span class="default">?&gt;<br /></span><br />Hope it works well for you!</span></code></div>
  </div>
 </div>
  <div class="note" id="80288">  <div class="votes">
    <div id="Vu80288">
    <a href="/manual/vote-note.php?id=80288&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80288">
    <a href="/manual/vote-note.php?id=80288&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80288" title="53% like this...">
    3
    </div>
  </div>
  <a href="#80288" class="name">
  <strong class="user"><em>highstrike at gmail dot com</em></strong></a><a class="genanchor" href="#80288"> &para;</a><div class="date" title="2008-01-08 05:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80288">
<div class="phpcode"><code><span class="html">made 2 nifty functions based of what some people contributed here. Hope you find them usefull<br /><br />usage ... call for the dump function. EG: dump($array, "Array dump");<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">////////////////////////////////////////////////////////<br />// Function:         dump<br />// Inspired from:     PHP.net Contributions<br />// Description: Helps with php debugging<br /><br /></span><span class="keyword">function </span><span class="default">dump</span><span class="keyword">(&amp;</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$info </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">)<br />{<br />    </span><span class="default">$scope </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$prefix </span><span class="keyword">= </span><span class="string">'unique'</span><span class="keyword">;<br />    </span><span class="default">$suffix </span><span class="keyword">= </span><span class="string">'value'</span><span class="keyword">;<br />  <br />    if(</span><span class="default">$scope</span><span class="keyword">) </span><span class="default">$vals </span><span class="keyword">= </span><span class="default">$scope</span><span class="keyword">;<br />    else </span><span class="default">$vals </span><span class="keyword">= </span><span class="default">$GLOBALS</span><span class="keyword">;<br /><br />    </span><span class="default">$old </span><span class="keyword">= </span><span class="default">$var</span><span class="keyword">;<br />    </span><span class="default">$var </span><span class="keyword">= </span><span class="default">$new </span><span class="keyword">= </span><span class="default">$prefix</span><span class="keyword">.</span><span class="default">rand</span><span class="keyword">().</span><span class="default">$suffix</span><span class="keyword">; </span><span class="default">$vname </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br />    foreach(</span><span class="default">$vals </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) if(</span><span class="default">$val </span><span class="keyword">=== </span><span class="default">$new</span><span class="keyword">) </span><span class="default">$vname </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;<br />    </span><span class="default">$var </span><span class="keyword">= </span><span class="default">$old</span><span class="keyword">;<br /><br />    echo </span><span class="string">"&lt;pre style='margin: 0px 0px 10px 0px; display: block; background: white; color: black; font-family: Verdana; border: 1px solid #cccccc; padding: 5px; font-size: 10px; line-height: 13px;'&gt;"</span><span class="keyword">;<br />    if(</span><span class="default">$info </span><span class="keyword">!= </span><span class="default">FALSE</span><span class="keyword">) echo </span><span class="string">"&lt;b style='color: red;'&gt;</span><span class="default">$info</span><span class="string">:&lt;/b&gt;&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">do_dump</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="string">'$'</span><span class="keyword">.</span><span class="default">$vname</span><span class="keyword">);<br />    echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">////////////////////////////////////////////////////////<br />// Function:         do_dump<br />// Inspired from:     PHP.net Contributions<br />// Description: Better GI than print_r or var_dump<br /><br /></span><span class="keyword">function </span><span class="default">do_dump</span><span class="keyword">(&amp;</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$var_name </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$indent </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$reference </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">)<br />{<br />    </span><span class="default">$do_dump_indent </span><span class="keyword">= </span><span class="string">"&lt;span style='color:#eeeeee;'&gt;|&lt;/span&gt; &amp;nbsp;&amp;nbsp; "</span><span class="keyword">;<br />    </span><span class="default">$reference </span><span class="keyword">= </span><span class="default">$reference</span><span class="keyword">.</span><span class="default">$var_name</span><span class="keyword">;<br />    </span><span class="default">$keyvar </span><span class="keyword">= </span><span class="string">'the_do_dump_recursion_protection_scheme'</span><span class="keyword">; </span><span class="default">$keyname </span><span class="keyword">= </span><span class="string">'referenced_object_name'</span><span class="keyword">;<br /><br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">) &amp;&amp; isset(</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$keyvar</span><span class="keyword">]))<br />    {<br />        </span><span class="default">$real_var </span><span class="keyword">= &amp;</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$keyvar</span><span class="keyword">];<br />        </span><span class="default">$real_name </span><span class="keyword">= &amp;</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$keyname</span><span class="keyword">];<br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$real_var</span><span class="keyword">));<br />        echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> &lt;span style='color:#a2a2a2'&gt;</span><span class="default">$type</span><span class="string">&lt;/span&gt; = &lt;span style='color:#e87800;'&gt;&amp;amp;</span><span class="default">$real_name</span><span class="string">&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />    }<br />    else<br />    {<br />        </span><span class="default">$var </span><span class="keyword">= array(</span><span class="default">$keyvar </span><span class="keyword">=&gt; </span><span class="default">$var</span><span class="keyword">, </span><span class="default">$keyname </span><span class="keyword">=&gt; </span><span class="default">$reference</span><span class="keyword">);<br />        </span><span class="default">$avar </span><span class="keyword">= &amp;</span><span class="default">$var</span><span class="keyword">[</span><span class="default">$keyvar</span><span class="keyword">];<br />    <br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">));<br />        if(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"String"</span><span class="keyword">) </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"&lt;span style='color:green'&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"Integer"</span><span class="keyword">) </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"&lt;span style='color:red'&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"Double"</span><span class="keyword">){ </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"&lt;span style='color:#0099c5'&gt;"</span><span class="keyword">; </span><span class="default">$type </span><span class="keyword">= </span><span class="string">"Float"</span><span class="keyword">; }<br />        elseif(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"Boolean"</span><span class="keyword">) </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"&lt;span style='color:#92008d'&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"NULL"</span><span class="keyword">) </span><span class="default">$type_color </span><span class="keyword">= </span><span class="string">"&lt;span style='color:black'&gt;"</span><span class="keyword">;<br />    <br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">))<br />        {<br />            </span><span class="default">$count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">);<br />            echo </span><span class="string">"</span><span class="default">$indent</span><span class="string">" </span><span class="keyword">. (</span><span class="default">$var_name </span><span class="keyword">? </span><span class="string">"</span><span class="default">$var_name</span><span class="string"> =&gt; "</span><span class="keyword">:</span><span class="string">""</span><span class="keyword">) . </span><span class="string">"&lt;span style='color:#a2a2a2'&gt;</span><span class="default">$type</span><span class="string"> (</span><span class="default">$count</span><span class="string">)&lt;/span&gt;&lt;br&gt;</span><span class="default">$indent</span><span class="string">(&lt;br&gt;"</span><span class="keyword">;<br />            </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">);<br />            foreach(</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$name</span><span class="keyword">)<br />            {<br />                </span><span class="default">$value </span><span class="keyword">= &amp;</span><span class="default">$avar</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">];<br />                </span><span class="default">do_dump</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="string">"['</span><span class="default">$name</span><span class="string">']"</span><span class="keyword">, </span><span class="default">$indent</span><span class="keyword">.</span><span class="default">$do_dump_indent</span><span class="keyword">, </span><span class="default">$reference</span><span class="keyword">);<br />            }<br />            echo </span><span class="string">"</span><span class="default">$indent</span><span class="string">)&lt;br&gt;"</span><span class="keyword">;<br />        }<br />        elseif(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">))<br />        {<br />            echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> &lt;span style='color:#a2a2a2'&gt;</span><span class="default">$type</span><span class="string">&lt;/span&gt;&lt;br&gt;</span><span class="default">$indent</span><span class="string">(&lt;br&gt;"</span><span class="keyword">;<br />            foreach(</span><span class="default">$avar </span><span class="keyword">as </span><span class="default">$name</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) </span><span class="default">do_dump</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="string">"</span><span class="default">$name</span><span class="string">"</span><span class="keyword">, </span><span class="default">$indent</span><span class="keyword">.</span><span class="default">$do_dump_indent</span><span class="keyword">, </span><span class="default">$reference</span><span class="keyword">);<br />            echo </span><span class="string">"</span><span class="default">$indent</span><span class="string">)&lt;br&gt;"</span><span class="keyword">;<br />        }<br />        elseif(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">)) echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#a2a2a2'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="default">$type_color$avar</span><span class="string">&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">)) echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#a2a2a2'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="default">$type_color</span><span class="string">\"</span><span class="default">$avar</span><span class="string">\"&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">)) echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#a2a2a2'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="default">$type_color$avar</span><span class="string">&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">)) echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#a2a2a2'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="default">$type_color</span><span class="string">"</span><span class="keyword">.(</span><span class="default">$avar </span><span class="keyword">== </span><span class="default">1 </span><span class="keyword">? </span><span class="string">"TRUE"</span><span class="keyword">:</span><span class="string">"FALSE"</span><span class="keyword">).</span><span class="string">"&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />        elseif(</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">)) echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#a2a2a2'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="keyword">{</span><span class="default">$type_color</span><span class="keyword">}</span><span class="string">NULL&lt;/span&gt;&lt;br&gt;"</span><span class="keyword">;<br />        else echo </span><span class="string">"</span><span class="default">$indent$var_name</span><span class="string"> = &lt;span style='color:#a2a2a2'&gt;</span><span class="default">$type</span><span class="string">("</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$avar</span><span class="keyword">).</span><span class="string">")&lt;/span&gt; </span><span class="default">$avar</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br /><br />        </span><span class="default">$var </span><span class="keyword">= </span><span class="default">$var</span><span class="keyword">[</span><span class="default">$keyvar</span><span class="keyword">];<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88651">  <div class="votes">
    <div id="Vu88651">
    <a href="/manual/vote-note.php?id=88651&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88651">
    <a href="/manual/vote-note.php?id=88651&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88651" title="52% like this...">
    3
    </div>
  </div>
  <a href="#88651" class="name">
  <strong class="user"><em>egorinsk at gmail com</em></strong></a><a class="genanchor" href="#88651"> &para;</a><div class="date" title="2009-02-02 04:08"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88651">
<div class="phpcode"><code><span class="html">Note that var_dump reset()'s array internal pointer!</span></code></div>
  </div>
 </div>
  <div class="note" id="96082">  <div class="votes">
    <div id="Vu96082">
    <a href="/manual/vote-note.php?id=96082&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96082">
    <a href="/manual/vote-note.php?id=96082&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96082" title="52% like this...">
    2
    </div>
  </div>
  <a href="#96082" class="name">
  <strong class="user"><em>david at exposito dot mobi</em></strong></a><a class="genanchor" href="#96082"> &para;</a><div class="date" title="2010-02-07 11:36"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96082">
<div class="phpcode"><code><span class="html">If you want to save exactly the content of an array into a variable to save ir later for example, use this:
<br />
<br /><span class="default">&lt;?php $xml </span><span class="keyword">= </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />You'll have in your same variable the content readable, instead of written down or anything else</span></code></div>
  </div>
 </div>
  <div class="note" id="77234">  <div class="votes">
    <div id="Vu77234">
    <a href="/manual/vote-note.php?id=77234&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77234">
    <a href="/manual/vote-note.php?id=77234&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77234" title="52% like this...">
    4
    </div>
  </div>
  <a href="#77234" class="name">
  <strong class="user"><em>thriller dot ze at gmail dot com</em></strong></a><a class="genanchor" href="#77234"> &para;</a><div class="date" title="2007-08-21 01:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77234">
<div class="phpcode"><code><span class="html">As Bryan said, it is possible to capture var_dump() output to a string. But it's not quite exact if the dumped variable contains HTML code.<br /><br />You can use this instead:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">; </span><span class="comment">// This is for correct handling of newlines<br /></span><span class="default">ob_start</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">);<br /></span><span class="default">$a</span><span class="keyword">=</span><span class="default">ob_get_contents</span><span class="keyword">();<br /></span><span class="default">ob_end_clean</span><span class="keyword">();<br />echo </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">ENT_QUOTES</span><span class="keyword">); </span><span class="comment">// Escape every HTML special chars (especially &gt; and &lt; )<br /></span><span class="keyword">echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77710">  <div class="votes">
    <div id="Vu77710">
    <a href="/manual/vote-note.php?id=77710&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77710">
    <a href="/manual/vote-note.php?id=77710&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77710" title="52% like this...">
    2
    </div>
  </div>
  <a href="#77710" class="name">
  <strong class="user"><em>vladimir at pixeltomorrow dot com</em></strong></a><a class="genanchor" href="#77710"> &para;</a><div class="date" title="2007-09-10 12:45"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77710">
<div class="phpcode"><code><span class="html">You can also use the PEAR package available at <a href="http://pear.php.net/package/Var_Dump" rel="nofollow" target="_blank">http://pear.php.net/package/Var_Dump</a><br /><br />which parses the variable content in a very pleasant manner, a lot more easier to "follow" than the built-in var_dump() function. <br /><br />Of course there are many others, but I prefer this one, because it's simply to use.<br /><br />Just add at the begining of your file:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">require(</span><span class="string">'Var_Dump.php'</span><span class="keyword">); </span><span class="comment">// make sure the pear package path is set in php.ini<br /></span><span class="default">Var_Dump</span><span class="keyword">::</span><span class="default">displayInit</span><span class="keyword">(array(</span><span class="string">'display_mode' </span><span class="keyword">=&gt; </span><span class="string">'HTML4_Text'</span><span class="keyword">), array(</span><span class="string">'mode' </span><span class="keyword">=&gt; </span><span class="string">'normal'</span><span class="keyword">,</span><span class="string">'offset' </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />then, instead of simply using var_dump($foo), use:<br /><br /><span class="default">&lt;?php<br /><br />Var_Dump</span><span class="keyword">::</span><span class="default">display</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Read the documentation if you're looking for different output layouts.<br /><br />Cheers!<br />Vladimir Ghetau</span></code></div>
  </div>
 </div>
  <div class="note" id="104580">  <div class="votes">
    <div id="Vu104580">
    <a href="/manual/vote-note.php?id=104580&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104580">
    <a href="/manual/vote-note.php?id=104580&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104580" title="51% like this...">
    2
    </div>
  </div>
  <a href="#104580" class="name">
  <strong class="user"><em>kobrasrealm at gmail dot com</em></strong></a><a class="genanchor" href="#104580"> &para;</a><div class="date" title="2011-06-23 01:28"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104580">
<div class="phpcode"><code><span class="html">I wrote this dandy little function for using var_dump() on HTML documents so I don't have to view the source.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">htmldump</span><span class="keyword">(</span><span class="default">$variable</span><span class="keyword">, </span><span class="default">$height</span><span class="keyword">=</span><span class="string">"9em"</span><span class="keyword">) {<br />echo </span><span class="string">"&lt;pre style=\"border: 1px solid #000; height: </span><span class="keyword">{</span><span class="default">$height</span><span class="keyword">}</span><span class="string">; overflow: auto; margin: 0.5em;\"&gt;"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$variable</span><span class="keyword">);<br />echo </span><span class="string">"&lt;/pre&gt;\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />You can pass arguments like this:<br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="default">mysql_query</span><span class="keyword">(</span><span class="string">"SELECT id, name, value FROM table WHERE cond = 'value'"</span><span class="keyword">);<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="default">mysql_fetch_assoc</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /><br /></span><span class="comment">// Dump variable containing the result of the MySQL query<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The second parameter lets you specify the height of the box. Default is 9em, but if you're expecting a huge output you'll probably want a higher value.<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="string">"17em"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Happy var_dumping.</span></code></div>
  </div>
 </div>
  <div class="note" id="123887">  <div class="votes">
    <div id="Vu123887">
    <a href="/manual/vote-note.php?id=123887&amp;page=function.var-dump&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123887">
    <a href="/manual/vote-note.php?id=123887&amp;page=function.var-dump&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123887" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#123887" class="name">
  <strong class="user"><em>fabien dot villepinte at gmail dot com</em></strong></a><a class="genanchor" href="#123887"> &para;</a><div class="date" title="2019-05-27 02:59"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123887">
<div class="phpcode"><code><span class="html">It's important to note that the output depends on the precision directive.<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">10000000000000.5</span><span class="keyword">); </span><span class="comment">// float(10000000000000)<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'precision'</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">10000000000000.5</span><span class="keyword">); </span><span class="comment">// float(10000000000000.5)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.var-dump&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.var-dump.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.boolval.php" title="boolval">boolval</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-zval-dump.php" title="debug_&#8203;zval_&#8203;dump">debug_&#8203;zval_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.doubleval.php" title="doubleval">doubleval</a>
                        </li>
                                                <li class="">
                            <a href="function.empty.php" title="empty">empty</a>
                        </li>
                                                <li class="">
                            <a href="function.floatval.php" title="floatval">floatval</a>
                        </li>
                                                <li class="">
                            <a href="function.get-debug-type.php" title="get_&#8203;debug_&#8203;type">get_&#8203;debug_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-vars.php" title="get_&#8203;defined_&#8203;vars">get_&#8203;defined_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-id.php" title="get_&#8203;resource_&#8203;id">get_&#8203;resource_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-type.php" title="get_&#8203;resource_&#8203;type">get_&#8203;resource_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.gettype.php" title="gettype">gettype</a>
                        </li>
                                                <li class="">
                            <a href="function.intval.php" title="intval">intval</a>
                        </li>
                                                <li class="">
                            <a href="function.is-array.php" title="is_&#8203;array">is_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.is-bool.php" title="is_&#8203;bool">is_&#8203;bool</a>
                        </li>
                                                <li class="">
                            <a href="function.is-callable.php" title="is_&#8203;callable">is_&#8203;callable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-countable.php" title="is_&#8203;countable">is_&#8203;countable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-double.php" title="is_&#8203;double">is_&#8203;double</a>
                        </li>
                                                <li class="">
                            <a href="function.is-float.php" title="is_&#8203;float">is_&#8203;float</a>
                        </li>
                                                <li class="">
                            <a href="function.is-int.php" title="is_&#8203;int">is_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.is-integer.php" title="is_&#8203;integer">is_&#8203;integer</a>
                        </li>
                                                <li class="">
                            <a href="function.is-iterable.php" title="is_&#8203;iterable">is_&#8203;iterable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-long.php" title="is_&#8203;long">is_&#8203;long</a>
                        </li>
                                                <li class="">
                            <a href="function.is-null.php" title="is_&#8203;null">is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.is-numeric.php" title="is_&#8203;numeric">is_&#8203;numeric</a>
                        </li>
                                                <li class="">
                            <a href="function.is-object.php" title="is_&#8203;object">is_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.is-real.php" title="is_&#8203;real">is_&#8203;real</a>
                        </li>
                                                <li class="">
                            <a href="function.is-resource.php" title="is_&#8203;resource">is_&#8203;resource</a>
                        </li>
                                                <li class="">
                            <a href="function.is-scalar.php" title="is_&#8203;scalar">is_&#8203;scalar</a>
                        </li>
                                                <li class="">
                            <a href="function.is-string.php" title="is_&#8203;string">is_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.isset.php" title="isset">isset</a>
                        </li>
                                                <li class="">
                            <a href="function.print-r.php" title="print_&#8203;r">print_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="">
                            <a href="function.unserialize.php" title="unserialize">unserialize</a>
                        </li>
                                                <li class="">
                            <a href="function.unset.php" title="unset">unset</a>
                        </li>
                                                <li class="current">
                            <a href="function.var-dump.php" title="var_&#8203;dump">var_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.var-export.php" title="var_&#8203;export">var_&#8203;export</a>
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
