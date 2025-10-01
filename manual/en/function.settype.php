<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: settype - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.settype.php">
 <link rel="shorturl" href="https://www.php.net/settype">
 <link rel="alternate" href="https://www.php.net/settype" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.serialize.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strval.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.settype.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.settype.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.settype.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.settype.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.settype.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.settype.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.settype.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.settype.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.settype.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.settype.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.settype.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set the type of a variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: settype - Manual" />
<meta name="twitter:description" content="Set the type of a variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: settype - Manual" />
<meta itemprop="description" content="Set the type of a variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set the type of a variable" />

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
        <a href="function.strval.php">
          strval &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.serialize.php">
          &laquo; serialize        </a>
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
            <option value='en/function.settype.php' selected="selected">English</option>
            <option value='de/function.settype.php'>German</option>
            <option value='es/function.settype.php'>Spanish</option>
            <option value='fr/function.settype.php'>French</option>
            <option value='it/function.settype.php'>Italian</option>
            <option value='ja/function.settype.php'>Japanese</option>
            <option value='pt_BR/function.settype.php'>Brazilian Portuguese</option>
            <option value='ru/function.settype.php'>Russian</option>
            <option value='tr/function.settype.php'>Turkish</option>
            <option value='uk/function.settype.php'>Ukrainian</option>
            <option value='zh/function.settype.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.settype" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">settype</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">settype</span> &mdash; <span class="dc-title">Set the type of a variable</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.settype-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>settype</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$var</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$type</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Set the type of variable <code class="parameter">var</code> to
   <code class="parameter">type</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.settype-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">var</code></dt>
     <dd>
      <p class="para">
       The variable being converted.
      </p>
     </dd>
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       Possibles values of <code class="parameter">type</code> are:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          &quot;boolean&quot; or &quot;bool&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          &quot;integer&quot; or &quot;int&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          &quot;float&quot; or &quot;double&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          &quot;string&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          &quot;array&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          &quot;object&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          &quot;null&quot;
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.settype-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.settype-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5668">
    <p><strong>Example #1 <span class="function"><strong>settype()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$foo </span><span style="color: #007700">= </span><span style="color: #DD0000">"5bar"</span><span style="color: #007700">; </span><span style="color: #FF8000">// string<br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;   </span><span style="color: #FF8000">// boolean<br /><br /></span><span style="color: #0000BB">settype</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">, </span><span style="color: #DD0000">"integer"</span><span style="color: #007700">); </span><span style="color: #FF8000">// $foo is now 5   (integer)<br /></span><span style="color: #0000BB">settype</span><span style="color: #007700">(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">, </span><span style="color: #DD0000">"string"</span><span style="color: #007700">);  </span><span style="color: #FF8000">// $bar is now "1" (string)<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">, </span><span style="color: #0000BB">$bar</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.settype-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Maximum value for &quot;int&quot; is <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.settype-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.gettype.php" class="function" rel="rdfs-seeAlso">gettype()</a> - Get the type of a variable</span></li>
    <li><a href="language.types.type-juggling.php#language.types.typecasting" class="link">type-casting</a></li>
    <li><a href="language.types.type-juggling.php" class="link">type-juggling</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/settype.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.settype%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.settype&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.settype.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107683">  <div class="votes">
    <div id="Vu107683">
    <a href="/manual/vote-note.php?id=107683&amp;page=function.settype&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107683">
    <a href="/manual/vote-note.php?id=107683&amp;page=function.settype&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107683" title="66% like this...">
    68
    </div>
  </div>
  <a href="#107683" class="name">
  <strong class="user"><em>Special Notes</em></strong></a><a class="genanchor" href="#107683"> &para;</a><div class="date" title="2012-02-26 12:00"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107683">
