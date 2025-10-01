<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::getElementById - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.getelementbyid.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.getelementbyid.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.getelementbyid.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.createtextnode.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.getelementsbytagname.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.getelementbyid.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.getelementbyid.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.getelementbyid.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.getelementbyid.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.getelementbyid.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.getelementbyid.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.getelementbyid.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.getelementbyid.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.getelementbyid.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.getelementbyid.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.getelementbyid.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Searches for an element with a certain id" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::getElementById - Manual" />
<meta name="twitter:description" content="Searches for an element with a certain id" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::getElementById - Manual" />
<meta itemprop="description" content="Searches for an element with a certain id" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Searches for an element with a certain id" />

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
        <a href="domdocument.getelementsbytagname.php">
          DOMDocument::getElementsByTagName &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.createtextnode.php">
          &laquo; DOMDocument::createTextNode        </a>
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
            <option value='en/domdocument.getelementbyid.php' selected="selected">English</option>
            <option value='de/domdocument.getelementbyid.php'>German</option>
            <option value='es/domdocument.getelementbyid.php'>Spanish</option>
            <option value='fr/domdocument.getelementbyid.php'>French</option>
            <option value='it/domdocument.getelementbyid.php'>Italian</option>
            <option value='ja/domdocument.getelementbyid.php'>Japanese</option>
            <option value='pt_BR/domdocument.getelementbyid.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.getelementbyid.php'>Russian</option>
            <option value='tr/domdocument.getelementbyid.php'>Turkish</option>
            <option value='uk/domdocument.getelementbyid.php'>Ukrainian</option>
            <option value='zh/domdocument.getelementbyid.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.getelementbyid" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::getElementById</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::getElementById</span> &mdash; <span class="dc-title">Searches for an element with a certain id</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.getelementbyid-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::getElementById</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$elementId</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span></span></div>

  <p class="para rdfs-comment">
   This function is similar to
   <a href="domdocument.getelementsbytagname.php" class="xref">DOMDocument::getElementsByTagName</a> but 
   searches for an element with a given id.
  </p>
  <p class="para">
   For this function to work, you will need either to set some ID attributes
   with <a href="domelement.setidattribute.php" class="xref">DOMElement::setIdAttribute</a>
   or a DTD which defines an attribute to be of type ID. 
   In the later case, you will need to validate your document with
   <a href="domdocument.validate.php" class="xref">DOMDocument::validate</a> 
   or <a href="class.domdocument.php#domdocument.props.validateonparse" class="link">DOMDocument::$validateOnParse</a> before using this function.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domdocument.getelementbyid-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">elementId</code></dt>
     <dd>
      <p class="para">
       The unique id value for an element.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domdocument.getelementbyid-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the <span class="classname"><a href="class.domelement.php" class="classname">DOMElement</a></span> or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if the element is
   not found. 
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-domdocument.getelementbyid-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-5771">
   <p><strong>Example #1 DOMDocument::getElementById() Example</strong></p>
   <div class="example-contents"><p>The following examples use <var class="filename">book.xml</var> which contains the following:</p></div>
<div class="example-contents">

