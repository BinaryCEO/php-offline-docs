<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SimpleXMLElement::xpath - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/simplexmlelement.xpath.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/simplexmlelement.xpath.php">
 <link rel="alternate" href="https://www.php.net/manual/en/simplexmlelement.xpath.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.simplexmlelement.php">
 <link rel="prev" href="https://www.php.net/manual/en/simplexmlelement.valid.php">
 <link rel="next" href="https://www.php.net/manual/en/class.simplexmliterator.php">

 <link rel="alternate" href="https://www.php.net/manual/en/simplexmlelement.xpath.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/simplexmlelement.xpath.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/simplexmlelement.xpath.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/simplexmlelement.xpath.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/simplexmlelement.xpath.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/simplexmlelement.xpath.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/simplexmlelement.xpath.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/simplexmlelement.xpath.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/simplexmlelement.xpath.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/simplexmlelement.xpath.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/simplexmlelement.xpath.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Runs XPath query on XML data" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SimpleXMLElement::xpath - Manual" />
<meta name="twitter:description" content="Runs XPath query on XML data" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SimpleXMLElement::xpath - Manual" />
<meta itemprop="description" content="Runs XPath query on XML data" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Runs XPath query on XML data" />

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
        <a href="class.simplexmliterator.php">
          SimpleXMLIterator &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="simplexmlelement.valid.php">
          &laquo; SimpleXMLElement::valid        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.simplexml.php'>SimpleXML</a></li>      <li><a href='class.simplexmlelement.php'>SimpleXMLElement</a></li>      </ul>
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
            <option value='en/simplexmlelement.xpath.php' selected="selected">English</option>
            <option value='de/simplexmlelement.xpath.php'>German</option>
            <option value='es/simplexmlelement.xpath.php'>Spanish</option>
            <option value='fr/simplexmlelement.xpath.php'>French</option>
            <option value='it/simplexmlelement.xpath.php'>Italian</option>
            <option value='ja/simplexmlelement.xpath.php'>Japanese</option>
            <option value='pt_BR/simplexmlelement.xpath.php'>Brazilian Portuguese</option>
            <option value='ru/simplexmlelement.xpath.php'>Russian</option>
            <option value='tr/simplexmlelement.xpath.php'>Turkish</option>
            <option value='uk/simplexmlelement.xpath.php'>Ukrainian</option>
            <option value='zh/simplexmlelement.xpath.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="simplexmlelement.xpath" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SimpleXMLElement::xpath</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SimpleXMLElement::xpath</span> &mdash; <span class="dc-title">Runs XPath query on XML data</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-simplexmlelement.xpath-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SimpleXMLElement::xpath</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$expression</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   The <code class="literal">xpath</code> method searches the SimpleXML node for
   children matching the <abbr title="XML Path Language">XPath</abbr> <code class="parameter">expression</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-simplexmlelement.xpath-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">expression</code></dt>
     <dd>
      <p class="para">
       An XPath path
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-simplexmlelement.xpath-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of SimpleXMLElement objects on success; or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> in
   case of an error.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-simplexmlelement.xpath-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5896">
    <p><strong>Example #1 Xpath</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= &lt;&lt;&lt;XML<br /></span><span style="color: #DD0000">&lt;a&gt;<br /> &lt;b&gt;<br />  &lt;c&gt;text&lt;/c&gt;<br />  &lt;c&gt;stuff&lt;/c&gt;<br /> &lt;/b&gt;<br /> &lt;d&gt;<br />  &lt;c&gt;code&lt;/c&gt;<br /> &lt;/d&gt;<br />&lt;/a&gt;<br /></span><span style="color: #007700">XML;<br /><br /></span><span style="color: #0000BB">$xml </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Search for &lt;a&gt;&lt;b&gt;&lt;c&gt; */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">xpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'/a/b/c'</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$result </span><span style="color: #007700">as </span><span style="color: #0000BB">$node</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'/a/b/c: '</span><span style="color: #007700">,</span><span style="color: #0000BB">$node</span><span style="color: #007700">,</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">/* Relative paths also work... */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">xpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'b/c'</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$result </span><span style="color: #007700">as </span><span style="color: #0000BB">$node</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'b/c: '</span><span style="color: #007700">,</span><span style="color: #0000BB">$node</span><span style="color: #007700">,</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">/a/b/c: text