<div class="phpcode"><code><span class="html">Note that you can't use this to convert a string 'true' or 'false' to a boolean variable true or false as a string 'false' is a boolean true. The empty string would be false instead...<br /><br /><span class="default">&lt;?php<br />$var </span><span class="keyword">= </span><span class="string">"true"</span><span class="keyword">;<br /></span><span class="default">settype</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="string">'bool'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">); </span><span class="comment">// true<br /><br /></span><span class="default">$var </span><span class="keyword">= </span><span class="string">"false"</span><span class="keyword">;<br /></span><span class="default">settype</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="string">'bool'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">); </span><span class="comment">// true as well!<br /><br /></span><span class="default">$var </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">settype</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="string">'bool'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81595">  <div class="votes">
    <div id="Vu81595">
    <a href="/manual/vote-note.php?id=81595&amp;page=function.settype&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81595">
    <a href="/manual/vote-note.php?id=81595&amp;page=function.settype&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81595" title="70% like this...">
    50
    </div>
  </div>
  <a href="#81595" class="name">
  <strong class="user"><em>robin at barafranca dot com</em></strong></a><a class="genanchor" href="#81595"> &para;</a><div class="date" title="2008-03-05 04:20"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81595">
<div class="phpcode"><code><span class="html">Just a quick note, as this caught me out very briefly:<br /><br />settype() returns bool, not the typecasted variable - so:<br /><br />$blah = settype($blah, "int"); // is wrong, changes $blah to 0 or 1<br />settype($blah, "int"); // is correct<br /><br />Hope this helps someone else who makes a mistake.. ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="35587">  <div class="votes">
    <div id="Vu35587">
    <a href="/manual/vote-note.php?id=35587&amp;page=function.settype&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35587">
    <a href="/manual/vote-note.php?id=35587&amp;page=function.settype&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35587" title="60% like this...">
    17
    </div>
  </div>
  <a href="#35587" class="name">
  <strong class="user"><em>sdibb at myway dot com</em></strong></a><a class="genanchor" href="#35587"> &para;</a><div class="date" title="2003-09-06 10:03"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35587">
<div class="phpcode"><code><span class="html">Using settype is not the best way to convert a string into an integer, since it will strip the string wherever the first non-numeric character begins.  The function intval($string) does the same thing.<br /><br />If you're looking for a security check, or to strip non-numeric characters (such as cleaning up phone numbers or ZIP codes),  try this instead:<br /><br />&lt;?<br />     $number=ereg_replace("[^0-9]","",$number);<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="55016">  <div class="votes">
    <div id="Vu55016">
    <a href="/manual/vote-note.php?id=55016&amp;page=function.settype&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55016">
    <a href="/manual/vote-note.php?id=55016&amp;page=function.settype&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55016" title="62% like this...">
    10
    </div>
  </div>
  <a href="#55016" class="name">
  <strong class="user"><em>nospamplease at veganismus dot ch</em></strong></a><a class="genanchor" href="#55016"> &para;</a><div class="date" title="2005-07-22 07:38"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55016">
<div class="phpcode"><code><span class="html">you must note that this function will not set the type permanently! the next time you set the value of that variable php will change its type as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="126018">  <div class="votes">
    <div id="Vu126018">
    <a href="/manual/vote-note.php?id=126018&amp;page=function.settype&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126018">
    <a href="/manual/vote-note.php?id=126018&amp;page=function.settype&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126018" title="63% like this...">
    5
    </div>
  </div>
  <a href="#126018" class="name">
  <strong class="user"><em>DarkMaster</em></strong></a><a class="genanchor" href="#126018"> &para;</a><div class="date" title="2021-04-17 07:08"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126018">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/*<br />This example works 4x faster than settype() function in PHP-CGI 5.4.13 and<br />8x faster in PHP-CGI 7.1.3(x64) for windows<br />*/<br /><br /></span><span class="default">$v </span><span class="keyword">= </span><span class="string">'12345'</span><span class="keyword">;<br /><br /></span><span class="default">$v </span><span class="keyword">= (int)</span><span class="default">$v</span><span class="keyword">;<br /></span><span class="default">$v </span><span class="keyword">= (string)</span><span class="default">$v</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124531">  <div class="votes">
    <div id="Vu124531">
    <a href="/manual/vote-note.php?id=124531&amp;page=function.settype&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124531">
    <a href="/manual/vote-note.php?id=124531&amp;page=function.settype&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124531" title="57% like this...">
    1
    </div>
  </div>
  <a href="#124531" class="name">
  <strong class="user"><em>geoffsmiths at hotmail dot com</em></strong></a><a class="genanchor" href="#124531"> &para;</a><div class="date" title="2019-12-24 10:23"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124531">
