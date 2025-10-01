<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::save - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.save.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.save.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.save.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.replacechildren.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.savehtml.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.save.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.save.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.save.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.save.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.save.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.save.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.save.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.save.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.save.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.save.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.save.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Dumps the internal XML tree back into a file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::save - Manual" />
<meta name="twitter:description" content="Dumps the internal XML tree back into a file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::save - Manual" />
<meta itemprop="description" content="Dumps the internal XML tree back into a file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Dumps the internal XML tree back into a file" />

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
        <a href="domdocument.savehtml.php">
          DOMDocument::saveHTML &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.replacechildren.php">
          &laquo; DOMDocument::replaceChildren        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domdocument.php'>DOMDocument</a></li>      </ul>
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
            <option value='en/domdocument.save.php' selected="selected">English</option>
            <option value='de/domdocument.save.php'>German</option>
            <option value='es/domdocument.save.php'>Spanish</option>
            <option value='fr/domdocument.save.php'>French</option>
            <option value='it/domdocument.save.php'>Italian</option>
            <option value='ja/domdocument.save.php'>Japanese</option>
            <option value='pt_BR/domdocument.save.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.save.php'>Russian</option>
            <option value='tr/domdocument.save.php'>Turkish</option>
            <option value='uk/domdocument.save.php'>Ukrainian</option>
            <option value='zh/domdocument.save.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.save" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::save</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::save</span> &mdash; <span class="dc-title">
    Dumps the internal XML tree back into a file
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.save-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::save</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Creates an XML document from the DOM representation. This function is usually 
   called after building a new dom document from scratch as in the example below. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-domdocument.save-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The path to the saved XML document.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       Additional Options. Currently only <a href="libxml.constants.php" class="link">LIBXML_NOEMPTYTAG</a> is supported.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-domdocument.save-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the number of bytes written or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurred.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-domdocument.save-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5785">
    <p><strong>Example #1 Saving a DOM tree into a file</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// we want a nice output<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatOutput </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$root </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'book'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$root </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$root</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$title </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'title'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$title </span><span style="color: #007700">= </span><span style="color: #0000BB">$root</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$title</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$text </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createTextNode</span><span style="color: #007700">(</span><span style="color: #DD0000">'This is the title'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$text </span><span style="color: #007700">= </span><span style="color: #0000BB">$title</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">'Wrote: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #DD0000">"/tmp/test.xml"</span><span style="color: #007700">) . </span><span style="color: #DD0000">' bytes'</span><span style="color: #007700">; </span><span style="color: #FF8000">// Wrote: 72 bytes<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domdocument.save-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.savexml.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::saveXML()</a> - Dumps the internal XML tree back into a string</span></li>
    <li><span class="methodname"><a href="domdocument.load.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::load()</a> - Load XML from a file</span></li>
    <li><span class="methodname"><a href="domdocument.loadxml.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::loadXML()</a> - Load XML from a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/save.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.save%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.save&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.save.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86445">  <div class="votes">
    <div id="Vu86445">
    <a href="/manual/vote-note.php?id=86445&amp;page=domdocument.save&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86445">
    <a href="/manual/vote-note.php?id=86445&amp;page=domdocument.save&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86445" title="73% like this...">
    12
    </div>
  </div>
  <a href="#86445" class="name">
  <strong class="user"><em>chenel324 at gmail dot com</em></strong></a><a class="genanchor" href="#86445"> &para;</a><div class="date" title="2008-10-19 06:38"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86445">
<div class="phpcode"><code><span class="html">It took me forever to discover that <br />DOMDocument-&gt;formatOutput = true <br />will only have an effect on documents that are loaded from disk if one also sets<br />DOMDocument-&gt;preserveWhiteSpace = false ....<br /><br />Hope this saves somebody a headache.</span></code></div>
  </div>
 </div>
  <div class="note" id="67952">  <div class="votes">
    <div id="Vu67952">
    <a href="/manual/vote-note.php?id=67952&amp;page=domdocument.save&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67952">
    <a href="/manual/vote-note.php?id=67952&amp;page=domdocument.save&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67952" title="67% like this...">
    10
    </div>
  </div>
  <a href="#67952" class="name">
  <strong class="user"><em>siegparr at NOSPAM dot web dot de</em></strong></a><a class="genanchor" href="#67952"> &para;</a><div class="date" title="2006-07-07 08:00"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67952">
