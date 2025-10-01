<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Classes/Object Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.classobj.php">
 <link rel="shorturl" href="https://www.php.net/classobj">
 <link rel="alternate" href="https://www.php.net/classobj" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.classobj.php">
 <link rel="prev" href="https://www.php.net/manual/en/classobj.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/function.autoload.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.classobj.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.classobj.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.classobj.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.classobj.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.classobj.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.classobj.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.classobj.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.classobj.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.classobj.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.classobj.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.classobj.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Classes/Object Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Classes/Object Functions - Manual" />
<meta name="twitter:description" content="Classes/Object Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Classes/Object Functions - Manual" />
<meta itemprop="description" content="Classes/Object Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Classes/Object Functions" />

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
        <a href="function.autoload.php">
          __autoload &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="classobj.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.classobj.php'>Classes/Objects</a></li>      </ul>
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
            <option value='en/ref.classobj.php' selected="selected">English</option>
            <option value='de/ref.classobj.php'>German</option>
            <option value='es/ref.classobj.php'>Spanish</option>
            <option value='fr/ref.classobj.php'>French</option>
            <option value='it/ref.classobj.php'>Italian</option>
            <option value='ja/ref.classobj.php'>Japanese</option>
            <option value='pt_BR/ref.classobj.php'>Brazilian Portuguese</option>
            <option value='ru/ref.classobj.php'>Russian</option>
            <option value='tr/ref.classobj.php'>Turkish</option>
            <option value='uk/ref.classobj.php'>Ukrainian</option>
            <option value='zh/ref.classobj.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.classobj" class="reference">
 <h1 class="title">Classes/Object Functions</h1>

 













































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.autoload.php">__autoload</a> — Attempt to load undefined class</li><li><a href="function.class-alias.php">class_alias</a> — Creates an alias for a class</li><li><a href="function.class-exists.php">class_exists</a> — Checks if the class has been defined</li><li><a href="function.enum-exists.php">enum_exists</a> — Checks if the enum has been defined</li><li><a href="function.get-called-class.php">get_called_class</a> — The &quot;Late Static Binding&quot; class name</li><li><a href="function.get-class.php">get_class</a> — Returns the name of the class of an object</li><li><a href="function.get-class-methods.php">get_class_methods</a> — Gets the class methods' names</li><li><a href="function.get-class-vars.php">get_class_vars</a> — Get the default properties of the class</li><li><a href="function.get-declared-classes.php">get_declared_classes</a> — Returns an array with the name of the defined classes</li><li><a href="function.get-declared-interfaces.php">get_declared_interfaces</a> — Returns an array of all declared interfaces</li><li><a href="function.get-declared-traits.php">get_declared_traits</a> — Returns an array of all declared traits</li><li><a href="function.get-mangled-object-vars.php">get_mangled_object_vars</a> — Returns an array of mangled object properties</li><li><a href="function.get-object-vars.php">get_object_vars</a> — Gets the properties of the given object</li><li><a href="function.get-parent-class.php">get_parent_class</a> — Retrieves the parent class name for object or class</li><li><a href="function.interface-exists.php">interface_exists</a> — Checks if the interface has been defined</li><li><a href="function.is-a.php">is_a</a> — Checks whether the object is of a given type or subtype</li><li><a href="function.is-subclass-of.php">is_subclass_of</a> — Checks if the object has this class as one of its parents or implements it</li><li><a href="function.method-exists.php">method_exists</a> — Checks if the class method exists</li><li><a href="function.property-exists.php">property_exists</a> — Checks if the object or class has a property</li><li><a href="function.trait-exists.php">trait_exists</a> — Checks if the trait exists</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/classobj/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.classobj%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.classobj&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.classobj.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="11810">  <div class="votes">
    <div id="Vu11810">
    <a href="/manual/vote-note.php?id=11810&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd11810">
    <a href="/manual/vote-note.php?id=11810&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V11810" title="65% like this...">
    11
    </div>
  </div>
  <a href="#11810" class="name">
  <strong class="user"><em>gateschris at yahoo dot com</em></strong></a><a class="genanchor" href="#11810"> &para;</a><div class="date" title="2001-03-08 01:59"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom11810">