<div class="phpcode"><code><span class="html">Please note: <br /><br />When using settype to convert indexed arrays to objects, the properties of the typed object will be integers:<br /><br />A brief example:<br /><br />$a = ['1', '2'];<br /><br />settype($a, 'object');<br /><br />var_dump($a);<br /><br />// output<br />object(stdClass)#1 (2) {<br />  ["0"]=&gt;<br />  string(1) "1"<br />  ["1"]=&gt;<br />  string(1) "2"<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="123490">  <div class="votes">
    <div id="Vu123490">
    <a href="/manual/vote-note.php?id=123490&amp;page=function.settype&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123490">
    <a href="/manual/vote-note.php?id=123490&amp;page=function.settype&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123490" title="52% like this...">
    1
    </div>
  </div>
  <a href="#123490" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#123490"> &para;</a><div class="date" title="2019-01-04 01:41"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123490">
<div class="phpcode"><code><span class="html">If you attempt to convert the special $this variable from an instance method (only in classes) :<br />* PHP will silently return TRUE and leave $this unchanged if the type was 'bool', 'array', 'object' or 'NULL'<br />* PHP will generate an E_NOTICE if the type was 'int', 'float' or 'double', and $this will not be casted<br />* PHP will throw a catchable fatal error when the type is 'string' and the class does not define the __toString() method<br />Unless the new variable type passed as the second argument is invalid, settype() will return TRUE. In all cases the object will remain unchanged.<br /><span class="default">&lt;?php<br />    </span><span class="comment">// This was tested with PHP 7.2<br />    </span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />        function </span><span class="default">test</span><span class="keyword">() {<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%-20s %-20s %s\n"</span><span class="keyword">, </span><span class="string">'Type'</span><span class="keyword">, </span><span class="string">'Succeed?'</span><span class="keyword">, </span><span class="string">'Converted'</span><span class="keyword">);<br />            <br />            </span><span class="comment">// settype() should throw a fatal error, as $this cannot be re-assigned<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%-20s %-20s %s\n"</span><span class="keyword">, </span><span class="string">'bool'</span><span class="keyword">, </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'bool'</span><span class="keyword">), </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">));<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%-20s %-20s %s\n"</span><span class="keyword">, </span><span class="string">'int'</span><span class="keyword">, </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'int'</span><span class="keyword">), </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">));<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%-20s %-20s %s\n"</span><span class="keyword">, </span><span class="string">'float'</span><span class="keyword">, </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'float'</span><span class="keyword">), </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">));<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%-20s %-20s %s\n"</span><span class="keyword">, </span><span class="string">'array'</span><span class="keyword">, </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'array'</span><span class="keyword">), </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">));<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%-20s %-20s %s\n"</span><span class="keyword">, </span><span class="string">'object'</span><span class="keyword">, </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'object'</span><span class="keyword">), </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">));<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%-20s %-20s %s\n"</span><span class="keyword">, </span><span class="string">'unknowntype'</span><span class="keyword">, </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'unknowntype'</span><span class="keyword">), </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">));<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%-20s %-20s %s\n"</span><span class="keyword">, </span><span class="string">'NULL'</span><span class="keyword">, </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'NULL'</span><span class="keyword">), </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">));<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%-20s %-20s %s\n"</span><span class="keyword">, </span><span class="string">'string'</span><span class="keyword">, </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'string'</span><span class="keyword">), </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">));<br />        }<br />    }<br />    </span><span class="default">$a </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br />    </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>Here is the result :<br />Type                 Succeed?             Converted<br />bool                 1                    Foo Object<br />(<br />)<br /><br />Notice: Object of class Foo could not be converted to int in C:\php\examples\oop-settype-this.php on line 9<br /><br />int                  1                    Foo Object<br />(<br />)<br /><br />Notice: Object of class Foo could not be converted to float in C:\php\examples\oop-settype-this.php on line 10<br /><br />float                1                    Foo Object<br />(<br />)<br /><br />array                1                    Foo Object<br />(<br />)<br /><br />object               1                    Foo Object<br />(<br />)<br /><br />Warning: settype(): Invalid type in C:\php\examples\oop-settype-this.php on line 14<br /><br />unknowntype                               Foo Object<br />(<br />)<br /><br />NULL                 1                    Foo Object<br />(<br />)<br /><br />Catchable fatal error: Object of class Foo could not be converted to string in C:\php\examples\oop-settype-this.php on line 15<br /><br />If the class Foo implements __toString() :<br /><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />        </span><span class="comment">// ...<br />        </span><span class="keyword">function </span><span class="default">__toString</span><span class="keyword">() {<br />            return </span><span class="string">'Foo object is awesome!'</span><span class="keyword">;<br />        }<br />        </span><span class="comment">// ...<br />    </span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span>So the first code snippet will not generate an E_RECOVERABLE_ERROR, but instead print the same string as for the other types, and not look at the one returned by the __toString() method.<br /><br />Hope this helps !  :)</span></code></div>
  </div>
 </div>
  <div class="note" id="59444">  <div class="votes">
    <div id="Vu59444">
    <a href="/manual/vote-note.php?id=59444&amp;page=function.settype&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59444">
    <a href="/manual/vote-note.php?id=59444&amp;page=function.settype&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59444" title="50% like this...">
    0
    </div>
  </div>
  <a href="#59444" class="name">
  <strong class="user"><em>matt at mattsoft dot net</em></strong></a><a class="genanchor" href="#59444"> &para;</a><div class="date" title="2005-12-06 09:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59444">
