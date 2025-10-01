<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Generator::rewind - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/generator.rewind.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/generator.rewind.php">
 <link rel="alternate" href="https://www.php.net/manual/en/generator.rewind.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.generator.php">
 <link rel="prev" href="https://www.php.net/manual/en/generator.next.php">
 <link rel="next" href="https://www.php.net/manual/en/generator.send.php">

 <link rel="alternate" href="https://www.php.net/manual/en/generator.rewind.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/generator.rewind.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/generator.rewind.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/generator.rewind.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/generator.rewind.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/generator.rewind.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/generator.rewind.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/generator.rewind.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/generator.rewind.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/generator.rewind.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/generator.rewind.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Rewind the generator to the first yield" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Generator::rewind - Manual" />
<meta name="twitter:description" content="Rewind the generator to the first yield" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Generator::rewind - Manual" />
<meta itemprop="description" content="Rewind the generator to the first yield" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Rewind the generator to the first yield" />

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
        <a href="generator.send.php">
          Generator::send &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="generator.next.php">
          &laquo; Generator::next        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='reserved.interfaces.php'>Predefined Interfaces and Classes</a></li>      <li><a href='class.generator.php'>Generator</a></li>      </ul>
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
            <option value='en/generator.rewind.php' selected="selected">English</option>
            <option value='de/generator.rewind.php'>German</option>
            <option value='es/generator.rewind.php'>Spanish</option>
            <option value='fr/generator.rewind.php'>French</option>
            <option value='it/generator.rewind.php'>Italian</option>
            <option value='ja/generator.rewind.php'>Japanese</option>
            <option value='pt_BR/generator.rewind.php'>Brazilian Portuguese</option>
            <option value='ru/generator.rewind.php'>Russian</option>
            <option value='tr/generator.rewind.php'>Turkish</option>
            <option value='uk/generator.rewind.php'>Ukrainian</option>
            <option value='zh/generator.rewind.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="generator.rewind" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Generator::rewind</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">Generator::rewind</span> &mdash; <span class="dc-title">Rewind the generator to the first yield</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-generator.rewind-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Generator::rewind</strong></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   The method rewinds the generator back to the point before the first <a href="language.generators.syntax.php#control-structures.yield" class="link"><code class="literal">yield</code></a>.
   If the generator is not at a first <a href="language.generators.syntax.php#control-structures.yield" class="link"><code class="literal">yield</code></a> expression when this method is called,
   it will first be let to advance to the first <a href="language.generators.syntax.php#control-structures.yield" class="link"><code class="literal">yield</code></a> expression before rewinding.
   If the generator has already at the point of beginning of the second <a href="language.generators.syntax.php#control-structures.yield" class="link"><code class="literal">yield</code></a>,
   this will throw an <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This is the <em>first</em> method called when starting a
    <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> loop. It will <em>not</em> be
    executed <em>after</em> <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> loops.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-generator.rewind-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-generator.rewind-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-generator.rewind-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-483">
    <p><strong>Example #1 <span class="methodname"><strong>Generator::rewind()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">generator</span><span style="color: #007700">(): </span><span style="color: #0000BB">Generator<br /></span><span style="color: #007700">{<br />    echo </span><span style="color: #DD0000">"I'm a generator!\n"</span><span style="color: #007700">;<br /><br />    for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt;= </span><span style="color: #0000BB">3</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">++) {<br />        yield </span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// Initialize the generator<br /></span><span style="color: #0000BB">$generator </span><span style="color: #007700">= </span><span style="color: #0000BB">generator</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Rewind the generator to the beginning of the first yield expression,<br />// if it's not already there<br /></span><span style="color: #0000BB">$generator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rewind</span><span style="color: #007700">(); </span><span style="color: #FF8000">// I'm a generator!<br /><br />// Nothing happens here; the generator is already rewound<br /></span><span style="color: #0000BB">$generator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rewind</span><span style="color: #007700">(); </span><span style="color: #FF8000">// No output (NULL)<br /><br />// This rewinds the generator to the first yield expression,<br />// if it's not already there, and iterates over the generator<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$generator </span><span style="color: #007700">as </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// After yielding the first value, the generator remains at<br />    // the first yield expression until it resumes execution and advances to the next yield<br />    </span><span style="color: #007700">echo </span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /><br />    </span><span style="color: #007700">break;<br />}<br /><br /></span><span style="color: #FF8000">// Resume and rewind again. No error occurs because the generator has not advanced beyond the first yield<br /></span><span style="color: #0000BB">$generator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rewind</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #0000BB">$generator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">current</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /><br />// No error occurs, the generator is still at the first yield<br /></span><span style="color: #0000BB">$generator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rewind</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// This advances the generator to the second yield expression<br /></span><span style="color: #0000BB">$generator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">next</span><span style="color: #007700">();<br /><br />try {<br />    </span><span style="color: #FF8000">// This will throw an Exception,<br />    // because the generator has already advanced to the second yield<br />    </span><span style="color: #0000BB">$generator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rewind</span><span style="color: #007700">(); </span><span style="color: #FF8000">// Fatal error: Uncaught Exception: Cannot rewind a generator that was already run<br /></span><span style="color: #007700">} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">I&#039;m a generator!
