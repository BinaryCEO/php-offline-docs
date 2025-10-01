<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: IteratorAggregate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.iteratoraggregate.php">
 <link rel="shorturl" href="https://www.php.net/iteratoraggregate">
 <link rel="alternate" href="https://www.php.net/iteratoraggregate" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.interfaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/iterator.valid.php">
 <link rel="next" href="https://www.php.net/manual/en/iteratoraggregate.getiterator.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.iteratoraggregate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.iteratoraggregate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.iteratoraggregate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.iteratoraggregate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.iteratoraggregate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.iteratoraggregate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.iteratoraggregate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.iteratoraggregate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.iteratoraggregate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.iteratoraggregate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.iteratoraggregate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The IteratorAggregate interface" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: IteratorAggregate - Manual" />
<meta name="twitter:description" content="The IteratorAggregate interface" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: IteratorAggregate - Manual" />
<meta itemprop="description" content="The IteratorAggregate interface" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The IteratorAggregate interface" />

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
        <a href="iteratoraggregate.getiterator.php">
          IteratorAggregate::getIterator &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="iterator.valid.php">
          &laquo; Iterator::valid        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='reserved.interfaces.php'>Predefined Interfaces and Classes</a></li>      </ul>
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
            <option value='en/class.iteratoraggregate.php' selected="selected">English</option>
            <option value='de/class.iteratoraggregate.php'>German</option>
            <option value='es/class.iteratoraggregate.php'>Spanish</option>
            <option value='fr/class.iteratoraggregate.php'>French</option>
            <option value='it/class.iteratoraggregate.php'>Italian</option>
            <option value='ja/class.iteratoraggregate.php'>Japanese</option>
            <option value='pt_BR/class.iteratoraggregate.php'>Brazilian Portuguese</option>
            <option value='ru/class.iteratoraggregate.php'>Russian</option>
            <option value='tr/class.iteratoraggregate.php'>Turkish</option>
            <option value='uk/class.iteratoraggregate.php'>Ukrainian</option>
            <option value='zh/class.iteratoraggregate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.iteratoraggregate" class="reference">

 <h1 class="title">The IteratorAggregate interface</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="iteratoraggregate.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Interface to create an external Iterator.
   </p>
  </div>


  <div class="section" id="iteratoraggregate.synopsis">
   <h2 class="title">Interface synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">interface</span> <strong class="interfacename"><strong class="interfacename">IteratorAggregate</strong></strong>

    <span class="modifier">extends</span>
      <a href="class.traversable.php" class="interfacename">Traversable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="iteratoraggregate.getiterator.php" class="methodname">getIterator</a></span>(): <span class="type"><a href="class.traversable.php" class="type Traversable">Traversable</a></span></div>

   }</div>


  </div>

  <div class="section" id="iteratoraggregate.examples">
   <h2 class="title">Examples</h2>
   <div class="example" id="iteratoraggregate.example.basic">
    <p><strong>Example #1 Basic usage</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">myData </span><span style="color: #007700">implements </span><span style="color: #0000BB">IteratorAggregate<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$property1 </span><span style="color: #007700">= </span><span style="color: #DD0000">"Public property one"</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$property2 </span><span style="color: #007700">= </span><span style="color: #DD0000">"Public property two"</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$property3 </span><span style="color: #007700">= </span><span style="color: #DD0000">"Public property three"</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$property4 </span><span style="color: #007700">= </span><span style="color: #DD0000">""</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">property4 </span><span style="color: #007700">= </span><span style="color: #DD0000">"last property"</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">getIterator</span><span style="color: #007700">(): </span><span style="color: #0000BB">Traversable<br />    </span><span style="color: #007700">{<br />        return new </span><span style="color: #0000BB">ArrayIterator</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">myData</span><span style="color: #007700">();<br /><br />foreach (</span><span style="color: #0000BB">$obj </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />    echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
string(9) &quot;property1&quot;
string(19) &quot;Public property one&quot;

string(9) &quot;property2&quot;
string(19) &quot;Public property two&quot;

string(9) &quot;property3&quot;
string(21) &quot;Public property three&quot;

string(9) &quot;property4&quot;
string(13) &quot;last property&quot;

</pre></div>
    </div>
   </div>
  </div>


 </div>

 