<div class="phpcode"><code><span class="html">using (int) insted of the settype function works out much better for me. I have always used it. I personally don't see where settype would ever come in handy.</span></code></div>
  </div>
 </div>
  <div class="note" id="5593">  <div class="votes">
    <div id="Vu5593">
    <a href="/manual/vote-note.php?id=5593&amp;page=function.settype&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd5593">
    <a href="/manual/vote-note.php?id=5593&amp;page=function.settype&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V5593" title="50% like this...">
    0
    </div>
  </div>
  <a href="#5593" class="name">
  <strong class="user"><em>ns at canada dot com</em></strong></a><a class="genanchor" href="#5593"> &para;</a><div class="date" title="2000-05-05 04:38"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom5593">
<div class="phpcode"><code><span class="html">This settype() behaviour seems consistent to me. Quoting two sections from the manual:
<br />
<br />"When casting from a scalar or a string variable to an array, the variable will become the first element of the array: "
<br />&lt;pre&gt;
<br />2 $var = 'ciao';
<br />3 $arr = (array) $var;
<br />4 echo $arr[0];  // outputs 'ciao' 
<br />&lt;/pre&gt;
<br />
<br />And if (like your code above) you do a settype on an empty variable, you'll end up with a one element array with an empty (not unset!) first element. So appeanding to it will start appending at index 1. As for why reset() doesn't do anything:
<br />
<br />"When you assign a value to an array variable using empty brackets, the value will be added onto the end of the array."
<br />
<br />It doesn't matter where the array counter is; values are added at the end, not at the counter.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.settype&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.settype.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
