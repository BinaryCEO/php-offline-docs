<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ctype_space - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ctype-space.php">
 <link rel="shorturl" href="https://www.php.net/ctype-space">
 <link rel="alternate" href="https://www.php.net/ctype-space" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ctype.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ctype-punct.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ctype-upper.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ctype-space.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ctype-space.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ctype-space.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ctype-space.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ctype-space.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ctype-space.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ctype-space.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ctype-space.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ctype-space.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ctype-space.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ctype-space.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Check for whitespace character(s)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ctype_space - Manual" />
<meta name="twitter:description" content="Check for whitespace character(s)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ctype_space - Manual" />
<meta itemprop="description" content="Check for whitespace character(s)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Check for whitespace character(s)" />

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
        <a href="function.ctype-upper.php">
          ctype_upper &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ctype-punct.php">
          &laquo; ctype_punct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.ctype.php'>Ctype</a></li>      <li><a href='ref.ctype.php'>Ctype Functions</a></li>      </ul>
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
            <option value='en/function.ctype-space.php' selected="selected">English</option>
            <option value='de/function.ctype-space.php'>German</option>
            <option value='es/function.ctype-space.php'>Spanish</option>
            <option value='fr/function.ctype-space.php'>French</option>
            <option value='it/function.ctype-space.php'>Italian</option>
            <option value='ja/function.ctype-space.php'>Japanese</option>
            <option value='pt_BR/function.ctype-space.php'>Brazilian Portuguese</option>
            <option value='ru/function.ctype-space.php'>Russian</option>
            <option value='tr/function.ctype-space.php'>Turkish</option>
            <option value='uk/function.ctype-space.php'>Ukrainian</option>
            <option value='zh/function.ctype-space.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ctype-space" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ctype_space</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ctype_space</span> &mdash; <span class="dc-title">Check for whitespace character(s)</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ctype-space-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ctype_space</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$text</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Checks if all of the characters in the provided <span class="type"><a href="language.types.string.php" class="type string">string</a></span>,
   <code class="parameter">text</code>, creates whitespace.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ctype-space-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">text</code></dt>
     <dd>
      <p class="para">
       The tested string.
       <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">
If an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> between -128 and 255 inclusive is provided, it is interpreted as
the ASCII value of a single character (negative values have 256 added in order to allow
characters in the Extended ASCII range). Any other integer is interpreted as a string
containing the decimal digits of the integer.</p></p></blockquote>
       <div class="warning"><strong class="warning">Warning</strong><p class="para">
As of PHP 8.1.0, passing a non-string argument is deprecated.
In the future, the argument will be interpreted as a string instead of an ASCII codepoint.
Depending on the intended behavior, the argument should either be cast to <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
or an explicit call to <span class="function"><a href="function.chr.php" class="function">chr()</a></span> should be made.</p></div>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ctype-space-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if every character in <code class="parameter">text</code> 
   creates some sort of white space, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise. Besides the 
   blank character this also includes tab, vertical tab, line feed,
   carriage return and form feed characters.
   When called with an empty string the result will always be <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ctype-space-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5371">
    <p><strong>Example #1 A <span class="function"><strong>ctype_space()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$strings </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'string1' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"\n\r\t"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'string2' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"\narf12"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'string3' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'\n\r\t' </span><span style="color: #FF8000">// note the single quotes<br /></span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$strings </span><span style="color: #007700">as </span><span style="color: #0000BB">$name </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$testcase</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">ctype_space</span><span style="color: #007700">(</span><span style="color: #0000BB">$testcase</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #DD0000">"The string '</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">' consists of whitespace characters only.\n"</span><span style="color: #007700">;<br />    } else {<br />        echo </span><span style="color: #DD0000">"The string '</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">' contains non-whitespace characters.\n"</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">The string &#039;string1&#039; consists of whitespace characters only.
The string &#039;string2&#039; contains non-whitespace characters.
The string &#039;string3&#039; contains non-whitespace characters.</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ctype-space-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ctype-cntrl.php" class="function" rel="rdfs-seeAlso">ctype_cntrl()</a> - Check for control character(s)</span></li>
    <li><span class="function"><a href="function.ctype-graph.php" class="function" rel="rdfs-seeAlso">ctype_graph()</a> - Check for any printable character(s) except space</span></li>
    <li><span class="function"><a href="function.ctype-punct.php" class="function" rel="rdfs-seeAlso">ctype_punct()</a> - Check for any printable character which is not whitespace or an
   alphanumeric character</span></li>
    <li><span class="function"><a href="intlchar.isspace.php" class="function" rel="rdfs-seeAlso">IntlChar::isspace()</a> - Check if code point is a space character</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ctype/functions/ctype-space.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ctype-space%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ctype-space&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ctype-space.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93533">  <div class="votes">
    <div id="Vu93533">
    <a href="/manual/vote-note.php?id=93533&amp;page=function.ctype-space&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93533">
    <a href="/manual/vote-note.php?id=93533&amp;page=function.ctype-space&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93533" title="66% like this...">
    5
    </div>
  </div>
  <a href="#93533" class="name">
  <strong class="user"><em>gardnerjohng at hotmail dot com</em></strong></a><a class="genanchor" href="#93533"> &para;</a><div class="date" title="2009-09-14 09:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93533">
