<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.constants.predefined.php">
 <link rel="shorturl" href="https://www.php.net/constants.predefined">
 <link rel="alternate" href="https://www.php.net/constants.predefined" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.constants.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.constants.syntax.php">
 <link rel="next" href="https://www.php.net/manual/en/language.constants.magic.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.constants.predefined.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.constants.predefined.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.constants.predefined.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.constants.predefined.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.constants.predefined.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.constants.predefined.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.constants.predefined.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.constants.predefined.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.constants.predefined.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.constants.predefined.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.constants.predefined.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined constants - Manual" />
<meta name="twitter:description" content="Predefined constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined constants - Manual" />
<meta itemprop="description" content="Predefined constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined constants" />

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
        <a href="language.constants.magic.php">
          Magic constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.constants.syntax.php">
          &laquo; Syntax        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.constants.php'>Constants</a></li>      </ul>
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
            <option value='en/language.constants.predefined.php' selected="selected">English</option>
            <option value='de/language.constants.predefined.php'>German</option>
            <option value='es/language.constants.predefined.php'>Spanish</option>
            <option value='fr/language.constants.predefined.php'>French</option>
            <option value='it/language.constants.predefined.php'>Italian</option>
            <option value='ja/language.constants.predefined.php'>Japanese</option>
            <option value='pt_BR/language.constants.predefined.php'>Brazilian Portuguese</option>
            <option value='ru/language.constants.predefined.php'>Russian</option>
            <option value='tr/language.constants.predefined.php'>Turkish</option>
            <option value='uk/language.constants.predefined.php'>Ukrainian</option>
            <option value='zh/language.constants.predefined.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.constants.predefined" class="sect1">
   <h2 class="title">Predefined constants</h2>

   <p class="simpara">
    PHP provides a large number of <a href="reserved.constants.php" class="link">predefined constants</a> to any script
    which it runs. Many of these constants, however, are created by
    various extensions, and will only be present when those extensions
    are available, either via dynamic loading or because they have
    been compiled in.
   </p>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.constants.predefined%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.constants.predefined&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.constants.predefined.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="57033">  <div class="votes">
    <div id="Vu57033">
    <a href="/manual/vote-note.php?id=57033&amp;page=language.constants.predefined&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57033">
    <a href="/manual/vote-note.php?id=57033&amp;page=language.constants.predefined&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57033" title="67% like this...">
    289
    </div>
  </div>
  <a href="#57033" class="name">
  <strong class="user"><em>vijaykoul_007 at rediffmail dot com</em></strong></a><a class="genanchor" href="#57033"> &para;</a><div class="date" title="2005-09-21 09:59"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57033">
<div class="phpcode"><code><span class="html">the difference between <br />__FUNCTION__ and __METHOD__ as in PHP 5.0.4 is that<br /><br />__FUNCTION__ returns only the name of the function<br /><br />while as __METHOD__ returns the name of the class alongwith the name of the function<br /><br />class trick<br />{<br />      function doit()<br />      {<br />                echo __FUNCTION__;<br />      }<br />      function doitagain()<br />      {<br />                echo __METHOD__;<br />      }<br />}<br />$obj=new trick();<br />$obj-&gt;doit();<br />output will be ----  doit<br />$obj-&gt;doitagain();<br />output will be ----- trick::doitagain</span></code></div>
  </div>
 </div>
  <div class="note" id="71064">  <div class="votes">
    <div id="Vu71064">
    <a href="/manual/vote-note.php?id=71064&amp;page=language.constants.predefined&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71064">
    <a href="/manual/vote-note.php?id=71064&amp;page=language.constants.predefined&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71064" title="58% like this...">
    48
    </div>
  </div>
  <a href="#71064" class="name">
  <strong class="user"><em>Tomek Perlak [tomekperlak at tlen pl]</em></strong></a><a class="genanchor" href="#71064"> &para;</a><div class="date" title="2006-11-10 02:16"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71064">