/a/b/c: stuff
b/c: text
b/c: stuff</pre>
</div>
    </div>
    <div class="example-contents"><p>
     Notice that the two results are equal.
    </p></div>
   </div>
  </p>
 </div>


  <div class="refsect1 seealso" id="refsect1-simplexmlelement.xpath-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="simplexmlelement.registerxpathnamespace.php" class="methodname" rel="rdfs-seeAlso">SimpleXMLElement::registerXPathNamespace()</a> - Creates a prefix/ns context for the next XPath query</span></li>
    <li><span class="methodname"><a href="simplexmlelement.getdocnamespaces.php" class="methodname" rel="rdfs-seeAlso">SimpleXMLElement::getDocNamespaces()</a> - Returns namespaces declared in document</span></li>
    <li><span class="methodname"><a href="simplexmlelement.getnamespaces.php" class="methodname" rel="rdfs-seeAlso">SimpleXMLElement::getNamespaces()</a> - Returns namespaces used in document</span></li>
    <li><a href="simplexml.examples-basic.php" class="xref">Basic SimpleXML usage</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/simplexml/simplexmlelement/xpath.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsimplexmlelement.xpath%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=simplexmlelement.xpath&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexmlelement.xpath.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115957">  <div class="votes">
    <div id="Vu115957">
    <a href="/manual/vote-note.php?id=115957&amp;page=simplexmlelement.xpath&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115957">
    <a href="/manual/vote-note.php?id=115957&amp;page=simplexmlelement.xpath&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115957" title="80% like this...">
    38
    </div>
  </div>
  <a href="#115957" class="name">
  <strong class="user"><em>leonjanzen at gmail dot com</em></strong></a><a class="genanchor" href="#115957"> &para;</a><div class="date" title="2014-10-19 07:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115957">
<div class="phpcode"><code><span class="html">To run an xpath query on an XML document that has a namespace, the namespace must be registered with SimpleXMLElement::registerXPathNamespace() before running the query. If the XML document namespace does not include a prefix, you must make up an arbitrary one, and then use it in your query.<br /><br /><span class="default">&lt;?php<br />$strXml</span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;mydoc xmlns="<a href="http://www.url.com/myns" rel="nofollow" target="_blank">http://www.url.com/myns</a>"&gt;<br />    &lt;message&gt;Test message&lt;/message&gt;<br />&lt;/mydoc&gt;<br /></span><span class="keyword">XML;<br /><br /></span><span class="default">$xmlDoc</span><span class="keyword">=new </span><span class="default">\SimpleXMLElement</span><span class="keyword">(</span><span class="default">$strXml</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$xmlDoc</span><span class="keyword">-&gt;</span><span class="default">getDocNamespaces</span><span class="keyword">() as </span><span class="default">$strPrefix </span><span class="keyword">=&gt; </span><span class="default">$strNamespace</span><span class="keyword">) {<br />    if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$strPrefix</span><span class="keyword">)==</span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$strPrefix</span><span class="keyword">=</span><span class="string">"a"</span><span class="keyword">; </span><span class="comment">//Assign an arbitrary namespace prefix.<br />    </span><span class="keyword">}<br />    </span><span class="default">$xmlDoc</span><span class="keyword">-&gt;</span><span class="default">registerXPathNamespace</span><span class="keyword">(</span><span class="default">$strPrefix</span><span class="keyword">,</span><span class="default">$strNamespace</span><span class="keyword">);<br />}<br /><br />print(</span><span class="default">$xmlDoc</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">"//a:message"</span><span class="keyword">)[</span><span class="default">0</span><span class="keyword">]); </span><span class="comment">//Use the arbitrary namespace prefix in the query.<br /></span><span class="default">?&gt;<br /></span><br />This will output:<br /><br />Test message</span></code></div>
  </div>
 </div>
  <div class="note" id="96153">  <div class="votes">
    <div id="Vu96153">
    <a href="/manual/vote-note.php?id=96153&amp;page=simplexmlelement.xpath&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96153">
    <a href="/manual/vote-note.php?id=96153&amp;page=simplexmlelement.xpath&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96153" title="66% like this...">
    29
    </div>
  </div>
  <a href="#96153" class="name">
  <strong class="user"><em>grummfy at gmail dot com</em></strong></a><a class="genanchor" href="#96153"> &para;</a><div class="date" title="2010-02-11 04:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96153">
