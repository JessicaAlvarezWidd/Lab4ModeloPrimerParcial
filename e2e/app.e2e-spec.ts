import { Repaso1PlLab4Page } from './app.po';

describe('repaso1-pl-lab4 App', () => {
  let page: Repaso1PlLab4Page;

  beforeEach(() => {
    page = new Repaso1PlLab4Page();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