<div class="annotation-interactive xmlcode"><pre class="xmlcode">&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;!DOCTYPE books [
  &lt;!ELEMENT books   (book+)&gt;
  &lt;!ELEMENT book    (title, author+, xhtml:blurb?)&gt;
  &lt;!ELEMENT title   (#PCDATA)&gt;
  &lt;!ELEMENT blurb   (#PCDATA)&gt;
  &lt;!ELEMENT author  (#PCDATA)&gt;
  &lt;!ATTLIST books   xmlns        CDATA  #IMPLIED&gt;
  &lt;!ATTLIST books   xmlns:xhtml  CDATA  #IMPLIED&gt;
  &lt;!ATTLIST book    id           ID     #IMPLIED&gt;
  &lt;!ATTLIST author  email        CDATA  #IMPLIED&gt;
]&gt;
&lt;?xml-stylesheet type=&quot;text/xsl&quot; href=&quot;style.xsl&quot;?&gt;
&lt;books xmlns=&quot;http://books.php/&quot; xmlns:xhtml=&quot;http://www.w3.org/1999/xhtml&quot;&gt;
  &lt;book id=&quot;php-basics&quot;&gt;
    &lt;title&gt;PHP Basics&lt;/title&gt;
    &lt;author email=&quot;jim.smith@basics.php&quot;&gt;Jim Smith&lt;/author&gt;
    &lt;author email=&quot;jane.smith@basics.php&quot;&gt;Jane Smith&lt;/author&gt;
    &lt;xhtml:blurb&gt;&lt;![CDATA[
&lt;p&gt;&lt;em&gt;PHP Basics&lt;/em&gt; provides an introduction to PHP.&lt;/p&gt;
]]&gt;&lt;/xhtml:blurb&gt;
  &lt;/book&gt;
  &lt;book id=&quot;php-advanced&quot;&gt;
    &lt;title&gt;PHP Advanced Programming&lt;/title&gt;
    &lt;author email=&quot;jon.doe@advanced.php&quot;&gt;Jon Doe&lt;/author&gt;
  &lt;/book&gt;
&lt;/books&gt;</pre>
</div></div>

   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DomDocument</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// We need to validate our document before referring to the id<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validateOnParse </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book.xml'</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"The element whose id is 'php-basics' is: " </span><span style="color: #007700">. </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElementById</span><span style="color: #007700">(</span><span style="color: #DD0000">'php-basics'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">tagName </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">The element whose id is &#039;php-basics&#039; is: book</pre>
</div>
   </div>
  </div>
 </div>

 <div class="refsect1 seealso" id="refsect1-domdocument.getelementbyid-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.getelementsbytagname.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::getElementsByTagName()</a> - Searches for all elements with given local tag name</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/getelementbyid.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.getelementbyid%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.getelementbyid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.getelementbyid.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100402">  <div class="votes">
    <div id="Vu100402">
    <a href="/manual/vote-note.php?id=100402&amp;page=domdocument.getelementbyid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100402">
    <a href="/manual/vote-note.php?id=100402&amp;page=domdocument.getelementbyid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100402" title="72% like this...">
    46
    </div>
  </div>
  <a href="#100402" class="name">
  <strong class="user"><em>ed at edgiardina dot com</em></strong></a><a class="genanchor" href="#100402"> &para;</a><div class="date" title="2010-10-13 11:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100402">
<div class="phpcode"><code><span class="html">Please note that if your HTML does not contain a doctype declaration, then getElementById will always return null.</span></code></div>
  </div>
 </div>
  <div class="note" id="90228">  <div class="votes">
    <div id="Vu90228">
    <a href="/manual/vote-note.php?id=90228&amp;page=domdocument.getelementbyid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90228">
    <a href="/manual/vote-note.php?id=90228&amp;page=domdocument.getelementbyid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90228" title="73% like this...">
    9
    </div>
  </div>
  <a href="#90228" class="name">
  <strong class="user"><em>carl2088 at gmail dot com</em></strong></a><a class="genanchor" href="#90228"> &para;</a><div class="date" title="2009-04-11 12:41"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90228">
<div class="phpcode"><code><span class="html">From my experience, getElementById seem to work fine without any setups if you have loaded a HTML document. But in order for getElementById to work with a simple XML document that you've "constructed", you have to set up the id with "xml:" prefix and use setIdAttribute on the element you created or it won't work. See following example, hope this will save someone's frustration. If you have loaded the xml file, then all you have to make sure is the ID has a xml: prefix for the attribute.  But if you start to append the XML document, don't forget to setIdAttribute on the id name or those elements or getElementById will return null when you try to find them. <br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">/* test.xml<br />    &lt;?xml version="1.0" encoding="utf-8"?&gt;<br />    &lt;root&gt;<br />        &lt;child xml:id="id_xxxxxx" status="partial"&gt;<br />            &lt;sub_child&gt;Some Data&lt;/sub_child&gt;<br />        &lt;/child&gt;<br />    &lt;/root&gt;<br />    */<br /><br />    </span><span class="default">$xmlDom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">);<br />    </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;                        </span><span class="comment">// we want a nice output<br /><br />    // create a root<br />    </span><span class="default">$eltRoot </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">"root"</span><span class="keyword">);<br />    </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$eltRoot</span><span class="keyword">);<br /><br />    </span><span class="default">$eltChild </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">"child"</span><span class="keyword">);<br />    </span><span class="default">$eltRoot</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$eltChild</span><span class="keyword">);<br />    <br />    </span><span class="comment">// add a id attribute<br />    </span><span class="default">$attr </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">createAttribute</span><span class="keyword">(</span><span class="string">"xml:id"</span><span class="keyword">);    </span><span class="comment">// needs xml prefix or getElementById won't work<br />    </span><span class="default">$eltChild</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$attr</span><span class="keyword">);<br />    <br />    </span><span class="comment">/// create the text node and append to the created element<br />    </span><span class="default">$tNode </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">"id_8120528"</span><span class="keyword">);<br />    </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$tNode</span><span class="keyword">);<br />    </span><span class="default">$eltChild</span><span class="keyword">-&gt;</span><span class="default">setIdAttribute</span><span class="keyword">(</span><span class="string">"xml:id"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);    </span><span class="comment">// VERY IMPORT or getElementById won't work<br />    <br />    // add a id attribute<br />    </span><span class="default">$attr </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">createAttribute</span><span class="keyword">(</span><span class="string">"status"</span><span class="keyword">);<br />    </span><span class="default">$eltChild</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$attr</span><span class="keyword">);<br />    <br />    </span><span class="comment">/// create the text node and append to the created element<br />    </span><span class="default">$tNode </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">"partial"</span><span class="keyword">);<br />    </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$tNode</span><span class="keyword">);    <br />    <br />    </span><span class="comment">// add a subchild<br />    </span><span class="default">$eltSub </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">"sub_child"</span><span class="keyword">);<br />    </span><span class="default">$eltChild</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$eltSub</span><span class="keyword">);<br />    <br />    </span><span class="default">$tNode </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">"Some Data"</span><span class="keyword">);<br />    </span><span class="default">$eltSub</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$tNode</span><span class="keyword">);<br /><br />    </span><span class="default">$id </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">$id </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">getElementById</span><span class="keyword">(</span><span class="string">"id_8120528"</span><span class="keyword">);<br />    <br />    </span><span class="default">assert </span><span class="keyword">(</span><span class="default">$id </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">);<br />    <br />    </span><span class="default">$strId </span><span class="keyword">= </span><span class="default">$id</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">"xml:id"</span><span class="keyword">); </span><span class="comment">// bug? empty<br />    </span><span class="default">$strStatus </span><span class="keyword">= </span><span class="default">$id</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">"status"</span><span class="keyword">); </span><span class="comment">// this works!<br />    <br />    </span><span class="default">assert </span><span class="keyword">(</span><span class="default">$id </span><span class="keyword">!=</span><span class="default">null</span><span class="keyword">);<br />    <br />    </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="string">"./_data/test.xml"</span><span class="keyword">);<br />    <br />    </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">"./_data/test.xml"</span><span class="keyword">); </span><span class="comment">// reloading fixes the problem<br />    <br />    </span><span class="default">$nodeRoot </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">"root"</span><span class="keyword">);<br />    if (</span><span class="default">$nodeRoot</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$eltRoot </span><span class="keyword">= </span><span class="default">$nodeRoot</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);    <br />    }<br />    <br />    </span><span class="default">assert</span><span class="keyword">(</span><span class="default">$eltRoot </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">);<br />    <br />    </span><span class="default">$id </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">$id </span><span class="keyword">= </span><span class="default">$xmlDom</span><span class="keyword">-&gt;</span><span class="default">getElementById</span><span class="keyword">(</span><span class="string">"id_8120528"</span><span class="keyword">);<br /><br />    </span><span class="default">assert </span><span class="keyword">(</span><span class="default">$id </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">);<br /><br />    </span><span class="default">$strId </span><span class="keyword">= </span><span class="default">$id</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">"xml:id"</span><span class="keyword">); </span><span class="comment">// this works now!<br />    </span><span class="default">$strStatus </span><span class="keyword">= </span><span class="default">$id</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">"status"</span><span class="keyword">); </span><span class="comment">// this works!<br />        <br />    <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96500">  <div class="votes">
    <div id="Vu96500">
    <a href="/manual/vote-note.php?id=96500&amp;page=domdocument.getelementbyid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96500">
    <a href="/manual/vote-note.php?id=96500&amp;page=domdocument.getelementbyid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96500" title="55% like this...">
    5
    </div>
  </div>
  <a href="#96500" class="name">
  <strong class="user"><em>paradox_haze at live dot de</em></strong></a><a class="genanchor" href="#96500"> &para;</a><div class="date" title="2010-03-02 10:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96500">
<div class="phpcode"><code><span class="html">Had some issues with getElementById() while searching for a specific element in a XHTML document.<br />I wrote a small function what was solving my problem:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getElementById</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">)<br />{<br />    </span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">domDocument</span><span class="keyword">);<br />    return </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"//*[@id='</span><span class="default">$id</span><span class="string">']"</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72693">  <div class="votes">
    <div id="Vu72693">
    <a href="/manual/vote-note.php?id=72693&amp;page=domdocument.getelementbyid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72693">
    <a href="/manual/vote-note.php?id=72693&amp;page=domdocument.getelementbyid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72693" title="56% like this...">
    2
    </div>
  </div>
  <a href="#72693" class="name">
  <strong class="user"><em>simon at somewhere dot com</em></strong></a><a class="genanchor" href="#72693"> &para;</a><div class="date" title="2007-01-29 08:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72693">
<div class="phpcode"><code><span class="html">SAVE YOURSELF A MAJOR HEADACHE AND A LOT OF SEARCHING THROUGH DOCUMENTATION - <br /><br />Instead of using $object-&gt;setAttribute('id', 'id_name_here')<br />USE THIS: $object-&gt;setAttribute('xml:id', 'id_name_here')<br /><br />Then, to get the node value: $domDocumentObject-&gt;getElementById('id_name_here');<br /><br />The xml:id attribute should AUTOMATICALLY be defined!!<br /><br />Woohoo!  That was easy......</span></code></div>
  </div>
 </div>
  <div class="note" id="56651">  <div class="votes">
    <div id="Vu56651">
    <a href="/manual/vote-note.php?id=56651&amp;page=domdocument.getelementbyid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56651">
    <a href="/manual/vote-note.php?id=56651&amp;page=domdocument.getelementbyid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56651" title="57% like this...">
    1
    </div>
  </div>
  <a href="#56651" class="name">
  <strong class="user"><em>bart at mediawave dot nl</em></strong></a><a class="genanchor" href="#56651"> &para;</a><div class="date" title="2005-09-11 04:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56651">
<div class="phpcode"><code><span class="html">It seems getElementById works fine without setting validateOnParse to true. Which is nice since setting this to true caused some performance problems with my script.</span></code></div>
  </div>
 </div>
  <div class="note" id="59932">  <div class="votes">
    <div id="Vu59932">
    <a href="/manual/vote-note.php?id=59932&amp;page=domdocument.getelementbyid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59932">
    <a href="/manual/vote-note.php?id=59932&amp;page=domdocument.getelementbyid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59932" title="55% like this...">
    1
    </div>
  </div>
  <a href="#59932" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#59932"> &para;</a><div class="date" title="2005-12-20 07:04"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59932">
<div class="phpcode"><code><span class="html">If you're trying to use getElementById with a xml file validated on a xsd file you must first use the schemaValidate function or getElementById will return null<br />Example:<br /><br />  $dom = new DomDocument();<br />  $dom-&gt;load("users.xml");<br />  $dom-&gt;schemaValidate("users.xsd");<br /><br />  $curruser = $dom-&gt;getElementById($user-&gt;name);</span></code></div>
  </div>
 </div>
  <div class="note" id="125175">  <div class="votes">
    <div id="Vu125175">
    <a href="/manual/vote-note.php?id=125175&amp;page=domdocument.getelementbyid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125175">
    <a href="/manual/vote-note.php?id=125175&amp;page=domdocument.getelementbyid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125175" title="100% like this...">
    2
    </div>
  </div>
  <a href="#125175" class="name">
  <strong class="user"><em>Hoi</em></strong></a><a class="genanchor" href="#125175"> &para;</a><div class="date" title="2020-07-07 10:39"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125175">
<div class="phpcode"><code><span class="html">To set a hidden id that can be used by $dom-&gt;getElementById() apply setAttribute('id', true) as in the following example<br /><br />                    $createItemNode = function ($data) use ($dom) {<br />                        $node = $dom-&gt;createElement("Item");<br />                        $node-&gt;setAttribute('id', $data-&gt;id);<br />                        $node-&gt;setAttribute('hed', $data-&gt;hed);<br />                        $node-&gt;setAttribute('run_time', $data-&gt;run_time);<br />                        $node-&gt;setAttribute('date', $data-&gt;date);<br /><br />                        // Internally mark the id as 'xml:id' for getElementById to work. Adding xml:id manually to the tag will cause loadXML to throw an error DOMDocument: xml:id is not a NCName in Entity<br />                        $node-&gt;setIdAttribute('id', true);<br /><br />                        return $node;<br />                    };<br /><br />With $node-&gt;setIdAttribute('id', true), $dom-&gt;getElementById($id) will work <br /><br />When you do $dom-&gt;saveXML(), the final doc will not contain any xml:id attribute.</span></code></div>
  </div>
 </div>
  <div class="note" id="64137">  <div class="votes">
    <div id="Vu64137">
    <a href="/manual/vote-note.php?id=64137&amp;page=domdocument.getelementbyid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64137">
    <a href="/manual/vote-note.php?id=64137&amp;page=domdocument.getelementbyid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64137" title="50% like this...">
    0
    </div>
  </div>
  <a href="#64137" class="name">
  <strong class="user"><em>Tangui dot Le-Pense at laposte dot net</em></strong></a><a class="genanchor" href="#64137"> &para;</a><div class="date" title="2006-04-08 06:00"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64137">
<div class="phpcode"><code><span class="html">Validating a document from a DTD so as to use getElementById is sometimes impossible (for example when the head and body elements are not included yet in a XHtml document : the validation failed).<br />Fortunately, xml:id is supported by this function :)<br />That may be useful.<br /><a href="http://www.w3.org/TR/xml-id/" rel="nofollow" target="_blank">http://www.w3.org/TR/xml-id/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="70868">  <div class="votes">
    <div id="Vu70868">
    <a href="/manual/vote-note.php?id=70868&amp;page=domdocument.getelementbyid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70868">
    <a href="/manual/vote-note.php?id=70868&amp;page=domdocument.getelementbyid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70868" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#70868" class="name">
  <strong class="user"><em>jonbarnett at gmail dot com</em></strong></a><a class="genanchor" href="#70868"> &para;</a><div class="date" title="2006-11-01 08:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70868">
<div class="phpcode"><code><span class="html">If your XML document does not have a DTD that defines the "id" attribute as an ID, then the easiest thing to do is to use XPath-&gt;query() to find an element that matches "//[@id='x']"</span></code></div>
  </div>
 </div>
  <div class="note" id="86056">  <div class="votes">
    <div id="Vu86056">
    <a href="/manual/vote-note.php?id=86056&amp;page=domdocument.getelementbyid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86056">
    <a href="/manual/vote-note.php?id=86056&amp;page=domdocument.getelementbyid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86056" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#86056" class="name">
  <strong class="user"><em>guillaume dot crico at gmail dot com</em></strong></a><a class="genanchor" href="#86056"> &para;</a><div class="date" title="2008-10-01 07:55"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86056">
<div class="phpcode"><code><span class="html">You don't want to use "xml:id" ?
<br />Here is the relaxNG trick (with a generic schema):
<br />(tested with libxml 2.6.26)
<br />
<br /><span class="default">&lt;?php
<br />$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(...);
<br />
<br /></span><span class="default">$rng </span><span class="keyword">= </span><span class="string">'
<br />&lt;grammar xmlns="<a href="http://relaxng.org/ns/structure/1.0" rel="nofollow" target="_blank">http://relaxng.org/ns/structure/1.0</a>" datatypeLibrary="<a href="http://www.w3.org/2001/XMLSchema-datatypes" rel="nofollow" target="_blank">http://www.w3.org/2001/XMLSchema-datatypes</a>"&gt;
<br />    &lt;start&gt;
<br />        &lt;element&gt;
<br />            &lt;anyName/&gt;
<br />            &lt;ref name="anythingID"/&gt;
<br />        &lt;/element&gt;
<br />    &lt;/start&gt;
<br />    &lt;define name="anythingID"&gt;
<br />        &lt;zeroOrMore&gt;
<br />            &lt;choice&gt;
<br />                &lt;element&gt;
<br />                    &lt;anyName/&gt;
<br />                    &lt;ref name="anythingID"/&gt;
<br />                &lt;/element&gt;
<br />                &lt;attribute name="id"&gt;
<br />                    &lt;data type="ID"/&gt;
<br />                &lt;/attribute&gt;
<br />                &lt;zeroOrMore&gt;
<br />                    &lt;attribute&gt;&lt;anyName/&gt;&lt;/attribute&gt;
<br />                &lt;/zeroOrMore&gt;
<br />                &lt;text/&gt;
<br />            &lt;/choice&gt;
<br />        &lt;/zeroOrMore&gt;
<br />    &lt;/define&gt;
<br />&lt;/grammar&gt;
<br />'</span><span class="keyword">;
<br />
<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">relaxNGValidateSource</span><span class="keyword">(</span><span class="default">$rng</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementById</span><span class="keyword">(</span><span class="string">'id1'</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />
<br />Note that ID values must be valid ones :
<br />  - integers do no work! 
<br />  - @see <a href="http://www.w3.org/TR/REC-xml/#id" rel="nofollow" target="_blank">http://www.w3.org/TR/REC-xml/#id</a>
<br />  - =&gt; (Letter | '_' | ':') ( Letter | Digit | '.' | '-' | '_' | ':' | CombiningChar | Extender  )*</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.getelementbyid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.getelementbyid.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