<div class="phpcode"><code><span class="html">On a xml that have namespace you need to do this before your xpath request (or empty array will be return) :
<br />
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'xmlns='</span><span class="keyword">, </span><span class="string">'ns='</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); </span><span class="comment">//$string is a string that contains xml...
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54638">  <div class="votes">
    <div id="Vu54638">
    <a href="/manual/vote-note.php?id=54638&amp;page=simplexmlelement.xpath&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54638">
    <a href="/manual/vote-note.php?id=54638&amp;page=simplexmlelement.xpath&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54638" title="69% like this...">
    20
    </div>
  </div>
  <a href="#54638" class="name">
  <strong class="user"><em>drewish at katherinehouse dot com</em></strong></a><a class="genanchor" href="#54638"> &para;</a><div class="date" title="2005-07-10 06:16"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54638">
<div class="phpcode"><code><span class="html">xpath() can also be used to select elements by their attributes. For a good XPath reference check out: <a href="http://www.w3schools.com/xpath/xpath_syntax.asp" rel="nofollow" target="_blank">http://www.w3schools.com/xpath/xpath_syntax.asp</a>
<br />
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= &lt;&lt;&lt;XML
<br /></span><span class="string">&lt;sizes&gt;
<br />    &lt;size label="Square" width="75" height="75" /&gt;
<br />    &lt;size label="Thumbnail" width="100" height="62" /&gt;
<br />    &lt;size label="Small" width="112" height="69" /&gt;
<br />    &lt;size label="Large" width="112" height="69" /&gt;
<br />&lt;/sizes&gt;
<br /></span><span class="keyword">XML;
<br />
<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">"//size[@label='Large']"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// print the first (and only) member of the array
<br /></span><span class="keyword">echo </span><span class="default">$result</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">asXml</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />The script would print: 
<br />&lt;size label="Large" width="112" height="69"/&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="127677">  <div class="votes">
    <div id="Vu127677">
    <a href="/manual/vote-note.php?id=127677&amp;page=simplexmlelement.xpath&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127677">
    <a href="/manual/vote-note.php?id=127677&amp;page=simplexmlelement.xpath&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127677" title="75% like this...">
    2
    </div>
  </div>
  <a href="#127677" class="name">
  <strong class="user"><em>Filippo Vicari</em></strong></a><a class="genanchor" href="#127677"> &para;</a><div class="date" title="2022-09-28 09:56"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127677">
<div class="phpcode"><code><span class="html">You can also search for siblings with a condition. For example immagine to need the title for a desidered language which with the two siblings tags in this XML file<br /><br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;IDOC BEGIN="1"&gt;<br />...<br />&lt;PRODUCT SEGMENT="1"&gt;<br />    &lt;PRODUCTCODE&gt;005&lt;/PRODUCTCODE&gt;<br />    &lt;LANG&gt;E&lt;/LANG&gt;<br />    &lt;TITLE&gt;Name&lt;/TITLE&gt;<br />    &lt;LANG_ISO&gt;EN&lt;/LANG_ISO&gt;<br />&lt;/PRODUCT&gt;<br />&lt;PRODUCT SEGMENT="1"&gt;<br />    &lt;PRODUCTCODE&gt;005&lt;/PRODUCTCODE&gt;<br />    &lt;LANG&gt;I&lt;/LANG&gt;<br />    &lt;TITLE&gt;Name I&lt;/TITLE&gt;<br />    &lt;LANG_ISO&gt;IT&lt;/LANG_ISO&gt;<br />&lt;/PRODUCT&gt;<br />...  <br />&lt;/IDOC&gt;<br /><br />Let's break it down<br /><span class="default">&lt;?php<br /></span><span class="string">"//PRODUCT" </span><span class="comment">// find product tag<br /></span><span class="string">"//PRODUCT/LANG[.='E']" </span><span class="comment">// whithin it find lang == "E"<br /></span><span class="string">"//PRODUCT/LANG[.='E']/../"  </span><span class="comment">// go up one step<br /></span><span class="string">"//PRODUCT/LANG[.='E']/../TITLE" </span><span class="comment">// get the title Tag content<br /><br />// Combined search and find siblings ----------------------------<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">"fname.xml"</span><span class="keyword">);<br /><br /></span><span class="comment">// Search for the TITLE field which sibling is == "E" ----------<br /></span><span class="default">$title_E_array </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">"//PRODUCT/LANG[.='E']/../TITLE"</span><span class="keyword">); </span><span class="comment">// By default gives back an array of  SimpleXmlElement <br /></span><span class="default">$title </span><span class="keyword">= (string) </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">"//PRODUCT/LANG[.='E']/../TITLE"</span><span class="keyword">)[</span><span class="default">0</span><span class="keyword">]; </span><span class="comment">// in this way saves only the value as a string<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84196">  <div class="votes">
    <div id="Vu84196">
    <a href="/manual/vote-note.php?id=84196&amp;page=simplexmlelement.xpath&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84196">
    <a href="/manual/vote-note.php?id=84196&amp;page=simplexmlelement.xpath&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84196" title="62% like this...">
    11
    </div>
  </div>
  <a href="#84196" class="name">
  <strong class="user"><em>anemik</em></strong></a><a class="genanchor" href="#84196"> &para;</a><div class="date" title="2008-07-02 03:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84196">
