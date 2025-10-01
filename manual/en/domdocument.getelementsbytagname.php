<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::getElementsByTagName - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.getelementsbytagname.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.getelementsbytagname.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.getelementsbytagname.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.getelementbyid.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.getelementsbytagnamens.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.getelementsbytagname.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.getelementsbytagname.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.getelementsbytagname.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.getelementsbytagname.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.getelementsbytagname.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.getelementsbytagname.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.getelementsbytagname.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.getelementsbytagname.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.getelementsbytagname.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.getelementsbytagname.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.getelementsbytagname.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Searches for all elements with given local tag name" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::getElementsByTagName - Manual" />
<meta name="twitter:description" content="Searches for all elements with given local tag name" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::getElementsByTagName - Manual" />
<meta itemprop="description" content="Searches for all elements with given local tag name" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Searches for all elements with given local tag name" />

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
        <a href="domdocument.getelementsbytagnamens.php">
          DOMDocument::getElementsByTagNameNS &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.getelementbyid.php">
          &laquo; DOMDocument::getElementById        </a>
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
            <option value='en/domdocument.getelementsbytagname.php' selected="selected">English</option>
            <option value='de/domdocument.getelementsbytagname.php'>German</option>
            <option value='es/domdocument.getelementsbytagname.php'>Spanish</option>
            <option value='fr/domdocument.getelementsbytagname.php'>French</option>
            <option value='it/domdocument.getelementsbytagname.php'>Italian</option>
            <option value='ja/domdocument.getelementsbytagname.php'>Japanese</option>
            <option value='pt_BR/domdocument.getelementsbytagname.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.getelementsbytagname.php'>Russian</option>
            <option value='tr/domdocument.getelementsbytagname.php'>Turkish</option>
            <option value='uk/domdocument.getelementsbytagname.php'>Ukrainian</option>
            <option value='zh/domdocument.getelementsbytagname.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.getelementsbytagname" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::getElementsByTagName</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::getElementsByTagName</span> &mdash; <span class="dc-title">Searches for all elements with given local tag name</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.getelementsbytagname-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::getElementsByTagName</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>): <span class="type"><a href="class.domnodelist.php" class="type DOMNodeList">DOMNodeList</a></span></div>

  <p class="para rdfs-comment">
   This function returns a new instance of class
   <span class="classname"><a href="class.domnodelist.php" class="classname">DOMNodeList</a></span> containing all the elements with a given
   local tag name.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domdocument.getelementsbytagname-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">qualifiedName</code></dt>
     <dd>
      <p class="para">
       The local name (without namespace) of the tag to match on. The special value <code class="literal">*</code>
       matches all tags. 
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domdocument.getelementsbytagname-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A new <span class="classname"><a href="class.domnodelist.php" class="classname">DOMNodeList</a></span> object containing all the matched 
   elements.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-domdocument.getelementsbytagname-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="domdocument.getelementsbytagname.example.basic">
    <p><strong>Example #1 Basic Usage Example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$xml </span><span style="color: #007700">= &lt;&lt;&lt; XML<br /></span><span style="color: #DD0000">&lt;?xml version="1.0" encoding="utf-8"?&gt;<br />&lt;books&gt;<br /> &lt;book&gt;Patterns of Enterprise Application Architecture&lt;/book&gt;<br /> &lt;book&gt;Design Patterns: Elements of Reusable Software Design&lt;/book&gt;<br /> &lt;book&gt;Clean Code&lt;/book&gt;<br />&lt;/books&gt;<br /></span><span style="color: #007700">XML;<br /><br /></span><span style="color: #0000BB">$dom </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadXML</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$books </span><span style="color: #007700">= </span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElementsByTagName</span><span style="color: #007700">(</span><span style="color: #DD0000">'book'</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$books </span><span style="color: #007700">as </span><span style="color: #0000BB">$book</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$book</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nodeValue</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Patterns of Enterprise Application Architecture
Design Patterns: Elements of Reusable Software Design
Clean Code</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domdocument.getelementsbytagname-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.getelementsbytagnamens.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::getElementsByTagNameNS()</a> - Searches for all elements with given tag name in specified namespace</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/getelementsbytagname.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.getelementsbytagname%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.getelementsbytagname&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.getelementsbytagname.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="85182">  <div class="votes">
    <div id="Vu85182">
    <a href="/manual/vote-note.php?id=85182&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85182">
    <a href="/manual/vote-note.php?id=85182&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85182" title="75% like this...">
    51
    </div>
  </div>
  <a href="#85182" class="name">
  <strong class="user"><em>James L</em></strong></a><a class="genanchor" href="#85182"> &para;</a><div class="date" title="2008-08-19 04:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85182">