<div class="phpcode"><code><span class="html">The XML parser converts the text of an XML document into UTF-8, even if you have set the character encoding of the XML, for example as a second parameter of the DOMDocument constructor. After parsing the XML with the load() command all its texts have been converted to UTF-8.<br /><br />In case you append text nodes with special characters (e. g. Umlaut) to your XML document you should therefore use utf8_encode() with your text to convert it into UTF-8 before you append the text to the document. Otherwise you will get an error message like "output conversion failed due to conv error" at the save() command. See example below:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Text to insert into XML below<br /></span><span class="default">$txt </span><span class="keyword">= </span><span class="string">"a text with special characters like 'ä', 'ß', 'Ü' etc."</span><span class="keyword">;<br /><br /></span><span class="comment">// Create Instance of DOMDocument<br /></span><span class="default">$dom </span><span class="keyword">=  new </span><span class="default">DOMDocument</span><span class="keyword">;<br /></span><span class="comment">// Load XML file<br />// Was created before with DOMDocument('1.0', 'iso-8859-1')<br /></span><span class="default">$dom </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">"file.xml"</span><span class="keyword">);<br /></span><span class="comment">// Find the parent node<br /></span><span class="default">$parent </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">;<br /></span><span class="comment">// Create Instance of DomXPath<br /></span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">DomXPath</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);<br /></span><span class="comment">// new node will be inserted before this node<br /></span><span class="default">$next </span><span class="keyword">= </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"//parentnode/childnode"</span><span class="keyword">);<br /></span><span class="comment">// Create the new element<br /></span><span class="default">$new_elem </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'new_elem'</span><span class="keyword">);<br /></span><span class="comment">// Insert the new element<br /></span><span class="default">$parent</span><span class="keyword">-&gt;</span><span class="default">insertBefore</span><span class="keyword">(</span><span class="default">$new_elem</span><span class="keyword">, </span><span class="default">$next</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br /></span><span class="comment">// DOMXML = utf-8! (will be converted to iso-8859-1 only at 'save()')<br />// prevents error message "output conversion failed due to conv error" at 'save()'<br /></span><span class="default">$txt </span><span class="keyword">= </span><span class="default">utf8_encode</span><span class="keyword">(</span><span class="default">$txt</span><span class="keyword">);<br /></span><span class="comment">// Create new text node with utf-8 encoded string<br /></span><span class="default">$nodetext </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">"</span><span class="default">$txt</span><span class="string">"</span><span class="keyword">);<br /></span><span class="comment">// Append text node to new element<br /></span><span class="default">$nodetext </span><span class="keyword">= </span><span class="default">$new_elem</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$nodetext</span><span class="keyword">);<br /></span><span class="comment">// save <br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="string">"file.xml"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Hope this helps someone.<br /><br />siegparr</span></code></div>
  </div>
 </div>
  <div class="note" id="118908">  <div class="votes">
    <div id="Vu118908">
    <a href="/manual/vote-note.php?id=118908&amp;page=domdocument.save&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118908">
    <a href="/manual/vote-note.php?id=118908&amp;page=domdocument.save&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118908" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#118908" class="name">
  <strong class="user"><em>dubois-holvoet dot patrick at neuf dot fr</em></strong></a><a class="genanchor" href="#118908"> &para;</a><div class="date" title="2016-02-25 08:13"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118908">
<div class="phpcode"><code><span class="html">I just intend to bring my little contribution to the use of DOMDocument::save() function along with PHP serialize() function.<br /><br />Sometimes you could have to serialize a PHP object before you put it into a XML structure (or other..). And then I suppose you could have to save this XML structure in a file. Of course, you will further need to read this file and unserialize it before to use its content. <br /><br />The problem appears when there are some properties described as Protected in the object to be serialized. <br /><br />As it’s written in the PHP documentation, serialize function add for those protected properties an asterisk before the name of the property along with a NULL character on each side of the asterisk. <br />In this case, the DOMDocument::save function will stop the save operation just before the first NULL character met in the string to be saved, because PHP consider it as a potential risk. <br />So, after that, the unserialize operation of the file become impossible.<br /><br />To solve that, here is a first solution to apply :<br /><br />For the serialize , before the DOMDocument::save() ::<br />$data_serial = explode("\x00\x2A\x00", serialize($object));  //take off the 'NULL * NULL' string<br />$data_serial = implode("\x5C\x30\x2A\x5C\x30", $data_serial);    //and replace with '\0*\0' string <br /><br />Before the unserialize :<br />$data_serial = explode("\x5C\x30\x2A\x5C\x30", $serialized_object);    // take off the '\0*\0' string<br />$serial_object = implode("\x00\x2A\x00", $data_serial);      // and replace with 'NULL * NULL' string as included by the previous serialize<br /><br />And a second solution :<br /><br />For the serialize, before the DOMDocument::save() :<br />$serialized_object = addslashes(serialize($object)) ;<br /><br />Before re-using the object in your application :<br />$object = unserialize(stripslashes($serialized_object)) ; <br /><br />Hope this will help some.</span></code></div>
  </div>
 </div>
  <div class="note" id="116028">  <div class="votes">
    <div id="Vu116028">
    <a href="/manual/vote-note.php?id=116028&amp;page=domdocument.save&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116028">
    <a href="/manual/vote-note.php?id=116028&amp;page=domdocument.save&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116028" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#116028" class="name">
  <strong class="user"><em>ludvig at ergopedia dot no</em></strong></a><a class="genanchor" href="#116028"> &para;</a><div class="date" title="2014-10-31 10:21"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116028">
