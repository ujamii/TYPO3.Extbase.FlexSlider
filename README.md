# FlexSlider


## Installation


### Via Git

Clone into typo3conf/ext/

	git clone git@github.com:andyhausmann/jqct.git /path/to/project/typo3conf/ext/flexslider/

Install by Extension Manager as usual

### Via TER

Currently this Extension isn't available through TER. The Extension key 'flexslider' has already been reserved for this Extension. If it reaches a stable state, it will be uploaded immediately.


## Configure

* Include **static Extension Template**
* Create **Frontend plugin**
	* Adjust the **Plugin Settings** to your needs
	* Setup **Record Storage Page** where the Slider Items come from
* Create **Slider Items** on the Record Storage Page
* Check the Frontend!


### TypoScript Constants

_This section isn't completed yet._

	plugin.tx_flexslider {
		settings {
			view {
				# Necessary option, if you plan to manipulate the templates
				templateRootPath = EXT:flexslider/Resources/Private/Templates/
				partialRootPath = EXT:flexslider/Resources/Private/Partials/
				layoutRootPath = EXT:flexslider/Resources/Private/Layouts/
			}
			persistence {
				# Here you can setup the Record Storage Page globally
				storagePid = 
			}
		}
	}


### TypoScript Setup

_This section isn't completed yet._

	plugin.tx_flexslider {
		settings {
			# String: Select your animation type, "fade" or "slide"
			animation = fade
			# Boolean: Animate slider automatically
			slideshow = 0
			# Integer: Set the speed of the slideshow cycling, in milliseconds
			slideshowSpeed = 7000
			# Boolean: Create navigation for previous/next navigation? (true/false)
			directionNav = 1
			# Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
			pauseOnHover = 0
		}
	}


## How to

### … use the Plugin in a Library

… to e.g. refer it to the page template:

lib.example < plugin.tx_flexslider


## Roadmap and Tasks

Plase take a look at the Githhub Issue Tracker for this projekt.


## Contribute

If you have ideas, feature or bug requests, don't hesitate and report them at the Issue Tracker.

Feel also free to fork and pull.