<div class="phpcode"><code><span class="html">Return if there are no matches is an empty DOMNodeList. Check using length property, e.g.:
<br />
<br /><span class="default">&lt;?php
<br />$nodes</span><span class="keyword">=</span><span class="default">$domDocument</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'book'</span><span class="keyword">) ; 
<br />if (</span><span class="default">$nodes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">) {
<br />   </span><span class="comment">// no results
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99716">  <div class="votes">
    <div id="Vu99716">
    <a href="/manual/vote-note.php?id=99716&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99716">
    <a href="/manual/vote-note.php?id=99716&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99716" title="64% like this...">
    11
    </div>
  </div>
  <a href="#99716" class="name">
  <strong class="user"><em>Philip N</em></strong></a><a class="genanchor" href="#99716"> &para;</a><div class="date" title="2010-09-01 03:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99716">
<div class="phpcode"><code><span class="html">Note that when using getElementsByTagName that it is a dynamic list. Thus if you have code which adjusts the DOM structure it will change the results of the getElementsByTagName results list.<br /><br />The following code iterates through a complete set of results and changes them all to a new tag:<br /><br /><span class="default">&lt;?php<br /> $nodes </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName </span><span class="keyword">(</span><span class="string">"oldtag"</span><span class="keyword">);<br /><br /> </span><span class="default">$nodeListLength </span><span class="keyword">= </span><span class="default">$nodes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="comment">// this value will also change<br /> </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$nodeListLength</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">++)<br /> {<br />    </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$nodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br />    </span><span class="comment">// some code to change the tag name from "oldtag" to something else<br />    // e.g. encrypting a tag element<br /> </span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />Since the list is dynamically updating, $nodes-&gt;item(0) is the next "unchanged" tag.</span></code></div>
  </div>
 </div>
  <div class="note" id="100228">  <div class="votes">
    <div id="Vu100228">
    <a href="/manual/vote-note.php?id=100228&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100228">
    <a href="/manual/vote-note.php?id=100228&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100228" title="62% like this...">
    12
    </div>
  </div>
  <a href="#100228" class="name">
  <strong class="user"><em>calvin at g mail</em></strong></a><a class="genanchor" href="#100228"> &para;</a><div class="date" title="2010-10-02 04:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100228">
<div class="phpcode"><code><span class="html">My first post!<br />And this is how I get elements by attribute and its value.<br />For an example, if I want to grab all DIV tags with class name 'className', then...<br /><br /><span class="default">&lt;?php<br />$some_link </span><span class="keyword">= </span><span class="string">'some website'</span><span class="keyword">;<br /></span><span class="default">$tagName </span><span class="keyword">= </span><span class="string">'div'</span><span class="keyword">;<br /></span><span class="default">$attrName </span><span class="keyword">= </span><span class="string">'class'</span><span class="keyword">;<br /></span><span class="default">$attrValue </span><span class="keyword">= </span><span class="string">'className'</span><span class="keyword">;<br /><br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">;<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />@</span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadHTMLFile</span><span class="keyword">(</span><span class="default">$some_link</span><span class="keyword">);<br /><br /></span><span class="default">$html </span><span class="keyword">= </span><span class="default">getTags</span><span class="keyword">( </span><span class="default">$dom</span><span class="keyword">, </span><span class="default">$tagName</span><span class="keyword">, </span><span class="default">$attrName</span><span class="keyword">, </span><span class="default">$attrValue </span><span class="keyword">);<br />echo </span><span class="default">$html</span><span class="keyword">;<br /><br />function </span><span class="default">getTags</span><span class="keyword">( </span><span class="default">$dom</span><span class="keyword">, </span><span class="default">$tagName</span><span class="keyword">, </span><span class="default">$attrName</span><span class="keyword">, </span><span class="default">$attrValue </span><span class="keyword">){<br />    </span><span class="default">$html </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$domxpath </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);<br />    </span><span class="default">$newDom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">;<br />    </span><span class="default">$newDom</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /><br />    </span><span class="default">$filtered </span><span class="keyword">= </span><span class="default">$domxpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"//</span><span class="default">$tagName</span><span class="string">" </span><span class="keyword">. </span><span class="string">'[@' </span><span class="keyword">. </span><span class="default">$attrName </span><span class="keyword">. </span><span class="string">"='</span><span class="default">$attrValue</span><span class="string">']"</span><span class="keyword">);<br />    </span><span class="comment">// $filtered =  $domxpath-&gt;query('//div[@class="className"]');<br />    // '//' when you don't know 'absolute' path<br /><br />    // since above returns DomNodeList Object<br />    // I use following routine to convert it to string(html); copied it from someone's post in this site. Thank you.<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    while( </span><span class="default">$myItem </span><span class="keyword">= </span><span class="default">$filtered</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">++) ){<br />        </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$newDom</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">( </span><span class="default">$myItem</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);    </span><span class="comment">// import node<br />        </span><span class="default">$newDom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);                    </span><span class="comment">// append node<br />    </span><span class="keyword">}<br />    </span><span class="default">$html </span><span class="keyword">= </span><span class="default">$newDom</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();<br />    return </span><span class="default">$html</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Please, improve it, and share it.</span></code></div>
  </div>
 </div>
  <div class="note" id="46121">  <div class="votes">
    <div id="Vu46121">
    <a href="/manual/vote-note.php?id=46121&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46121">
    <a href="/manual/vote-note.php?id=46121&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46121" title="65% like this...">
    8
    </div>
  </div>
  <a href="#46121" class="name">
  <strong class="user"><em>gem at rellim dot com</em></strong></a><a class="genanchor" href="#46121"> &para;</a><div class="date" title="2004-09-29 04:20"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom46121">
