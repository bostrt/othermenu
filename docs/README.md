Robert Bost <bostrt at tux dot appstate dot edu>
Appalachian State University
Electronic Student Services

OtherMenu is a menu making utility for use with phpWebsite.  The goal is to have a simple way to create an embedded menu.  Tags 
are used to identify menus and items.  Menus and items can be added to menus using the tags.
Example:

        $menu = new OtherMenu('Menu', 'top_level');
        $menu->addMenu('Search', 'search');
        $menu->addItem('Search Names', 'search_names', 'search');
        $menu->addItem('Search Emails', 'email_search', 'search');
        $menu->addMenu('Settings', 'settings', 'top_level');
        $menu->addItem('Email Settings', 'email_settings', 'settings');

From the example you can see that the menu has gone three menus deep. It can go further but I think you get the idea.
When $menu->show() is called the menu will be printed out something similar to this.  Depends on template...

# Menu
- Search
  - Search Emails
  - Search Names
- Settings
  - Email Settings