<div class="phpcode"><code><span class="html">[Editor's note: If you are trying to do overriding, then you can just interrogate (perhaps in the method itself) about what class (get_class()) the object belongs to, or if it is a subclass of a particular root class.
<br />
<br />You can alway refer to the parent overriden method, see the "Classes and Objects" page of the manual and comments/editor's notes therein.]
<br />
<br />There is no function to determine if a member belongs to a base class or current class eg:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{
<br /> function </span><span class="default">foo </span><span class="keyword">() { }
<br /> function </span><span class="default">a </span><span class="keyword">() { }
<br />}
<br />
<br />class </span><span class="default">bar </span><span class="keyword">extends </span><span class="default">foo </span><span class="keyword">{
<br /> function </span><span class="default">bar </span><span class="keyword">() { }
<br /> function </span><span class="default">a </span><span class="keyword">() { }
<br />}
<br />
<br /></span><span class="default">lala </span><span class="keyword">= new </span><span class="default">Bar</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>------------------
<br />how do we find programmatically if member a now belongs to class Bar or Foo.</span></code></div>
  </div>
 </div>
  <div class="note" id="25372">  <div class="votes">
    <div id="Vu25372">
    <a href="/manual/vote-note.php?id=25372&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25372">
    <a href="/manual/vote-note.php?id=25372&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25372" title="55% like this...">
    3
    </div>
  </div>
  <a href="#25372" class="name">
  <strong class="user"><em>asommer*at*as-media.com</em></strong></a><a class="genanchor" href="#25372"> &para;</a><div class="date" title="2002-09-20 02:52"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25372">
<div class="phpcode"><code><span class="html">Something I found out just now that comes in very handy for my current project:<br /><br />it is possible to have a class override itself in any method ( including the constructor ) like this:<br /><br />class a {<br /><br />..function ha ( ) {<br />....if ( $some_expr ) {<br />......$this = new b;<br />......return $this-&gt;ha ( );<br />....}<br />....return $something;<br />..}<br /><br />}<br /><br />in this case assuming that class b is already defined and also has the method ha ( )<br /><br />note that the code after the statement to override itself is still executed but now applies to the new class<br /><br />i did not find any information about this behaviour anywhere, so i have no clue wether this is supposed to be like this and if it might change... but it opens a few possibilities in flexible scripting!!</span></code></div>
  </div>
 </div>
  <div class="note" id="48641">  <div class="votes">
    <div id="Vu48641">
    <a href="/manual/vote-note.php?id=48641&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48641">
    <a href="/manual/vote-note.php?id=48641&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48641" title="53% like this...">
    2
    </div>
  </div>
  <a href="#48641" class="name">
  <strong class="user"><em>covertka at muohio dot edu</em></strong></a><a class="genanchor" href="#48641"> &para;</a><div class="date" title="2005-01-02 05:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48641">
<div class="phpcode"><code><span class="html">To pillepop2003 at yahoo dot de:<br /><br />I have the same issue.  I have a base class that manages database tasks for a number of child classes.  One of the functions in the base class is a find() method that returns instances of the child classes.  Since find() is usually called as a static method, it needs to know the name of the child class.  As you've found, this appears to be impossible to get in an easy fashion.<br /><br />The only way I've found to get the child class name is to use the debug_traceback() function.  This requires me to have a find() method in every child class, but it does work.<br /><br />Here's an example:<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">require_once(</span><span class="string">"Application.php"</span><span class="keyword">);<br /><br />  class </span><span class="default">parentClass </span><span class="keyword">{<br />    function </span><span class="default">find</span><span class="keyword">() {<br />      </span><span class="default">$className </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />      foreach (</span><span class="default">debug_backtrace</span><span class="keyword">() as </span><span class="default">$bt</span><span class="keyword">) {<br />        if (</span><span class="default">$bt</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] == </span><span class="default">__FUNCTION__</span><span class="keyword">) {<br />          </span><span class="default">$className </span><span class="keyword">= </span><span class="default">$bt</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">];<br />        }<br />      }<br /><br />      </span><span class="comment">// here should be some code to find the proper id, let's assume it was id 1<br />      </span><span class="default">$id </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />      return new </span><span class="default">$className</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">);<br />    }<br />  }<br />  <br />  class </span><span class="default">foo </span><span class="keyword">extends </span><span class="default">parentClass </span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">) {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">= </span><span class="default">id</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">find</span><span class="keyword">() {<br />      return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">find</span><span class="keyword">();<br />    }<br />  }<br />  <br />  class </span><span class="default">bar </span><span class="keyword">extends </span><span class="default">parentClass </span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">) {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">= </span><span class="default">id</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">find</span><span class="keyword">() {<br />      return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">find</span><span class="keyword">();<br />    }<br />  }<br />  <br />  </span><span class="default">$a </span><span class="keyword">= </span><span class="default">foo</span><span class="keyword">::</span><span class="default">find</span><span class="keyword">();<br />  </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Type for \$a: %s&lt;br/&gt;\n"</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">));<br />  </span><span class="default">$b </span><span class="keyword">= </span><span class="default">bar</span><span class="keyword">::</span><span class="default">find</span><span class="keyword">();<br />  </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Type for \$b: %s&lt;br/&gt;\n"</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="33809">  <div class="votes">
    <div id="Vu33809">
    <a href="/manual/vote-note.php?id=33809&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33809">
    <a href="/manual/vote-note.php?id=33809&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33809" title="52% like this...">
    2
    </div>
  </div>
  <a href="#33809" class="name">
  <strong class="user"><em>zidsu at hotmail dot com</em></strong></a><a class="genanchor" href="#33809"> &para;</a><div class="date" title="2003-07-08 05:24"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33809">
<div class="phpcode"><code><span class="html">FYI: if you want to split your class into manageble chunks, what means different files for you, you can put you functoins into includes, and make include() have a return value. Like this:<br /><br />class Some_class {<br />  var $value = 3;<br />  function add_value ($input_param) {<br />    return include ("path/some_file.php");<br />  }<br />}<br /><br />And your included file:<br /><br />$input_param += $this-&gt;value;<br />return $input_param;<br /><br />Then your function call will be:<br /><br />$instance = new Some_class ();<br />$instance-&gt;add_value (3);<br /><br />And this will return<br />6<br />hopefully :P<br /><br />Keep in mind though, that the scope in the included file will be identical to the scope the function 'add_value' has.<br />And if you want to return the outcome, you should also have a return statement made in your include as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="50524">  <div class="votes">
    <div id="Vu50524">
    <a href="/manual/vote-note.php?id=50524&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50524">
    <a href="/manual/vote-note.php?id=50524&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50524" title="50% like this...">
    0
    </div>
  </div>
  <a href="#50524" class="name">
  <strong class="user"><em>http://sc.tri-bit.com/ StoneCypher</em></strong></a><a class="genanchor" href="#50524"> &para;</a><div class="date" title="2005-03-02 10:25"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50524">
<div class="phpcode"><code><span class="html">to covertka at muohio dot edu and pillepop2003 at yahoo dot de:<br /><br />There's a much easier solution to getting a class' name for working with a factory function.  Let's assume you're doing something like this:<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="keyword">function </span><span class="default">FactoryFunction</span><span class="keyword">(</span><span class="default">$whatever</span><span class="keyword">, </span><span class="default">$instancedata</span><span class="keyword">) {<br /><br />    switch (</span><span class="default">$whatever</span><span class="keyword">) {<br />      case </span><span class="string">'stuff'      </span><span class="keyword">: return new </span><span class="default">Stuff</span><span class="keyword">(</span><span class="default">$instancedata</span><span class="keyword">);<br />      case </span><span class="string">'otherstuff' </span><span class="keyword">: return new </span><span class="default">Otherstuff</span><span class="keyword">(</span><span class="default">$instancedata</span><span class="keyword">);<br />    }<br /><br />  }<br /><br /></span><span class="default">?&gt;<br /></span><br />Now, consider the named parameter idiom and remember that PHP uses hashes for everything; as a result make the following changes:<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="keyword">function </span><span class="default">FactoryFunction</span><span class="keyword">(</span><span class="default">$whatever</span><span class="keyword">, </span><span class="default">$instancedata</span><span class="keyword">) {<br /><br />    switch (</span><span class="default">$whatever</span><span class="keyword">) {<br /><br />      case </span><span class="string">'stuff'      </span><span class="keyword">: return array(</span><span class="string">'typeis'</span><span class="keyword">=&gt;</span><span class="string">'stuff'</span><span class="keyword">,      </span><span class="string">'instance'</span><span class="keyword">=&gt;new </span><span class="default">Stuff</span><span class="keyword">(</span><span class="default">$instancedata</span><span class="keyword">));<br />      case </span><span class="string">'otherstuff' </span><span class="keyword">: return array(</span><span class="string">'typeis'</span><span class="keyword">=&gt;</span><span class="string">'otherstuff'</span><span class="keyword">, </span><span class="string">'instance'</span><span class="keyword">=&gt;new </span><span class="default">Otherstuff</span><span class="keyword">(</span><span class="default">$instancedata</span><span class="keyword">));<br /><br />    }<br /><br />  }<br /><br /></span><span class="default">?&gt;<br /></span><br />Nice 'n simple.  It seems that what the original poster wanted was something like C++ static data members; unfortunately as PHP4 has no static variables at all, there would need to be significant language change to support static-like behavior.  If you move to PHP5, the static keyword solves your problem cleanly.</span></code></div>
  </div>
 </div>
  <div class="note" id="43363">  <div class="votes">
    <div id="Vu43363">
    <a href="/manual/vote-note.php?id=43363&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43363">
    <a href="/manual/vote-note.php?id=43363&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43363" title="50% like this...">
    0
    </div>
  </div>
  <a href="#43363" class="name">
  <strong class="user"><em>ettinger at consultant dot com</em></strong></a><a class="genanchor" href="#43363"> &para;</a><div class="date" title="2004-06-18 04:59"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43363">
<div class="phpcode"><code><span class="html">Re: Looking for an uninstantiated class<br /><br /># Loads data from a table into a class object<br />class LFPDataFactory extends LFPObject {<br />        var $object;<br />        var $class;<br />        var $table;<br />        function LFPDataFactory($args) {<br />                $this-&gt;unpackArgs($args); // assigns locals from $args<br />                if (in_array(strtolower($this-&gt;class), get_declared_classes())) {<br />                        $this-&gt;object = new $this-&gt;class;<br />                        // assemble the columns in the table...<br />                        // select their values and put them in our new object...<br />                } else { trigger_error("Class ".$this-&gt;class." not found", E_USER_ERROR); }<br />        }<br />}<br />$r = new LFPDataFactory("class=LFPLayout,table=layout");<br />$new_obj = $r-&gt;object; // this is a LFPLayout object.<br />print_r($new_obj);<br /><br />This class looks to see if the class exists, then instantiates it -- a declared class is not the same as an instantiated class. As long as LFPLayout exists somewhere in the scripts, get_declared_classes() will find it. Remember strtolower on compare, however.<br /><br />Why would I do this? Because I have my class layouts the same as their respective tables; the factory then selects the data (making sure that the variables match) and plugs in the data. (I've left out the actual code to do the selection/insertion).</span></code></div>
  </div>
 </div>
  <div class="note" id="98694">  <div class="votes">
    <div id="Vu98694">
    <a href="/manual/vote-note.php?id=98694&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98694">
    <a href="/manual/vote-note.php?id=98694&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98694" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#98694" class="name">
  <strong class="user"><em>Dennis</em></strong></a><a class="genanchor" href="#98694"> &para;</a><div class="date" title="2010-07-01 04:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98694">
<div class="phpcode"><code><span class="html">We have an array with many objects in a style like<br /><br /><span class="default">&lt;?php<br /><br />$step </span><span class="keyword">= new </span><span class="default">StepModel</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); </span><span class="comment">// if the StepModel id is "1"<br /></span><span class="default">$demand </span><span class="keyword">= </span><span class="default">$step</span><span class="keyword">-&gt;</span><span class="default">getDemand</span><span class="keyword">(); </span><span class="comment">// returns DemandModel<br /></span><span class="default">$step2 </span><span class="keyword">= </span><span class="default">$demand</span><span class="keyword">-&gt;</span><span class="default">getCustomer</span><span class="keyword">(); </span><span class="comment">// returns StepModel<br /></span><span class="default">$demand2 </span><span class="keyword">= </span><span class="default">$step2</span><span class="keyword">-&gt;</span><span class="default">getDemand</span><span class="keyword">(); </span><span class="comment">// returns DemandModel<br /><br />// [ ... ]<br /><br /></span><span class="default">?&gt;<br /></span><br />$step and $step2 can be the same objects. So we have an recursive array. Now we need to know if $step == $step2 or $step === $step2. In other words: We need to know the php internal resource ids.<br /><br />Because there is no function in php api, we made the following function.<br /><br />Be careful: In our case, all objects have as first attribute ["id":protected]. If your objects are different from this, you need to edit $pattern.<br /><br />Warning: function is very slow and should only be called if it's necessary for debugging reasons:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * returns resource- and object-ids of all objects in an array<br /> * <br /> * @param array $array<br /> * @return array<br /> */<br /></span><span class="keyword">function </span><span class="default">getObjectInformation</span><span class="keyword">(Array </span><span class="default">$array</span><span class="keyword">)<br />{<br />    </span><span class="comment">// start output-buffering<br />    </span><span class="default">ob_start</span><span class="keyword">();<br />    <br />    </span><span class="comment">// create an var_dump of $array<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    <br />    </span><span class="comment">// save the dump in var $dump<br />    </span><span class="default">$dump </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />    <br />    </span><span class="comment">// clean the output-buffer<br />    </span><span class="default">ob_end_clean</span><span class="keyword">();<br />    <br />    </span><span class="comment">// delete white-spaces<br />    </span><span class="default">$dump </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$dump</span><span class="keyword">);<br />    <br />    </span><span class="comment">// define the regex-pattern<br />    // in our case, all objects look like this:<br />    //<br />    // object(ClassName)#1(1){<br />    // ["id":protected]=&gt;<br />    // string(1)"1"<br />    </span><span class="default">$pattern  </span><span class="keyword">= </span><span class="string">'/object\(([a-zA-Z0-9]+)\)#([0-9]+)\([0-9]+\){\\n'</span><span class="keyword">;<br />    </span><span class="default">$pattern </span><span class="keyword">.= </span><span class="string">'\["id":protected\]=&gt;\\n'</span><span class="keyword">;<br />    </span><span class="default">$pattern </span><span class="keyword">.= </span><span class="string">'string\([0-9]+\)"([v]?[0-9]+)"/im'</span><span class="keyword">;<br />    <br />    </span><span class="comment">// search for all matches<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$dump</span><span class="keyword">, </span><span class="default">$regs</span><span class="keyword">);<br />    <br />    </span><span class="comment">// sort all mathes by class name, object id and then resource id<br />    </span><span class="default">array_multisort</span><span class="keyword">(</span><span class="default">$regs</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">SORT_ASC</span><span class="keyword">, </span><span class="default">SORT_STRING</span><span class="keyword">,<br />                    </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">], </span><span class="default">SORT_ASC</span><span class="keyword">, </span><span class="default">SORT_NUMERIC</span><span class="keyword">,<br />                    </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">SORT_ASC</span><span class="keyword">, </span><span class="default">SORT_NUMERIC</span><span class="keyword">);<br />    <br />    </span><span class="comment">// cache the last match<br />    </span><span class="default">$lastMatch </span><span class="keyword">= array();<br />    <br />    </span><span class="comment">// the return value<br />    </span><span class="default">$return </span><span class="keyword">= array();<br />    <br />    </span><span class="comment">// loop through the matches<br />    </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$regs</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="default">$i </span><span class="keyword">++) {<br />        <br />        </span><span class="comment">// check if the current match was not visited before<br />        </span><span class="keyword">if (</span><span class="default">0 </span><span class="keyword">== </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$lastMatch</span><span class="keyword">) ||<br />            </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">] != </span><span class="default">$lastMatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] ||<br />            </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">] != </span><span class="default">$lastMatch</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] ||<br />            </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">] != </span><span class="default">$lastMatch</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]) {<br />            <br />            </span><span class="comment">// save the match in return value<br />            </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$return</span><span class="keyword">, array(</span><span class="default">$regs</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">],<br />                                      </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">],<br />                                      </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]));<br />        }<br />        <br />        </span><span class="comment">// save match in last match cache<br />        </span><span class="default">$lastMatch</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">];<br />        </span><span class="default">$lastMatch</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">];<br />        </span><span class="default">$lastMatch</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="default">$regs</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">];<br />    }<br />    <br />    </span><span class="comment">// return all matches<br />    </span><span class="keyword">return </span><span class="default">$return</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />I know, it's not that elegant but I hope it's useful for a few people.</span></code></div>
  </div>
 </div>
  <div class="note" id="25215">  <div class="votes">
    <div id="Vu25215">
    <a href="/manual/vote-note.php?id=25215&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25215">
    <a href="/manual/vote-note.php?id=25215&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25215" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#25215" class="name">
  <strong class="user"><em>einhverfr at not-this-host dot hotmail dot com</em></strong></a><a class="genanchor" href="#25215"> &para;</a><div class="date" title="2002-09-14 12:35"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25215">
<div class="phpcode"><code><span class="html">You may find it helpful in complex projects to have namespaces for your classes, and arrange these in a hierarchical manner.   A simple way to do this is to use the filesystem to order your hierarchies and then define a function like this:<br /><br />function use_namespace($namespace){<br /><br />require_once("namespaces/$namespace.obj.php");<br /><br />}<br /><br />(lack of indentation due to HTML UI for this page)<br />This requires that all your object libraries end in .obj.php (which I use) but you can modfy it to suit your needs.  To call it you could, for exmaple call:<br /><br />use_namespace("example");<br />or if foo is part of example you can call:<br />use_namespace("example/foo");</span></code></div>
  </div>
 </div>
  <div class="note" id="57759">  <div class="votes">
    <div id="Vu57759">
    <a href="/manual/vote-note.php?id=57759&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57759">
    <a href="/manual/vote-note.php?id=57759&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57759" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#57759" class="name">
  <strong class="user"><em>pascal dot poncet at netconsult dot com</em></strong></a><a class="genanchor" href="#57759"> &para;</a><div class="date" title="2005-10-13 07:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57759">
<div class="phpcode"><code><span class="html">Subject: using "sql_calc_found_rows" in a MySQL query while exploiting result in a PHP db class object.<br /><br />Hello,<br /><br />There is a nice function in MySQL that allows to know how many records would have been returned if no "where" clause were set : SQL_CALC_FOUND_ROWS.<br /><br />If you have create a db object to collect the returned lines, you will be a little perplex when trying to call the result of this function.<br /><br />Why ?<br />Simply because the returned field's name is "found_rows()" and obviously it's not possible to call something like :<br /><br /><span class="default">&lt;?php $result</span><span class="keyword">-&gt;</span><span class="default">found_rows</span><span class="keyword">() </span><span class="default">?&gt;<br /></span><br />...as it will try to acces a method, not a property !<br /><br />Then, the only way to get the right result seems to be the use of a class function, like :<br /><br /><span class="default">&lt;?php<br />  $db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"select found_rows()"</span><span class="keyword">);<br />  </span><span class="default">$count</span><span class="keyword">=</span><span class="default">current</span><span class="keyword">(</span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">current</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">result</span><span class="keyword">)));<br /></span><span class="default">?&gt;<br /></span><br />Of course, if somebody found an other way to solve it, like a special syntax (see the one used with curled arrays in a string), I'm really open to discuss.<br /><br />Good luck,<br />Pascal</span></code></div>
  </div>
 </div>
  <div class="note" id="79941">  <div class="votes">
    <div id="Vu79941">
    <a href="/manual/vote-note.php?id=79941&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79941">
    <a href="/manual/vote-note.php?id=79941&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79941" title="43% like this...">
    -4
    </div>
  </div>
  <a href="#79941" class="name">
  <strong class="user"><em>ahigerd at timeips dot com</em></strong></a><a class="genanchor" href="#79941"> &para;</a><div class="date" title="2007-12-20 07:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79941">