<div class="phpcode"><code><span class="html">Here is an example of getElementsByTagName():<br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">=&lt;&lt;&lt;EOT<br /></span><span class="string">&lt;?xml version="1.0"?&gt;<br />&lt;config&gt;<br />  &lt;section id="section1"&gt;<br />   &lt;param name="param1"&gt;value1&lt;/param&gt;<br />   &lt;param name="param2"&gt;value2&lt;/param&gt;<br />  &lt;/section&gt;<br />  &lt;section id="section2"&gt;<br />   &lt;param name="param3"&gt;value3&lt;/param&gt;<br />  &lt;/section&gt;<br />&lt;/config&gt;<br /></span><span class="keyword">EOT;<br /><br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">;<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /></span><span class="default">$params </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'param'</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$params </span><span class="keyword">as </span><span class="default">$param</span><span class="keyword">) {<br />       echo </span><span class="default">$param </span><span class="keyword">-&gt; </span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'name'</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Expected result:<br />--------------<br />param1<br />param2<br />param3</span></code></div>
  </div>
 </div>
  <div class="note" id="89313">  <div class="votes">
    <div id="Vu89313">
    <a href="/manual/vote-note.php?id=89313&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89313">
    <a href="/manual/vote-note.php?id=89313&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89313" title="62% like this...">
    10
    </div>
  </div>
  <a href="#89313" class="name">
  <strong class="user"><em>gurmukh24 at gmail dot com</em></strong></a><a class="genanchor" href="#89313"> &para;</a><div class="date" title="2009-03-03 04:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89313">
<div class="phpcode"><code><span class="html">Following Example is of multiple attributes and multiple child nodes. this is being used to make joomla plugin for bulk upload of articles. Gurmukh Singh Bhatti<br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">=&lt;&lt;&lt;EOT<br /></span><span class="string">&lt;?xml version="1.0"?&gt;<br />&lt;root&gt;<br />&lt;section name="Section1"&gt;<br />  &lt;category id="Category1" name="google"&gt;<br />   &lt;arti name="article1"&gt;<br />   &lt;p&gt;any html code here&lt;/p&gt;<br />   &lt;b&gt;my name is so so&lt;/b&gt;<br />    &lt;/arti&gt;<br />   &lt;arti name="article2"&gt;value2&lt;/arti&gt;<br />   &lt;arti name="article3"&gt;value3&lt;/arti&gt;<br />   &lt;arti name="article4"&gt;value4&lt;/arti&gt;<br />  &lt;/category&gt;<br />    &lt;category id="Category2" name="yahoo"&gt;<br />   &lt;arti name="articleSection2"&gt;Test value&lt;/arti&gt;<br />  &lt;/category&gt;<br />&lt;/section&gt;<br />&lt;section name="Section2"&gt;<br />  &lt;category id="category1_of_section2" name="msn"&gt;<br />   &lt;arti name="article2"&gt;value1&lt;/arti&gt;<br />   &lt;arti name="article3"&gt;value2&lt;/arti&gt;<br />  &lt;/category&gt;<br />    &lt;category id="Category2_of_section2" name="webcare"&gt;<br />    &lt;arti name="param3"&gt;value4&lt;/arti&gt;<br />   &lt;/category&gt;<br />&lt;/section&gt;<br />&lt;/root&gt;<br /></span><span class="keyword">EOT;<br /><br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">;<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /></span><span class="default">$params </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'section'</span><span class="keyword">); </span><span class="comment">// Find Sections <br /></span><span class="default">$k</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />foreach (</span><span class="default">$params </span><span class="keyword">as </span><span class="default">$param</span><span class="keyword">) </span><span class="comment">//go to each section 1 by 1 <br /></span><span class="keyword">{<br />         echo </span><span class="string">"Section Attribute :-&gt; "</span><span class="keyword">.</span><span class="default">$params</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'name'</span><span class="keyword">).</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;   </span><span class="comment">//get section attribute            <br />         </span><span class="default">$params2 </span><span class="keyword">= </span><span class="default">$params</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'category'</span><span class="keyword">); </span><span class="comment">//digg categories with in Section<br />      </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="comment">// values is used to iterate categories  <br />        </span><span class="keyword">foreach (</span><span class="default">$params2 </span><span class="keyword">as </span><span class="default">$p</span><span class="keyword">) {<br />           echo </span><span class="string">"&amp;nbsp;&amp;nbsp;- Category Attribute Name :-&gt; "</span><span class="keyword">.</span><span class="default">$params2</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'name'</span><span class="keyword">).</span><span class="string">"&lt;br&gt;"</span><span class="keyword">; </span><span class="comment">//get Category attributes<br />            </span><span class="default">$params3 </span><span class="keyword">= </span><span class="default">$params2</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'arti'</span><span class="keyword">); </span><span class="comment">//dig Arti into Categories<br />                 </span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="comment">//values used to interate Arti<br />                     </span><span class="keyword">foreach (</span><span class="default">$params3 </span><span class="keyword">as </span><span class="default">$p2</span><span class="keyword">)<br />                   {<br />                    echo </span><span class="string">"&amp;nbsp;&amp;nbsp;&amp;nbsp;- Article Attribute Name : "</span><span class="keyword">.</span><span class="default">$params3</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$j</span><span class="keyword">)-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'name'</span><span class="keyword">).</span><span class="string">""</span><span class="keyword">; </span><span class="comment">//get arti atributes<br /></span><span class="keyword">echo </span><span class="string">"&amp;nbsp;&amp;nbsp; Value : "</span><span class="keyword">.</span><span class="default">$params3</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$j</span><span class="keyword">)-&gt;</span><span class="default">nodeValue</span><span class="keyword">.</span><span class="string">"&lt;br&gt;"</span><span class="keyword">; </span><span class="comment">//get Node value ;<br />                              </span><span class="default">$j</span><span class="keyword">++;   <br />                   }              <br />         </span><span class="default">$i</span><span class="keyword">++;<br />      }<br /></span><span class="default">$k</span><span class="keyword">++;    <br />          <br />}<br /></span><span class="default">?&gt;<br /></span><br />output :<br /> Section Attribute :-&gt; Section1<br />  - Category Attribute Name :-&gt; google<br />            - Article Attribute Name : article1   Value : any html code heremy name is so so<br />            - Article Attribute Name : article2   Value : value2<br />            - Article Attribute Name : article3   Value : value3<br />            - Article Attribute Name : article4   Value : value4<br />  - Category Attribute Name :-&gt; yahoo<br />            - Article Attribute Name : articleSection2   Value : Test value<br />Section Attribute :-&gt; Section2<br />  - Category Attribute Name :-&gt; msn<br />            - Article Attribute Name : article2   Value : value1<br />            - Article Attribute Name : article3   Value : value2<br />  - Category Attribute Name :-&gt; webcare<br />            - Article Attribute Name : param3   Value : value4</span></code></div>
  </div>
 </div>
  <div class="note" id="114090">  <div class="votes">
    <div id="Vu114090">
    <a href="/manual/vote-note.php?id=114090&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114090">
    <a href="/manual/vote-note.php?id=114090&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114090" title="66% like this...">
    3
    </div>
  </div>
  <a href="#114090" class="name">
  <strong class="user"><em>rsvvuuren at hotmail dot com</em></strong></a><a class="genanchor" href="#114090"> &para;</a><div class="date" title="2014-01-10 10:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114090">