<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="iteratoraggregate.getiterator.php">IteratorAggregate::getIterator</a> — Retrieve an external iterator or traversable</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/iteratoraggregate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.iteratoraggregate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.iteratoraggregate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.iteratoraggregate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121079">  <div class="votes">
    <div id="Vu121079">
    <a href="/manual/vote-note.php?id=121079&amp;page=class.iteratoraggregate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121079">
    <a href="/manual/vote-note.php?id=121079&amp;page=class.iteratoraggregate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121079" title="77% like this...">
    33
    </div>
  </div>
  <a href="#121079" class="name">
  <strong class="user"><em>trumbull dot j at gmail dot com</em></strong></a><a class="genanchor" href="#121079"> &para;</a><div class="date" title="2017-05-14 12:42"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121079">
<div class="phpcode"><code><span class="html">It might seem obvious, but you can return a compiled generator from your IteratorAggregate::getIterator() implementation.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Collection </span><span class="keyword">implements </span><span class="default">IteratorAggregate<br /></span><span class="keyword">{<br />    private </span><span class="default">$items </span><span class="keyword">= [];<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$items </span><span class="keyword">= [])<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">items </span><span class="keyword">= </span><span class="default">$items</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">getIterator</span><span class="keyword">()<br />    {<br />        return (function () {<br />            while(list(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">items</span><span class="keyword">)) {<br />                yield </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">;<br />            }<br />        })();<br />    }<br />}<br /><br /></span><span class="default">$data </span><span class="keyword">= [ </span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'B'</span><span class="keyword">, </span><span class="string">'C'</span><span class="keyword">, </span><span class="string">'D' </span><span class="keyword">];<br /></span><span class="default">$collection </span><span class="keyword">= new </span><span class="default">Collection</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$collection </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {<br />    echo </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"[%s] =&gt; %s\n"</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108476">  <div class="votes">
    <div id="Vu108476">
    <a href="/manual/vote-note.php?id=108476&amp;page=class.iteratoraggregate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108476">
    <a href="/manual/vote-note.php?id=108476&amp;page=class.iteratoraggregate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108476" title="68% like this...">
    22
    </div>
  </div>
  <a href="#108476" class="name">
  <strong class="user"><em>Tab Atkins</em></strong></a><a class="genanchor" href="#108476"> &para;</a><div class="date" title="2012-04-29 02:11"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108476">
<div class="phpcode"><code><span class="html">Note that, at least as of 5.3, you still aren't allowed to return a normal Array from getIterator().<br /><br />In some places, the docs wrap the array into an ArrayObject and return that.  DON'T DO IT.  ArrayObject drops any empty-string keys on the floor when you iterate over it (again, at least as of 5.3).<br /><br />Use ArrayIterator instead.  I wouldn't be surprised if it didn't have its own set of wonderful bugs, but at the very least it works correctly when you use it with this method.</span></code></div>
  </div>
 </div>
  <div class="note" id="123734">  <div class="votes">
    <div id="Vu123734">
    <a href="/manual/vote-note.php?id=123734&amp;page=class.iteratoraggregate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123734">
    <a href="/manual/vote-note.php?id=123734&amp;page=class.iteratoraggregate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123734" title="72% like this...">
    10
    </div>
  </div>
  <a href="#123734" class="name">
  <strong class="user"><em>Martin Speer</em></strong></a><a class="genanchor" href="#123734"> &para;</a><div class="date" title="2019-04-04 08:40"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123734">
<div class="phpcode"><code><span class="html">You can use yield from in getIterator in recent PHP 7 versions: <br /><br /><span class="default">&lt;?php <br /><br /></span><span class="keyword">class </span><span class="default">Example </span><span class="keyword">implements </span><span class="default">\IteratorAggregate<br /></span><span class="keyword">{<br />  protected </span><span class="default">$data </span><span class="keyword">= [];<br /><br />  public function </span><span class="default">__construct</span><span class="keyword">(array </span><span class="default">$data</span><span class="keyword">) <br />  {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">;<br />  }<br /><br />  public function </span><span class="default">getIterator</span><span class="keyword">() <br />  {<br />    yield from </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$test </span><span class="keyword">= new </span><span class="default">Example</span><span class="keyword">([</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">]);<br /><br />foreach (</span><span class="default">$test </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">) {<br />  echo </span><span class="default">$test</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/*<br /> * Outputs:<br /> *<br /> * 1<br /> * 2<br /> * 3 <br /> */ </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112432">  <div class="votes">
    <div id="Vu112432">
    <a href="/manual/vote-note.php?id=112432&amp;page=class.iteratoraggregate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112432">
    <a href="/manual/vote-note.php?id=112432&amp;page=class.iteratoraggregate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112432" title="64% like this...">
    13
    </div>
  </div>
  <a href="#112432" class="name">
  <strong class="user"><em>Lubaev.K</em></strong></a><a class="genanchor" href="#112432"> &para;</a><div class="date" title="2013-06-16 11:49"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112432">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// IteratorAggregate<br />// Create indexed and associative arrays.<br /><br /></span><span class="keyword">class </span><span class="default">myData </span><span class="keyword">implements </span><span class="default">IteratorAggregate </span><span class="keyword">{<br /><br />    private </span><span class="default">$array </span><span class="keyword">= [];<br />    const </span><span class="default">TYPE_INDEXED </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    const </span><span class="default">TYPE_ASSOCIATIVE </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">( array </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$type </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">TYPE_INDEXED </span><span class="keyword">) {<br />        </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />        while( list(</span><span class="default">$k</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) ) {<br />            </span><span class="default">$type </span><span class="keyword">== </span><span class="default">self</span><span class="keyword">::</span><span class="default">TYPE_INDEXED </span><span class="keyword">?<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">[] = </span><span class="default">$v </span><span class="keyword">:<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br />        }<br />    }<br /><br />    public function </span><span class="default">getIterator</span><span class="keyword">() {<br />        return new </span><span class="default">ArrayIterator</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">array</span><span class="keyword">);<br />    }<br /><br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">myData</span><span class="keyword">([</span><span class="string">'one'</span><span class="keyword">=&gt;</span><span class="string">'php'</span><span class="keyword">,</span><span class="string">'javascript'</span><span class="keyword">,</span><span class="string">'three'</span><span class="keyword">=&gt;</span><span class="string">'c#'</span><span class="keyword">,</span><span class="string">'java'</span><span class="keyword">,], </span><span class="comment">/*TYPE 1 or 2*/ </span><span class="keyword">);<br /><br />foreach(</span><span class="default">$obj </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />    echo </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// if TYPE == 1<br />#int(0)<br />#string(3) "php"<br />#int(1)<br />#string(10) "javascript"<br />#int(2)<br />#string(2) "c#"<br />#int(3)<br />#string(4) "java"<br /><br />// if TYPE == 2<br />#string(3) "one"<br />#string(3) "php"<br />#int(0)<br />#string(10) "javascript"<br />#string(5) "three"<br />#string(2) "c#"<br />#int(1)<br />#string(4) "java"<br /></span><span class="default">?&gt;<br /></span><br />Good luck!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.iteratoraggregate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.iteratoraggregate.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.interfaces.php">Predefined Interfaces and Classes</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.traversable.php" title="Traversable">Traversable</a>
                        </li>
                                                <li class="">
                            <a href="class.iterator.php" title="Iterator">Iterator</a>
                        </li>
                                                <li class="current">
                            <a href="class.iteratoraggregate.php" title="IteratorAggregate">IteratorAggregate</a>
                        </li>
                                                <li class="">
                            <a href="class.internaliterator.php" title="InternalIterator">InternalIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.throwable.php" title="Throwable">Throwable</a>
                        </li>
                                                <li class="">
                            <a href="class.countable.php" title="Countable">Countable</a>
                        </li>
                                                <li class="">
                            <a href="class.arrayaccess.php" title="ArrayAccess">ArrayAccess</a>
                        </li>
                                                <li class="">
                            <a href="class.serializable.php" title="Serializable">Serializable</a>
                        </li>
                                                <li class="">
                            <a href="class.closure.php" title="Closure">Closure</a>
                        </li>
                                                <li class="">
                            <a href="class.stdclass.php" title="stdClass">stdClass</a>
                        </li>
                                                <li class="">
                            <a href="class.generator.php" title="Generator">Generator</a>
                        </li>
                                                <li class="">
                            <a href="class.fiber.php" title="Fiber">Fiber</a>
                        </li>
                                                <li class="">
                            <a href="class.weakreference.php" title="WeakReference">WeakReference</a>
                        </li>
                                                <li class="">
                            <a href="class.weakmap.php" title="WeakMap">WeakMap</a>
                        </li>
                                                <li class="">
                            <a href="class.stringable.php" title="Stringable">Stringable</a>
                        </li>
                                                <li class="">
                            <a href="class.unitenum.php" title="UnitEnum">UnitEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.backedenum.php" title="BackedEnum">BackedEnum</a>
                        </li>
                                                <li class="">
                            <a href="class.sensitiveparametervalue.php" title="SensitiveParameterValue">SensitiveParameterValue</a>
                        </li>
                                                <li class="">
                            <a href="class.php-incomplete-class.php" title="_&#8203;_&#8203;PHP_&#8203;Incomplete_&#8203;Class">_&#8203;_&#8203;PHP_&#8203;Incomplete_&#8203;Class</a>
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