<div class="phpcode"><code><span class="html">If you want to find easly all records satisfying some condition in XML data like 
<br />
<br />....
<br />   &lt;book id="bk101"&gt;
<br />      &lt;author&gt;Gambardella, Matthew&lt;/author&gt;
<br />      &lt;title&gt;XML Developer's Guide&lt;/title&gt;
<br />      &lt;genre&gt;Computer&lt;/genre&gt;
<br />      &lt;price&gt;44.95&lt;/price&gt;
<br />   &lt;/book&gt;
<br />   &lt;book id="bk102"&gt;
<br />      &lt;author&gt;Ralls, Kim&lt;/author&gt;
<br />      &lt;title&gt;Midnight Rain&lt;/title&gt;
<br />      &lt;genre&gt;Fantasy&lt;/genre&gt;
<br />      &lt;price&gt;5.95&lt;/price&gt;
<br />   &lt;/book&gt;
<br />...
<br />
<br />try example below
<br />
<br /><span class="default">&lt;?php
<br />
<br />$xmlStr </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'data/books.xml'</span><span class="keyword">);
<br /></span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$xmlStr</span><span class="keyword">);
<br /></span><span class="comment">// seach records by tag value:
<br />// find all book records with price higher than 40$
<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">"book/price[.&gt;'40']/parent::*"</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />You will see response like:
<br />Array (
<br />[0] =&gt; SimpleXMLElement Object
<br />        (
<br />            [@attributes] =&gt; Array
<br />                (
<br />                    [id] =&gt; bk101
<br />                )
<br />
<br />            [author] =&gt; Gambardella, Matthew
<br />            [title] =&gt; XML Developer's Guide
<br />            [genre] =&gt; Computer
<br />            [price] =&gt; 44.95
<br />            [publish_date] =&gt; 2000-10-01
<br />            [description] =&gt; An in-depth look at creating applications 
<br />      with XML.
<br />        )
<br />...</span></code></div>
  </div>
 </div>
  <div class="note" id="120564">  <div class="votes">
    <div id="Vu120564">
    <a href="/manual/vote-note.php?id=120564&amp;page=simplexmlelement.xpath&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120564">
    <a href="/manual/vote-note.php?id=120564&amp;page=simplexmlelement.xpath&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120564" title="62% like this...">
    2
    </div>
  </div>
  <a href="#120564" class="name">
  <strong class="user"><em>awoerl at contentserv dot com</em></strong></a><a class="genanchor" href="#120564"> &para;</a><div class="date" title="2017-01-31 12:43"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120564">
<div class="phpcode"><code><span class="html">I tried to use string functions in the xpath statements I'm passing, like<br /><br />$oXml-&gt;xpath('substring(/foo/bar/text(), 0, 4)');<br /><br />But no matter which syntax I'm trying I never the string functions to work. <br /><br />Is it possible, that the xpath method does not support function calls?</span></code></div>
  </div>
 </div>
  <div class="note" id="116622">  <div class="votes">
    <div id="Vu116622">
    <a href="/manual/vote-note.php?id=116622&amp;page=simplexmlelement.xpath&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116622">
    <a href="/manual/vote-note.php?id=116622&amp;page=simplexmlelement.xpath&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116622" title="58% like this...">
    3
    </div>
  </div>
  <a href="#116622" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116622"> &para;</a><div class="date" title="2015-01-30 05:30"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116622">
<div class="phpcode"><code><span class="html">As mentioned already xpath will fail is the default namespace 'xmlns' is used like in:<br /><br /><span class="default">&lt;?php<br /><br />$xmlstring </span><span class="keyword">= </span><span class="default">$string </span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;?xml version="1.0" encoding="UTF-8" standalone="yes"?&gt;<br />&lt;workbook xmlns="<a href="http://schemas.openxmlformats.org/spreadsheetml/2006/main" rel="nofollow" target="_blank">http://schemas.openxmlformats.org/spreadsheetml/2006/main</a>"&gt;<br />    &lt;fileVersion appName="xl" /&gt;<br />&lt;/workbook&gt;<br /></span><span class="keyword">XML;<br /></span><span class="default">?&gt;<br /></span><br />xpath cannot search through the xml without explicitly specifying a namespace.<br />There are 2 options :<br />1. rename the 'xmlns' into something else to trick xpath into believing that no default namespace is defined.<br />2. register a string as the default namespace and use that string in all your queries. Unfortunatly, an empty space will not work.<br />No other option currently exist until XPath2.0 becomes the default library.</span></code></div>
  </div>
 </div>
  <div class="note" id="82986">  <div class="votes">
    <div id="Vu82986">
    <a href="/manual/vote-note.php?id=82986&amp;page=simplexmlelement.xpath&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82986">
    <a href="/manual/vote-note.php?id=82986&amp;page=simplexmlelement.xpath&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82986" title="57% like this...">
    5
    </div>
  </div>
  <a href="#82986" class="name">
  <strong class="user"><em>canuemail at gmail dot com</em></strong></a><a class="genanchor" href="#82986"> &para;</a><div class="date" title="2008-05-05 05:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82986">
<div class="phpcode"><code><span class="html">If you want to search multiple values from xml on the behalf or one value then this code can be helpfull to you.
<br />
<br />if there is:
<br />&lt;Record&gt;
<br />  &lt;country&gt;Pakistan&lt;/country&gt;
<br />  &lt;code&gt;+92&lt;/code&gt;
<br />  &lt;Value&gt;100&lt;Value&gt;
<br />&lt;/Record&gt;
<br />
<br />then try this one:
<br /><span class="default">&lt;?php
<br />$sxe </span><span class="keyword">=  </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">"countries.XML"</span><span class="keyword">);
<br />foreach(</span><span class="default">$sxe</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">'//RECORD'</span><span class="keyword">) as </span><span class="default">$item</span><span class="keyword">) {
<br />
<br />    </span><span class="default">$row </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">());
<br />    </span><span class="default">$v </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">'//country[. ="Pakistan"]'</span><span class="keyword">);
<br />    if(</span><span class="default">$v</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]){
<br />        print </span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">country</span><span class="keyword">;
<br />        print </span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">code</span><span class="keyword">;
<br />        print </span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">;
<br />    }
<br />    
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101804">  <div class="votes">
    <div id="Vu101804">
    <a href="/manual/vote-note.php?id=101804&amp;page=simplexmlelement.xpath&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101804">
    <a href="/manual/vote-note.php?id=101804&amp;page=simplexmlelement.xpath&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101804" title="54% like this...">
    3
    </div>
  </div>
  <a href="#101804" class="name">
  <strong class="user"><em>yetihehe at yetihehe dot com</em></strong></a><a class="genanchor" href="#101804"> &para;</a><div class="date" title="2011-01-12 02:21"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101804">
<div class="phpcode"><code><span class="html">Xpath actually knows which element is root regardless of element on which you execute it. Example:<br /><br /><span class="default">&lt;?php<br /><br />$string </span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;a&gt;<br /> &lt;b&gt;<br />  &lt;c&gt;text&lt;/c&gt;<br />  &lt;c&gt;stuff&lt;/c&gt;<br /> &lt;/b&gt;<br /> &lt;b&gt;<br />  &lt;c&gt;code&lt;/c&gt;<br /> &lt;/b&gt;<br />&lt;/a&gt;<br /></span><span class="keyword">XML;<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'content-type: text/plain'</span><span class="keyword">);<br /><br /></span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br /><br /></span><span class="comment">//relative to root<br /></span><span class="default">$b0</span><span class="keyword">=</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">'//c'</span><span class="keyword">);<br />while(list( , </span><span class="default">$node</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$b0</span><span class="keyword">)) {<br />    echo </span><span class="string">'b[0]: //c: '</span><span class="keyword">,</span><span class="default">$node</span><span class="keyword">,</span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$b1</span><span class="keyword">=</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">'//c'</span><span class="keyword">);<br />while(list( , </span><span class="default">$node</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$b1</span><span class="keyword">)) {<br />    echo </span><span class="string">'b[1]: //c: '</span><span class="keyword">,</span><span class="default">$node</span><span class="keyword">,</span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br />echo </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment">//relative to current element<br /></span><span class="default">$b0</span><span class="keyword">=</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">'.//c'</span><span class="keyword">);<br />while(list( , </span><span class="default">$node</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$b0</span><span class="keyword">)) {<br />    echo </span><span class="string">'b[0]: .//c: '</span><span class="keyword">,</span><span class="default">$node</span><span class="keyword">,</span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$b1</span><span class="keyword">=</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">'.//c'</span><span class="keyword">);<br />while(list( , </span><span class="default">$node</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$b1</span><span class="keyword">)) {<br />    echo </span><span class="string">'b[1]: .//c: '</span><span class="keyword">,</span><span class="default">$node</span><span class="keyword">,</span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Will return:<br />b[0]: //c: text<br />b[0]: //c: stuff<br />b[0]: //c: code<br />b[1]: //c: text<br />b[1]: //c: stuff<br />b[1]: //c: code<br /><br />b[0]: .//c: text<br />b[0]: .//c: stuff<br />b[1]: .//c: code</span></code></div>
  </div>
 </div>
  <div class="note" id="83922">  <div class="votes">
    <div id="Vu83922">
    <a href="/manual/vote-note.php?id=83922&amp;page=simplexmlelement.xpath&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83922">
    <a href="/manual/vote-note.php?id=83922&amp;page=simplexmlelement.xpath&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83922" title="55% like this...">
    1
    </div>
  </div>
  <a href="#83922" class="name">
  <strong class="user"><em>paul at pmtlogic dot com</em></strong></a><a class="genanchor" href="#83922"> &para;</a><div class="date" title="2008-06-18 12:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83922">