<div class="phpcode"><code><span class="html">I was in need of $dom-&gt;getElementsByTagName that would hist magic within a contextNode.<br /><br />Why i needed getElementsByTagName instead of just simple using an xPath-&gt;query is because while looping through the returned nodelist, more nodes with the tagName i was looking for where created. <br /><br />When using getElementsByTagName, the new nodes are "added" to the nodelist i already am looping through.<br /><br />When using an xpath query, you wil only loop through the original nodelist, the newly created elements wil not appear in that nodelist.<br /><br />I was already using an extended class on domDocument, so it was simple to create an kind of getElementsByTagName that would accept an contextNode.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">SmartDocument </span><span class="keyword">extends </span><span class="default">DOMDocument </span><span class="keyword">{<br />    private </span><span class="default">$localDom</span><span class="keyword">;<br />    public </span><span class="default">$xpath</span><span class="keyword">;<br />    private </span><span class="default">$serialize </span><span class="keyword">= array(</span><span class="string">'localDom'</span><span class="keyword">);<br />    <br />    private </span><span class="default">$elemName</span><span class="keyword">;<br />    private </span><span class="default">$elemCounter</span><span class="keyword">;<br />    <br />    </span><span class="comment">/**<br />     * Constructor<br />     */<br />    </span><span class="keyword">function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct </span><span class="keyword">( </span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'UTF-8' </span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">recover </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xpath </span><span class="keyword">= new </span><span class="default">DOMXpath </span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">/**<br />     * GetElementsByTagname within an contextNode<br />     * <br />     * @param string $name<br />     * @param DomNode $contextNode<br />     * @return DOMNode|NULL<br />     */<br />    </span><span class="keyword">public function </span><span class="default">getElementsByTagNameContext</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$contextNode</span><span class="keyword">) {<br />        <br />        if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemName</span><span class="keyword">!=</span><span class="default">$name</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemCounter     </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemName        </span><span class="keyword">=</span><span class="default">$name</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemLength      </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">-&gt;</span><span class="default">evaluate</span><span class="keyword">(</span><span class="string">'count(.//*[name()="'</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemName</span><span class="keyword">.</span><span class="string">'"])'</span><span class="keyword">, </span><span class="default">$contextNode</span><span class="keyword">);<br />        while(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemCounter </span><span class="keyword">&lt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemLength</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemCounter</span><span class="keyword">++;<br />            </span><span class="default">$nl </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'.//*[name()="'</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemName</span><span class="keyword">.</span><span class="string">'"]['</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemCounter</span><span class="keyword">.</span><span class="string">']'</span><span class="keyword">, </span><span class="default">$contextNode</span><span class="keyword">);<br />            if(</span><span class="default">$nl</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {<br />                return </span><span class="default">$nl</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />            }    <br />        }<br />        <br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemLength      </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemCounter     </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">elemName        </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;        <br />        return </span><span class="default">null</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Usage:<br /><br /><span class="default">&lt;?php<br /><br /> $doc </span><span class="keyword">= new </span><span class="default">SmartDocument</span><span class="keyword">();<br /> </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'book.xml'</span><span class="keyword">);<br /><br /> </span><span class="default">$nl </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'//books'</span><span class="keyword">);<br /> foreach(</span><span class="default">$nl </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">) {<br />  while(</span><span class="default">$book </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagNameContext</span><span class="keyword">(</span><span class="string">'book'</span><span class="keyword">, </span><span class="default">$node</span><span class="keyword">)) {<br />   </span><span class="comment">//When you now create new nodes within this loop as child or following-sibling of this node<br />  // They show up within this loop<br />  </span><span class="keyword">}<br /><br /> }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97608">  <div class="votes">
    <div id="Vu97608">
    <a href="/manual/vote-note.php?id=97608&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97608">
    <a href="/manual/vote-note.php?id=97608&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97608" title="58% like this...">
    3
    </div>
  </div>
  <a href="#97608" class="name">
  <strong class="user"><em>Marco Maranao</em></strong></a><a class="genanchor" href="#97608"> &para;</a><div class="date" title="2010-04-27 10:22"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97608">
<div class="phpcode"><code><span class="html">The following takes a list of news items from an XML file (or an RSS feed), assigning it to an array first for a name value pair and then generating an HTML list.
<br />
<br /><span class="default">&lt;?php
<br />
<br />$xml  </span><span class="keyword">=&lt;&lt;&lt;EOT
<br /></span><span class="string">&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;
<br />&lt;news&gt;
<br />    &lt;item&gt;
<br />        &lt;title&gt;News 1&lt;/title&gt;
<br />        &lt;created&gt;04/2/2010 08:00 EST&lt;/created&gt;
<br />        &lt;url&gt;<a href="http://news.example.com/news.pdf&lt;/url&gt;" rel="nofollow" target="_blank">http://news.example.com/news.pdf&lt;/url&gt;</a>
<br />    &lt;/item&gt;
<br />    &lt;item&gt;
<br />        &lt;title&gt;News 2&lt;/title&gt;
<br />        &lt;created&gt;04/25/2010 08:00 EST&lt;/created&gt;
<br />        &lt;url&gt;<a href="http://news.example.com/news.pdf&lt;/url&gt;" rel="nofollow" target="_blank">http://news.example.com/news.pdf&lt;/url&gt;</a>
<br />    &lt;/item&gt;
<br />    &lt;item&gt;
<br />        &lt;title&gt;News 3&lt;/title&gt;
<br />        &lt;created&gt;04/27/2010 08:00 EST&lt;/created&gt;
<br />        &lt;url&gt;<a href="http://news.example.com/news.pdf&lt;/url&gt;" rel="nofollow" target="_blank">http://news.example.com/news.pdf&lt;/url&gt;</a>
<br />    &lt;/item&gt;
<br />&lt;/news&gt;
<br /></span><span class="keyword">EOT;
<br />
<br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br />
<br />if (</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">)) {
<br />    </span><span class="default">$items </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'item'</span><span class="keyword">);
<br />    </span><span class="default">$headlines </span><span class="keyword">= array();
<br />    
<br />    foreach(</span><span class="default">$items </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) {
<br />        </span><span class="default">$headline </span><span class="keyword">= array();
<br />        
<br />        if(</span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">) {
<br />            foreach(</span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$i</span><span class="keyword">) {
<br />                </span><span class="default">$headline</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">] = </span><span class="default">$i</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">;
<br />            }
<br />        }
<br />        
<br />        </span><span class="default">$headlines</span><span class="keyword">[] = </span><span class="default">$headline</span><span class="keyword">;
<br />    }
<br />    
<br />    if(!empty(</span><span class="default">$headlines</span><span class="keyword">)) {
<br />        </span><span class="default">$hc </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        
<br />        echo </span><span class="string">'&lt;ul&gt;'</span><span class="keyword">;
<br />        
<br />        foreach(</span><span class="default">$headlines </span><span class="keyword">as </span><span class="default">$headline</span><span class="keyword">) {
<br />            if(++</span><span class="default">$hc </span><span class="keyword">&lt;= </span><span class="default">3</span><span class="keyword">) {
<br />                echo </span><span class="string">'&lt;li&gt;'
<br />                    </span><span class="keyword">.</span><span class="string">'&lt;a href="'</span><span class="keyword">.</span><span class="default">$headline</span><span class="keyword">[</span><span class="string">'url'</span><span class="keyword">].</span><span class="string">'" target="_blank"&gt;'
<br />                        </span><span class="keyword">.</span><span class="string">'&lt;span&gt;'</span><span class="keyword">.</span><span class="default">date</span><span class="keyword">(</span><span class="string">'F j, Y'</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$headline</span><span class="keyword">[</span><span class="string">'created'</span><span class="keyword">])).</span><span class="string">'&lt;/span&gt;&lt;br /&gt;'
<br />                        </span><span class="keyword">.</span><span class="default">$headline</span><span class="keyword">[</span><span class="string">'title'</span><span class="keyword">]
<br />                    .</span><span class="string">'&lt;/a&gt;'
<br />                </span><span class="keyword">.</span><span class="string">'&lt;/li&gt;'</span><span class="keyword">;
<br />            }
<br />        }
<br />        
<br />        echo </span><span class="string">'&lt;/ul&gt;'</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109860">  <div class="votes">
    <div id="Vu109860">
    <a href="/manual/vote-note.php?id=109860&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109860">
    <a href="/manual/vote-note.php?id=109860&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109860" title="56% like this...">
    5
    </div>
  </div>
  <a href="#109860" class="name">
  <strong class="user"><em>yaakov dot moddel at gmail dot com</em></strong></a><a class="genanchor" href="#109860"> &para;</a><div class="date" title="2012-08-28 10:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109860">
<div class="phpcode"><code><span class="html">This is a very simplistic way to traverse xml nodes and childnodes using the DOMDocument class<br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">=</span><span class="string">'&lt;?xml version="1.0" encoding="utf-8"?&gt;<br />&lt;root&gt;<br />    &lt;Parent&gt;<br />        &lt;child&gt;child 1&lt;/child&gt;<br />        &lt;child&gt;child 2&lt;/child&gt;<br />        &lt;child&gt;child 3&lt;/child&gt;<br />        &lt;subParent&gt;<br />            &lt;Grandchild&gt;Grandchild 1&lt;/Grandchild&gt;<br />            &lt;Grandchild&gt;Grandchild 2&lt;/Grandchild&gt;<br />            &lt;Grandchild&gt;Grandchild 3&lt;/Grandchild&gt;<br />        &lt;/subParent&gt;<br />    &lt;/Parent&gt;<br />    &lt;Parent&gt;<br />        &lt;child&gt;child 4&lt;/child&gt;<br />        &lt;child&gt;child 5&lt;/child&gt;<br />        &lt;child&gt;child 6&lt;/child&gt;<br />        &lt;subParent&gt;<br />            &lt;Grandchild&gt;Grandchild 4&lt;/Grandchild&gt;<br />            &lt;Grandchild&gt;Grandchild 5&lt;/Grandchild&gt;<br />            &lt;Grandchild&gt;Grandchild 6&lt;/Grandchild&gt;<br />        &lt;/subParent&gt;<br />    &lt;/Parent&gt;<br />&lt;/root&gt;'</span><span class="keyword">;<br />      </span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br />      </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />      </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br />      </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />            while(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$finance </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">"Parent"</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)))<br />            {<br />                     foreach(</span><span class="default">$finance</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$nodename</span><span class="keyword">)<br />                     {<br />                             if(</span><span class="default">$nodename</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">==</span><span class="string">'subParent'</span><span class="keyword">)<br />                                {<br />                                     foreach(</span><span class="default">$nodename</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$subNodes</span><span class="keyword">)<br />                                     {<br />                                     echo </span><span class="default">$subNodes</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">.</span><span class="string">" - "</span><span class="keyword">.</span><span class="default">$subNodes</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">.</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />                                     }<br />                                }<br />                             else<br />                                {<br />                                echo </span><span class="default">$nodename</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">.</span><span class="string">" - "</span><span class="keyword">.</span><span class="default">$nodename</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">.</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />                                }<br />                     }<br />      </span><span class="default">$i</span><span class="keyword">++;<br />            }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73878">  <div class="votes">
    <div id="Vu73878">
    <a href="/manual/vote-note.php?id=73878&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73878">
    <a href="/manual/vote-note.php?id=73878&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73878" title="55% like this...">
    1
    </div>
  </div>
  <a href="#73878" class="name">
  <strong class="user"><em>Finding values of a node</em></strong></a><a class="genanchor" href="#73878"> &para;</a><div class="date" title="2007-03-14 02:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73878">
<div class="phpcode"><code><span class="html">I don't know if this is that obvious but it was not for me, so in addition to gem at rellim dot com's posting:<br />adding <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">$param </span><span class="keyword">-&gt; </span><span class="default">nodeValue</span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />to the loop will output<br />value1<br />value2<br />value3</span></code></div>
  </div>
 </div>
  <div class="note" id="113185">  <div class="votes">
    <div id="Vu113185">
    <a href="/manual/vote-note.php?id=113185&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113185">
    <a href="/manual/vote-note.php?id=113185&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113185" title="53% like this...">
    1
    </div>
  </div>
  <a href="#113185" class="name">
  <strong class="user"><em>simon at onepointltd dot com</em></strong></a><a class="genanchor" href="#113185"> &para;</a><div class="date" title="2013-09-10 07:54"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113185">
<div class="phpcode"><code><span class="html">Here is a function to convert the populated tables in and HTML document into an array.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//Create an array containing all the populated tables in an HTML page<br />//Returned array: tables_to_array[table number][row number][column number]<br /></span><span class="keyword">function </span><span class="default">tables_to_array </span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {<br />  </span><span class="default">$htmlDocDom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /><br />  @</span><span class="default">$htmlDocDom</span><span class="keyword">-&gt;</span><span class="default">loadHTMLFile</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />  </span><span class="default">$htmlDocDom</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />  </span><span class="default">$tableCounter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  </span><span class="default">$htmlDocTableArray </span><span class="keyword">= array();<br />  </span><span class="default">$htmlDocTables </span><span class="keyword">= </span><span class="default">$htmlDocDom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'table'</span><span class="keyword">);<br />  foreach (</span><span class="default">$htmlDocTables </span><span class="keyword">as </span><span class="default">$htmlDocTable</span><span class="keyword">) {<br />    </span><span class="default">$htmlDocTableArray</span><span class="keyword">[</span><span class="default">$tableCounter</span><span class="keyword">] = array();<br />    </span><span class="default">$htmlDocRows</span><span class="keyword">= </span><span class="default">$htmlDocTable</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'tr'</span><span class="keyword">);<br />    </span><span class="default">$htmlDocRowCount </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$htmlDocTableArray</span><span class="keyword">[</span><span class="default">$tableCounter</span><span class="keyword">] = array();<br />    foreach (</span><span class="default">$htmlDocRows </span><span class="keyword">as </span><span class="default">$htmlDocRow</span><span class="keyword">) {<br />      if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$htmlDocRow</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">)<br />      {<br />        </span><span class="default">$htmlDocColCount </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$htmlDocTableArray</span><span class="keyword">[</span><span class="default">$tableCounter</span><span class="keyword">][</span><span class="default">$htmlDocRowCount</span><span class="keyword">] = array();<br />        </span><span class="default">$htmlDocCols </span><span class="keyword">= </span><span class="default">$htmlDocRow</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'td'</span><span class="keyword">);<br />        foreach (</span><span class="default">$htmlDocCols </span><span class="keyword">as </span><span class="default">$htmlDocCol</span><span class="keyword">) {<br />          </span><span class="default">$htmlDocTableArray</span><span class="keyword">[</span><span class="default">$tableCounter</span><span class="keyword">][</span><span class="default">$htmlDocRowCount</span><span class="keyword">][] = </span><span class="default">$htmlDocCol</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">;<br />          </span><span class="default">$htmlDocColCount</span><span class="keyword">++;<br />        }<br />        </span><span class="default">$htmlDocRowCount</span><span class="keyword">++;<br />      }<br />    }<br />    if (</span><span class="default">$htmlDocRowCount </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">) </span><span class="default">$tableCounter</span><span class="keyword">++;<br />  }<br />  return(</span><span class="default">$htmlDocTableArray</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100330">  <div class="votes">
    <div id="Vu100330">
    <a href="/manual/vote-note.php?id=100330&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100330">
    <a href="/manual/vote-note.php?id=100330&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100330" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#100330" class="name">
  <strong class="user"><em>metron at underhive-planet dot com</em></strong></a><a class="genanchor" href="#100330"> &para;</a><div class="date" title="2010-10-08 05:28"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100330">
<div class="phpcode"><code><span class="html">My first try to get a stable solution with this function, failed with this Exception:<br /><br />"Fatal error: Call to undefined method DOMNodeList::getElementsByTagName()"<br />This is the xml snipplet:<br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;root&gt;<br /> &lt;component&gt;<br />  &lt;properties&gt;<br />    ....&lt;any element&gt;<br />  &lt;/properties&gt;<br /> &lt;/component&gt;<br />&lt;/root&gt;<br /><br />So the php code to climb along the elements is:<br /><span class="default">&lt;?php <br /><br />$src </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">);<br /></span><span class="default">$src</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /></span><span class="default">$src</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br /></span><span class="comment">//Loading extern file<br /></span><span class="default">$src</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'../xml/Item_component.xml'</span><span class="keyword">);<br /><br /></span><span class="comment">//Check each child of first indexed branch node of: &lt;component&gt;<br />//First get element after root element: &lt;component&gt;<br /><br />//1st level<br /></span><span class="default">$component </span><span class="keyword">= </span><span class="default">$src</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'component'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">//2nd level, get next element after component, here it fails!!<br /></span><span class="default">$properties </span><span class="keyword">= </span><span class="default">$component</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'properties'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />...<br /></span><span class="default">?&gt;<br /></span><br />I realised, that there is a different when using different libxml2 versions on Apache2. This code will fail with libxml2 version 2.6.23 and PHP version 5.2.6<br />--<br />-&gt;It works fine with libxml2 version 2.6.32 and PHP version 5.2.6-3ubuntu4.6<br />-&gt;...and finally it also works with libxml2 2.7.7 and PHP &gt;= 5.3<br /><br />So if you bored to search for solutions with DOM like I did, please ensure that your www environment has the correct libxml2 / PHP Version installed on your apache2 server.</span></code></div>
  </div>
 </div>
  <div class="note" id="95993">  <div class="votes">
    <div id="Vu95993">
    <a href="/manual/vote-note.php?id=95993&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95993">
    <a href="/manual/vote-note.php?id=95993&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95993" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#95993" class="name">
  <strong class="user"><em>james</em></strong></a><a class="genanchor" href="#95993"> &para;</a><div class="date" title="2010-02-01 07:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95993">
<div class="phpcode"><code><span class="html">Problem:<br />You have an XML document that contains filename references to, say, images. Each filename reference is defined by &lt;file&gt;filename.ext&lt;/file&gt; tag. You'd like to perform perform additional validation, say, after running the XML document through XSD validation. The additional validation can be any of your choice, in this example, it would be ideal to convert the PHP code to a function. The function would then determine if the images exist and return either an integer value or a boolean.<br /><br />&lt;?xml version="1.0"?&gt;<br />&lt;root&gt;<br />&lt;box&gt;<br />&lt;file&gt;example.png&lt;/file&gt;<br />&lt;/box&gt;<br />&lt;content&gt;<br />&lt;item&gt;<br />&lt;image&gt;&lt;file&gt;example2.png&lt;/file&gt;&lt;/image&gt;<br />&lt;caption&gt;The above image is an example&lt;/caption&gt;<br />&lt;/item&gt;<br />&lt;/content&gt;<br />&lt;/root&gt;<br /><br />Solution:<br /><span class="default">&lt;?php<br /><br />$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">prevservWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br />if (!@</span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">"example.xml"</span><span class="keyword">)) {<br />    echo </span><span class="string">"example.xml doesn't exist!\n"</span><span class="keyword">;<br />    return;<br />}<br /><br /></span><span class="default">$imageList </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'file'</span><span class="keyword">);<br /></span><span class="default">$imageCnt  </span><span class="keyword">= </span><span class="default">$imageList</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;<br /><br />for (</span><span class="default">$idx </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$idx </span><span class="keyword">&lt; </span><span class="default">$imageCnt</span><span class="keyword">; </span><span class="default">$idx</span><span class="keyword">++) {<br />    print </span><span class="default">$imageList</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$idx</span><span class="keyword">)-&gt;</span><span class="default">nodeValue </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />The above PHP code could easily be turned into a function that returns an array of image filenames, an integer value relative to the number of images found, etc.<br /><br />Hope this is helpful.</span></code></div>
  </div>
 </div>
  <div class="note" id="81019">  <div class="votes">
    <div id="Vu81019">
    <a href="/manual/vote-note.php?id=81019&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81019">
    <a href="/manual/vote-note.php?id=81019&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81019" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#81019" class="name">
  <strong class="user"><em>jason at shaped dot ca</em></strong></a><a class="genanchor" href="#81019"> &para;</a><div class="date" title="2008-02-11 04:59"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81019">
<div class="phpcode"><code><span class="html">in response to tildy at pr dot hu<br /><br />my preferred way is (in example to gather country data from an iso 3166 xml flie)<br /><br />$countries = new DOMDocument();<br />$countries-&gt;load("./lib/iso_3166.xml");<br /><br />$countriesList = $countries-&gt;getElementsByTagName("ISO_3166-1_Entry");<br /><br />foreach($countriesList as $country) {<br />    $values = $country-&gt;getElementsByTagName("*");<br />    foreach($values as $node) {<br />      echo $node-&gt;nodeName."=".$node-&gt;nodeValue;<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="124522">  <div class="votes">
    <div id="Vu124522">
    <a href="/manual/vote-note.php?id=124522&amp;page=domdocument.getelementsbytagname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124522">
    <a href="/manual/vote-note.php?id=124522&amp;page=domdocument.getelementsbytagname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124522" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#124522" class="name">
  <strong class="user"><em>Mateusz K</em></strong></a><a class="genanchor" href="#124522"> &para;</a><div class="date" title="2019-12-19 08:04"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124522">
<div class="phpcode"><code><span class="html">If you want to move all nodes to another tag you can do it like that<br />Eg: replace &lt;div&gt; with nodes to &lt;p&gt; with the same nodes.<br /><br />function replaceDomElementTag(DOMDocument $dom, DOMElement $node, string $tagName)<br />{<br />        $newElement = $dom-&gt;createElement($tagName);<br />        while ($node-&gt;childNodes-&gt;length)<br />            $newElement-&gt;appendChild($node-&gt;childNodes[0]);<br /><br />        $node-&gt;parentNode-&gt;replaceChild($newElement, $node);<br />}<br /><br />$dom = new DOMDocument();<br />replaceDomElementTag($dom, $divElementToReplace, 'p');</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.getelementsbytagname&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.getelementsbytagname.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
