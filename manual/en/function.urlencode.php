<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: urlencode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.urlencode.php">
 <link rel="shorturl" href="https://www.php.net/urlencode">
 <link rel="alternate" href="https://www.php.net/urlencode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.url.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.urldecode.php">
 <link rel="next" href="https://www.php.net/manual/en/book.v8js.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.urlencode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.urlencode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.urlencode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.urlencode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.urlencode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.urlencode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.urlencode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.urlencode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.urlencode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.urlencode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.urlencode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="URL-encodes string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: urlencode - Manual" />
<meta name="twitter:description" content="URL-encodes string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: urlencode - Manual" />
<meta itemprop="description" content="URL-encodes string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="URL-encodes string" />

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
        <a href="book.v8js.php">
          V8js &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.urldecode.php">
          &laquo; urldecode        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.url.php'>URLs</a></li>      <li><a href='ref.url.php'>URL Functions</a></li>      </ul>
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
            <option value='en/function.urlencode.php' selected="selected">English</option>
            <option value='de/function.urlencode.php'>German</option>
            <option value='es/function.urlencode.php'>Spanish</option>
            <option value='fr/function.urlencode.php'>French</option>
            <option value='it/function.urlencode.php'>Italian</option>
            <option value='ja/function.urlencode.php'>Japanese</option>
            <option value='pt_BR/function.urlencode.php'>Brazilian Portuguese</option>
            <option value='ru/function.urlencode.php'>Russian</option>
            <option value='tr/function.urlencode.php'>Turkish</option>
            <option value='uk/function.urlencode.php'>Ukrainian</option>
            <option value='zh/function.urlencode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.urlencode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">urlencode</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">urlencode</span> &mdash; <span class="dc-title">URL-encodes string</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.urlencode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>urlencode</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   This function is convenient when encoding a string to be used in a query
   part of a URL, as a convenient way to pass variables to the next page.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.urlencode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string to be encoded.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.urlencode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string in which all non-alphanumeric characters except
   <code class="literal">-_.</code> have been replaced with a percent
   (<code class="literal">%</code>) sign followed by two hex digits and spaces encoded
   as plus (<code class="literal">+</code>) signs.  It is encoded the same way that the
   posted data from a WWW form is encoded, that is the same way as in
   <code class="literal">application/x-www-form-urlencoded</code> media type. This
   differs from the <a href="https://datatracker.ietf.org/doc/html/rfc3986" class="link external">&raquo;&nbsp;RFC 3986</a> encoding (see
   <span class="function"><a href="function.rawurlencode.php" class="function">rawurlencode()</a></span>) in that for historical reasons, spaces
   are encoded as plus (+) signs.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.urlencode-examples">
  <h3 class="title">Examples</h3> 
  <p class="para">  
   <div class="example" id="example-4143">
    <p><strong>Example #1 <span class="function"><strong>urlencode()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$userinput </span><span style="color: #007700">= </span><span style="color: #DD0000">'Data123!@-_ +'</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"UserInput: </span><span style="color: #0000BB">$userinput</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'&lt;a href="mycgi?foo='</span><span style="color: #007700">, </span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$userinput</span><span style="color: #007700">), </span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">UserInput: Data123!@-_ +
&lt;a href=&quot;mycgi?foo=Data123%21%40-_+%2B&quot;&gt;</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-4144">
    <p><strong>Example #2 <span class="function"><strong>urlencode()</strong></span> and <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'Data123!@-_ +'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">"Not the same content as </span><span style="color: #0000BB">$foo</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"foo: </span><span style="color: #0000BB">$foo</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"bar: </span><span style="color: #0000BB">$bar</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$query_string </span><span style="color: #007700">= </span><span style="color: #DD0000">'foo=' </span><span style="color: #007700">. </span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">) . </span><span style="color: #DD0000">'&amp;bar=' </span><span style="color: #007700">. </span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">'&lt;a href="mycgi?' </span><span style="color: #007700">. </span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$query_string</span><span style="color: #007700">) . </span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">foo: Data123!@-_ +