<div class="phpcode"><code><span class="html">xpath doesn't seem to be able to handle single quotes embedded in the query itself. For instance, I want to find geo coordinates in an xml file based on country name. 
<br />
<br />xml snippet:
<br />
<br />&lt;zones&gt;
<br />&lt;zone country="Cote d'Ivoire" fullName="Yamoussoukro" geo="6.82,-5.28" id="1050"&gt;&lt;url prefix="1001" value="fiji.html" /&gt;&lt;url prefix="1002" value="C" /&gt;&lt;/zone&gt;
<br />&lt;/zones&gt;
<br />
<br />The following code does not work:
<br />
<br /><span class="default">&lt;?php
<br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">"my.xml"</span><span class="keyword">);
<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">"//zone[@country='Cote d\'Ivoire']"</span><span class="keyword">);
<br />
<br />foreach ( </span><span class="default">$result</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">attributes</span><span class="keyword">() as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val </span><span class="keyword">) {
<br />    print </span><span class="string">"&lt;div class='coords'&gt;</span><span class="default">$key</span><span class="string">: </span><span class="default">$val</span><span class="string">&lt;/div&gt;\n"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />I have tried many variations on the embedded single quote (i.e. escape codes) but with no result. W3C offers no explanation either. 
<br />
<br />In addition, there doesn't seem to be any way of embedding wildcards in the attribute value (you can embed wildcards in the attribute name). Otherwise the following might be a reasonable substitute in this context:
<br />
<br /><span class="default">&lt;?php $result </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">"//zone[@country='Cote d*Ivoire']"</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=simplexmlelement.xpath&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexmlelement.xpath.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.simplexmlelement.php">SimpleXMLElement</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="simplexmlelement.addattribute.php" title="addAttribute">addAttribute</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.addchild.php" title="addChild">addChild</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.asxml.php" title="asXML">asXML</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.attributes.php" title="attributes">attributes</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.children.php" title="children">children</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.getdocnamespaces.php" title="getDocNamespaces">getDocNamespaces</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.getname.php" title="getName">getName</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.getnamespaces.php" title="getNamespaces">getNamespaces</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.getchildren.php" title="getChildren">getChildren</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.haschildren.php" title="hasChildren">hasChildren</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.registerxpathnamespace.php" title="registerXPathNamespace">registerXPathNamespace</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.savexml.php" title="saveXML">saveXML</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.valid.php" title="valid">valid</a>
                        </li>
                                                <li class="current">
                            <a href="simplexmlelement.xpath.php" title="xpath">xpath</a>
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