1
1
Cannot rewind a generator that was already run</pre>
</div>
    </div>
   </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/generator/rewind.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fgenerator.rewind%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=generator.rewind&amp;repo=en&amp;redirect=https://www.php.net/manual/en/generator.rewind.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119121">  <div class="votes">
    <div id="Vu119121">
    <a href="/manual/vote-note.php?id=119121&amp;page=generator.rewind&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119121">
    <a href="/manual/vote-note.php?id=119121&amp;page=generator.rewind&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119121" title="95% like this...">
    22
    </div>
  </div>
  <a href="#119121" class="name">
  <strong class="user"><em>i&amp;#39;m pati on stackoverflow</em></strong></a><a class="genanchor" href="#119121"> &para;</a><div class="date" title="2016-04-05 04:16"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119121">
<div class="phpcode"><code><span class="html">Actually, this method can be useful to test a generator before iterating, as it executes your function up to the first yield statement. I.e. if you try to read a non-existent file in a generator, an error will normally occur only in client code foreach()'s first iteration. Sometimes this can be critical to check beforehand.<br /><br />Take a look at a modified example from here:<br /><a href="http://php.net/manual/ru/language.generators.overview.php#112985" rel="nofollow" target="_blank">http://php.net/manual/ru/language.generators.overview.php#112985</a><br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">getLines</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />    </span><span class="default">$f </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />    try {<br />        while (</span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">)) {<br />            yield </span><span class="default">$line</span><span class="keyword">;<br />        }<br />    } finally {<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$getLines </span><span class="keyword">= </span><span class="default">getLines</span><span class="keyword">(</span><span class="string">'no_such_file.txt'</span><span class="keyword">);<br /></span><span class="default">$getLines</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); </span><span class="comment">// with -&gt;rewind(), a file read error will be thrown here and a log file will not be cleared<br /><br /></span><span class="default">openAndClearLogFile</span><span class="keyword">();<br /><br />foreach (</span><span class="default">$getLines </span><span class="keyword">as </span><span class="default">$n </span><span class="keyword">=&gt; </span><span class="default">$line</span><span class="keyword">) { </span><span class="comment">// without -&gt;rewind(), the script will die here and your log file will be cleared<br />    </span><span class="default">writeToLogFile</span><span class="keyword">(</span><span class="string">'reading: ' </span><span class="keyword">. </span><span class="default">$line </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">);<br />}<br /><br /></span><span class="default">closeLogFile</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />P.S.: When you iterate over a generator after -&gt;rewind(), you'll get the first yielded value immediately, as the preceding code was already executed.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=generator.rewind&amp;repo=en&amp;redirect=https://www.php.net/manual/en/generator.rewind.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.generator.php">Generator</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="generator.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="generator.getreturn.php" title="getReturn">getReturn</a>
                        </li>
                                                <li class="">
                            <a href="generator.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="generator.next.php" title="next">next</a>
                        </li>
                                                <li class="current">
                            <a href="generator.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="generator.send.php" title="send">send</a>
                        </li>
                                                <li class="">
                            <a href="generator.throw.php" title="throw">throw</a>
                        </li>
                                                <li class="">
                            <a href="generator.valid.php" title="valid">valid</a>
                        </li>
                                                <li class="">
                            <a href="generator.wakeup.php" title="_&#8203;_&#8203;wakeup">_&#8203;_&#8203;wakeup</a>
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
