class PagesController < ApplicationController
  def index
   
  end
  def show
    respond_to do |format|
        format.html
        # other formats you already support
        format.all { render text: '' }
    end
  end
end