<div class="phpcode"><code><span class="html">To access an object member with an illegal character in the name, use this syntax:<br /><br />$obj-&gt;{'illegal-property:name()'}<br /><br />This is particularly relevant with the dynamically-generated classes used by, for instance, database objects and the SoapClient class.</span></code></div>
  </div>
 </div>
  <div class="note" id="101697">  <div class="votes">
    <div id="Vu101697">
    <a href="/manual/vote-note.php?id=101697&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101697">
    <a href="/manual/vote-note.php?id=101697&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101697" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#101697" class="name">
  <strong class="user"><em>Skydev</em></strong></a><a class="genanchor" href="#101697"> &para;</a><div class="date" title="2011-01-05 11:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101697">
<div class="phpcode"><code><span class="html">A small function that allows finding all references to the object. Written in 3 minutes and may be buggy (for ex pass object as reference in some places?)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">find_ref_obj</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$obj</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">) {<br />    if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">,</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'__REF_CHECKED'</span><span class="keyword">],</span><span class="default">true</span><span class="keyword">))<br />        return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'__REF_CHECKED'</span><span class="keyword">][]=</span><span class="default">$obj</span><span class="keyword">;<br />    </span><span class="default">$r </span><span class="keyword">= array();<br />    foreach ((array)</span><span class="default">$obj </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />        if (</span><span class="default">$v </span><span class="keyword">=== </span><span class="default">$object</span><span class="keyword">)<br />            </span><span class="default">$r</span><span class="keyword">[] = </span><span class="default">$path </span><span class="keyword">. </span><span class="string">"-&gt;</span><span class="default">$k</span><span class="string">"</span><span class="keyword">;<br />        if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {<br />            </span><span class="default">$t </span><span class="keyword">= </span><span class="default">find_ref_obj</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$path </span><span class="keyword">. </span><span class="string">"-&gt;</span><span class="default">$k</span><span class="string">"</span><span class="keyword">);<br />            if (</span><span class="default">$t</span><span class="keyword">!==</span><span class="default">false</span><span class="keyword">) <br />                </span><span class="default">$r</span><span class="keyword">=</span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">);<br />        }<br />        else if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {<br />            </span><span class="default">$t </span><span class="keyword">= </span><span class="default">find_ref_arr</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$path </span><span class="keyword">. </span><span class="string">"-&gt;</span><span class="default">$k</span><span class="string">"</span><span class="keyword">);<br />            if (</span><span class="default">$t</span><span class="keyword">!==</span><span class="default">false</span><span class="keyword">) <br />                </span><span class="default">$r</span><span class="keyword">=</span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">);<br />        }<br />    }<br />    if (empty(</span><span class="default">$r</span><span class="keyword">))<br />        return </span><span class="default">false</span><span class="keyword">;<br />    else<br />        return </span><span class="default">$r</span><span class="keyword">;<br />}<br />function </span><span class="default">find_ref_arr</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">) {<br />    if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">,</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'__REF_CHECKED'</span><span class="keyword">],</span><span class="default">true</span><span class="keyword">))<br />        return </span><span class="default">false</span><span class="keyword">;    <br />    </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'__REF_CHECKED'</span><span class="keyword">][]=</span><span class="default">$arr</span><span class="keyword">;<br />    </span><span class="default">$r </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />        if (</span><span class="default">$v </span><span class="keyword">=== </span><span class="default">$object</span><span class="keyword">)<br />            </span><span class="default">$r</span><span class="keyword">[] = </span><span class="default">$path </span><span class="keyword">. </span><span class="string">"['</span><span class="default">$k</span><span class="string">']"</span><span class="keyword">;<br />        if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {<br />            </span><span class="default">$t </span><span class="keyword">= </span><span class="default">find_ref_obj</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$path </span><span class="keyword">. </span><span class="string">"['</span><span class="default">$k</span><span class="string">']"</span><span class="keyword">);<br />            if (</span><span class="default">$t</span><span class="keyword">!==</span><span class="default">false</span><span class="keyword">) <br />                </span><span class="default">$r</span><span class="keyword">=</span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">);<br />        }<br />        else if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {<br />            </span><span class="default">$t </span><span class="keyword">= </span><span class="default">find_ref_arr</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$path </span><span class="keyword">. </span><span class="string">"['</span><span class="default">$k</span><span class="string">']"</span><span class="keyword">);<br />            if (</span><span class="default">$t</span><span class="keyword">!==</span><span class="default">false</span><span class="keyword">) <br />                </span><span class="default">$r</span><span class="keyword">=</span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">);<br />        }<br />    }<br />    if (empty(</span><span class="default">$r</span><span class="keyword">))<br />        return </span><span class="default">false</span><span class="keyword">;<br />    else<br />        return </span><span class="default">$r</span><span class="keyword">;<br />}<br />function </span><span class="default">find_references</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">) {<br />    </span><span class="default">$r </span><span class="keyword">= array();<br />    </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'__REF_CHECKED'</span><span class="keyword">]=array();<br />    foreach (</span><span class="default">$GLOBALS </span><span class="keyword">as </span><span class="default">$n </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) <br />    if (</span><span class="default">$n</span><span class="keyword">!=</span><span class="string">'__REF_CHECKED'</span><span class="keyword">)<br />    if (</span><span class="default">$n</span><span class="keyword">!=</span><span class="string">'GLOBALS'</span><span class="keyword">) {<br />        if (</span><span class="default">$v </span><span class="keyword">=== </span><span class="default">$object</span><span class="keyword">)<br />            </span><span class="default">$r</span><span class="keyword">[]=</span><span class="default">$n</span><span class="keyword">;<br />        if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {<br />            </span><span class="default">$t </span><span class="keyword">= </span><span class="default">find_ref_obj</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$n</span><span class="keyword">);<br />            if (</span><span class="default">$t</span><span class="keyword">!==</span><span class="default">false</span><span class="keyword">) <br />                </span><span class="default">$r</span><span class="keyword">=</span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">);<br />        }<br />        else if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) {<br />            </span><span class="default">$t </span><span class="keyword">= </span><span class="default">find_ref_arr</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$n</span><span class="keyword">);<br />            if (</span><span class="default">$t</span><span class="keyword">!==</span><span class="default">false</span><span class="keyword">) <br />                </span><span class="default">$r</span><span class="keyword">=</span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$t</span><span class="keyword">);<br />        }<br />    }    <br />    unset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'__REF_CHECKED'</span><span class="keyword">]);<br />    return </span><span class="default">$r</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">find_refs</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">) {<br />    return </span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">,</span><span class="default">find_references</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42769">  <div class="votes">
    <div id="Vu42769">
    <a href="/manual/vote-note.php?id=42769&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42769">
    <a href="/manual/vote-note.php?id=42769&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42769" title="41% like this...">
    -4
    </div>
  </div>
  <a href="#42769" class="name">
  <strong class="user"><em>HOC</em></strong></a><a class="genanchor" href="#42769"> &para;</a><div class="date" title="2004-05-28 09:40"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42769">
<div class="phpcode"><code><span class="html">to pillepop2003<br /><br />Why do u want to know the classname of an non-existant object?<br /><br />The only possible explanation for this question seems to me u want to know the class before u instantiate the object. Well, this is of no use since u always instantiate a class of ur choice. <br /><br />When the class is instantiated into an object u can find the class of the object by means of get_class(). This is all u need. In case of inheritance u can use get_class($this) to get the class of the instantiated object. Now u can differentiate according to which class the object belongs to.<br /><br />e.g.:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A</span><span class="keyword">{<br />   function </span><span class="default">A</span><span class="keyword">(){<br />      </span><span class="default">$class_of_this </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br />      echo </span><span class="string">'Object is an instance of class '</span><span class="keyword">.</span><span class="default">$class_of_this</span><span class="keyword">.</span><span class="string">' which is the '</span><span class="keyword">;<br />      if(</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$class_of_this</span><span class="keyword">,</span><span class="string">'A'</span><span class="keyword">)==</span><span class="default">0</span><span class="keyword">)<br />         echo </span><span class="string">'parent-class'</span><span class="keyword">;<br />      else if(</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$class_of_this</span><span class="keyword">,</span><span class="string">'B'</span><span class="keyword">)==</span><span class="default">0</span><span class="keyword">)<br />         echo </span><span class="string">'child-class'</span><span class="keyword">;<br />      echo </span><span class="string">".\n"</span><span class="keyword">;<br />   }<br />}<br /><br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A</span><span class="keyword">{<br />   function </span><span class="default">B</span><span class="keyword">(){<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">A</span><span class="keyword">();<br />   }<br />}<br /><br /></span><span class="default">$object1 </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br /></span><span class="default">$object2 </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />When u run this code-snippet the output will be:<br /><br />Object is an instance of class A which is the parent-class.<br />Object is an instance of class B which is the child-class.</span></code></div>
  </div>
 </div>
  <div class="note" id="54194">  <div class="votes">
    <div id="Vu54194">
    <a href="/manual/vote-note.php?id=54194&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54194">
    <a href="/manual/vote-note.php?id=54194&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54194" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#54194" class="name">
  <strong class="user"><em>zabmilenko at hotmail dot com</em></strong></a><a class="genanchor" href="#54194"> &para;</a><div class="date" title="2005-06-27 12:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54194">
<div class="phpcode"><code><span class="html">((PHP5))<br /><br />I wanted to dynamically choose an extender for a class.  This took awhile of playing with it but I came up with a solution.  Note that I can't verify how safe it is, but it appears to work for me.  Perhaps someone else can shed light on the details:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{ var </span><span class="default">$value </span><span class="keyword">= </span><span class="string">"Class A\n"</span><span class="keyword">; }<br />class </span><span class="default">B </span><span class="keyword">{ var </span><span class="default">$value </span><span class="keyword">= </span><span class="string">"Class B\n"</span><span class="keyword">; }<br /><br /></span><span class="comment">// Uncomment which extender you want.  You can use variables as well.<br />// define('__EXTENDER__', 'A');<br />   </span><span class="default">define</span><span class="keyword">(</span><span class="string">'__EXTENDER__'</span><span class="keyword">, </span><span class="string">'B'</span><span class="keyword">);<br /><br /></span><span class="comment">// Use eval to create a wrapper class.<br /></span><span class="keyword">eval(</span><span class="string">'class EXTENDER extends '</span><span class="keyword">. </span><span class="default">__EXTENDER__ </span><span class="keyword">. </span><span class="string">' { }'</span><span class="keyword">);<br /><br />class </span><span class="default">C </span><span class="keyword">extends </span><span class="default">EXTENDER<br /></span><span class="keyword">{<br />  function </span><span class="default">__construct</span><span class="keyword">()<br />  {<br />     echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">C</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Outputs:   Class B<br /><br />Practical application:  I have a database abstraction system that has individual classes for mysql, pgsql, et al.  I want to be able to create a global db class that extends one of the individual db classes depending on the application configuration.<br /><br />I know that there are probably much better ways of doing this but I haven't reached that level when it comes to classes.</span></code></div>
  </div>
 </div>
  <div class="note" id="24491">  <div class="votes">
    <div id="Vu24491">
    <a href="/manual/vote-note.php?id=24491&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24491">
    <a href="/manual/vote-note.php?id=24491&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24491" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#24491" class="name">
  <strong class="user"><em>justin at quadmyre dot com</em></strong></a><a class="genanchor" href="#24491"> &para;</a><div class="date" title="2002-08-19 09:38"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24491">
<div class="phpcode"><code><span class="html">If you want to be able to call an instance of a class from within another class, all you need to do is store a reference to the external class as a property of the local class (can use the constructor to pass this to the class), then call the external method like this:<br /><br />$this-&gt;classref-&gt;memberfunction($vars);<br /><br />or if the double '-&gt;' is too freaky for you, how about:<br /><br />$ref=&amp;$this-&gt;classref;<br />$ref-&gt;memberfunction($vars);<br /><br />This is handy if you write something like a general SQL class that you want member functions in other classes to be able to use, but want to keep namespaces separate. Hope that helps someone.<br /><br />Justin<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">class1 </span><span class="keyword">{<br />    function </span><span class="default">test</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">) {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$var </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">;<br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />}<br /><br />class </span><span class="default">class2</span><span class="keyword">{<br />    var </span><span class="default">$ref_to_class</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">; </span><span class="comment"># to be pointer to other class<br /><br />    </span><span class="keyword">function </span><span class="default">class1</span><span class="keyword">(&amp;</span><span class="default">$ref</span><span class="keyword">){ </span><span class="comment">#constructor<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ref_to_class</span><span class="keyword">=</span><span class="default">$ref</span><span class="keyword">; </span><span class="comment">#save ref to other class as property of this class<br />    </span><span class="keyword">}<br /><br />    function </span><span class="default">test2</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">){<br />        </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ref_to_class</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">); </span><span class="comment">#call other class using ref<br />        </span><span class="keyword">return </span><span class="default">$val</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$obj1</span><span class="keyword">=new </span><span class="default">class1</span><span class="keyword">;<br /></span><span class="comment"># obj1 is instantiated.<br /></span><span class="default">$obj2</span><span class="keyword">=new </span><span class="default">class2</span><span class="keyword">(</span><span class="default">$obj1</span><span class="keyword">);<br /></span><span class="comment"># pass ref to obj1 when instantiating obj2<br /><br /></span><span class="default">$var</span><span class="keyword">=</span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$result</span><span class="keyword">=</span><span class="default">obj2</span><span class="keyword">-&gt;</span><span class="default">test2</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">);<br /></span><span class="comment"># call method in obj2, which calls method in obj1<br /></span><span class="keyword">echo (</span><span class="default">$result</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43837">  <div class="votes">
    <div id="Vu43837">
    <a href="/manual/vote-note.php?id=43837&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43837">
    <a href="/manual/vote-note.php?id=43837&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43837" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#43837" class="name">
  <strong class="user"><em>greg at doutromundo dot com</em></strong></a><a class="genanchor" href="#43837"> &para;</a><div class="date" title="2004-07-05 07:58"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43837">
<div class="phpcode"><code><span class="html">As programmers, you're probably more organized than me, but, I do try and maintain some order in my classes and codes and separate them in "packages" as in java.<br />This helped me keep them organized but caused havok when trying to use them, so what I did was to create a class that handles the loading of classes (which I instanciate in all pages) along with my error handling class all bundled up. This way, I can load my classes with a command similar to <br />$baseClass-&gt;loadClass("package","className"[,"constructor"]);<br /><br />the function responsible for this has some checking to see if they are loaded and stuff like that...<br /><br />function loadClass($packageName,$className,$constructor=""){<br />  // if you dont have a constructor declare any function inside<br />  // the class<br />  if ($constructor==""){<br />    $constructor=$className;<br />  }<br />  if(!is_callable(array($className,$constructor))){<br />    if (defined("CLASS_DIR")){<br />      $pkg = CLASS_DIR.$packageName."/";<br />        if (is_dir($pkg)){<br />          // we have a directory with the package name<br />          $cls = $pkg.$className.".class.php";<br />          if(is_file($cls)){<br />            // we have a file<br />            include_once($cls);<br />          }else{<br />            die("Class &lt;b&gt;$className&lt;/b&gt; could not be found in package &lt;b&gt;$packageName&lt;/b&gt; , please check your instalation");<br />          }<br />        }else{<br />          die("Package &lt;b&gt;$packageName&lt;/b&gt; could not be found, please check your instalation");<br />        }<br />      }<br />    }<br />}<br /><br />Just remember to define CLASS_DIR as the physical path for the directories where you packages are...<br /><br />Hope this comes in handy...<br /><br />Here's an example of a diretory strucutre...<br />/var/www/classes/   &lt;- this would be CLASS_DIR<br />in there I have:<br />package1/<br />     name.class.php<br />     name2.class.php<br />....<br /><br />The loadClass would look like: loadClass("package1","name"); <br /><br />Cute and easy</span></code></div>
  </div>
 </div>
  <div class="note" id="55423">  <div class="votes">
    <div id="Vu55423">
    <a href="/manual/vote-note.php?id=55423&amp;page=ref.classobj&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55423">
    <a href="/manual/vote-note.php?id=55423&amp;page=ref.classobj&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55423" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#55423" class="name">
  <strong class="user"><em>ia [AT] zoznam [DOT] sk</em></strong></a><a class="genanchor" href="#55423"> &para;</a><div class="date" title="2005-08-02 10:55"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55423">
<div class="phpcode"><code><span class="html">as for zabmilenko's solution:
<br />wouldn't it be better to create it this way?
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// The base class for all db classes
<br /></span><span class="keyword">class </span><span class="default">DB </span><span class="keyword">{
<br /> protected </span><span class="default">$connectId</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">// Class for MySQL, which extends base class
<br /></span><span class="keyword">class </span><span class="default">MySQL </span><span class="keyword">extends </span><span class="default">DB </span><span class="keyword">{
<br /> function </span><span class="default">connect </span><span class="keyword">() {
<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connectId </span><span class="keyword">= </span><span class="default">mysql_connect </span><span class="keyword">(...); 
<br /> }
<br />}
<br />
<br /></span><span class="comment">// Class for PostgreSQL, which extends base class
<br /></span><span class="keyword">class </span><span class="default">pgSQL </span><span class="keyword">extends </span><span class="default">DB </span><span class="keyword">{
<br /> function </span><span class="default">connect </span><span class="keyword">() {
<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connectId </span><span class="keyword">= </span><span class="default">pg_connect </span><span class="keyword">(...); 
<br /> }
<br />}
<br />
<br /></span><span class="comment">// and then call constructor like this:
<br /></span><span class="default">$dbName </span><span class="keyword">= </span><span class="string">"MySQL"</span><span class="keyword">;
<br /></span><span class="default">$db </span><span class="keyword">= new </span><span class="default">$dbName </span><span class="keyword">( ... );
<br /></span><span class="comment">// ... which creates an object of class MySQL
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.classobj&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.classobj.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.classobj.php">Classes/Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.classobj.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="classobj.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.classobj.php" title="Classes/Object Functions">Classes/Object Functions</a>
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