<div class="phpcode"><code><span class="html">The __CLASS__ magic constant nicely complements the get_class() function.<br /><br />Sometimes you need to know both:<br />- name of the inherited class<br />- name of the class actually executed<br /><br />Here's an example that shows the possible solution:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">base_class<br /></span><span class="keyword">{<br />    function </span><span class="default">say_a</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"'a' - said the " </span><span class="keyword">. </span><span class="default">__CLASS__ </span><span class="keyword">. </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">say_b</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"'b' - said the " </span><span class="keyword">. </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">) . </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />    }<br /><br />}<br /><br />class </span><span class="default">derived_class </span><span class="keyword">extends </span><span class="default">base_class<br /></span><span class="keyword">{<br />    function </span><span class="default">say_a</span><span class="keyword">()<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">say_a</span><span class="keyword">();<br />        echo </span><span class="string">"'a' - said the " </span><span class="keyword">. </span><span class="default">__CLASS__ </span><span class="keyword">. </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">say_b</span><span class="keyword">()<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">say_b</span><span class="keyword">();<br />        echo </span><span class="string">"'b' - said the " </span><span class="keyword">. </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">) . </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$obj_b </span><span class="keyword">= new </span><span class="default">derived_class</span><span class="keyword">();<br /><br /></span><span class="default">$obj_b</span><span class="keyword">-&gt;</span><span class="default">say_a</span><span class="keyword">();<br />echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br /></span><span class="default">$obj_b</span><span class="keyword">-&gt;</span><span class="default">say_b</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />The output should look roughly like this:<br /><br />'a' - said the base_class<br />'a' - said the derived_class<br /><br />'b' - said the derived_class<br />'b' - said the derived_class</span></code></div>
  </div>
 </div>
  <div class="note" id="114723">  <div class="votes">
    <div id="Vu114723">
    <a href="/manual/vote-note.php?id=114723&amp;page=language.constants.predefined&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114723">
    <a href="/manual/vote-note.php?id=114723&amp;page=language.constants.predefined&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114723" title="54% like this...">
    13
    </div>
  </div>
  <a href="#114723" class="name">
  <strong class="user"><em>php at kenman dot net</em></strong></a><a class="genanchor" href="#114723"> &para;</a><div class="date" title="2014-03-28 06:45"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114723">
<div class="phpcode"><code><span class="html">Just learned an interesting tidbit regarding __FILE__ and the newer __DIR__ with respect to code run from a network share: the constants will return the *share* path when executed from the context of the share.<br /><br />Examples:<br /><br />// normal context<br />// called as "php -f c:\test.php"<br /> __DIR__ === 'c:\';<br />__FILE__ === 'c:\test.php';<br /><br />// network share context<br />// called as "php -f \\computerName\c$\test.php"<br /> __DIR__ === '\\computerName\c$';<br />__FILE__ === '\\computerName\c$\test.php';<br /><br />NOTE: realpath('.') always seems to return an actual filesystem path regardless of the execution context.</span></code></div>
  </div>
 </div>
  <div class="note" id="119175">  <div class="votes">
    <div id="Vu119175">
    <a href="/manual/vote-note.php?id=119175&amp;page=language.constants.predefined&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119175">
    <a href="/manual/vote-note.php?id=119175&amp;page=language.constants.predefined&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119175" title="52% like this...">
    8
    </div>
  </div>
  <a href="#119175" class="name">
  <strong class="user"><em>Sbastien Fauvel</em></strong></a><a class="genanchor" href="#119175"> &para;</a><div class="date" title="2016-04-15 01:27"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119175">
<div class="phpcode"><code><span class="html">Note a small inconsistency when using __CLASS__ and __METHOD__ in traits (stand php 7.0.4): While __CLASS__ is working as advertized and returns dynamically the name of the class the trait is being used in, __METHOD__ will actually prepend the trait name instead of the class name!</span></code></div>
  </div>
 </div>
  <div class="note" id="125170">  <div class="votes">
    <div id="Vu125170">
    <a href="/manual/vote-note.php?id=125170&amp;page=language.constants.predefined&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125170">
    <a href="/manual/vote-note.php?id=125170&amp;page=language.constants.predefined&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125170" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#125170" class="name">
  <strong class="user"><em>public at taliesinnuin dot net</em></strong></a><a class="genanchor" href="#125170"> &para;</a><div class="date" title="2020-07-06 03:40"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125170">
<div class="phpcode"><code><span class="html">If you're using PHP with fpm (common in this day and age), be aware that __DIR__ and __FILE__ will return values based on the fpm root which MAY differ from its actual location on the file system.<br /><br />This can cause temporary head-scratching if deploying an app where php files within the web root pull in PHP files from outside of itself (a very common case). You may be wondering why __DIR__ returns "/" when the file itself lives in /var/www/html or whathaveyou.<br /><br />You might handle such a situation by having NGINX explicitly add the necessary part of the path in its fastcgi request and then you can set the root on the FPM process / server / container to be something other than the webroot (so long as no other way it could become publicly accessible).<br /><br />Hope that saves someone five minutes who's moving code to FPM that uses __DIR__.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.constants.predefined&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.constants.predefined.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.constants.php">Constants</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.constants.syntax.php" title="Syntax">Syntax</a>
                        </li>
                                                <li class="current">
                            <a href="language.constants.predefined.php" title="Predefined constants">Predefined constants</a>
                        </li>
                                                <li class="">
                            <a href="language.constants.magic.php" title="Magic constants">Magic constants</a>
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