bar: Not the same content as Data123!@-_ +
&lt;a href=&quot;mycgi?foo=Data123%21%40-_+%2B&amp;amp;bar=Not+the+same+content+as+Data123%21%40-_+%2B&quot;&gt;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.urlencode-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Be careful about variables that may match HTML entities. Things like
    &amp;amp, &amp;copy and &amp;pound are parsed by the browser and the
    actual entity is used instead of the desired variable name.  This is an
    obvious hassle that the W3C has been telling people about for years.
    The reference is here: <a href="http://www.w3.org/TR/html4/appendix/notes.html#h-B.2.2" class="link external">&raquo;&nbsp;http://www.w3.org/TR/html4/appendix/notes.html#h-B.2.2</a>.
   </p>
   <p class="para">
    PHP supports changing the argument separator to the W3C-suggested
    semi-colon through the arg_separator .ini directive.  Unfortunately most
    user agents do not send form data in this semi-colon separated format.
    A more portable way around this is to use &amp;amp; instead of &amp; as
    the separator.  You don&#039;t need to change PHP&#039;s arg_separator for this.
    Leave it as &amp;, but simply encode your URLs using
    <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span> or 
    <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.urlencode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.urldecode.php" class="function" rel="rdfs-seeAlso">urldecode()</a> - Decodes URL-encoded string</span></li>
    <li><span class="function"><a href="function.htmlentities.php" class="function" rel="rdfs-seeAlso">htmlentities()</a> - Convert all applicable characters to HTML entities</span></li>
    <li><span class="function"><a href="function.rawurlencode.php" class="function" rel="rdfs-seeAlso">rawurlencode()</a> - URL-encode according to RFC 3986</span></li>
    <li><span class="function"><a href="function.rawurldecode.php" class="function" rel="rdfs-seeAlso">rawurldecode()</a> - Decode URL-encoded strings</span></li>
    <li><a href="https://datatracker.ietf.org/doc/html/rfc3986" class="link external">&raquo;&nbsp;RFC 3986</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/url/functions/urlencode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.urlencode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.urlencode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.urlencode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97969">  <div class="votes">
    <div id="Vu97969">
    <a href="/manual/vote-note.php?id=97969&amp;page=function.urlencode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97969">
    <a href="/manual/vote-note.php?id=97969&amp;page=function.urlencode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97969" title="59% like this...">
    66
    </div>
  </div>
  <a href="#97969" class="name">
  <strong class="user"><em>davis dot peixoto at gmail dot com</em></strong></a><a class="genanchor" href="#97969"> &para;</a><div class="date" title="2010-05-18 06:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97969">
<div class="phpcode"><code><span class="html">urlencode function and rawurlencode are mostly based on RFC 1738.<br /><br />However, since 2005 the current RFC in use for URIs standard is RFC 3986.<br /><br />Here is a function to encode URLs according to RFC 3986.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">myUrlEncode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    </span><span class="default">$entities </span><span class="keyword">= array(</span><span class="string">'%21'</span><span class="keyword">, </span><span class="string">'%2A'</span><span class="keyword">, </span><span class="string">'%27'</span><span class="keyword">, </span><span class="string">'%28'</span><span class="keyword">, </span><span class="string">'%29'</span><span class="keyword">, </span><span class="string">'%3B'</span><span class="keyword">, </span><span class="string">'%3A'</span><span class="keyword">, </span><span class="string">'%40'</span><span class="keyword">, </span><span class="string">'%26'</span><span class="keyword">, </span><span class="string">'%3D'</span><span class="keyword">, </span><span class="string">'%2B'</span><span class="keyword">, </span><span class="string">'%24'</span><span class="keyword">, </span><span class="string">'%2C'</span><span class="keyword">, </span><span class="string">'%2F'</span><span class="keyword">, </span><span class="string">'%3F'</span><span class="keyword">, </span><span class="string">'%25'</span><span class="keyword">, </span><span class="string">'%23'</span><span class="keyword">, </span><span class="string">'%5B'</span><span class="keyword">, </span><span class="string">'%5D'</span><span class="keyword">);<br />    </span><span class="default">$replacements </span><span class="keyword">= array(</span><span class="string">'!'</span><span class="keyword">, </span><span class="string">'*'</span><span class="keyword">, </span><span class="string">"'"</span><span class="keyword">, </span><span class="string">"("</span><span class="keyword">, </span><span class="string">")"</span><span class="keyword">, </span><span class="string">";"</span><span class="keyword">, </span><span class="string">":"</span><span class="keyword">, </span><span class="string">"@"</span><span class="keyword">, </span><span class="string">"&amp;"</span><span class="keyword">, </span><span class="string">"="</span><span class="keyword">, </span><span class="string">"+"</span><span class="keyword">, </span><span class="string">"$"</span><span class="keyword">, </span><span class="string">","</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">, </span><span class="string">"?"</span><span class="keyword">, </span><span class="string">"%"</span><span class="keyword">, </span><span class="string">"#"</span><span class="keyword">, </span><span class="string">"["</span><span class="keyword">, </span><span class="string">"]"</span><span class="keyword">);<br />    return </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$entities</span><span class="keyword">, </span><span class="default">$replacements</span><span class="keyword">, </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92424">  <div class="votes">
    <div id="Vu92424">
    <a href="/manual/vote-note.php?id=92424&amp;page=function.urlencode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92424">
    <a href="/manual/vote-note.php?id=92424&amp;page=function.urlencode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92424" title="55% like this...">
    11
    </div>
  </div>
  <a href="#92424" class="name">
  <strong class="user"><em>temu92 at gmail dot com</em></strong></a><a class="genanchor" href="#92424"> &para;</a><div class="date" title="2009-07-23 10:44"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92424">
