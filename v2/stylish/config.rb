#Compass config file
#Set this to the root of your project when deployed:

http_path = "/"
css_dir = "../css"
sass_dir = "/"
fonts_dir = "../fonts"
images_dir = "../images"
javascripts_dir = "../js"

#setup relative directory
relative_assets = true

#setup environment you are working on
#environment = :development
environment = :production
output_style = (environment == :production) ? :compressed : :expanded