<div class="phpcode"><code><span class="html">When creating a DOMDocument from scratch and saving it, the encoding will be utf-8, although it's declared as iso-8859-1.<br /><br />When loading an XML-file declared and saved as iso-8859-1, php will keep the correct encoding when it's saved after changes are made. <br /><br />Php converts files declared as iso-8859-1 to utf-8 internally. To add text containing special characters, the text must be encoded as utf-8. When the document is saved, special characters are converted to iso-8859-1.<br /><br />To save an xml created from scratch, use fopen/fwrite and utf8_decode:<br />   <br />   $doc = new DOMDocument('1.0', 'iso-8859-1');<br /><br />//Add som nodes and text with apropriate methods<br />   <br />   $f = fopen('xmlfile.xml', 'w+');<br />   fwrite($f, utf8_decode($doc-&gt;saveXML()));<br />   fclose($f);</span></code></div>
  </div>
 </div>
  <div class="note" id="112913">  <div class="votes">
    <div id="Vu112913">
    <a href="/manual/vote-note.php?id=112913&amp;page=domdocument.save&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112913">
    <a href="/manual/vote-note.php?id=112913&amp;page=domdocument.save&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112913" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#112913" class="name">
  <strong class="user"><em>john at johnreid dot it</em></strong></a><a class="genanchor" href="#112913"> &para;</a><div class="date" title="2013-08-06 09:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112913">
<div class="phpcode"><code><span class="html">I had been hitting my head against the wall when I couldn't get an edited XML file to save due to file permissions, even though I knew that it was OK.<br /><br />Eventually I realised that for some odd reason, when I went to save the XML file, it would try to write the file to the root directory.<br /><br />As such, use realpath() to keep the complete system path to the XML file when you load it:<br /><br /><span class="default">&lt;?php<br />$myfile </span><span class="keyword">= </span><span class="string">'myxml.xml'</span><span class="keyword">;<br /></span><span class="default">$myfile </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">$myfile</span><span class="keyword">);<br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">);<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$myfile</span><span class="keyword">);<br /><br /></span><span class="comment">// Let's just add a couple of elements for good measure<br /></span><span class="default">$root </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">;<br /><br /></span><span class="default">$title </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'title'</span><span class="keyword">);<br /></span><span class="default">$title </span><span class="keyword">= </span><span class="default">$root</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$title</span><span class="keyword">);<br /><br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">'This is a title'</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">$title</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br /><br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="default">$myfile</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.save&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.save.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domdocument.php">DOMDocument</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domdocument.adoptnode.php" title="adoptNode">adoptNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.append.php" title="append">append</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createattribute.php" title="createAttribute">createAttribute</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createattributens.php" title="createAttributeNS">createAttributeNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createcdatasection.php" title="createCDATASection">createCDATASection</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createcomment.php" title="createComment">createComment</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createdocumentfragment.php" title="createDocumentFragment">createDocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createelement.php" title="createElement">createElement</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createelementns.php" title="createElementNS">createElementNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createentityreference.php" title="createEntityReference">createEntityReference</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createprocessinginstruction.php" title="createProcessingInstruction">createProcessingInstruction</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createtextnode.php" title="createTextNode">createTextNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementbyid.php" title="getElementById">getElementById</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementsbytagname.php" title="getElementsByTagName">getElementsByTagName</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementsbytagnamens.php" title="getElementsByTagNameNS">getElementsByTagNameNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.importnode.php" title="importNode">importNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.load.php" title="load">load</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadhtml.php" title="loadHTML">loadHTML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadhtmlfile.php" title="loadHTMLFile">loadHTMLFile</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadxml.php" title="loadXML">loadXML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.normalizedocument.php" title="normalizeDocument">normalizeDocument</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.prepend.php" title="prepend">prepend</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.registernodeclass.php" title="registerNodeClass">registerNodeClass</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.relaxngvalidate.php" title="relaxNGValidate">relaxNGValidate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.relaxngvalidatesource.php" title="relaxNGValidateSource">relaxNGValidateSource</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.replacechildren.php" title="replaceChildren">replaceChildren</a>
                        </li>
                                                <li class="current">
                            <a href="domdocument.save.php" title="save">save</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savehtml.php" title="saveHTML">saveHTML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savehtmlfile.php" title="saveHTMLFile">saveHTMLFile</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savexml.php" title="saveXML">saveXML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.schemavalidate.php" title="schemaValidate">schemaValidate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.schemavalidatesource.php" title="schemaValidateSource">schemaValidateSource</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.validate.php" title="validate">validate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.xinclude.php" title="xinclude">xinclude</a>
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