<div class="phpcode"><code><span class="html">I needed encoding and decoding for UTF8 urls, I came up with these very simple fuctions. Hope this helps!<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">url_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">){<br />        return </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">));<br />    }<br />    <br />    function </span><span class="default">url_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">){<br />        return </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">urldecode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">));<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91855">  <div class="votes">
    <div id="Vu91855">
    <a href="/manual/vote-note.php?id=91855&amp;page=function.urlencode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91855">
    <a href="/manual/vote-note.php?id=91855&amp;page=function.urlencode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91855" title="54% like this...">
    8
    </div>
  </div>
  <a href="#91855" class="name">
  <strong class="user"><em>daniel+php at danielnorton dot com</em></strong></a><a class="genanchor" href="#91855"> &para;</a><div class="date" title="2009-06-29 07:24"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91855">
<div class="phpcode"><code><span class="html">Don't use urlencode() or urldecode() if the text includes an email address, as it destroys the "+" character, a perfectly valid email address character.<br /><br />Unless you're certain that you won't be encoding email addresses AND you need the readability provided by the non-standard "+" usage, instead always use use rawurlencode() or rawurldecode().</span></code></div>
  </div>
 </div>
  <div class="note" id="128838">  <div class="votes">
    <div id="Vu128838">
    <a href="/manual/vote-note.php?id=128838&amp;page=function.urlencode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128838">
    <a href="/manual/vote-note.php?id=128838&amp;page=function.urlencode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128838" title="55% like this...">
    1
    </div>
  </div>
  <a href="#128838" class="name">
  <strong class="user"><em>materialsmoke at gmail dot com</em></strong></a><a class="genanchor" href="#128838"> &para;</a><div class="date" title="2023-08-29 12:31"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128838">
<div class="phpcode"><code><span class="html">this function will encode the URL while preserving the functionality of URL so you can copy and paste it in the browser<br />```<br />function urlEncode($url) {<br />    $parsedUrl = parse_url($url);<br />    <br />    $encodedScheme = urlencode($parsedUrl['scheme']);<br />    $encodedHost = urlencode($parsedUrl['host']);<br />    <br />    $encodedPath = implode('/', array_map('urlencode', explode('/', $parsedUrl['path'])));<br />    if (isset($parsedUrl['query'])) {<br />        $encodedQuery = '?' . urlencode($parsedUrl['query']);<br />    } else {<br />        $encodedQuery = '';<br />    }<br />    <br />    return "{$encodedScheme}://{$encodedHost}{$encodedPath}{$encodedQuery}";<br />}<br />```</span></code></div>
  </div>
 </div>
  <div class="note" id="96394">  <div class="votes">
    <div id="Vu96394">
    <a href="/manual/vote-note.php?id=96394&amp;page=function.urlencode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96394">
    <a href="/manual/vote-note.php?id=96394&amp;page=function.urlencode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96394" title="53% like this...">
    8
    </div>
  </div>
  <a href="#96394" class="name">
  <strong class="user"><em>omid at omidsakhi dot com</em></strong></a><a class="genanchor" href="#96394"> &para;</a><div class="date" title="2010-02-24 11:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96394">