<div class="phpcode"><code><span class="html">A function I wrote last night was fairly flexible in terms of detecting whitespace, and even took into account the pesky non-breaking spaces / zero-width spaces further up the Unicode alphabet.
<br />
<br />The benefit here was being able to isolate and identify specific Unicode indices based on their subrange.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="comment">//    Returns TRUE if the ASCII value of $string matches a registered whitespace character.
<br />    //    *    This includes non-breaking spaces, zero-width spaces, and any unicode values below 32.
<br />    //    *    $string: Character to identify. If string extends past one character, the value
<br />    //        is truncated and only the initial character is examined.
<br />    </span><span class="keyword">function </span><span class="default">is_whitespace</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">){
<br />        </span><span class="comment">//    Return FALSE if passed an empty string.
<br />        </span><span class="keyword">if(</span><span class="default">$string </span><span class="keyword">== </span><span class="string">""</span><span class="keyword">) return </span><span class="default">FALSE</span><span class="keyword">;
<br />        
<br />        </span><span class="default">$char    </span><span class="keyword">=    </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />        
<br />        </span><span class="comment">//    Control Characters
<br />        </span><span class="keyword">if(</span><span class="default">$char </span><span class="keyword">&lt; </span><span class="default">33</span><span class="keyword">)                        return </span><span class="default">TRUE</span><span class="keyword">;
<br />        if(</span><span class="default">$char </span><span class="keyword">&gt; </span><span class="default">8191 </span><span class="keyword">&amp;&amp; </span><span class="default">$char </span><span class="keyword">&lt; </span><span class="default">8208</span><span class="keyword">)    return </span><span class="default">TRUE</span><span class="keyword">;
<br />        if(</span><span class="default">$char </span><span class="keyword">&gt; </span><span class="default">8231 </span><span class="keyword">&amp;&amp; </span><span class="default">$char </span><span class="keyword">&lt; </span><span class="default">8240</span><span class="keyword">)    return </span><span class="default">TRUE</span><span class="keyword">;
<br />        
<br />        </span><span class="comment">//    Additional Characters
<br />        </span><span class="keyword">switch(</span><span class="default">$char</span><span class="keyword">){
<br />            case </span><span class="default">160</span><span class="keyword">:    </span><span class="comment">// Non-Breaking Space
<br />            </span><span class="keyword">case </span><span class="default">8287</span><span class="keyword">:    </span><span class="comment">// Medium Mathematical Space
<br />                </span><span class="keyword">return </span><span class="default">TRUE</span><span class="keyword">;
<br />                break;
<br />        }
<br />        return </span><span class="default">FALSE</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115237">  <div class="votes">
    <div id="Vu115237">
    <a href="/manual/vote-note.php?id=115237&amp;page=function.ctype-space&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115237">
    <a href="/manual/vote-note.php?id=115237&amp;page=function.ctype-space&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115237" title="54% like this...">
    2
    </div>
  </div>
  <a href="#115237" class="name">
  <strong class="user"><em>vlabots at gmail dot com</em></strong></a><a class="genanchor" href="#115237"> &para;</a><div class="date" title="2014-06-18 07:03"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115237">
<div class="phpcode"><code><span class="html">thanks to gardnerjohng, but a had some problems with non-breaking spaces in this function.<br /><br />I added 2 more cases for this: <br />case 0xC2<br />case 0xA0<br /><br />After this modification non-breaking spaces in my test code were successfully detected.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ctype-space&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ctype-space.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ctype.php">Ctype Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ctype-alnum.php" title="ctype_&#8203;alnum">ctype_&#8203;alnum</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-alpha.php" title="ctype_&#8203;alpha">ctype_&#8203;alpha</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-cntrl.php" title="ctype_&#8203;cntrl">ctype_&#8203;cntrl</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-digit.php" title="ctype_&#8203;digit">ctype_&#8203;digit</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-graph.php" title="ctype_&#8203;graph">ctype_&#8203;graph</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-lower.php" title="ctype_&#8203;lower">ctype_&#8203;lower</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-print.php" title="ctype_&#8203;print">ctype_&#8203;print</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-punct.php" title="ctype_&#8203;punct">ctype_&#8203;punct</a>
                        </li>
                                                <li class="current">
                            <a href="function.ctype-space.php" title="ctype_&#8203;space">ctype_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-upper.php" title="ctype_&#8203;upper">ctype_&#8203;upper</a>
                        </li>
                                                <li class="">
                            <a href="function.ctype-xdigit.php" title="ctype_&#8203;xdigit">ctype_&#8203;xdigit</a>
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