<div class="phpcode"><code><span class="html">I needed a function in PHP to do the same job as the complete escape function in Javascript. It took me some time not to find it. But findaly I decided to write my own code. So just to save time:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">fullescape</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$out </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />  for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)
<br />  {
<br />    </span><span class="default">$hex </span><span class="keyword">= </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]));
<br />    if (</span><span class="default">$hex</span><span class="keyword">==</span><span class="string">''</span><span class="keyword">) 
<br />       </span><span class="default">$out </span><span class="keyword">= </span><span class="default">$out</span><span class="keyword">.</span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />    else 
<br />       </span><span class="default">$out </span><span class="keyword">= </span><span class="default">$out </span><span class="keyword">.</span><span class="string">'%'</span><span class="keyword">.((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">)==</span><span class="default">1</span><span class="keyword">) ? (</span><span class="string">'0'</span><span class="keyword">.</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">)):(</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$hex</span><span class="keyword">)));
<br />  }
<br />  </span><span class="default">$out </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'+'</span><span class="keyword">,</span><span class="string">'%20'</span><span class="keyword">,</span><span class="default">$out</span><span class="keyword">);
<br />  </span><span class="default">$out </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'_'</span><span class="keyword">,</span><span class="string">'%5F'</span><span class="keyword">,</span><span class="default">$out</span><span class="keyword">);
<br />  </span><span class="default">$out </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">,</span><span class="string">'%2E'</span><span class="keyword">,</span><span class="default">$out</span><span class="keyword">);
<br />  </span><span class="default">$out </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">,</span><span class="string">'%2D'</span><span class="keyword">,</span><span class="default">$out</span><span class="keyword">);
<br />  return </span><span class="default">$out</span><span class="keyword">;
<br /> }
<br /></span><span class="default">?&gt;
<br /></span>
<br />It can be fully decoded using the unscape function in Javascript.</span></code></div>
  </div>
 </div>
  <div class="note" id="76907">  <div class="votes">
    <div id="Vu76907">
    <a href="/manual/vote-note.php?id=76907&amp;page=function.urlencode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76907">
    <a href="/manual/vote-note.php?id=76907&amp;page=function.urlencode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76907" title="50% like this...">
    1
    </div>
  </div>
  <a href="#76907" class="name">
  <strong class="user"><em>ahrensberg at gmail dot com</em></strong></a><a class="genanchor" href="#76907"> &para;</a><div class="date" title="2007-08-04 05:04"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76907">
<div class="phpcode"><code><span class="html">Like "Benjamin dot Bruno at web dot de" earlier has writen, you can have problems with encode strings with special characters to flash. Benjamin write that:<br /><br /><span class="default">&lt;?php<br />   </span><span class="keyword">function </span><span class="default">flash_encode </span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)<br />   {<br />      return </span><span class="default">rawurlencode</span><span class="keyword">(</span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">));<br />   }<br /></span><span class="default">?&gt;<br /></span><br />... could do the problem. Unfortunately flash still have problems with read some quotations, but with this one:<br /><br /><span class="default">&lt;?php<br />   </span><span class="keyword">function </span><span class="default">flash_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)<br />   {<br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">rawurlencode</span><span class="keyword">(</span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">));<br /><br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%C2%96"</span><span class="keyword">, </span><span class="string">"-"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%C2%91"</span><span class="keyword">, </span><span class="string">"%27"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%C2%92"</span><span class="keyword">, </span><span class="string">"%27"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%C2%82"</span><span class="keyword">, </span><span class="string">"%27"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%C2%93"</span><span class="keyword">, </span><span class="string">"%22"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%C2%94"</span><span class="keyword">, </span><span class="string">"%22"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%C2%84"</span><span class="keyword">, </span><span class="string">"%22"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%C2%8B"</span><span class="keyword">, </span><span class="string">"%C2%AB"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />      </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%C2%9B"</span><span class="keyword">, </span><span class="string">"%C2%BB"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br /><br />      return </span><span class="default">$string</span><span class="keyword">;<br />   }<br /></span><span class="default">?&gt;<br /></span><br />... should solve this problem.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.urlencode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.urlencode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.url.php">URL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.base64-decode.php" title="base64_&#8203;decode">base64_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.base64-encode.php" title="base64_&#8203;encode">base64_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.get-headers.php" title="get_&#8203;headers">get_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.get-meta-tags.php" title="get_&#8203;meta_&#8203;tags">get_&#8203;meta_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.http-build-query.php" title="http_&#8203;build_&#8203;query">http_&#8203;build_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-url.php" title="parse_&#8203;url">parse_&#8203;url</a>
                        </li>
                                                <li class="">
                            <a href="function.rawurldecode.php" title="rawurldecode">rawurldecode</a>
                        </li>
                                                <li class="">
                            <a href="function.rawurlencode.php" title="rawurlencode">rawurlencode</a>
                        </li>
                                                <li class="">
                            <a href="function.urldecode.php" title="urldecode">urldecode</a>
                        </li>
                                                <li class="current">
                            <a href="function.urlencode.php" title="urlencode">urlencode</a>
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
